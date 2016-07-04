<?php

namespace Primipilus;

/**
 * Class Guid
 *
 * @package Primipilus
 */
class Guid {

    const ZERO = '00000000-0000-0000-0000-000000000000';

    protected $_value;

    /**
     * Guid constructor.
     *
     * @param null $value
     */
    function __construct($value = null)
    {
        $this->_value = $value;
    }

    /**
     * Validate value
     *
     * @return bool
     */
    function isValid()
    {
        return (bool)preg_match('#^[a-f\d]{8}-[a-f\d]{4}-[a-f\d]{4}-[a-f\d]{4}-[a-f\d]{12}$#', $this->_value);
    }

    /**
     * @return bool
     */
    function isZero()
    {
        return self::ZERO == $this->_value;
    }

    /**
     * @param string $prefix
     *
     * @return void
     */
    function generate($prefix = '')
    {
        $this->_value = preg_replace(
            '#(.{8})(.{4})(.{4})(.{4})(.{12})#',
            '$1-$2-$3-$4-$5',
            hash('ripemd128', uniqid("", true) . md5($prefix . microtime(true)))
        );
    }

    /**
     * @return string
     */
    function __toString()
    {
        return (string)$this->_value;
    }

    /**
     * @return null|string
     */
    function getValue()
    {
        return $this->_value;
    }

}