<?php
require_once ('classes/Example.php');

//Creates new object
$test = new Example;

//Tests setting and returning a rivate property with public methods
$test->set_model("John Doe");

echo $test->get_model();