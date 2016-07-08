<?php

namespace primipilus\guid;

/**
 * Class Guid
 *
 * @package primipilus
 */
class Guid {

    protected $_value;

    /**
     * Guid constructor.
     *
     * @param null $value
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    /**
     * Validate value
     *
     * @return bool
     */
    public function isValid()
    {
        return GuidHelper::validate($this->_value);
    }

    /**
     * Check on Zero value
     *
     * @return bool
     */
    public function isZero()
    {
        return GuidHelper::zero($this->_value);
    }

    /**
     * @param string $prefix
     *
     * @return void
     */
    public function generate($prefix = '')
    {
        $this->_value = GuidHelper::generateValue($prefix);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->_value;
    }

    /**
     * Get value string
     *
     * @return null|string
     */
    public function getValue()
    {
        return $this->_value;
    }

}