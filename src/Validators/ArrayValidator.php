<?php

declare(strict_types=1);

namespace Web3\Validators;

/**
 * Class ArrayValidator
 * @package Web3\Validators
 */
class ArrayValidator implements IValidator
{
    /**
     * validate
     *
     * @param array $value
     * @return bool
     */
    public static function validate($value)
    {
        return is_array($value);
    }
}
