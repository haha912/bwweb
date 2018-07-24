<?php
namespace app\admin\controller;

use app\admin\model\Blogmanage;

use app\admin\controller\AdminAuth;
use think\Validate;
use think\Image;
use think\Request;
use think\Db;
class Blogmng extends AdminAuth
{
	//模块基本信息
	private $data = array(
		'module_name' => '文章管理',
		'module_url'  => '/admin/blogmng/',
		'module_slug' => 'blogmng',
		'upload_path' => UPLOAD_PATH,
		'upload_url'  => '/public/uploads/',
		'type_select' => 'all',
		'ckeditor'    => array(
            'id'     => 'ckeditor_post_content',
            //Optionnal values
            'config' => array(
                'width'  => "100%", //Setting a custom width
                'height' => '400px',
                // 默认调用 Standard Package，以下代码为调用自定义工具栏，这些基础的主要用于前台用户富文本设置
                // 'toolbar'   =>  array(  //Setting a custom toolbar
                //     array('Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates'),
                //     array('Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'),
                //     array('Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'),
                //     array('Styles','Format','Font','FontSize'),
                //     array('TextColor','BGColor')
                // )
            )
        ),
		);


    ///////////////////////dealing contact(default) info//////////////////////////    
    public function index($name='all')
    {
		$data=new Blogmanage;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $data->Distinct(true)->field('status')->order('status desc')->select();
		$etype = [];
		// dump($ty);
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		

		//dump(time()-config('lostfound_expired_time'));
		//halt($del_expir);
		if($name=='all'){
			$this->data['type_select'] = $name;
			$list =  Blogmanage::where('status','<','2')->order('update_time', 'ASC')->paginate();
		}else{
			$this->data['type_select'] = $name;
			$list =  Blogmanage::where(['status' => ['=', $name]])->order('id', 'ASC')->paginate();
		}
		//halt($list);
        $this->assign('data',$this->data);
        $this->assign('list',$list);
		$this->assign('etype',$etype);


		$this->view->replace([
			'__PUBLIC__' => '/static',
		]);
        return $this->fetch();
    }

    
    public function read_blog($id='')
    {
		//halt($id);	
		$examdata = new Blogmanage;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $examdata->Distinct(true)->field('status')->order('status desc')->select();
		$etype = [];
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		
    	$this->data['edit_fields'] = array(
			'id'          => array('type' => 'text', 'label' => 'id'),
			'title'       => array('type' => 'text', 'label' => '标题'),//,'notes'=>'更新管理员资料时默认不填则不修改'),
            'title_en'       => array('type' => 'text', 'label' => '标题 (英文，不填写则与中文相同)'),
            'author'      => array('type' => 'text', 'label' => '作者'),
            'intro'       => array('type' => 'text', 'label' => '文章概要') ,
            'intro_en'       => array('type' => 'text', 'label' => '文章概要 (英文，不填写则与中文相同)') ,
            'labels'      => array('type' => 'text', 'label' => '标签(用加号隔开)') ,
            'labels_en'      => array('type' => 'text', 'label' => '标签(用加号隔开) (英文，不填写则与中文相同)') ,
			'time'        => array('type' => 'text', 'label' => '发布时间 (格式:y-m-d)')	,
            'cover'       => array('type' => 'file', 'label' => '封面图片')   ,
            'contents'     => array('type' => 'textarea', 'label' => '正文')   ,    
            'contents_en'     => array('type' => 'textarea', 'label' => '正文 (英文，不填写则与中文相同)')   , 
            'status'      => array('type' => 'radio', 'label' => '状态','default'=> array(0 => '显示', 1 => '隐藏', 2 => '删除')),
        );

        //默认值设置
        $item = Blogmanage::get($id);

        $this->assign('item',$item);
        $this->assign('data',$this->data);
        return view();
    }


    public function create()
    {
        $this->data['edit_fields'] = array(
            'title'       => array('type' => 'text', 'label' => '标题'),//,'notes'=>'更新管理员资料时默认不填则不修改'),
            'title_en'       => array('type' => 'text', 'label' => '标题 (英文，不填写则与中文相同)'),
            'author'      => array('type' => 'text', 'label' => '作者'),
            'intro'       => array('type' => 'text', 'label' => '文章概要') ,
            'intro_en'       => array('type' => 'text', 'label' => '文章概要 (英文，不填写则与中文相同)') ,
            'labels'      => array('type' => 'text', 'label' => '标签(用加号隔开)') ,
            'labels_en'      => array('type' => 'text', 'label' => '标签(用加号隔开) (英文，不填写则与中文相同)') ,
            'time'        => array('type' => 'text', 'label' => '发布时间 (格式:y-m-d)')  ,
            'cover'       => array('type' => 'file', 'label' => '封面图片')   ,
            'contents'     => array('type' => 'textarea', 'label' => '正文')   ,    
            'contents_en'     => array('type' => 'textarea', 'label' => '正文 (英文，不填写则与中文相同)')   , 
            'status'      => array('type' => 'radio', 'label' => '状态','default'=> array(0 => '显示', 1 => '隐藏', 2 => '删除')),
        );

        //默认值设置
        $item['status'] = '正常';
        $item['salt'] = rand(100,999);

        $this->assign('item',$item);
        $this->assign('data',$this->data);
        $this->view->replace([
            '__PUBLIC__' => '/static',
        ]);
        return view();
    }


