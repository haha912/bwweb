<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    //home
    'index'                              => '/home/index',
    'faq'                                => '/home/faq.html',
    'blogpost/:id'                       => '/home/blog/blogpost',
	'blogpost'                           => '/home/blog/blogpost.html',
	'blog'                               => '/home/blog.html',
	'contact'                            => '/home/contact.html',
	'shop'                               => '/home/shop.html',
	'services'                           => '/home/services.html',
	'payment'                            => '/home/shop/payment.html',
    'xlanguage'                          => '/home/index/xlanguage',



    '[hello]'     => [
        ':id'   => ['home/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['home/hello', ['method' => 'post']],
    ],


     // admin/index
    'admin/login/'                               => 'admin/index/login',
    'admin/login_action/'                        => 'admin/index/login_action',
    'admin/lost_password/'                       => 'admin/index/lost_password',
    'admin/logout/'                              => 'admin/index/logout',
    
    // admin/admin
    'admin/administrator/update/:id'             => 'admin/administrator/update',
    'admin/administrator/delete/:id'             => 'admin/administrator/delete',
    'admin/administrator/delete_image/:id'       => 'admin/administrator/delete_image',
    'admin/administrator/update_expire_time/:id' => 'admin/administrator/update_expire_time',
    'admin/administrator/create'                 => 'admin/administrator/create', 
    'admin/administrator/add'                    => 'admin/administrator/add', 
    'admin/administrator/:id'                    => 'admin/administrator/read',    

    // admin/usermanage
    'admin/usermanage/subscribemng/:name'        => 'admin/usermanage/subscribemng',
    'admin/usermanage/subscribemng'              => 'admin/usermanage/subscribemng',
    'admin/usermanage/read_subscribe/:id'        => 'admin/usermanage/read_subscribe',
    'admin/usermanage/confirm_subscribe/:id'     => 'admin/usermanage/confirm_subscribe',     
    'admin/usermanage/delete_subscribe/:id'      => 'admin/usermanage/delete_subscribe',

    'admin/usermanage/faqmng/:name'              => 'admin/usermanage/faqmng',
    'admin/usermanage/faqmng'                    => 'admin/usermanage/faqmng',
    'admin/usermanage/read_faq/:id'              => 'admin/usermanage/read_faq',
    'admin/usermanage/update_faq/:id'            => 'admin/usermanage/update_faq',     
    'admin/usermanage/create_faq'                => 'admin/usermanage/create_faq',  
    'admin/usermanage/add_faq'                   => 'admin/usermanage/add_faq',
    'admin/usermanage/delete_faq/:id'            => 'admin/usermanage/delete_faq',

    'admin/usermanage/read_contact/:id'          => 'admin/usermanage/read_contact',
    'admin/usermanage/confirm/:id'               => 'admin/usermanage/confirm', 
    'admin/usermanage/delete_contact/:id'        => 'admin/usermanage/delete_contact',
    'admin/usermanage/:name'                     => 'admin/usermanage/index',  

    // admin/blogmanage 
    'admin/blogmng/delete_blog/:id'             => 'admin/blogmng/delete_blog',   
    'admin/blogmng/delete_image/:id'             => 'admin/blogmng/delete_image',   
    'admin/blogmng/update_blog/:id'              => 'admin/blogmng/update_blog',
    'admin/blogmng/read_blog/:id'                => 'admin/blogmng/read_blog',    
    'admin/blogmng/create'                       => 'admin/blogmng/create',
    'admin/blogmng/add'                          => 'admin/blogmng/add', 
    'admin/blogmng/:name'                        => 'admin/blogmng/index',
    'admin/blogmng/'                             => 'admin/blogmng/index',  

    // admin/teammanage 
    'admin/teammanage/delete_mem/:id'             => 'admin/teammanage/delete_mem',   
    'admin/teammanage/delete_image/:id'             => 'admin/blogmng/delete_image',   
    'admin/teammanage/update_mem/:id'              => 'admin/teammanage/update_mem',
    'admin/teammanage/read_team/:id'                   => 'admin/teammanage/read_team',    
    'admin/teammanage/create'                       => 'admin/teammanage/create',
    'admin/teammanage/add'                          => 'admin/teammanage/add', 
    'admin/teammanage/:name'                        => 'admin/teammanage/index',
    'admin/teammanage/'                             => 'admin/teammanage/index',  
];
