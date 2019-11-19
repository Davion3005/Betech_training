<?php

/*
 * Points (1,6)(2,7),(3,8),(4,9),(5,10)
 * Drawing triagles whose top is these Points
 * Find the max Perimeter Triagle
 */

Class Point {

    public $x = 0;
    public $y = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

}

class ListPoint {

    public $point;

    function __construct() {
        $arrX = [1, 2, 3, 4, 5];
        $arrY = [6, 7, 8, 9, 10];
        for ($ii = 0; $ii < count($arrX); $ii++) {
            $this->point[] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }

    public function distance($i, $j) {
        return sqrt(pow($this->point[$i]->x - $this->point[$j]->x, 2)
                + pow($this->point[$j]->y - $this->point[$j]->y, 2));
    }        
}





$arrX = [1, 2, 3, 4, 5];
$arrY = [6, 7, 8, 9, 10];
