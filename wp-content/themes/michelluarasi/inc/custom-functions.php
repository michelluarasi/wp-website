<?php
	function get_prev_next_posts($cat){
		$next_page = get_permalink(get_adjacent_post(true,'',true));
		$prev_page = get_permalink(get_adjacent_post(true,'',false));
		if($next_page == get_permalink()){
			$postsincat = get_posts(array("cat" => $cat, "showposts" => 1));
		  	$idoflatestpostincategory = $postsincat[0]->ID;
			$next_page = get_permalink($idoflatestpostincategory);
		}else if($prev_page == get_permalink()){
			$postsincat = get_posts(array("cat" => $cat, "showposts" => 1,  'order' => 'ASC'));
		  	$idoflatestpostincategory = $postsincat[0]->ID;
			$prev_page = get_permalink($idoflatestpostincategory);
		}
		return array($prev_page, $next_page);
	}
?>