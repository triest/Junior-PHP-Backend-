<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.12.2019
     * Time: 10:38
     */

    class Sequence
    {


        public $m;//с

        /**
         * Digitals constructor.
         * @param $n
         */
        public function __construct($m)
        {

            $this->m = $m;
        } //входная последовательность


        public function getMaxNumbers($n)
        {
            // сортируем
            rsort($n);
            var_dump($n);
            $output = array_slice($n, 0, $this->m);
        //    var_dump($this->m);
          //  var_dump($output);
            return $output;
        }


    }