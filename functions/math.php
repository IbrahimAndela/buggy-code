<?php
/**
 * A collection of math formular to solve problems
 */

 class Maths extends math_php {

     public function __add($number, $addToValue) {
        return $this->num;
     }

     public function __sub($number, $subFromValue) {
        print_r($number - $subFromValue);
    }

    public function _mul($number, $MultiplyByValue = null) {
        return $number * $MultiplyByValue;
    }

    public function _divideHalf_ ($value = 2) {
        return $value/4;
    }

 }