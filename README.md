Liber LXXXIV: Create the Pyramids (2.0)
=======================================

## Pyramid Positions

1. Left.
2. Top.
3. Right.
4. Bottom.
5. Central square.

## Settings in: chanokh.php

The function in chanokh.php requieres five colors, and five symbols:

~~~~
/**
 * Pass variables to the pyramid
 * $col01 = color in triangle 1.
 * $sym01 = symbol in triangle 1.
 */
require_once "symbols.php";

function drawPyramid( $col01, $col02, $col03, $col04, $col05, $sym01, $sym02, $sym03, $sym04, $sym05 ){
	... etc. ...
~~~~

Enther them, like:

~~~~
drawPyramid( $red, $white, $orange, $red, $white, $sagitaurus, $spirit, $mercury , $fire, "D" );
~~~~

* Find the variable for the relevant symbols in symbols.php.
* svg-class.php is the main class.

## Save to .svg

~~~~
php chanokh.php > yourPyramid.svg
~~~~

## Versions

### 2.0

* The initial class was too bloated.
* use chanokh.php 
* pyramide.php and svg-class.php removed
