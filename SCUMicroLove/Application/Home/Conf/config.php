<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL'=>2, // 如果你的环境不支持PATHINFO 请设置为3
    'URL_CASE_INSENSITIVE' =>true,
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'microlove',
    'DB_USER'=>'root',
    'DB_PWD'=>'root',
    'DB_PORT'=>'3306',
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX'=>'ml_',

    'TMPL_L_DELIM' => '<{', // 修改左定界符
    'TMPL_R_DELIM' => '}>', // 修改右定界符
);
