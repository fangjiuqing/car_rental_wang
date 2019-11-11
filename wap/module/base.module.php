<?php
namespace com\default_wap;
use \re\rgx as RGX;

class base_module extends RGX\module {

    public $login = null;

    /**
     * [__construct description]
     */
     public function __construct ($params = []) {
        parent::__construct($params);
        $this->sess();
        $this->login = $this->sess_get('login');
    }

    /**
     * 设置当前登录用户
     * @param [type] $user [description]
     */
    public function set_login ($admin) {
        $this->sess_set('login', $admin);
    }


} // Class End