<?php

namespace czh9527\apidoc\annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * 排除模型的字段
 * @package czh9527\apidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
class WithoutField extends Annotation
{}
