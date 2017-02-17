<?php
/* A class for Enochian pyramid creation

The enochian keys were channeled to John Dee and Edward Kelley
in the renaissance England.

During the 1880s SRMD and other RC adepti elaborated on
the system.

The class svgCreate can create a .svg image. You can
save the image to your server, and download the images.

*/

class svgCreate {

// Pyramid attributes
public $stroke = "#000";
public $title = "Enochian Pyramid";
public $font_size = 110;

/* 
The pyramid:

1. Left triangle.
2. Top triangle.
3. Right triangle.
4. Bottom triangle.
5. Top square.

The attributes of each position are: text, color and text_color.
*/

public $triangle1 = array(
	"text" => "🜁",
	"color" => "#ffccff",
	"text_color" => "#000"
);

public $triangle2 = array(
	"text" => "🜁",
	"color" => "#ccccff",
	"text_color" => "#000"
);

public $triangle3 = array(
	"text" => "🜁",
	"color" => "#ccccff",
	"text_color" => "#000"
);

public $triangle4 = array(
	"text" => "🜁",
	"color" => "#ccccff",
	"text_color" => "#000"
);

public $top = array(
	"text" => "X",
	"color" => "#ffccff",
	"text_color" => "#000"
);

// METHODS

/* Use the set functions to define colors and texts or unicode symbols */

public function set_triangle1($text,$color,$text_color){
	$this->triangle1 = array(
		"text" => $text,
		"color" => $color,
		"text_color" => $text_color
	);
}

public function set_triangle2($text,$color,$text_color){
	$this->triangle2 = array(
		"text" => $text,
		"color" => $color,
		"text_color" => $text_color
	);
}

public function set_triangle3($text,$color,$text_color){
	$this->triangle3 = array(
		"text" => $text,
		"color" => $color,
		"text_color" => $text_color
	);
}

public function set_triangle4($text,$color,$text_color){
	$this->triangle4 = array(
		"text" => $text,
		"color" => $color,
		"text_color" => $text_color
	);
}

public function set_top($text,$color,$text_color){
	$this->top = array(
		"text" => $text,
		"color" => $color,
		"text_color" => $text_color
	);
}

/* Print and echo the pyramid */
public function draw() {

    print '<?xml version="1.0" standalone="yes"?>
    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
    "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg width="400px" height="400px"
        xmlns="http://www.w3.org/2000/svg" version="1.1">
	<title>'.$this->title.'</title>
    <desc>After the manner of frater SRMD</desc>

    <!-- Drawing the triangles and the top square -->'; // head of svg ends

	echo "\n<g id='triangles' fill='none'>\n";	

	print '<path d="M 0 0 L 0 400 L 200 200 z"
        fill="'. $this->triangle1['color'] .'" stroke="'. $this->stroke . '" stroke-width="1" />'; // triangle 1

	print '<path d="M 0 0 L 400 0 L 200 200 z"
        fill="'. $this->triangle2['color'] .'" stroke="'. $this->stroke . '" stroke-width="1" />'; // triangle 2

	print '<path d="M 400 400 L 400 0 L 200 200 z"
        fill="'. $this->triangle3['color'] .'" stroke="'. $this->stroke . '" stroke-width="1" />'; // triangle 3

	print '<path d="M 0 400 L 400 400 L 200 200 z"
        fill="'. $this->triangle4['color'] .'" stroke="'.$this->stroke.'" stroke-width="1" />'; // triangle 4

	print '  <rect x="125" y="125" width="150" height="150"
        fill="'.$this->top['color'].'" stroke="'.$this->stroke.'" stroke-width="1"  />'; // top square

	echo "\n</g>";

	echo "\n<!-- Text -->";

	echo "\n<g id='text' fill='none'>\n";

	print '	<text x="75" y="250" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle1["text_color"].'" text-anchor="middle">
    		' . $this->triangle1["text"] . '
  			</text>'; // triangle 1

	print '	<text x="210" y="95" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle2["text_color"].'" text-anchor="middle">
    		' . $this->triangle2["text"] . '
  			</text>'; // triangle 2

	print '	<text x="345" y="250" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle3["text_color"].'" text-anchor="middle">
    		' . $this->triangle3["text"] . '
  			</text>'; // triangle 3

	print '	<text x="210" y="370" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle4["text_color"].'" text-anchor="middle">
    		' . $this->triangle4["text"] . '
  			</text>'; // triangle 4

	print '	<text x="210" y="240" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->top["text_color"].'" text-anchor="middle">
    		' . $this->top["text"] . '
  			</text>'; // top square

	echo "\n</g>";

	print "\n<!-- Here cometh Spirits -->";

    print "\n</svg>"; // ends the svg

} // ends drawing

/* Pyramid to string */

public function pyramid_string(){
    $this->svg = '<?xml version="1.0" standalone="yes"?>
    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
    "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg width="400px" height="400px"
        xmlns="http://www.w3.org/2000/svg" version="1.1">
	<title>'.$this->title.'</title>
    <desc>After the manner of frater SRMD</desc>

    <!-- Drawing the triangles and the top square -->'; // head of svg ends

	$this->svg = $this->svg . "\n<g id='triangles' fill='none'>\n";	

	$this->svg = $this->svg .  '<path d="M 0 0 L 0 400 L 200 200 z"
        fill="'. $this->triangle1['color'] .'" stroke="'. $this->stroke . '" stroke-width="1" />'; // triangle 1

	$this->svg = $this->svg .  '<path d="M 0 0 L 400 0 L 200 200 z"
        fill="'. $this->triangle2['color'] .'" stroke="'. $this->stroke . '" stroke-width="1" />'; // triangle 2

	$this->svg = $this->svg .  '<path d="M 400 400 L 400 0 L 200 200 z"
        fill="'. $this->triangle3['color'] .'" stroke="'. $this->stroke . '" stroke-width="1" />'; // triangle 3

	$this->svg = $this->svg .  '<path d="M 0 400 L 400 400 L 200 200 z"
        fill="'. $this->triangle4['color'] .'" stroke="'.$this->stroke.'" stroke-width="1" />'; // triangle 4

	$this->svg = $this->svg .  '  <rect x="125" y="125" width="150" height="150"
        fill="'.$this->top['color'].'" stroke="'.$this->stroke.'" stroke-width="1"  />'; // top square

	$this->svg = $this->svg .  "\n</g>";

	$this->svg = $this->svg .  "\n<!-- Text -->";

	$this->svg = $this->svg . "\n<g id='text' fill='none'>\n";

	$this->svg = $this->svg .  '	<text x="65" y="200" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle1["text_color"].'" text-anchor="middle">
    		' . $this->triangle1["text"] . '
  			</text>'; // triangle 1

	$this->svg = $this->svg .  '	<text x="200" y="50" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle2["text_color"].'" text-anchor="middle">
    		' . $this->triangle2["text"] . '
  			</text>'; // triangle 2

	$this->svg = $this->svg .  '	<text x="335" y="200" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle3["text_color"].'" text-anchor="middle">
    		' . $this->triangle3["text"] . '
  			</text>'; // triangle 3

	$this->svg = $this->svg .  '	<text x="200" y="350" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->triangle4["text_color"].'" text-anchor="middle">
    		' . $this->triangle4["text"] . '
  			</text>'; // triangle 4

	$this->svg = $this->svg .  '	<text x="200" y="200" font-family="Verdana" font-size="'.$this->font_size.'" fill="'.$this->top["text_color"].'" text-anchor="middle">
    		' . $this->top["text"] . '
  			</text>'; // top square

	$this->svg = $this->svg .  "\n</g>";

	$this->svg = $this->svg .  "\n<!-- Here cometh Spirits -->";

    $this->svg = $this->svg .  "\n</svg>"; // ends the svg

}

/* Save to a file */
public function save($filename){
	$this->pyramid_string();
	file_put_contents($filename,$this->svg, LOCK_EX); // nb. fclose not needed with this function
}

} // ends class

/* SAMPLES */
//$pyramid = new svgCreate();
//$pyramid->draw();
//$pyramid->save("x.svg");
?>
