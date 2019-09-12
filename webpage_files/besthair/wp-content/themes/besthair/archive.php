<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
include('header.inc.php') ?>
	<ul class="nm_recent">
		<?php nm_set_custom_maxposts(5); ?>
		<?php if ($language == 'pl') { ?><?php nm_custom_display_recent('<li>{{post_date}} - <a href="{{ post_link }}">{{ post_title }}</a></li>', 'pl');?><?php } ?>
		<?php if ($language == 'en') { ?><?php nm_custom_display_recent('<li>{{post_date}} - <a href="{{ post_link }}">{{ post_title }}</a></li>', 'eng');?><?php } ?>
	</ul>
<?php include('footer.inc.php') ?>