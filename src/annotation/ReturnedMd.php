<?php

namespace czh9527\apidoc\annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * md返回参数
 * @package czh9527\apidoc\annotation
 * @Annotation
 * @Target({"METHOD","ANNOTATION"})
 */
final class ReturnedMd extends Annotation
{
    /**
     * 引入
     * @var string
     */
    public $ref;

}
