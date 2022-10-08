<?php

return [
    //注销token缓存key
    'delete_key' => 'delete_token',
    //时区
    'timezone' => 'Asia/Shanghai',
    //编号
    'jti' => '4f1g23a12aa',
    //签名密钥
    'sign' => 'a4693602cbb7a',
    //签发人
    'iss' => 'http://guanqi.wrok',
    //接收人
    'aud' => [
        'http://guanqi.wrok',
        'http://guanqi.wrok',
        'http://guanqi.wrok',
    ],
    //主题
    'sub' => '100',
    //有效期(默认两个小时)  单位:秒
    'exp' => 3600 * 2,
    //设置SM4加密KEY
    'key' => '1234567890123456',
    //设置SM4KEY长度
    'key_len' => 16,
];