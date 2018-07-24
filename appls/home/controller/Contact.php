<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Baseinfo;	
use app\home\model\Contactinfo;	
use app\home\model\Subscribe;	
use app\home\model\Visitinfomng;
use app\home\model\Vhistory;
use think\Db;
use think\Validate;

class Contact extends Controller
{
	public function index()
	{

		$request = request();
        $ip = $request->ip();
        $test = $this->visitermng($ip);
        
		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);	
		$ppage = 'contact';							
		$this->assign('ppage', $ppage);
		return $this->fetch();
	}
	public function addcontact()
    {
		$request = request();
        $ip = $request->ip();

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
		    	$pcont = new Contactinfo([
				    'username'  =>  $name,
				    'email' =>  $email,
				    'subject'  =>  $subject,
				    'question' => $message,
				    'status'   => 0,
				    'uip'      => $ip,
				]);
				$pcont->save();
				$emailResult = array ('sent'=>'yes');	
			}
    	}else{
    		$emailResult = array ('sent'=>'tokenerror');
    	}

		echo json_encode($emailResult);
	}
	public function addsubscribe()
    {
    	if(!Validate::token('__token__','',['__token__'=>input('param.__token__')])){
	    	$email=$_POST['email']; 
	    	//$a = 'yes';
	    	$psubs = new Subscribe(['email' =>  $email]);
			$psubs->save();

			$emailResult = array ('sent'=>'yes');
		}else{
			$emailResult = array ('sent'=>'tokenerror');
		}
		echo json_encode($emailResult);
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
