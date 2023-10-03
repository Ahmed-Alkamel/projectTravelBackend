<?php

namespace App\Helpers\constant;

class Constant
{
    public static $publicPath = 'public/';
    static $pathImageRequestServser =  'public/request/image/';
    static $pathImageServices =  'public/services/image/';
    public static function getPathServicesImage()
    {
        return str_replace(Constant::$publicPath, '', Constant::$pathImageServices,);
    }
    public static function getPathRequstImage()
    {
        return str_replace(Constant::$publicPath, '', Constant::$pathImageRequestServser,);
    }
    static $pathFileRequestServser = 'public/request/file/';
    public static function getPathRequstFile()
    {
        return str_ireplace(Constant::$publicPath, '', Constant::$pathFileRequestServser,);
    }
}
