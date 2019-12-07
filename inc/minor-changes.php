<?php
/*

*/

/***************** Title Name Alteration ******************/
        add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_front_page() ) ) {
    $title = get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}
