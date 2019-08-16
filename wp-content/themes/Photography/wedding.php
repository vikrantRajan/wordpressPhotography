<?php
/*
Template Name: Wedding Layout
*/

get_header();

?>

	
	
	<article class="post page">
		<h1 class="aboutmehl"><?php the_title(); ?></h1>
	<?php
  
    
    $args = array('post_type' => 'photos-wedding');
    $query = new WP_Query( $args );
    if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); 
    echo '<div class="photogallery2">';
    echo '<div class="image">';
    
    the_post_thumbnail('full', 'photo');
    echo '</div>';
    echo '</div>';
	?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	
get_footer();

?>