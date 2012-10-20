<?php

$baseDir = realpath(dirname(__FILE__).'/../../');
$parentConfig = [
    'timeZone'  => 'Asia/Tokyo',
    'baseDir'   => $baseDir,
    'publicDir' => $baseDir . '/public',
    'template'=>[
        'outputCharset'       => 'UTF-8',
        'templateCharset'     => 'UTF-8',
        'templateDir'         => $baseDir . '/php_include/Template/Default',
        'templateCacheDir'    => $baseDir . '/Var/Cache/Template/Default',
        'templateCacheDisable'=> true,
    ],
    'templateFp'=>false,
    'templateSp'=>false,
    'image'=>[
        'uploadImgMaxSize'    => 1048576,
        'uploadImgPath'       => $baseDir . '/public/img',
    ],
    'routingRules'=>[],
    'salt'      => 'qi0KbV^y=)j&$T;(VytxFT2kCU%0~rQ4',
];
