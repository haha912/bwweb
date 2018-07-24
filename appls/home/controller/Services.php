<?php
namespace app\home\controller;
use think\Controller;
use app\home\model\Baseinfo;		
use think\Db;

class Services extends Controller
{
	public function index()
	{
		$info = new Baseinfo;
		$infolist = $info::getById(1);
		$this->assign('info', $infolist);	
		return $this->fetch();
	}
}
