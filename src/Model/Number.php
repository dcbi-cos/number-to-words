<?php

namespace Kwn\NumberToWords\Model;

class Number
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var integer
     */
    private $units;

    /**
     * @var integer
     */
    private $subunits;

    /**
     * @var integer
     */
    private $decimalPlaces;

    /**
     * Constructor
     *
     * @param float $value Number value
     */
    public function __construct($value)
    {
        $this->value         = (float) $value;
        $this->units         = $this->extractUnits($this->value);
        $this->subunits      = $this->extractSubunits($this->value);
        $this->decimalPlaces = $this->extractDecimalPlaces($this->value);
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return integer
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @return integer
     */
    public function getSubunits()
    {
        return $this->subunits;
    }

    /**
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * @param float $value
     *
     * @return integer
     */
    private function extractUnits($value)
    {
        return (int) $value;
    }

    /**
     * @param float $value
     *
     * @return integer
     */
    private function extractSubunits($value)
    {
        $subunits = $this->extractSubunitsAsString($value);

        return (int) $subunits;
    }

    /**
     * @param $value
     *
     * @return int
     */
    private function extractDecimalPlaces($value)
    {
        $subunits = $this->extractSubunitsAsString($value);

        return strlen($subunits);
    }

    /**
     * @param $value
     *
     * @return string
     */
    private function extractSubunitsAsString($value)
    {
        if ((int) $value == $value) {
            $subunits = '0';
        } else {
            $valueParts = explode('.', (string) $value);
            $subunits   = array_pop($valueParts);
        }


        return $subunits;
    }
}
