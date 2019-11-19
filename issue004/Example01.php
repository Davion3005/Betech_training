<?php

/*
 * Available list Student and Mark
 * Find the student has Max Mark
 * Arrange the list by Point decrease
 */

//Description of Student
class Student {

    /**
     * name of Student
     * @var char
     */
    public $name = 'A';

    /**
     * Student's Mark
     * @var Number
     */
    public $mark = 0;

    /**
     * Set value for Name and Mark 
     * @param char $name
     * @param int $mark
     */
    function __construct($name, $mark) {
        $this->name = $name;
        $this->mark = $mark;
    }

    /**
     * Print Student's Name and Mark
     * Example: A: 0
     */
    public function print() {
        echo $this->name . ": \t" . $this->mark;
    }

}

// Description of ListStudent
Class ListStudent {

    /**
     * List of Student
     * @var Student
     */
    public $student = [];

    /**
     * Set list of Student
     */
    function __construct() {
        $arrName = ['C', 'A', 'B', 'E', 'F', 'G', 'H', 'I', 'K', 'L'];
        $arrMark = [9, 7, 10, 5, 8, 1, 2, 4, 3, 8];
        for ($i = 0; $i < count($arrName); $i++) {
            $this->student[] = new Student($arrName[$i], $arrMark[$i]);
        }
    }
    /**
     * Arrange list of student defend on the Point
     */
    public function arrangeList() {
        for ($ii = 0; $ii < (count($this->student) - 1); $ii++) {
            for ($jj = $ii + 1; $jj < count($this->student); $jj++) {
                if ($this->student[$ii]->mark < $this->student[$jj]->mark) {
                    $this->swapPosition($jj, $ii);
                }
            } 
        }
    }

    /**
     * Print List student with Mark
     * Example: A: 0
     *          B: 10
     *          C: 9
     */
    public function print() {
        foreach ($this->student as $value) {
            $value->print();
            echo "<br/>";
        }
    }

    //p1 > p2 => doi vi tri 2 thang
    public function swapPosition($p1, $p2) {
        $temp = $this->student[$p1];
        $this->student[$p1] = $this->student[$p2];
        $this->student[$p2] = $temp;
    }

    /**
     * Get Max Mark 
     * @return Array
     */
    public function getMaxMark() {
        $max = $this->student[0]->mark;
        $nameMax = $this->student[0]->name;
        for ($ii = 0; $ii < count($this->student); $ii++) {
            if ($max < $this->student[$ii]->mark) {
                $max = $this->student[$ii]->mark;
                $nameMax = $this->student[$ii]->name;
            }
        }

        return $result = [$max, $nameMax];
    }

    /**
     * Get Max Mark with another Method
     * @return Number
     */
    public function getMaxMark2() {
        $max = 0;
        for ($ii = 0; $ii < count($this->student); $ii++) {
            if ($this->student[$max]->mark < $this->student[$ii]->mark) {
                $max = $ii;
            }
        }
        return $max;
    }

}

$object = new ListStudent;
echo 'Max Mark : ' . $object->getMaxMark()[0] . "<br/>";
echo 'Student has Max Mark: ' . $object->getMaxMark()[1] . "<br/>";
echo "<br/>";
$max = $object->student[$object->getMaxMark2()];
echo 'Student has Max Mark : ' . $max->name . "<br/>";

echo 'The list of student arranged by Mark: <br/>';
$object->arrangeList();
$object->print();
