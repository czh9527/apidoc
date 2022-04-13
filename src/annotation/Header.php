<?php

namespace czh9527\apidoc\annotation;


/**
 * 请求头
 * @package czh9527\apidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
class Header extends ParamBase
{
    /**
     * 必须
     * @var bool
     */
    public $require = false;

    /**
     * 类型
     * @var string
     */
    public $type;

    /**
     * 引入
     * @var string
     */
    public $ref;


    /**
     * 描述
     * @var string
     */
    public $desc;


}
