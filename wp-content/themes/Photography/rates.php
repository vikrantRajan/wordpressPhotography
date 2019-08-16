<?php
/*
Template Name: Rates Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h1 class="aboutmehl"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	
get_footer();

?>