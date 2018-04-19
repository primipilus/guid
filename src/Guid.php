<?php

namespace primipilus\guid;

/**
 * Class Guid
 * @package primipilus\guid
 */
class Guid
{

    /** @var string */
    protected $value;

    /**
     * Guid constructor.
     *
     * @param null|string $value
     */
    public function __construct(?string $value = null)
    {
        if (is_null($value)) {
            $this->generate();
        } else {
            $this->value = $value;
        }
    }

    /**
     * Validate value
     * @see GuidHelper::validate()
     *
     * @return bool
     */
    public function isValid() : bool
    {
        return GuidHelper::validate($this->value);
    }

    /**
     * Check on Zero value
     * @see GuidHelper::ZERO
     * @see GuidHelper::zero()
     *
     * @return bool
     */
    public function isZero() : bool
    {
        return GuidHelper::zero($this->value);
    }

    /**
     * Generate new value
     */
    public function generate() : void
    {
        $this->value = GuidHelper::generateValue();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }

    /**
     * Get value string
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
}
