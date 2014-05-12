<?php
/* basic plugin template, see http://metro-webdesign.info/#!/tutorial for more info */

/* Define your defaults here */

/*Now, get the settings of the user */
include_once("settings.php");

/*Do the things of our plugin */

$tileTypes['fiu-circle'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>2,
	'height'=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"labelText"=>"",
	"labelColor"=>$defaultLabelColor,
	"labelPosition"=>$defaultLabelPosition,
	"classes"=>"",
);
function tile_fiu-circle($group,$x,$y,$width,$height,$background,$url,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	?>
  	<a <?php echo makeLink($url);?> class="tile group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;
	background:<?php echo $background;?>;" <?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
    
    
    
    <?php 
	if($labelText!=""){
		echo "<div class='tileLabelWrapper bottom'><div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div></div>";
	}
	?> 
    </a>
    <?php
}
?>
