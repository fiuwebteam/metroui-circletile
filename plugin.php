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
    "labelColor"=>"",
	"classes"=>"",
	"img"=>"",
	"background"=>$defaultBackgroundColor
);
function tile_fiucircle($group,$x,$y,$width,$url,$labelText,$labelColor,$classes,$img,$background){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $width*$scaleSpacing-$spacing;
	?>
	<a 	<?php echo makeLink($url);?> 
		class="tile group<?php echo $group; ?> <?php echo $classes; ?>" 
		style="
			margin-top:<?php echo $marginTop; ?>px; 
			margin-left:<?php echo $marginLeft; ?>px;
			width:<?php echo $tileWidth; ?>px; 
			height:<?php echo $tileHeight; ?>px;
		   background-color: <?php echo $background; ?>;
		" 
		<?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
		<span class="fiu-circle"
		  style="
			background-image:url('<?php echo $img; ?>');
		   border-color: <?php echo $background; ?>;
		  ">
		  <?php 
		  if($labelText!=""){
?>
        <div class="fiu-tileLabelWrapper"
            style="
                background: <?php echo $labelColor; ?>;
            ">
            <div class="fiu-tileLabel">
                <?php echo $labelText; ?>
            </div>
        </div>
<?php
		  }
		  ?> 
	</span>
	</a>
    
<?php
}//end tile_fiucircle
?>
