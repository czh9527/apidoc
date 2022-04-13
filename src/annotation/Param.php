<?php

namespace czh9527\apidoc\annotation;


/**
 * 请求参数
 * @package czh9527\apidoc\annotation
 * @Annotation
 * @Target({"METHOD","ANNOTATION"})
 */
final class Param extends ParamBase
{


    /**
     * 必须
     * @var bool
     */
    public $require;
    
    /**
     * 引入
     * @var string
     */
    public $ref;

    /**
     * mock
     * @var string
     */
    public $mock;
}
