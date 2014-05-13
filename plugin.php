<?php
/* basic plugin template, see http://metro-webdesign.info/#!/tutorial for more info */

/* Define your defaults here */


/*Do the things of our plugin */

$tileTypes['fiucircle'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>1,
	"url"=>"",
	"labelText"=>"",
	"classes"=>"",
    "img"=>"",
    "imgAlt"=>"",
    "imgTitle"=>"",
);
function tile_fiucircle($group,$x,$y,$width,$url,$labelText,$classes,$img,$imgAlt,$imgTitle){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $width*$scaleSpacing-$spacing;
	?>
  	<a <?php echo makeLink($url);?> class="tile fiu-circle group<?php echo $group; ?> <?php echo $classes; ?>" style="
    margin-top:<?php echo $marginTop; ?>px; margin-left:<?php echo $marginLeft; ?>px;
	width:<?php echo $tileWidth; ?>px; height:<?php echo $tileHeight; ?>px;
	background-image:url('<?php echo $img; ?>');" <?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
    
    
    <?php 
	/*
	if($labelText!=""){
		echo "<div class='tileLabelWrapper'><div class='tileLabel'>".$labelText."</div></div>";
	}
	 */
	?> 
    </a>
    <?php
}
?>
