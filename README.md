# Boatrace Analytics Cherry Blossom Converter

[![Build Status](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter/workflows/tests/badge.svg)](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter/badge.svg?branch=master)](https://coveralls.io/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter?branch=master)
[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter/v/stable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter/v/unstable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter)
[![License](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter/license)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter)

## Installation
```
$ composer require boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-converter
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Cherry\Blossom\Converter;

var_dump(Converter::convertToClassId('A1')); // int(1)
var_dump(Converter::convertToClassId('A2')); // int(2)
var_dump(Converter::convertToClassId('B1')); // int(3)
var_dump(Converter::convertToClassId('B2')); // int(4)

var_dump(Converter::convertToClassName(1)); // string(2) "A1"
var_dump(Converter::convertToClassName(2)); // string(2) "A2"
var_dump(Converter::convertToClassName(3)); // string(2) "B1"
var_dump(Converter::convertToClassName(4)); // string(2) "B2"

var_dump(Converter::convertToPlaceId('1')); // int(1)
var_dump(Converter::convertToPlaceId('2')); // int(2)
var_dump(Converter::convertToPlaceId('3')); // int(3)
var_dump(Converter::convertToPlaceId('4')); // int(4)
var_dump(Converter::convertToPlaceId('5')); // int(5)
var_dump(Converter::convertToPlaceId('6')); // int(6)
var_dump(Converter::convertToPlaceId('???')); // int(7)
var_dump(Converter::convertToPlaceId('???')); // int(8)
var_dump(Converter::convertToPlaceId('???')); // int(9)
var_dump(Converter::convertToPlaceId('???')); // int(10)
var_dump(Converter::convertToPlaceId('???')); // int(11)
var_dump(Converter::convertToPlaceId('???')); // int(12)
var_dump(Converter::convertToPlaceId('???')); // int(13)
var_dump(Converter::convertToPlaceId('F')); // int(14)
var_dump(Converter::convertToPlaceId('L')); // int(15)
var_dump(Converter::convertToPlaceId('???')); // int(16)

var_dump(Converter::convertToPlaceName(1)); // string(1) "1"
var_dump(Converter::convertToPlaceName(2)); // string(1) "2"
var_dump(Converter::convertToPlaceName(3)); // string(1) "3"
var_dump(Converter::convertToPlaceName(4)); // string(1) "4"
var_dump(Converter::convertToPlaceName(5)); // string(1) "5"
var_dump(Converter::convertToPlaceName(6)); // string(1) "6"
var_dump(Converter::convertToPlaceName(7)); // string(3) "???"
var_dump(Converter::convertToPlaceName(8)); // string(3) "???"
var_dump(Converter::convertToPlaceName(9)); // string(3) "???"
var_dump(Converter::convertToPlaceName(10)); // string(3) "???"
var_dump(Converter::convertToPlaceName(11)); // string(3) "???"
var_dump(Converter::convertToPlaceName(12)); // string(3) "???"
var_dump(Converter::convertToPlaceName(13)); // string(3) "???"
var_dump(Converter::convertToPlaceName(14)); // string(1) "F"
var_dump(Converter::convertToPlaceName(15)); // string(1) "L"
var_dump(Converter::convertToPlaceName(16)); // string(3) "???"

var_dump(Converter::convertToPrefectureId('?????????')); // int(1)
var_dump(Converter::convertToPrefectureId('??????')); // int(2)
var_dump(Converter::convertToPrefectureId('??????')); // int(3)
var_dump(Converter::convertToPrefectureId('??????')); // int(4)
var_dump(Converter::convertToPrefectureId('??????')); // int(5)
var_dump(Converter::convertToPrefectureId('??????')); // int(6)
var_dump(Converter::convertToPrefectureId('??????')); // int(7)
var_dump(Converter::convertToPrefectureId('??????')); // int(8)
var_dump(Converter::convertToPrefectureId('??????')); // int(9)
var_dump(Converter::convertToPrefectureId('??????')); // int(10)
var_dump(Converter::convertToPrefectureId('??????')); // int(11)
var_dump(Converter::convertToPrefectureId('??????')); // int(12)
var_dump(Converter::convertToPrefectureId('??????')); // int(13)
var_dump(Converter::convertToPrefectureId('?????????')); // int(14)
var_dump(Converter::convertToPrefectureId('??????')); // int(15)
var_dump(Converter::convertToPrefectureId('??????')); // int(16)
var_dump(Converter::convertToPrefectureId('??????')); // int(17)
var_dump(Converter::convertToPrefectureId('??????')); // int(18)
var_dump(Converter::convertToPrefectureId('??????')); // int(19)
var_dump(Converter::convertToPrefectureId('??????')); // int(20)
var_dump(Converter::convertToPrefectureId('??????')); // int(21)
var_dump(Converter::convertToPrefectureId('??????')); // int(22)
var_dump(Converter::convertToPrefectureId('??????')); // int(23)
var_dump(Converter::convertToPrefectureId('??????')); // int(24)
var_dump(Converter::convertToPrefectureId('??????')); // int(25)
var_dump(Converter::convertToPrefectureId('??????')); // int(26)
var_dump(Converter::convertToPrefectureId('??????')); // int(27)
var_dump(Converter::convertToPrefectureId('??????')); // int(28)
var_dump(Converter::convertToPrefectureId('??????')); // int(29)
var_dump(Converter::convertToPrefectureId('?????????')); // int(30)
var_dump(Converter::convertToPrefectureId('??????')); // int(31)
var_dump(Converter::convertToPrefectureId('??????')); // int(32)
var_dump(Converter::convertToPrefectureId('??????')); // int(33)
var_dump(Converter::convertToPrefectureId('??????')); // int(34)
var_dump(Converter::convertToPrefectureId('??????')); // int(35)
var_dump(Converter::convertToPrefectureId('??????')); // int(36)
var_dump(Converter::convertToPrefectureId('??????')); // int(37)
var_dump(Converter::convertToPrefectureId('??????')); // int(38)
var_dump(Converter::convertToPrefectureId('??????')); // int(39)
var_dump(Converter::convertToPrefectureId('??????')); // int(40)
var_dump(Converter::convertToPrefectureId('??????')); // int(41)
var_dump(Converter::convertToPrefectureId('??????')); // int(42)
var_dump(Converter::convertToPrefectureId('??????')); // int(43)
var_dump(Converter::convertToPrefectureId('??????')); // int(44)
var_dump(Converter::convertToPrefectureId('??????')); // int(45)
var_dump(Converter::convertToPrefectureId('?????????')); // int(46)
var_dump(Converter::convertToPrefectureId('??????')); // int(47)

var_dump(Converter::convertToPrefectureName(1)); // string(9) "?????????"
var_dump(Converter::convertToPrefectureName(2)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(3)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(4)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(5)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(6)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(7)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(8)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(9)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(10)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(11)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(12)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(13)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(14)); // string(9) "?????????"
var_dump(Converter::convertToPrefectureName(15)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(16)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(17)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(18)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(19)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(20)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(21)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(22)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(23)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(24)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(25)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(26)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(27)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(28)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(29)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(30)); // string(9) "?????????"
var_dump(Converter::convertToPrefectureName(31)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(32)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(33)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(34)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(35)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(36)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(37)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(38)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(39)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(40)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(41)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(42)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(43)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(44)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(45)); // string(6) "??????"
var_dump(Converter::convertToPrefectureName(46)); // string(9) "?????????"
var_dump(Converter::convertToPrefectureName(47)); // string(6) "??????"

var_dump(Converter::convertToStadiumId('??????')); // int(1)
var_dump(Converter::convertToStadiumId('??????')); // int(2)
var_dump(Converter::convertToStadiumId('?????????')); // int(3)
var_dump(Converter::convertToStadiumId('?????????')); // int(4)
var_dump(Converter::convertToStadiumId('?????????')); // int(5)
var_dump(Converter::convertToStadiumId('?????????')); // int(6)
var_dump(Converter::convertToStadiumId('??????')); // int(7)
var_dump(Converter::convertToStadiumId('??????')); // int(8)
var_dump(Converter::convertToStadiumId('???')); // int(9)
var_dump(Converter::convertToStadiumId('??????')); // int(10)
var_dump(Converter::convertToStadiumId('?????????')); // int(11)
var_dump(Converter::convertToStadiumId('?????????')); // int(12)
var_dump(Converter::convertToStadiumId('??????')); // int(13)
var_dump(Converter::convertToStadiumId('??????')); // int(14)
var_dump(Converter::convertToStadiumId('??????')); // int(15)
var_dump(Converter::convertToStadiumId('??????')); // int(16)
var_dump(Converter::convertToStadiumId('??????')); // int(17)
var_dump(Converter::convertToStadiumId('??????')); // int(18)
var_dump(Converter::convertToStadiumId('??????')); // int(19)
var_dump(Converter::convertToStadiumId('??????')); // int(20)
var_dump(Converter::convertToStadiumId('??????')); // int(21)
var_dump(Converter::convertToStadiumId('??????')); // int(22)
var_dump(Converter::convertToStadiumId('??????')); // int(23)
var_dump(Converter::convertToStadiumId('??????')); // int(24)

var_dump(Converter::convertToStadiumName(1)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(2)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(3)); // string(9) "?????????"
var_dump(Converter::convertToStadiumName(4)); // string(9) "?????????"
var_dump(Converter::convertToStadiumName(5)); // string(9) "?????????"
var_dump(Converter::convertToStadiumName(6)); // string(9) "?????????"
var_dump(Converter::convertToStadiumName(7)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(8)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(9)); // string(3) "???"
var_dump(Converter::convertToStadiumName(10)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(11)); // string(9) "?????????"
var_dump(Converter::convertToStadiumName(12)); // string(9) "?????????"
var_dump(Converter::convertToStadiumName(13)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(14)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(15)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(16)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(17)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(18)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(19)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(20)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(21)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(22)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(23)); // string(6) "??????"
var_dump(Converter::convertToStadiumName(24)); // string(6) "??????"

var_dump(Converter::convertToTechniqueId('??????')); // int(1)
var_dump(Converter::convertToTechniqueId('??????')); // int(2)
var_dump(Converter::convertToTechniqueId('?????????')); // int(3)
var_dump(Converter::convertToTechniqueId('???????????????')); // int(4)
var_dump(Converter::convertToTechniqueId('??????')); // int(5)
var_dump(Converter::convertToTechniqueId('?????????')); // int(6)

var_dump(Converter::convertToTechniqueName(1)); // string(6) "??????"
var_dump(Converter::convertToTechniqueName(2)); // string(6) "??????"
var_dump(Converter::convertToTechniqueName(3)); // string(9) "?????????"
var_dump(Converter::convertToTechniqueName(4)); // string(15) "???????????????"
var_dump(Converter::convertToTechniqueName(5)); // string(6) "??????"
var_dump(Converter::convertToTechniqueName(6)); // string(9) "?????????"

var_dump(Converter::convertToWeatherId('???')); // int(1)
var_dump(Converter::convertToWeatherId('??????')); // int(2)
var_dump(Converter::convertToWeatherId('???')); // int(3)
var_dump(Converter::convertToWeatherId('???')); // int(4)
var_dump(Converter::convertToWeatherId('???')); // int(5)

var_dump(Converter::convertToWeatherName(1)); // string(3) "???"
var_dump(Converter::convertToWeatherName(2)); // string(6) "??????"
var_dump(Converter::convertToWeatherName(3)); // string(3) "???"
var_dump(Converter::convertToWeatherName(4)); // string(3) "???"
var_dump(Converter::convertToWeatherName(5)); // string(3) "???"
```

## License
The Boatrace Analytics Cherry Blossom Converter is open source software licensed under the [MIT license](LICENSE).
