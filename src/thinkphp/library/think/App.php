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

namespace think;

use think\exception\ClassNotFoundException;
use think\exception\HttpException;
use think\exception\HttpResponseException;
use think\exception\RouteNotFoundException;

/**
 * App 应用管理
 * @author liu21st <liu21st@gmail.com>
 */
class App
{
    /**
     * @var bool 是否初始化过
     */
    protected static $init = false;

    /**
     * @var string 当前模块路径
     */
    public static $modulePath;


    /**
     * @var string 应用类库命名空间
     */
    public static $namespace = 'app';


    /**
     * 初始化应用，并返回配置信息
     * @access public
     * @return array
     */
    public static function initCommon()
    {
        if (empty(self::$init)) {
            Loader::addNamespace(self::$namespace, APP_PATH);
        }
        return Config::get();
    }

    /**
     * 初始化应用或模块
     * @access public
     * @param string $module 模块名
     * @return array
     */
    private static function init($module = '')
    {
        return Config::get();
    }
}
