<?php
namespace app\admin\controller;

use app\admin\model\Teammng;

use app\admin\controller\AdminAuth;
use think\Validate;
use think\Image;
use think\Request;
use think\Db;

class Teammanage extends AdminAuth
{
	//模块基本信息
	private $data = array(
		'module_name' => '团队管理',
		'module_url'  => '/admin/teammanage/',
		'module_slug' => 'baseinfomanage',
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
		$data=new Teammng;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $data->Distinct(true)->field('type')->order('type desc')->select();
		$etype = [];
		// dump($ty);
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->type;
		}		

		//dump(time()-config('lostfound_expired_time'));
		//halt($del_expir);
		if($name=='all'){
			$this->data['type_select'] = $name;
			$list =  Teammng::where('type','<','2')->order('type', 'ASC')->paginate();
		}else{
			$this->data['type_select'] = $name;
			$list =  Teammng::where(['type' => ['=', $name]])->order('id', 'ASC')->paginate();
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

    
    public function read_team($id='')
    {
		//halt($id);	
		$examdata = new Teammng;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $examdata->Distinct(true)->field('type')->order('type desc')->select();
		$etype = [];
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->type;
		}		
        $this->data['edit_fields'] = array(
            'ppid'       => array('type' => 'text', 'label' => '顺序:小号在前'),
            'name'       => array('type' => 'text', 'label' => '姓名'),
            'title'      => array('type' => 'text', 'label' => '头衔'),
            'title_en'      => array('type' => 'text', 'label' => '头衔(英文，没有则不填)'),
            'experi'       => array('type' => 'textarea', 'label' => '经历(CTRL+ENTER换行)') ,
            'experi_en'       => array('type' => 'textarea', 'label' => '经历 (英文，不填写则与中文相同)') ,
            'pic'      => array('type' => 'file', 'label' => '照片(尺寸：396x301px)') ,
            'type'      => array('type' => 'radio', 'label' => '类型','default'=> array(0 => '核心团队', 1 => '顾问团队')),
        );

        //默认值设置
        $item = Teammng::get($id);
        if($item['type']==0) $item['type'] = '核心团队';
        if($item['type']==1) $item['type'] = '顾问团队';
        $this->assign('item',$item);
        $this->assign('data',$this->data);
        return view();
    }


    public function create()
    {
        $this->data['edit_fields'] = array(
            'ppid'       => array('type' => 'text', 'label' => '顺序:小号在前'),
            'name'       => array('type' => 'text', 'label' => '姓名'),
            'title'      => array('type' => 'text', 'label' => '头衔'),
            'title_en'      => array('type' => 'text', 'label' => '头衔(英文，没有则不填)'),
            'experi'       => array('type' => 'textarea', 'label' => '经历(CTRL+ENTER换行)') ,
            'experi_en'       => array('type' => 'textarea', 'label' => '经历 (英文，不填写则与中文相同)') ,
            'pic'      => array('type' => 'file', 'label' => '照片(尺寸：396x301px; 顾问团队：367x279px)') ,
            'type'      => array('type' => 'radio', 'label' => '类型','default'=> array(0 => '核心团队', 1 => '顾问团队')),
        );

        //默认值设置
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
        $user = new Teammng;
        $data = input('post.');

        $rule = [
            //管理员登陆字段验证
            'ppid' =>'require|max:2',
            'name|姓名'     => 'require|min:2',
            'title|头衔'     => 'require|min:2',
            'experi|经历'     => 'require|min:10',
            'type|类型'      => 'require',
        ];

        // 数据验证
        $validate = new Validate($rule);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        $data['pic'] = $this->upload('pic');
        if(!$data['pic']){
            unset($data['pic']);
            $data['pic'] = '/static/images/team-default.jpg';
        }else{
             $data['pic'] =  '/uploads/'.$data['pic'];
        }


        $data['create_time'] = time();
        $data['update_time'] = time();
        if ($id = $user->validate(true)->insertGetId($data)) {
            return $this->success('成员添加成功',$this->data['module_url']);
        } else {
            return $this->error($user->getError());
        }
    }


    public function update_mem($id)
    {
        //halt('update!');  
        $user = new Teammng;
        $data = input('post.');
        $rule = [
            //管理员登陆字段验证
            'ppid' =>'require|max:2',
            'name|姓名'     => 'require|min:2',
            'title|头衔'     => 'require|min:2',
            'experi|经历'     => 'require|min:10',
            'type|类型'      => 'require',
        ];
        $msg = [];

        // 数据验证
        $validate = new Validate($rule,$msg);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        $data['pic'] = $this->upload('pic');
        if(!$data['pic']){
            unset($data['pic']);
        }else{
             $data['pic'] =  '/uploads/'.$data['pic'];
        }

        $data['id'] = $id;
        if ($user->update($data)) {
            return $this->success('信息更新成功',$this->data['module_url']);
        } else {
            return $user->getError();
        }
    }

    public function delete_mem($id)
    {

        $user = Teammng::get($id);
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
        $user = teammanage::get($id);
        if (file_exists($this->data['upload_path'] .'/..'. $user->pic)) {
            @unlink($this->data['upload_path'] .'/..'. $user->pic);
        }

        $source_image = str_replace('_thumb', '', $user->pic);
        if (file_exists($this->data['upload_path'] .'/..'. $source_image)) {
            @unlink($this->data['upload_path'] .'/..'. $source_image);
        }

        $data['id'] = $id;
        $data['pic'] = '';
        if ($user->update($data)) {
            return $this->success('图像删除成功',$this->data['module_url'].'read_blog/'.$id);
        }else{
            return $user->getError();
        }


    }    
}
