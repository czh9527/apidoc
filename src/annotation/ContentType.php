<?php

namespace czh9527\apidoc\annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * 调试时请求内容
 * @package czh9527\apidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
class ContentType extends Annotation
{}
