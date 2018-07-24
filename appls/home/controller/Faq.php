<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Baseinfo;
use app\home\model\Faqcell;
use app\home\model\Visitinfomng;
use app\home\model\Vhistory;
use think\Db;
use think\Validate;

class Faq extends Controller
{
	public function index()
	{

		//注册session
		$request = request();
        $ip = $request->ip();
        $test = $this->visitermng($ip);

    	$data = array(
			1 => array('type' =>'bwc', 'label' => "舌尖美食链", 'label_en' => "BITEOFWORLD"),
			2 => array('type' =>'product', 'label'  => "产品", 'label_en' => "Product"),
			3 => array('type' =>'support', 'label'  => "支持", 'label_en' => "Support"),
			4 => array('type' =>'others', 'label'  => "其他", 'label_en' => "Others"),
        );
		$this->assign('data',$data);
    	foreach ($data as $ss => $value) {
			$list [$value['type']] =  Faqcell::where(['status' => ['=', 1], 'type' => ['=', $value['type']]])->order('create_time', 'ASC')->paginate();
    	}

		//halt($list);
        $this->assign('list',$list);

		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);
		
		$ppage = 'faq';								
		$this->assign('ppage', $ppage);
		return $this->fetch();
	}



    public function addquestion()
    {
    	$name=$_POST['name']; 
    	$email=$_POST['email']; 
    	$subject=$_POST['subject']; 
    	$message=$_POST['message']; 
    	$verifyCode = $_POST['verifyCode'];

    	if(!Validate::token('__token__','',['__token__'=>input('param.__token__')])){
	    	if(!captcha_check($verifyCode)) {
	                // 校验失败
	            $emailResult = array ('sent'=>'coderror');
	        }else{
		    	//$a = 'yes';
		    	$pfaq = new Faqcell([
				    'user'  =>  $name,
				    'email' =>  $email,
				    'type'  =>  $subject,
				    'question' => $message,
				    'status'   => 0
				]);
				$pfaq->save();
				$emailResult = array ('sent'=>'yes');			
			}
    	}else{
    		$emailResult = array ('sent'=>'tokenerror');
    	}


		
		echo json_encode($emailResult);

        /*$user = new Faqcell;
        $data = input('post.');

        $rule = [
            //管理员登陆字段验证
            'name3|姓名'   => 'require|min:2',
			'message3|问题' =>'require|min:5',//'require|alphaDash|min:5|unique:administrator',
			'email3|邮箱' =>'require|min:1',
			'type|类型' =>'require|min:1',
			//'password|密码'   => 'require|min:5',
			//'mobile|手机号'   => 'length:11',
			//'salt|加密盐'     => 'length:3|number',
        ];
        // 数据验证
        $validate = new Validate($rule);
        $result   = $validate->check($data);
        if(!$result){
			//$urlshang = $_SERVER['HTTP_REFERER'];
			//return  $this->error($validate->getError(),$urlshang,'',3);
            return  $validate->getError();
        }

        $data['avatar'] = $this->upload();
        if(!$data['avatar']){
            unset($data['avatar']);
        }
		
        //$data['password'] =  (isset($data['salt']) && $data['salt']) ? md5($data['password'].$data['salt']) : md5($data['password']);
        $data['create_time'] = time();
        $data['update_time'] = time();
		//dump($data);
		//$id = $user->validate(true)->insertGetId($data);
		
        if ($id = $user->validate(true)->insertGetId($data)) {
			//halt('suc');
			return $this->success('试题添加成功',$this->data['module_url'].'create/','',1);
        } else {
            return $this->error($user->getError());
		}*/
    }

    public function visitermng($ip)
	{
		$vim = new Visitinfomng;
		$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
		$endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
		$lastt = $vim->max('create_time');
		
		if($lastt < $beginToday){
	    	$plastt = new Vhistory([
			    'user' =>  $vim->count(),
			    'pv'  =>  $vim->sum('pvs'),
			]);
			$plastt->save();
			$id = $vim->column("id"); 
			$id = Visitinfomng::destroy($id);
			$lasttnum = Vhistory::count();
			if($lasttnum>365){
				$lid = Vhistory::column("id");
				$lid = Vhistory::destroy(array_slice($a,($lasttnum-365)));
			}
		}
		//$map['create_time'] = array('between','$beginToday,$endToday');
		//$map['uip'] = array('=', $ip);
		$ulist = $vim->where('uip', $ip)->find();
		//return $ulist;
		if(isset($ulist)){
			$data['pvs'] = $ulist['pvs'] + 1;
			$data['id'] = $ulist['id'];
			$vim->update($data);
		}else{
	    	$pcont = new Visitinfomng([
			    'uip' =>  $ip,
			    'pvs'  =>  1,
			    'ti'  =>  date('Y-m-d',$beginToday),
			]);
			$pcont->save();
		}
		//return $beginToday;

	}	
}
