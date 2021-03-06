<?php 
function gallery_itemYTShortcode($atts,$contentP,$module_id,$id,$database){
	global $galleryArray,$cation_gallery,$border_gallery,$padding_item,$id_uniq,$hover_gallery ;
	$tag_ 				= 'tag_'.$database['language_id'];
	$yt_title_ 			= 'yt_title_'.$database['language_id'];
	$content_ 			= 'content_'.$database['language_id'];
	$galleryArray[] = array(
		'src'     => (isset($atts->src)?$atts->src:''),
		'tag'     => (isset($atts->$tag_) && $atts->$tag_ !='') ? $atts->$tag_:'',
		'content' => $atts->$content_
	);
	
	if(strpos($atts->video_addr, 'youtube.com'))
	{
		$src_pop = $atts->video_addr;
		if($atts->src == "no_image.png" || $atts->src == "") 
		{
			$atts->src = 'so_page_builder/images/youtube.png';
		}
	}
	elseif(strpos($atts->video_addr, 'vimeo.com'))
	{
		$src_pop = $atts->video_addr;
		if($atts->src == "no_image.png" || $atts->src == "") 
		{
			$atts->src = 'so_page_builder/images/vimeo.jpg';
		}
	}
	else
	{
		$src_pop = "";
	}
	if($atts->src != "")
	{
		$simage = $atts->src;
	}
	else
	{
		$simage = 'no_image.png';
	}
	$linksrc = ($src_pop != "" ? $src_pop : $database['url'].yt_image_media($simage));
	$gallery_item='';
		
	$gallery_item .= "<li class='".$id_uniq." masonry-brick ".strtolower(str_replace(","," ",$atts->$tag_)).$id_uniq."'>";
	$gallery_item .= "<div class='item-gallery' style='".$padding_item." ".$border_gallery."'>";
	$gallery_item .= "<a title='" . $atts->$yt_title_ . "' href='".$linksrc."' data-rel='prettyPhoto[bkpGallery]'>";
	$gallery_item .= "<div class='item-gallery-hover".$hover_gallery."'></div>";

	$gallery_item .= "<h3 class='item-gallery-title ".$cation_gallery." '>".$atts->$content_."</h3><div class='image-overlay'></div>";
	$gallery_item .= "<img src='".$database['url'].yt_image_media($simage)."' title='" . $atts->$yt_title_ . "' alt='" . $atts->$yt_title_ . "' />";
	$gallery_item .= "</a>";
	$gallery_item .= "<h4 class='item-gallery-title ".$cation_gallery." '>" .$atts->$content_. "</h4></div>";
	$gallery_item .= "</li>";
	
	return str_replace("<br/>", " ", $gallery_item);
}
?>