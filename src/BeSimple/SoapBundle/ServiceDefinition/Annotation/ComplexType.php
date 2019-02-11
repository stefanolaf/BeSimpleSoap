<?php
/*
 * This file is part of the BeSimpleSoapBundle.
 *
 * (c) Christian Kerl <christian-kerl@web.de>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace BeSimple\SoapBundle\ServiceDefinition\Annotation;

/**
 * @Annotation
 */
class ComplexType extends Configuration
{
    private $name;
    private $value;
    private $isNillable = false;
    private $isAttribute = false;

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function isNillable()
    {
        return $this->isNillable;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setNillable($isNillable)
    {
        $this->isNillable = (bool) $isNillable;
    }

    /**
     * @return bool
     */
    public function isAttribute()
    {
        return $this->isAttribute;
    }

    /**
     * @param bool $isAttribute
     *
     * @return $this
     */
    public function setIsAttribute($isAttribute)
    {
            $this->isAttribute = $isAttribute;
    
            return $this;
    }

    public function getAliasName()
    {
        return 'complextype';
    }
}