<?php
	global $parent_page, $next_page, $prev_page;
?>
<div class="detail-nav">
	<h2 class="h2">Navigate</h2>
	<ul class="detail-nav__link-list">
		<li class="detail-nav__link-list__item"><a  class="detail-nav__link-list__item__link ml-icon-nav-back" href="<?php echo $prev_page;?>"></a></li>
		<li class="detail-nav__link-list__item"><a  class="detail-nav__link-list__item__link ml-icon-nav-overview detail-nav__link-list__item__link--overview" href="<?php echo $parent_page;?>"></a></li>
		<li class="detail-nav__link-list__item"><a  class="detail-nav__link-list__item__link ml-icon-nav-next" href="<?php echo $next_page;?>"></a></li>
	</ul>
</div>