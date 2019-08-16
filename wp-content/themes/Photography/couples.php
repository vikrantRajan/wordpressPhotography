<?php
/*
Template Name: Couples Layout
*/

get_header();

?>

	
	
	<article class="post page">
		<h1 class="aboutmehl"><?php the_title(); ?></h1>
	<?php
		$args = array('post_type' => 'photos-couples');
		$query = new WP_Query( $args );
		if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post(); 
		the_post_thumbnail('100%', 'photo');
	?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	
get_footer();

?>