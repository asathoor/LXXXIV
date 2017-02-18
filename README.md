Liber LXXXIV: Create the Pyramids
=================================

## Pyramid Positions

1. Left.
2. Top.
3. Right.
4. Bottom.
5. Central square.

## Settings in: pyramide.php

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

## Save to .svg

~~~~
php pyramide.php > yourPyramid.svg
~~~~
