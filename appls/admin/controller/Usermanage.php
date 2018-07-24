<?php
namespace app\admin\controller;

use app\admin\model\Contactinfo;
use app\admin\model\Faqcell;
use app\admin\model\Subscribe;

use app\admin\controller\AdminAuth;
use think\Validate;
use think\Image;
use think\Request;
use think\Db;
class Usermanage extends AdminAuth
{
	//模块基本信息
	private $data = array(
		'module_name' => '用户管理',
		'module_url'  => '/admin/usermanage/',
		'module_slug' => 'usermanage',
		'upload_path' => UPLOAD_PATH,
		'upload_url'  => '/public/uploads/',
		'type_select' => 'all',
		'type_select_sub' => 'all',
		'type_select_faq' => 'all',
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
		$data=new Contactinfo;
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
			$list =  Contactinfo::where('status','>=','0')->order('update_time', 'ASC')->paginate();
		}else{
			$this->data['type_select'] = $name;
			$list =  Contactinfo::where(['status' => ['=', $name]])->order('id', 'ASC')->paginate();
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

    
    public function read_contact($id='')
    {
		//halt($id);	
		$examdata = new Contactinfo;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $examdata->Distinct(true)->field('status')->order('status desc')->select();
		$etype = [];
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		
    	$this->data['edit_fields'] = array(
			'username' => array('type' => 'text', 'label' => '用户名'),
			'email'    => array('type' => 'text', 'label' => '邮箱'),
			'subject'  => array('type' => 'text', 'label' => '主题'),//,'notes'=>'更新管理员资料时默认不填则不修改'),
			'question' => array('type' => 'text', 'label' => '问题')	,
			'create_time' => array('type' => 'text', 'label' => '提交时间')	,
            'uip'      => array('type' => 'text', 'label' => 'IP'),
			'status'   => array('type' => 'text', 'label'  => '状态'),
        );

        //默认值设置
        $item = Contactinfo::get($id);

        $this->assign('item',$item);
        $this->assign('data',$this->data);
        return view();
    }

    //修改contact为已阅状态
    public function confirm($id)
    {
        $user = new Contactinfo;
        $data['id'] = $id;

        $data['status'] =1;
		$date['update_time']=time();
        if ($user->update($data)) {

            return $this->redirect($this->data['module_url']);//    $this->success('试题更新成功',$this->data['module_url'].'read/'.$id);
        } else {
            return $user->getError();
        }
    } 

    public function delete_contact($id)
    {
        //$user = new Exam;
		//trace('delete!');
        $user = Contactinfo::get($id);
        if ($user) {
			$user->delete();
			$data['error'] = 0;
			$data['msg'] = '彻底删除成功';
        } else {
        	$data['error'] = 1;
        	$data['msg'] = '删除失败';
        }
        return $data;
    }



    ///////////////////////dealing subscribe info//////////////////////////
    public function subscribemng($name='all')
    {
		$data=new Subscribe;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $data->Distinct(true)->field('status')->order('status desc')->select();
		// dump($ty);
		$etype = [];
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		

		//dump(time()-config('lostfound_expired_time'));
		//halt($del_expir);
		if($name=='all'){
			$this->data['type_select_sub'] = $name;
			$list =  Subscribe::where('status','>=','0')->order('update_time', 'ASC')->paginate();
		}else{
			$this->data['type_select_sub'] = $name;
			$list =  Subscribe::where(['status' => ['=', $name]])->order('id', 'ASC')->paginate();
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


    public function read_subscribe($id='')
    {
		//halt($id);	
		$examdata = new Subscribe;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $examdata->Distinct(true)->field('status')->order('status desc')->select();
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		
    	$this->data['edit_fields'] = array(
			'email'    => array('type' => 'text', 'label' => '邮箱'),
			'create_time' => array('type' => 'text', 'label' => '提交时间')	,
			'status'   => array('type' => 'text', 'label'  => '状态'),
        );

        //默认值设置
        $item = Subscribe::get($id);

        $this->assign('item',$item);
        $this->assign('data',$this->data);
        return view();
    }

    //修改为已阅状态
    public function confirm_subscribe($id)
    {
        $user = new Subscribe;
        $data['id'] = $id;

        $data['status'] =1;
		$date['update_time']=time();
        if ($user->update($data)) {

            return $this->redirect($this->data['module_url'].'subscribemng');
            //    $this->success('试题更新成功',$this->data['module_url'].'read/'.$id);
        } else {
            return $user->getError();
        }
    }

    public function delete_subscribe($id)
    {
        //$user = new Exam;
		//trace('delete!');
        $user = Subscribe::get($id);
        if ($user) {
			$user->delete();
			$data['error'] = 0;
			$data['msg'] = '彻底删除成功';
        } else {
        	$data['error'] = 1;
        	$data['msg'] = '删除失败';
        }
        return $data;
    }

    ///////////////////////dealing faq info//////////////////////////
    public function faqmng($name='all')
    {
		$data=new Faqcell;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $data->Distinct(true)->field('status')->order('status desc')->select();
		// dump($ty);
		$etype = [];
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		

		//dump(time()-config('lostfound_expired_time'));
		//halt($del_expir);
		if($name=='all'){
			$this->data['type_select_faq'] = $name;
			$list =  Faqcell::where('status','>=','0')->order('update_time', 'asc')->paginate();
		}else{
			$this->data['type_select_faq'] = $name;
			$list =  Faqcell::where(['status' => ['=', $name]])->order('update_time', 'desc')->paginate();
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

    public function read_faq($id='')
    {
		//halt($id);	
		$examdata = new Faqcell;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $examdata->Distinct(true)->field('status')->order('status desc')->select();
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}		
    	$this->data['edit_fields'] = array(
    		'id'		=> array('type' => 'text', 'label' => 'id'),
    		'user'     => array('type' => 'text', 'label' => '用户'),
			'email'    => array('type' => 'text', 'label' => '邮箱'),
			'type' => array('type' => 'text', 'label' => '类型')	,			
			'question' => array('type' => 'text', 'label' => '问题')	,         
            'question_en' => array('type' => 'text', 'label' => '问题 (英文，不填写则与中文相同)')  ,
			'answer' => array('type' => 'textarea', 'label' => '回答 (使用CTRL+ENTER换行)')	,
            'answer_en' => array('type' => 'textarea', 'label' => '回答 (英文，不填写则与中文相同)')  ,
			'create_time' => array('type' => 'text', 'label' => '提交时间')	,
			'status'   => array('type' => 'radio', 'label' => '状态','default'=> array(0 => '未答复', 1 => '显示', 2 => '隐藏')),
        );

        //默认值设置
        $item = Faqcell::get($id);

        $this->assign('item',$item);
        $this->assign('data',$this->data);
        return view();
    }



    public function update_faq($id)
    {
		//halt('update!');	
        $user = new Faqcell;
        $data = input('post.');

        //$preview = $user->where(array('username'=>$data['username']))->find();

        $rule = [
            //管理员登陆字段验证
            'type|类型'      => 'require|min:2',
			'question|问题'  =>'require|min:10',//'require|alphaDash|min:5|unique:administrator',
			'answer|回答'        =>'require|min:10',
			'user|用户名'    => 'require|min:2',
			'email|邮箱'   => 'email',
        ];
        $msg = [];


        // 数据验证
        $validate = new Validate($rule,$msg);
        $result   = $validate->check($data);
        if(!$result){
            return  $validate->getError();
        }

        $data['id'] = $id;
        if(isset($data['answer'])){
        	if($data['status']!=1) $data['status'] = 2;
        }
		$date['update_time']=time();
        if ($user->update($data)) {

            return $this->redirect($this->data['module_url'].'read_faq/'.$id);//    $this->success('试题更新成功',$this->data['module_url'].'read/'.$id);
        } else {
            return $user->getError();
        }
    }  


    public function delete_faq($id)
    {
        //$user = new Exam;
		//trace('delete!');
        $user = Faqcell::get($id);
        if ($user) {
			$user->delete();
			$data['error'] = 0;
			$data['msg'] = '彻底删除成功';
        } else {
        	$data['error'] = 1;
        	$data['msg'] = '删除失败';
        }
        return $data;
    }

 public function create_faq()
    {
		$examdata=new Faqcell;
		// $typynum=$hotnews->count('DISTINCT class');
		$ty = $examdata->Distinct(true)->field('status')->order('status desc')->select();
		$etype = [];
		for ($i=0; $i<count($ty); $i++) {
		  $etype[$i]=$ty[$i]->status;
		}

    	$this->data['edit_fields'] = array(
    		'user'     => array('type' => 'text', 'label' => '用户'),
			'email'    => array('type' => 'text', 'label' => '邮箱'),
			'type' => array('type' => 'text', 'label' => '类型')	,			
            'question' => array('type' => 'text', 'label' => '问题')  ,         
            'question_en' => array('type' => 'text', 'label' => '问题 (英文，不填写则与中文相同)')  ,
            'answer' => array('type' => 'textarea', 'label' => '回答')    ,
            'answer_en' => array('type' => 'textarea', 'label' => '回答 (英文，不填写则与中文相同)')  ,
			'status'   => array('type' => 'radio', 'label' => '状态','default'=> array(0 => '未答复', 1 => '显示', 2 => '隐藏')),
        );

        //默认值设置
        $item['user'] = 'self_edit';
        $item['email'] ='self_edit@bwc.com';
		$item['status'] = 2;	

        $this->assign('item',$item);
        $this->assign('data',$this->data);

        return view();
    }

	public function add_faq()
    {
        $user = new Faqcell;
        $data = input('post.');

        $rule = [
            'type|类型'      => 'require|min:2',
			'question|问题'  =>'require|min:10',//'require|alphaDash|min:5|unique:administrator',
			'answer|回答'        =>'require|min:10',
			'user|用户名'    => 'require|min:2',
			'email|邮箱'   => 'email',
			'status|状态'  => 'require',
        ];
        // 数据验证
        $validate = new Validate($rule);
        $result   = $validate->check($data);
        if(!$result){
			//$urlshang = $_SERVER['HTTP_REFERER'];
			//return  $this->error($validate->getError(),$urlshang,'',3);
            return  $validate->getError();
        }
		
        //$data['password'] =  (isset($data['salt']) && $data['salt']) ? md5($data['password'].$data['salt']) : md5($data['password']);
        $data['create_time'] = time();
        $data['update_time'] = time();
		//dump($data);
		//$id = $user->validate(true)->insertGetId($data);
		
        if ($id = $user->validate(true)->insertGetId($data)) {
			//halt('suc');
			return $this->success('添加成功',$this->data['module_url'].'faqmng/','',1);
        } else {
            return $this->error($user->getError());
		}
    }
}
