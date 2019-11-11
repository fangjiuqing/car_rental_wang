<?php
return [
    'db'    => [
        'pre'       => 'pre_',
        'type'      => 'mysql',
        'mysql'     => [
            //'default'   => 'host=bdm289907605.my3w.com;port=3306;db=bdm289907605_db;user=bdm289907605;passwd=3yG8tL2mI;charset=utf8;profiling=1',
             'default'   => 'host=127.0.0.1;port=3306;db=rentcar;user=root;passwd=;charset=utf8;profiling=1',
        ],
    ],
   'CACHE_VER'  => 2,
   'SYS_NAME'  => '在线租车',
   'tpl'        => [
      'style'     => 'default',
      '404_tpl'   => '404.tpl',
      'msg_tpl'   => 'msg.tpl',
      'ob'        => true,
      'native'    => false,
      'tpl_pre'   => '{',
      'tpl_suf'   => '}',
      'cmod'      => false,
      'charset'   => 'utf-8',
      'allow_php' => false
  ],
  'ROOR_URL'  => 'www./',
  'upload_url'  => 'http://localhost/zuchev1/data/attachment/',
];

//UPDATE mysql.user SET Password = PASSWORD('3yG8tL2mI') WHERE User = 'bdm289907605' limit 1;