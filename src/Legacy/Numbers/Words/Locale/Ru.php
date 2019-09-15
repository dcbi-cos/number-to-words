<?php

namespace NumberToWords\Legacy\Numbers\Words\Locale;

use NumberToWords\Exception\NumberToWordsException;
use NumberToWords\Legacy\Numbers\Words;

class Ru extends Words
{
    const LOCALE               = 'ru';
    const LANGUAGE_NAME        = 'Russian';
    const LANGUAGE_NAME_NATIVE = 'Русский';
    const MINUS                = 'минус';

    const MALE   = 0;
    const FEMALE = 1;
    const NEUTER = 2;

    protected $zero = 'ноль';

    protected static $ten = [
        ['', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'],
        ['', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'],
    ];

    protected static $teens = [
        'десять',
        'одиннадцать',
        'двенадцать',
        'тринадцать',
        'четырнадцать',
        'пятнадцать',
        'шестнадцать',
        'семнадцать',
        'восемнадцать',
        'девятнадцать',
    ];

    protected static $tens = [
        2 => 'двадцать',
        'тридцать',
        'сорок',
        'пятьдесят',
        'шестьдесят',
        'семьдесят',
        'восемьдесят',
        'девяносто',
    ];

    protected static $hundred = [
        '',
        'сто',
        'двести',
        'триста',
        'четыреста',
        'пятьсот',
        'шестьсот',
        'семьсот',
        'восемьсот',
        'девятьсот',
    ];

    protected static $mega = [
        [3 => self::FEMALE],
        [3 => self::MALE],
        ['тысяча', 'тысячи', 'тысяч', self::FEMALE],
        ['миллион', 'миллиона', 'миллионов', self::MALE],
        ['миллиард', 'милиарда', 'миллиардов', self::MALE],
        ['триллион', 'триллиона', 'триллионов', self::MALE],
        ['квадриллион', 'квадриллиона', 'квадриллионов', self::MALE],
        ['секстиллион', 'секстиллиона', 'секстиллионов', self::MALE],
    ];


    protected static $currencyNames = [
        'ALL' => [
            [1, 'лек', 'лека', 'леков'],
            [2, 'киндарка', 'киндарки', 'киндарок']
        ],
        'AUD' => [
            [1, 'австралийский доллар', 'австралийских доллара', 'австралийских долларов'],
            [1, 'цент', 'цента', 'центов']
        ],
        'BGN' => [
            [1, 'лев', 'лева', 'левов'],
            [2, 'стотинка', 'стотинки', 'стотинок']
        ],
        'BRL' => [
            [1, 'бразильский реал', 'бразильских реала', 'бразильских реалов'],
            [1, 'сентаво', 'сентаво', 'сентаво']
        ],
        'BYN' => [
            [1, 'белорусский рубль', 'белорусских рубля', 'белорусских рублей'],
            [2, 'копейка', 'копейки', 'копеек']
        ],
        'BYR' => [
            [1, 'белорусский рубль', 'белорусских рубля', 'белорусских рублей'],
            [2, 'копейка', 'копейки', 'копеек']
        ],
        'CAD' => [
            [1, 'канадский доллар', 'канадских доллара', 'канадских долларов'],
            [1, 'цент', 'цента', 'центов']
        ],
        'CHF' => [
            [1, 'швейцарский франк', 'швейцарских франка', 'швейцарских франков'],
            [1, 'сантим', 'сантима', 'сантимов']
        ],
        'CYP' => [
            [1, 'кипрский фунт', 'кипрских фунта', 'кипрских фунтов'],
            [1, 'цент', 'цента', 'центов']
        ],
        'CZK' => [
            [2, 'чешская крона', 'чешских кроны', 'чешских крон'],
            [1, 'галирж', 'галиржа', 'галиржей']
        ],
        'DKK' => [
            [2, 'датская крона', 'датских кроны', 'датских крон'],
            [1, 'эре', 'эре', 'эре']
        ],
        'EEK' => [
            [2, 'эстонская крона', 'эстонских кроны', 'эстонских крон'],
            [1, 'сенти', 'сенти', 'сенти']
        ],
        'EUR' => [
            [1, 'евро', 'евро', 'евро'],
            [1, 'цент', 'цента', 'центов']
        ],
        'GBP' => [
            [1, 'фунт стерлингов', 'фунта стерлингов', 'фунтов стерлингов'],
            [1, 'пенс', 'пенса', 'пенсов']
        ],
        'HKD' => [
            [1, 'гонконгский доллар', 'гонконгских доллара', 'гонконгских долларов'],
            [1, 'цент', 'цента', 'центов']
        ],
        'HRK' => [
            [2, 'хорватская куна', 'хорватских куны', 'хорватских кун'],
            [2, 'липа', 'липы', 'лип']
        ],
        'HUF' => [
            [1, 'венгерский форинт', 'венгерских форинта', 'венгерских форинтов'],
            [1, 'филлер', 'филлера', 'филлеров']
        ],
        'ISK' => [
            [2, 'исландская крона', 'исландских кроны', 'исландских крон'],
            [1, 'эре', 'эре', 'эре']
        ],
        'JPY' => [
            [2, 'иена', 'иены', 'иен'],
            [2, 'сена', 'сены', 'сен']
        ],
        'KZT' => [
            [0, 'казахский тенге', 'казахских тенге', 'казахских тенге'],
            [1, 'тиын', 'тиына', 'тиынов']
        ],
        'LTL' => [
            [1, 'лит', 'лита', 'литов'],
            [1, 'цент', 'цента', 'центов']
        ],
        'LVL' => [
            [1, 'лат', 'лата', 'латов'],
            [1, 'сентим', 'сентима', 'сентимов']
        ],
        'MKD' => [
            [1, 'македонский динар', 'македонских динара', 'македонских динаров'],
            [1, 'дени', 'дени', 'дени']
        ],
        'MTL' => [
            [2, 'мальтийская лира', 'мальтийских лиры', 'мальтийских лир'],
            [1, 'сентим', 'сентима', 'сентимов']
        ],
        'NOK' => [
            [2, 'норвежская крона', 'норвежских кроны', 'норвежских крон'],
            [0, 'эре', 'эре', 'эре']
        ],
        'PLN' => [
            [1, 'злотый', 'злотых', 'злотых'],
            [1, 'грош', 'гроша', 'грошей']
        ],
        'ROL' => [
            [1, 'румынский лей', 'румынских лей', 'румынских лей'],
            [1, 'бани', 'бани', 'бани']
        ],
        'RUB' => [
            [1, 'рубль', 'рубля', 'рублей'],
            [2, 'копейка', 'копейки', 'копеек']
        ],
        'RUR' => [
            [1, 'российский рубль', 'российских рубля', 'российских рублей'],
            [2, 'копейка', 'копейки', 'копеек']
        ],
        'SEK' => [
            [2, 'шведская крона', 'шведских кроны', 'шведских крон'],
            [1, 'эре', 'эре', 'эре']
        ],
        'SIT' => [
            [1, 'словенский толар', 'словенских толара', 'словенских толаров'],
            [2, 'стотина', 'стотины', 'стотин']
        ],
        'SKK' => [
            [2, 'словацкая крона', 'словацких кроны', 'словацких крон'],
            [0, '', '', '']
        ],
        'TRL' => [
            [2, 'турецкая лира', 'турецких лиры', 'турецких лир'],
            [1, 'пиастр', 'пиастра', 'пиастров']
        ],
        'TMT' => [
            [1, 'манат', 'маната', 'манатов'],
            [1, 'тенге', 'тенге', 'тенге']
        ],
        'UAH' => [
            [2, 'гривна', 'гривны', 'гривен'],
            [2, 'копейка', 'копейки', 'копеек'],
        ],
        'USD' => [
            [1, 'доллар США', 'доллара США', 'долларов США'],
            [1, 'цент', 'цента', 'центов']
        ],
        'YUM' => [
            [1, 'югославский динар', 'югославских динара', 'югославских динаров'],
            [1, 'пара', 'пара', 'пара']
        ],
        'ZAR' => [
            [1, 'ранд', 'ранда', 'рандов'],
            [1, 'цент', 'цента', 'центов']
        ]
    ];

    /**
     * @param int    $n
     * @param string $f1
     * @param string $f2
     * @param string $f5
     *
     * @return string
     */
    public function morph($n, $f1, $f2, $f5)
    {
        $n = abs((int) $n) % 100;
        if ($n > 10 && $n < 20) {
            return $f5;
        }
        $n = $n % 10;
        if ($n > 1 && $n < 5) {
            return $f2;
        }
        if ($n == 1) {
            return $f1;
        }

        return $f5;
    }

    /**
     * @param  int  $number
     * @param  int  $currencyGender
     *
     * @return string
     */
    protected function toWords($number, $currencyGender = -1)
    {
        if ($number === 0) {
            return $this->zero;
        }

        $out = [];

        if ($number < 0) {
            $out[] = static::MINUS;
            $number *= -1;
        }

        $megaSize = count(static::$mega);
        $signs = $megaSize * 3;

        // $signs equal quantity of zeros of the biggest number in self::$mega
        // + 3 additional sign (point and two zero)
        list ($unit, $subunit) = explode('.', sprintf("%{$signs}.2F", (float) $number));

        foreach (str_split($unit, 3) as $megaKey => $value) {
            if (!(int) $value) {
                continue;
            }

            $megaKey = $megaSize - $megaKey - 1;
            $gender = $megaKey === 1 && $currencyGender !== -1 ? $currencyGender : static::$mega[$megaKey][3];
            list ($i1, $i2, $i3) = array_map('intval', str_split($value, 1));
            // mega-logic
            $out[] = static::$hundred[$i1]; # 1xx-9xx

            if ($i2 > 1) { # 20-99
                $out[] = static::$tens[$i2] . ' ' . static::$ten[$gender][$i3];
            } else { # 10-19 | 1-9
                $out[] = ($i2 > 0) ? static::$teens[$i3] : static::$ten[$gender][$i3];
            }

            if ($megaKey > 1) {
                $out[] = $this->morph($value, static::$mega[$megaKey][0], static::$mega[$megaKey][1], static::$mega[$megaKey][2]);
            }
        }

        return trim(preg_replace('/\s+/', ' ', implode(' ', $out)));
    }

    /**
     * @param string $currency
     * @param int    $decimal
     * @param int    $fraction
     *
     * @throws NumberToWordsException
     * @return string
     */
    public function toCurrencyWords($currency, $decimal, $fraction = null)
    {
        $currency = strtoupper($currency);

        if (!array_key_exists($currency, static::$currencyNames)) {
            throw new NumberToWordsException(
                sprintf('Currency "%s" is not available for "%s" language', $currency, get_class($this))
            );
        }

        $currencyNames = static::$currencyNames[$currency];
        $return = '';

        if ($decimal === 0 && !$fraction) {
            $return .= $this->toWords($decimal) .' '. $this->morph($decimal, $currencyNames[0][1], $currencyNames[0][2], $currencyNames[0][3]);

            return $return;
        }

        if ($decimal || (0 === $decimal && $this->options->isShowDecimalIfZero())) {
            $return .= $this->toWords($decimal, $currencyNames[0][0] - 1) .' '. $this->morph($decimal, $currencyNames[0][1], $currencyNames[0][2], $currencyNames[0][3]);
        }

        if (null !== $fraction) {
            if ($this->options->isConvertFraction()) {
                $return .= ' ' . $this->toWords($fraction, $currencyNames[1][0] - 1) . ' ' . $this->morph($fraction, $currencyNames[1][1], $currencyNames[1][2], $currencyNames[1][3]);
            } else {
                $return .= ' ' . $fraction . ' ' . $this->morph($fraction, $currencyNames[1][1], $currencyNames[1][2], $currencyNames[1][3]);
            }
        }

        if (null === $fraction && $this->options->isShowFractionIfZero()) {
            if ($this->options->isConvertFractionIfZero()) {
                $return .= ' ' . $this->zero . ' ' . $this->morph($fraction, $currencyNames[1][1], $currencyNames[1][2], $currencyNames[1][3]);
            } else {
                $return .= ' 00 ' . $this->morph($fraction, $currencyNames[1][1], $currencyNames[1][2], $currencyNames[1][3]);
            }
        }

        return $return;
    }
}
