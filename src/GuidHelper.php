<?php
/**
 * @author primipilus 08.07.2016
 */

namespace primipilus\guid;

use Ramsey\Uuid\Uuid;

/**
 * Class GuidHelper
 * @package primipilus\guid
 */
class GuidHelper
{

    /** @var string */
    const ZERO = '00000000-0000-0000-0000-000000000000';

    /**
     * Create new generated valid guid
     *
     * @return Guid
     */
    public static function createGeneratedGuid() : Guid
    {
        return new Guid();
    }

    /**
     * Create new valid guid
     *
     * @param string $value
     *
     * @return null|Guid
     */
    public static function createGuid(string $value) : ?Guid
    {
        if (self::validate($value)) {
            return new Guid($value);
        }

        return null;
    }

    /**
     * Create zero guid
     *
     * @return Guid
     */
    public static function createZeroGuid() : Guid
    {
        return new Guid(self::ZERO);
    }

    /**
     * Validate guid value
     *
     * @param string $value
     *
     * @return bool
     */
    public static function validate(string $value) : bool
    {
        return (bool)preg_match('#^[a-f\d]{8}-[a-f\d]{4}-[a-f\d]{4}-[a-f\d]{4}-[a-f\d]{12}$#', (string)$value);
    }

    /**
     * Checking value on ZERO
     *
     * @param string $value
     *
     * @return bool
     */
    public static function zero(string $value) : bool
    {
        return self::ZERO === (string)$value;
    }

    /**
     * Generate new value
     *
     * @return string
     */
    public static function generateValue() : string
    {
        return Uuid::uuid4()->toString();
    }
}
