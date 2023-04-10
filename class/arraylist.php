<?php

/*
    Class ArrayList

    This class is used to store the information correctly.
*/

class ArrayList {
    private $array = array();

    public function add($value) {
        $this->array[] = $value;
    }

    public function get($index) {
        return $this->array[$index];
    }

    public function size() {
        return count($this->array);
    }

    public function remove($index) {
        unset($this->array[$index]);
    }

    public function clear() {
        $this->array = array();
    }

    public function isEmpty() {
        return empty($this->array);
    }

    public function contains($value) {
        return in_array($value, $this->array);
    }

    public function indexOf($value) {
        return array_search($value, $this->array);
    }

    public function toArray() {
        return $this->array;
    }

    public function getArray() {
        return $this->array;
    }

}

?>