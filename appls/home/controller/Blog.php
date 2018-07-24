<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Blogmanage;		
use app\home\model\Baseinfo;	
use app\home\model\Visitinfomng;
use app\home\model\Vhistory;
use think\Db;

class Blog extends Controller
{
	public function index()
	{

		$request = request();
        $ip = $request->ip();
        $test = $this->visitermng($ip);

		$list =  Blogmanage::where(['status' => ['=', 0]])->order('create_time', 'ASC')->paginate();
		$this->assign('list',$list);

		$tt = Blogmanage::where(['status' => ['=', 0]])->order('create_time', 'ASC')->paginate();


		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);
		$ppage = 'blog';							
		$this->assign('ppage', $ppage);
		return $this->fetch();
	}

	public function blogpost($id)
	{
		$list =  new Blogmanage;
		$item = $list::getById($id);
		$this->assign('item', $item);

		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);
		$ppage = 'blog';							
		$this->assign('ppage', $ppage);
		return $this->fetch();
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
