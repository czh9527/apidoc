<?php

namespace czh9527\apidoc\annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * Url
 * @package czh9527\apidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
class Md extends Annotation
{
    /**
     * 引入md内容
     * @var string
     */
    public $ref;
}
