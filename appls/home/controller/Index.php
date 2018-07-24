<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Baseinfo;
use app\home\model\Pictxtmanage;
use app\home\model\Visitinfomng;
use app\home\model\Vhistory;
use app\home\model\Teammng;
use think\Db;

class Index extends Controller
{
	public function index()
	{
		//注册session
		$request = request();
        $ip = $request->ip();
        $test = $this->visitermng($ip);
        //$this->assign('test', $test);

		if(!session('uid')){
			$request = request();
			$ip = $request->ip();
			$time = time();
			session('uip',$ip);
			session('visittime',$time);

			$a = session('lang');
			if(!isset($a)){							
				session('lang','ch1');
			}		
			//!session('uid')
		}
		$item = Pictxtmanage::get(1);
		$item['plogo'] = str_replace('_thumb', '', $item['plogo']);
		session('plogo',$item['plogo']);
		$item['flogo'] = str_replace('_thumb', '', $item['flogo']);
		session('flogo',$item['flogo']);
		$this->assign('item', $item);

		$team['core'] = Teammng::where('type','=','0')->order('ppid', 'ASC')->paginate();
		$team['assi'] = Teammng::where('type','=','1')->order('ppid', 'ASC')->paginate();
		$this->assign('team', $team);
		

		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);

		$ppage = 'home';								
		$this->assign('ppage', $ppage);

		return $this->fetch();
	}

	public function contact()
	{

		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);

		return $this->fetch();
	}	
	public function xlanguage()
	{
		$orglang = session('lang');
		if(!strcmp($orglang,'ch'))
		{ 
			session('lang','en');
		}
		else{
			session('lang','ch');
		}
		$data['error'] = 0;
		$data['msg'] = 'done';
		$data['lang'] = session('lang');
		return $data;
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
