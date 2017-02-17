<?php
/**
 * Create a pyramid
 */
require_once "svg-class.php";
require_once "symbols.php";

$globals['save'] = true;
$save = true; // save to svg files or not

$pyramid = new svgCreate();

// design your pyramid
$pyramid->set_triangle1("$sagitaurus","$red","$green");
$pyramid->set_triangle2("$spirit","$white","$black"); 
$pyramid->set_triangle3("$mercury","$orange","$blue");
$pyramid->set_triangle4("$fire","$red","$green"); 
$pyramid->set_top("D","$white","$black");

// and draw it
$pyramid->draw();

