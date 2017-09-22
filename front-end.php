<?php
$transient_key =  'transient_all_casino_table';
$args = array(
	'post_type'       =&gt; 'page',
	'posts_per_page' =&gt; -1,
	'meta_key' =&gt; 'rating',
	'orderby' =&gt; array(
	   'rating' =&gt; 'DESC',
	   'title' =&gt; 'ASC'
	),
	'meta_query' =&gt; array(
		array(
			'key'     =&gt; 'review',
			'value'   =&gt; 1,
			'compare' =&gt; '=',
		),
	),
);
$query = wp_query_transient($transient_key, $args);
if ( $query-&gt;have_posts() ) : 
    while ( $query-&gt;have_posts() ) : $query-&gt;the_post(); 
    endwhile; 
    wp_reset_postdata(); 
else :
endif;
?>
