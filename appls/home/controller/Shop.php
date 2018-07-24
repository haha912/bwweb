<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Baseinfo;		
use think\Db;

class Shop extends Controller
{
	public function index()
	{
		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);

		$ppage = 'product';							
		$this->assign('ppage', $ppage);
		return $this->fetch();
	}
	public function payment()
	{
		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);	
		$ppage = 'product';							
		$this->assign('ppage', $ppage);
		return $this->fetch();
	}
}
