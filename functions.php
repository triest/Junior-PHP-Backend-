<?php
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