    public function add()
    {
        //halt('update!');  
        $user = new Blogmanage;
        $data = input('post.');

        $rule = [
            //管理员登陆字段验证
            'labels|标签'     => 'require|min:3|max:25',
            'labels_en|标签'     => 'require|min:3|max:25',
            'title|标题'      => 'require|min:5',
            'author|作者'     => 'require|min:1',
            'intro|概要'      => 'require|min:15',
            'time|时间'       => 'require|dateFormat:Y-m-d',
            'contents|内容'    => 'require|min:50',
            'status|状态'     => 'require',
        ];

        // 数据验证
        $validate = new Validate($rule);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        $data['cover'] = $this->upload('cover');
        if(!$data['cover']){
            unset($data['cover']);
        }else{
             $data['cover'] =  '/uploads/'.$data['cover'];
        }


        $data['create_time'] = time();
        $data['update_time'] = time();
        if ($id = $user->validate(true)->insertGetId($data)) {
            return $this->success('用户添加成功',$this->data['module_url']);
        } else {
            return $this->error($user->getError());
        }
    }


    public function update_blog($id)
    {
        //halt('update!');  
        $user = new Blogmanage;
        $data = input('post.');

        $rule = [
            //管理员登陆字段验证
            'labels|标签'     => 'require|min:3|max:25',
            'labels_en|标签'     => 'require|min:3|max:25',
            'title|标题'      => 'require|min:5',
            'author|作者'     => 'require|min:1',
            'intro|概要'      => 'require|min:15',
            'time|时间'       => 'require|dateFormat:Y-m-d',
            'contents|内容'    => 'require|min:50',
            'status|状态'     => 'require',
        ];
        $msg = [];

        // 数据验证
        $validate = new Validate($rule,$msg);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        $data['cover'] = $this->upload('cover');
        if(!$data['cover']){
            unset($data['cover']);
        }else{
             $data['cover'] =  '/uploads/'.$data['cover'];
        }


        $data['id'] = $id;
        if ($user->update($data)) {
            return $this->success('信息更新成功',$this->data['module_url']);
        } else {
            return $user->getError();
        }
    }

    public function delete_blog($id)
    {

        $user = Blogmanage::get($id);
        if ($user) {
             $user->delete();
             $data['error'] = 0;
          $data['msg'] = '删除成功';
         } else {
          $data['error'] = 1;
          $data['msg'] = '删除失败';
         }
         return $data;
    }


    public function upload($fupload){
        // 获取表单上传文件
        $file = request()->file($fupload);
        if($file){
            if (true !== $this->validate([$fupload => $file], [$fupload => 'image'])) {
                $this->error('请选择图像文件');
            } else {
                $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads'); //保存原图

                // 读取图片
                $image = Image::open($file);
                // 图片处理
                $image_type = request()->param('type') ? request()->param('type') : 1;
                switch ($image_type) {
                    case 1: // 缩略图
                        $image->thumb(150, 150, Image::THUMB_CENTER);
                        break;
                    case 2: // 图片裁剪
                        $image->crop(300, 300);
                        break;
                    case 3: // 垂直翻转
                        $image->flip();
                        break;
                    case 4: // 水平翻转
                        $image->flip(Image::FLIP_Y);
                        break;
                    case 5: // 图片旋转
                        $image->rotate();
                        break;
                    case 6: // 图片水印
                        $image->water(ROOT_PATH . 'public/static/images/logo.png', Image::WATER_NORTHWEST, 50);
                        break;
                    case 7: // 文字水印
                        $image->text('ThinkPHP', VENDOR_PATH . 'topthink/think-captcha/assets/ttfs/1.ttf', 20, '#ffffff');
                        break;
                }
                $this->sourceFile = $info->getFilename();

                $fileName = explode('.',$info->getFilename());
                $saveName = $fileName[0] . '_thumb.' .$info->getExtension();
                $image->save($this->data['upload_path'] .'/'. $saveName);

                $this->imageThumbName = $saveName;

                return $this->imageThumbName;
            }
        }else{
            return false;
        }
    }

    public function delete_image($id){
        $user = Blogmanage::get($id);
        if (file_exists($this->data['upload_path'] .'/..'. $user->cover)) {
            @unlink($this->data['upload_path'] .'/..'. $user->cover);
        }

        $source_image = str_replace('_thumb', '', $user->cover);
        if (file_exists($this->data['upload_path'] .'/..'. $source_image)) {
            @unlink($this->data['upload_path'] .'/..'. $source_image);
        }

        $data['id'] = $id;
        $data['cover'] = '';
        if ($user->update($data)) {
            return $this->success('图像删除成功',$this->data['module_url'].'read_blog/'.$id);
        }else{
            return $user->getError();
        }


    }    
}
