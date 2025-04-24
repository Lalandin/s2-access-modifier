<?php

/**
 * Class Example
 * 
 * Examples for private properties
 * 
 * @property string $model
 */
class Example {
    /**
     * Example for private property
     *
     * @var string $model
     */
    private $model;
    
    /**
     * Sets name of model
     *
     * @param string $new_model
     * @return void
     */
    public function set_model($new_model) {
        $this->model = $new_model;
    }

    /**
     * Returns name of model
     *
     * @return string
     */
    public function get_model() {
        return $this->model;
    }
}