<?php
namespace app\admin\controller;
use app\admin\model\Admincontrol as AdministratorModel;

use app\admin\model\Contactinfo;
use app\admin\model\Faqcell;
use app\admin\model\Subscribe;
use app\admin\model\Visitinfomng;
use app\admin\model\Vhistory;
use app\admin\model\Blogmanage;

use app\admin\controller\AdminAuth;
use think\Validate;
use think\Db;

class Index extends AdminAuth
{
    public function index()
    {
        $this->data['admin_count'] = AdministratorModel::where('status','=',1)->count();
		$co = new Contactinfo;
        $fa = new Faqcell;
        $su = new Subscribe;
        $bl = new Blogmanage;
        //待处理消息数量
        $this->data['post_count_contact']   = $co->where('status','=',0)->count();
        $this->data['post_count_faq']       = $fa->where('status','=',0)->count();
        $this->data['post_count_subscribe'] = $su->where('status','=',0)->count();

        $this->data['post_count_type'] = $co->where('status','=',0)->count()+
                                         $fa->where('status','=',0)->count()+
                                         $su->where('status','=',0)->count();
        $this->data['post_count_all'] = Blogmanage::count();
        $this->data['visit_count_all'] = Visitinfomng::count();
        $this->data['pv_count_all'] = Visitinfomng::sum('pvs');

        $this->assign('data',$this->data);

        $this->updatevisiter();
		//$this->view->replace([
		//	'__PUBLIC__' => '/static',
		//]);
        return $this->fetch();
    }

    public function login()
    {
        $this->view->engine->layout(false);
		
		// $this->view->replace([
			// '__PUBLIC__' => '/static',
		// ]);
        // return view();
		//halt('dfs');
		return $this->fetch();
    }

    public function login_action(){
		//trace('wozaizhe');
        $data = input('post.');
        $rule = [
            //管理员登陆字段验证
            'admin_username|管理员账号' => 'require|min:5',
            'admin_password|管理员密码' => 'require|min:5',
        ];
		
        // 数据验证
        $validate = new Validate($rule);
        $result   = $validate->check($data);
        if(!$result){
            return $validate->getError();
        }
		
        $user = new AdministratorModel;
		
		
        //$preview = $user->where(array('username'=>$data['admin_username'],'status'=>1))->find();
		$preview = AdministratorModel::where('username', $data['admin_username'])->find();
		
        if(!$preview||$preview->status!='正常'){
            $this->error('用户不存在');
        }

        $where_query = array(
                'username' => $data['admin_username'],
                'password' => (isset($preview['salt']) && $preview['salt']) ? md5($data['admin_password'].$preview['salt']) : md5($data['admin_password']),
                'status'   => 1
            );
		
        /*$where_query = array(
                'username' => $data['admin_username'],
                'password' => (isset($preview['salt']) && $preview['salt']) ? md5($data['admin_password'].$preview['salt']) : md5($data['admin_password']),
                'status'   => 1
            );*/
        if ($user = $user->where($where_query)->find()) {
			//注册session
            session('uid',$user->id);
            session('admin_username',$user->username);
            session('admin_password',$user->password);
            session('admin_nickname',$user->nickname);
            session('admin_avatar',$user->avatar);
            //更新最后请求IP及时间
            $request = request();
            $ip = $request->ip();
            $time = time();
            $expire_time = time()+config('auth_expired_time');
            $user->where($where_query)->update(['last_login_ip' => $ip, 'last_login_time' => $time,'expire_time'=>$expire_time]);

            return $this->success('登录成功', '/admin');
        } else {
            $this->error('登录失败:账号或密码错误');
        }
    }

    /**
     * [lost_password TODO：密码重置功能]
     * @return [type] [description]
     */
    public function lost_password(){
        $this->view->engine->layout(false);
		$this->view->replace([
			'__PUBLIC__' => '/static',
		]);
        return view();
    }
    /**
     * [logout 登出操作]
     * @return [type] [description]
     */
    public function logout(){
        $request = request();
        session(null);
        return $this->success('已成功登出', '/admin/login');
    }

    public function updatevisiter()
    {
        $vim = new Visitinfomng;
        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
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

    }
}
