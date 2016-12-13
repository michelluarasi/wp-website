<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */
		while ( have_posts() ) : the_post();
				$categoryIds = get_the_category();
				$slug = $categoryIds[0]->slug;
				if ($slug == 'design') {
						include ("single-design.php");
				}
				if ($slug == 'photography') {
						include ("single-photography.php");
				}
				elseif ($slug == 'journal') {
						include ("single-journal.php");
				}
				elseif ($slug == 'inprogress') {
						include ("single-inprogress.php");
				}
		endwhile;
?>