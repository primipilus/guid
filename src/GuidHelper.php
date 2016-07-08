<?php
/**
 * @author primipilus 08.07.2016
 */

namespace primipilus\guid;

/**
 * Class GuidHelper
 *
 * @package primipilus\guid
 */
class GuidHelper {

    const ZERO = '00000000-0000-0000-0000-000000000000';

    /**
     * Create new generated valid guid
     *
     * @param string $prefix
     *
     * @return null|Guid
     */
    public static function createGeneratedGuid($prefix = '')
    {
        return self::createGuid(self::generateValue($prefix));
    }

    /**
     * Create new valid guid
     *
     * @param $value
     *
     * @return null|Guid
     */
    public static function createGuid($value)
    {
        if (self::validate($value)) {
            return new Guid($value);
        }

        return null;
    }

    /**
     * Create zero guid
     *
     * @return null|Guid
     */
    public static function createZeroGuid()
    {
        return new Guid(self::ZERO);
    }

    /**
     * Validate guid value
     *
     * @param $value
     *
     * @return bool
     */
    public static function validate($value)
    {
        return (bool)preg_match('#^[a-f\d]{8}-[a-f\d]{4}-[a-f\d]{4}-[a-f\d]{4}-[a-f\d]{12}$#', (string)$value);
    }

    /**
     * Checking value on ZERO
     *
     * @param $value
     *
     * @return bool
     */
    public static function zero($value)
    {
        return self::ZERO === (string)$value;
    }

    /**
     * Generate new
     *
     * @param string $prefix
     *
     * @return string
     */
    public static function generateValue($prefix = '')
    {
        return preg_replace(
            '#(.{8})(.{4})(.{4})(.{4})(.{12})#',
            '$1-$2-$3-$4-$5',
            hash('ripemd128', uniqid('', true) . md5((string)$prefix . microtime(true)))
        );
    }

}