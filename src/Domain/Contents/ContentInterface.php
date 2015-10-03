<?php
namespace Cnab\Domain\Contents;

interface ContentInterface
{

    /**
     *
     * @return number|string|null
     */
    public function get($attribute);

    /**
     *
     * @param string $attribute
     * @param number|string $value
     * @return self
     */
    public function set($attribute, $value);
}