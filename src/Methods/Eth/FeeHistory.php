<?php

declare(strict_types=1);

namespace Web3\Methods\Eth;

use Web3\Methods\EthMethod;
use Web3\Validators\ArrayValidator;
use Web3\Validators\QuantityValidator;
use Web3\Validators\TagValidator;
use Web3\Formatters\OptionalQuantityFormatter;

class FeeHistory extends EthMethod
{
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [
        QuantityValidator::class, TagValidator::class, ArrayValidator::class
    ];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [
        OptionalQuantityFormatter::class
    ];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = [
        1 => 'latest'
    ];

    /**
     * construct
     *
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}
