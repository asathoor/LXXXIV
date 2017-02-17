Liber LXXXIV: The Pyramids
==========================

![Sample](https://raw.githubusercontent.com/asathoor/LXXXIV/master/sticks08.svg)

Create Enochian pyramids for [Liber LXXXIV](https://hermetic.com/crowley/libers/lib84).

## The pyramid

1. Left.
2. Top.
3. Right.
4. Bottom.
5. Central square.

## pyramide.php

~~~~
// design your pyramid
$pyramid->set_triangle1("$sagitaurus","$red","$green");
$pyramid->set_triangle2("$spirit","$white","$black"); 
$pyramid->set_triangle3("$mercury","$orange","$blue");
$pyramid->set_triangle4("$fire","$red","$green"); 
$pyramid->set_top("D","$white","$black");
~~~~

* Find the variable for the relevant symbols in symbols.php.
* svg-class.php is the main class.

## Make a file

~~~~
php pyramide.php > yourPyramid.svg
~~~~


