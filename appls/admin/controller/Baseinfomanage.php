<?php
namespace app\admin\controller;
use app\admin\model\Baseinfo;
use app\admin\model\Pictxtmanage;
use app\admin\controller\AdminAuth;
use think\Validate;
use think\Image;
use think\Request;
class Baseinfomanage extends AdminAuth
{
    //模块基本信息
    private $data = array(
        'module_name' => '基础信息管理',
        'module_url'  => '/admin/baseinfomanage/',
        'module_slug' => 'baseinfomanage',
        'upload_path' => UPLOAD_PATH,
        'upload_url'  => '/public/uploads/',
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
    public function index()
    {
        $info = Baseinfo::get(1);

        $this->data['edit_fields'] = array(
            'address'       => array('type' => 'text', 'label'     => '企业地址'),
            'cellphone'     => array('type' => 'text', 'label'     => '移动电话'),
            'telephone'     => array('type' => 'text', 'label'     => '固定电话'),            
            'email'         => array('type' => 'text', 'label'     => 'email'),
            'qqnum'         => array('type' => 'text', 'label'     => 'qq账号'),            
            'wechat'        => array('type' => 'file', 'label'     => '微信二维码 (尺寸:280x280px,格式jpg)'),
        );
        //默认值设置
        $info['mmy'] = 'baseinfo';
        $this->assign('item',$info);
        $this->assign('data',$this->data);

        return $this->fetch();
    }


    public function update_info()
    {
        //halt('update!');  
        $user = new Baseinfo;
        $data = input('post.');

        $rule = [
            //管理员登陆字段验证
            'address|地址'       => 'require|min:5',
            'cellphone|手机号'   => 'min:11|max:15',
            'telephone|座机'     => 'min:5',
            'email|加密盐'       => 'email',
        ];
        $msg = [];

        // 数据验证
        $validate = new Validate($rule,$msg);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        $data['wechat'] = $this->upload('wechat');
        if(!$data['wechat']){
            unset($data['wechat']);
        }else{
             $data['wechat'] =  '/uploads/'.$data['wechat'];
        }


        $data['id'] = 1;
        if ($user->update($data)) {
            return $this->success('信息更新成功',$this->data['module_url']);
        } else {
            return $user->getError();
        }
    }



    public function pictxtmng()
    {
        $info = Pictxtmanage::get(1);

        $this->data['edit_fields'] = array(
            'plogo'            => array('type' => 'file', 'label'     => 'header-logo (尺寸:138x60px,格式png)'),            
            'flogo'            => array('type' => 'file', 'label'     => 'footer-logo (尺寸:110x50px,格式png)'),
            'hr---1'           => array('type' => 'hr', 'label'     => '分割线'),            
            'banner1_img'      => array('type' => 'file', 'label'     => '滚动图片1 (尺寸:1920x1280px,格式jpg)'),
            'banner1_txt1'     => array('type' => 'text', 'label'     => 'banner1-文字1'),
            'banner1_txt1_en'     => array('type' => 'text', 'label'     => 'banner1-文字1 (英文，不填写则与中文相同)'),
            'banner1_txt2'     => array('type' => 'text', 'label'     => 'banner1-文字2'),
            'banner1_txt2_en'     => array('type' => 'text', 'label'     => 'banner1-文字2 (英文，不填写则与中文相同)'),
            'banner1_txt3'     => array('type' => 'textarea', 'label'     => 'banner1-文字3 (使用CTRL+ENTER换行)'), 
            'banner1_txt3_en'     => array('type' => 'textarea', 'label'     => 'banner1-文字3 (英文，不填写则与中文相同)'), 
            'hr---2'           => array('type' => 'hr', 'label'     => '分割线'),
            'banner2_img'      => array('type' => 'file', 'label'     => '滚动图片2 (尺寸:1920x1280px,格式jpg)'), 
            'banner2_txt1'     => array('type' => 'text', 'label'     => 'banner2-文字1'),
            'banner2_txt1_en'     => array('type' => 'text', 'label'     => 'banner2-文字1 (英文，不填写则与中文相同)'),
            'banner2_txt2'     => array('type' => 'textarea', 'label'     => 'banner2-文字2 (使用CTRL+ENTER换行)'),  
            'banner2_txt2_en'     => array('type' => 'textarea', 'label'     => 'banner2-文字2 (英文，不填写则与中文相同)'),  
            'hr---3'           => array('type' => 'hr', 'label'     => '分割线'),         
            'banner3_img'      => array('type' => 'file', 'label'     => '滚动图片3 (尺寸:1920x1280px,格式jpg)'),
            'banner3_txt1'     => array('type' => 'text', 'label'     => 'banner3-文字1'),
            'banner3_txt1_en'     => array('type' => 'text', 'label'     => 'banner3-文字1 (英文，不填写则与中文相同)'),
            'banner3_txt2'     => array('type' => 'textarea', 'label'     => 'banner3-文字2 (使用CTRL+ENTER换行)'), 
            'banner3_txt2_en'     => array('type' => 'textarea', 'label'     => 'banner3-文字2 (英文，不填写则与中文相同)'), 
            'hr---4'           => array('type' => 'hr', 'label'     => '分割线'),  
            'featintro'        => array('type' => 'text', 'label'     => '特性与服务介绍(< b r >为换行符)'),             
            'featintro_en'     => array('type' => 'text', 'label'     => '特性与服务介绍(英文)'),
            'featitle'         => array('type' => 'text', 'label'     => '特性title：六条，用加号隔开'),         
            'featitle_en'      => array('type' => 'text', 'label'     => '特性title（英文）：六条，用加号隔开'),      
            'featcon'          => array('type' => 'textarea', 'label'     => '特性内容：六条，用加号隔开'),
            'featcon_en'       => array('type' => 'textarea', 'label'     => '特性内容（英文）：六条，用加号隔开'),
            'aboutus'         => array('type' => 'text', 'label'     => '关于舌尖美食链'), 
            'aboutus_en'      => array('type' => 'text', 'label'     => '关于舌尖美食链(英文)'),
            'aboutintro'          => array('type' => 'textarea', 'label'     => '简介'),
            'aboutintro_en'       => array('type' => 'textarea', 'label'     => '简介(英文)'),
            'hr---5'           => array('type' => 'hr', 'label'     => '分割线'),  
            'event_time'           => array('type' => 'text', 'label'     => '时间发生时间(共5个,用+号隔开)'),
            'event1'           => array('type' => 'text', 'label'     => '事件 1'),
            'event1_en'       => array('type' => 'text', 'label'     => '事件 1（英文）'),
            'event2'           => array('type' => 'text', 'label'     => '事件 2'),
            'event2_en'       => array('type' => 'text', 'label'     => '事件 2（英文）'),
            'event3'           => array('type' => 'text', 'label'     => '事件 3'),
            'event3_en'       => array('type' => 'text', 'label'     => '事件 3（英文）'),
            'event4'           => array('type' => 'text', 'label'     => '事件 4'),
            'event4_en'       => array('type' => 'text', 'label'     => '事件 4（英文）'),
            'event5'           => array('type' => 'text', 'label'     => '事件 5'),
            'event5_en'       => array('type' => 'text', 'label'     => '事件 5（英文）'),
        );
        //默认值设置
        $info['mmy'] = 'pictxt';
        $this->assign('item',$info);
        $this->assign('data',$this->data);

        return $this->fetch();
    }

    public function update_pictxt()
    {
        //halt('update!');  
        $user = new Pictxtmanage;
        $data = input('post.');

        $rule = [
            //管理员登陆字段验证
            'banner1_txt1|文字'       => 'require|min:1',
            'banner1_txt2|文字'       => 'require|min:1',
            'banner1_txt3|文字'       => 'require|min:1',
            'banner2_txt1|文字'       => 'require|min:1',
            'banner2_txt2|文字'       => 'require|min:1',
            'banner3_txt1|文字'       => 'require|min:1',
            'banner3_txt2|文字'       => 'require|min:1',
            'featintro|文字'          => 'require|min:1',
            'featitle|文字'           => 'require|min:1',
            'featcon|文字'            => 'require|min:1',
            'featintro_en|文字'          => 'require|min:1',
            'featitle_en|文字'           => 'require|min:1',
            'featcon_en|文字'            => 'require|min:1',
            'event1|文字'          => 'require|min:1',
            'event2|文字'           => 'require|min:1',
            'event3|文字'            => 'require|min:1',
            'event4|文字'           => 'require|min:1',
            'event5|文字'            => 'require|min:1',
        ];
        $msg = [];

        // 数据验证
        $validate = new Validate($rule,$msg);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        //图片上传
        $par = 'plogo';
        $data[$par] = $this->upload($par);
        if(!$data[$par]){
            unset($data[$par]);
        }else{
             $data[$par] =  '/uploads/'.$data[$par];
        }

        $par = 'banner1_img';
        $data[$par] = $this->upload($par);
        if(!$data[$par]){
            unset($data[$par]);
        }else{
             $data[$par] =  '/uploads/'.$data[$par];
        }

        $par = 'banner2_img';
        $data[$par] = $this->upload($par);
        if(!$data[$par]){
            unset($data[$par]);
        }else{
             $data[$par] =  '/uploads/'.$data[$par];
        }

        $par = 'banner3_img';
        $data[$par] = $this->upload($par);
        if(!$data[$par]){
            unset($data[$par]);
        }else{
             $data[$par] =  '/uploads/'.$data[$par];
        }

        $data['id'] = 1;
        if ($user->update($data)) {
            return $this->success('信息更新成功',$this->data['module_url'].'pictxtmng');
        } else {
            return $user->getError();
        }
    }

    public function whitepaper()
    {
        $info = Baseinfo::get(1);
        $wp = $info['wpaper'];

        $this->data['edit_fields'] = array(
            'wpaper'           => array('type' => 'file', 'label'     => '白皮书')
        );
        
        $this->assign('wp',$wp);
        $this->assign('item',$info);
        $this->assign('data',$this->data);

        return $this->fetch();
    }

    public function update_wp()
    {
        //halt('update!');  
        $data = input('post.');
        $user = new Baseinfo;
       
        $data['wpaper'] = $this->uploadfile('wpaper');
        if(!$data['wpaper']){
            unset($data['wpaper']);
        }else{
             $data['wpaper'] =  '/uploads/'.$data['wpaper'];
        }


        $data['id'] = 1;
        if ($user->update($data)) {
            return $this->success('白皮书更新成功！',$this->data['module_url'].'whitepaper');
        } else {
            return $user->getError();
        }
    }

    public function uploadfile($fupload){
        // 获取表单上传文件
        $file = request()->file($fupload);
        if($file){
            if (true !== $this->validate([$fupload => $file], [$fupload => 'fileExt:pdf'])) {
                $this->error('请选择pdf文件');
            } else {
                $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads'); 

                return  $info->getFilename();
            }
        }else{
            return false;
        }
    }

    /**
     * [upload 图片上传]
     * @return [type] [description]
     */
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

    public function delete_image($id,$mmy,$lb){

        if($mmy == 'baseinfo'){
            $info = Baseinfo::get(1);

            if (file_exists($this->data['upload_path'] .'/..'. $info->$lb)) {
                @unlink($this->data['upload_path'] .'/..'. $info->$lb);
            }

            $source_image = str_replace('_thumb', '', $info->$lb);
            if (file_exists($this->data['upload_path'] .'/..'. $source_image)) {
                @unlink($this->data['upload_path'] .'/..'. $source_image);
            }

            $data['id'] = 1;
            $data['wechat'] = '';
            if ($info->update($data)) {
                return $this->success('图像删除成功',$this->data['module_url']);
            }else{
                return $info->getError();
            } 
        }
        if($mmy == 'pictxt'){

            $info = Pictxtmanage::get(1);

            if (file_exists($this->data['upload_path'] .'/..'. $info->$lb)) {
                @unlink($this->data['upload_path'] .'/..'. $info->$lb);
            }

            $source_image = str_replace('_thumb', '', $info->$lb);
            if (file_exists($this->data['upload_path'] .'/..'. $source_image)) {
                @unlink($this->data['upload_path'] .'/..'. $source_image);
            }

            $data['id'] = 1;
            $data[$lb] = '';
            if ($info->update($data)) {
                return $this->success('图像删除成功',$this->data['module_url'].'pictxtmng');
            }else{
                return $info->getError();
            }
        }
    }
}