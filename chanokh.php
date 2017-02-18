<?php
/**
 * Liber LXXXIV
 * Pyramid creator
 * (c) GPLv2 and later by Per Thykjaer Jensen 2017
 * Version 2.0
 *
 * The original class was a bloated. This is occamstyle.
*/
/**
 * Pass variables to the pyramid
 * $col01 = color in triangle 1.
 * $sym01 = symbol in triangle 1.
 */
require_once "symbols.php";

function drawPyramid( $col01, $col02, $col03, $col04, $col05, $sym01, $sym02, $sym03, $sym04, $sym05, $fill01, $fill02, $fill03, $fill04, $fill05 ){

	echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';
	?>
<svg
	 xmlns:dc="http://purl.org/dc/elements/1.1/"
	 xmlns:cc="http://creativecommons.org/ns#"
	 xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	 xmlns:svg="http://www.w3.org/2000/svg"
	 xmlns="http://www.w3.org/2000/svg"
	 xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
	 xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
	 width="400px"
	 height="400px"
	 version="1.1"
	 id="svg2"
	 inkscape:version="0.91 r13725"
	 sodipodi:docname="wands_08.svg">
	<metadata
		 id="metadata34">
		<rdf:RDF>
		  <cc:Work
		     rdf:about="">
		    <dc:format>image/svg+xml</dc:format>
		    <dc:type
		       rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
		  </cc:Work>
		</rdf:RDF>
	</metadata>
	<defs
		 id="defs32" />
	<sodipodi:namedview
		 pagecolor="#ffffff"
		 bordercolor="#666666"
		 borderopacity="1"
		 objecttolerance="10"
		 gridtolerance="10"
		 guidetolerance="10"
		 inkscape:pageopacity="0"
		 inkscape:pageshadow="2"
		 inkscape:window-width="1615"
		 inkscape:window-height="1026"
		 id="namedview30"
		 showgrid="false"
		 inkscape:zoom="1.668772"
		 inkscape:cx="290.13238"
		 inkscape:cy="202.43956"
		 inkscape:window-x="65"
		 inkscape:window-y="24"
		 inkscape:window-maximized="1"
		 inkscape:current-layer="svg2" />
	<title
		 id="title4">Enochian Pyramid</title>
	<desc
		 id="desc6">Style: Hermetic Order of the Golden Dawn</desc>
	<!-- Drawing the background triangles and the top square -->
	<g
		 id="triangles"
		 fill="none">
		<path
		   d="M 0 0 L 0 400 L 200 200 z"
		   fill="<?php echo $col01; ?>"
		   stroke="#000"
		   stroke-width="1"
		   id="triangle01" />
		<path
		   d="M 0 0 L 400 0 L 200 200 z"
		   fill="<?php echo $col02; ?>"
		   stroke="#000"
		   stroke-width="1"
		   id="triangle02" />
		<path
		   d="M 400 400 L 400 0 L 200 200 z"
		   fill="<?php echo $col03; ?>"
		   stroke="#000"
		   stroke-width="1"
		   id="triangle03" />
		<path
		   d="M 0 400 L 400 400 L 200 200 z"
		   fill="<?php echo $col04; ?>"
		   stroke="#000"
		   stroke-width="1"
		   id="triangle04" />
		<rect
		   x="125"
		   y="125"
		   width="150"
		   height="150"
		   fill="<?php echo $col05; ?>"
		   stroke="#000"
		   stroke-width="1"
		   id="topSquare" />
	</g>

	<!-- Letters and Symbols -->
	<g
		 id="text"
		 transform="translate(-10,0)"
		 style="fill:none">
		<text
		   x="75"
		   y="250"
		   font-size="110"
		   id="triangleSymbol01"
		   style="font-size:110px;font-family:Verdana;text-anchor:middle;fill:<?php echo $fill01; ?>"><?php echo $sym01; ?></text>
		<text
		   x="210"
		   y="95"
		   font-size="110"
		   id="triangleSymbol02"
		   style="font-size:110px;font-family:Verdana;text-anchor:middle;fill:<?php echo $fill02; ?>"><?php echo $sym02; ?></text>
		<text
		   x="345"
		   y="250"
		   font-size="110"
		   id="triangleSymbol03"
		   style="font-size:110px;font-family:Verdana;text-anchor:middle;fill:<?php echo $fill03; ?>"><?php echo $sym03; ?></text>
		<text
		   x="210"
		   y="370"
		   font-size="110"
		   id="triangleSymbol04"
		   style="font-size:110px;font-family:Verdana;text-anchor:middle;fill:<?php echo $fill04; ?>"><?php echo $sym04; ?></text>
		<text
		   x="210"
		   y="240"
		   font-size="110"
		   id="triangleSymbol05"
		   style="font-size:110px;font-family:Verdana;text-anchor:middle;fill:<?php echo $fill05; ?>"><?php echo $sym05; ?></text>
	</g>
</svg><?php
}; // ends function

/**
 * Proof of concept ( 8 of wands, firery tablet )
 */
drawPyramid("#a0d9ff","#fff","orange","red","white", 
	$sagitaurus, $spirit, $mercury , $fire, "D",
	$orange, $black, $blue, $green, $black );
?>
