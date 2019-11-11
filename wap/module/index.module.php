<?php
namespace com\default_wap;
use \re\rgx as RGX;

class index_module extends base_module {

    /**
     * [__construct description]
     */
    public function __construct () {
        parent::__construct();
    }


    public function indexbak_action () {
        $this->display('index.tpl');
    }

    /**
     * [index_action description]
     * @return [type] [description]
     */
    public function index_action () {
        $banner = [
            [
                'img' => 'https://fimg.zuchecdn.com/upload/wap/HomePage/HeadFigure/2018/750-410-YMD-20190815-WAP.jpg',
                'url' => '',
            ],
            [
                'img' => 'https://fimg.zuchecdn.com/upload/wap/HomePage/HeadFigure/2018/750-410-zizhu-20190426-WAP.jpg',
                'url' => '',
            ],
            [
                'img' => 'https://fimg.zuchecdn.com/upload/app/HomePage/HeadFigure/2018/750-410-mian2-20180824-WAP.jpg',
                'url' => '',
            ],
            [
                'img' => 'https://fimg.zuchecdn.com/upload/app/HomePage/HeadFigure/2018/750x410-guojizuche-180201-app-wap.jpg',
                'url' => '',
            ],
        ];
        $this->assign('banner' , $banner);

        $agent = $this->get('agent');
        $agent_id = 0;
        /** 校验代理有效性 */
        if ( $agent ) {
            $agent_info = RGX\OBJ('agent_table')->where("agent_id = '$agent' or agent_mobile = '$agent' or agent_code = '$agent'")->limit(1)->get();

            if ( $agent_info ) {
                $agent_id = $agent_info['agent_id'];
            }
        }
        $this->assign('agent_id' , $agent_id);
        $this->display('index.tpl');
    }

} // Class End