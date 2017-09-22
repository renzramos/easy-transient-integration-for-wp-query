<?php
// wp query transient
function wp_query_transient($transient_key, $args){
    $query = get_transient( $transient_key );
    if ( false === ( $query ) ) {
		$query = new WP_Query( $args ); 
        set_transient( $transient_key, $query , 12 * HOUR_IN_SECONDS );
    }
    return $query;
}
?>
