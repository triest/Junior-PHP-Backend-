<?php

    require_once "classes/Sequence.php";
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.12.2019
     * Time: 10:37
     */
    $digits = function (int $length) {
        while ($length > 0) {
            yield mt_rand();
            --$length;
        }
    };

    $digits2 = function (int $length) {
        $array = array();
        while ($length > 0) {
            array_push($array, rand(0, 1000));
            $length = $length - 1;
        }
        return $array;
    };


    $min = 1;
    $max = 1000000000;
    $rand = rand($min, $max);
    $array = ($digits2(10));


    $sequence = new Sequence( 3);

    var_dump($sequence->getMaxNumbers($array));
