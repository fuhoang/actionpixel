<?php
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'actionpixel' ),
) );

register_nav_menus( array(
    'footer_menu' => __( 'Footer Menu', 'actionpixel' ),
) );


if(function_exists( 'add_theme_support' )){
	add_theme_support( 'post-thumbnails', array( 'post' ) );
}

if(function_exists('add_image_size')){
	add_image_size( 'post-thumbnail', 800, 600, true);
	add_image_size( 'feature',  1400, 1000, array( 'left', 'top' ) );
	add_image_size( 'recent-thumbnails',  800, 600, array( 'left', 'top' ) );

}

function add_image_class($class){
	$class .= ' img-responsive';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');

/*  Add responsive container to embeds
/* ------------------------------------ */
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack


if(function_exists(register_sidebar)){
	register_sidebar( array(
		'name' => 'Sidebar Widgets',
		'id' => 'sidebar-widgets',
		'description' => 'Place widgets for the sidebar here.',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',

	));
}

function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


function action_pixel_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'action_pixel_wp_title', 10, 2 );


function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages

    if(is_category()){
      $query->set('posts_per_page', 10);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );


function my_post_limit($limit) {
	global $paged, $myOffset;
	if (empty($paged)) {
			$paged = 1;
	}
	$postperpage = intval(get_option('posts_per_page'));
	$pgstrt = ((intval($paged) -1) * $postperpage) + $myOffset . ', ';
	$limit = 'LIMIT '.$pgstrt.$postperpage;
	return $limit;
} //end function my_post_limit


function paginate() {
global $wp_query, $wp_rewrite;
$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

$pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'show_all' => true,
    'type' => 'list',
    'next_text' => '&raquo;',
    'prev_text' => '&laquo;',
    'show_all' => False,
    'end_size' => 1,
    'mid_size' => 2
    );

if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 'page', get_pagenum_link( 1 ) ) ) . '?page=%#%/', 'paged' );

if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

echo paginate_links( $pagination );
}


function add_author_meta() {

    if (is_single()){
        global $post;
        $author = get_the_author_meta('user_nicename', $post->post_author);
        echo "<meta name=\"author\" content=\"$author\"/>";
    }
}
add_action( 'wp_enqueue_scripts', 'add_author_meta' );


function wpse_71766_seo()
{
    if ( is_single() && $post_id = get_queried_object_id() ) {

        if ( ! $description = get_post_field( 'post_excerpt', $post_id ) )
            $description = get_post_field( 'post_content', $post_id );

        $description = trim( wp_strip_all_tags( $description, true ) );
        $description = substr( $description, 0, 150 );

        $keywords = array();
        if ( $categories = get_the_category( $post_id ) ) {
            foreach ( $categories as $category )
                $keywords[] = $category->name;
        }

        if ( $tags = get_the_tags( $post_id ) ) {
            foreach ( $tags as $tag )
                $keywords[] = $tag->name;
        }

        if ( $description )
            printf( '<meta name="description" content="%s" />' . "\n\t", esc_attr( $description ) );
        if ( $keywords ){
            printf( '<meta name="keywords" content="%s" />' . "\n\t", esc_attr( implode( ', ', $keywords ) ) );
        }
    }else{
        printf( '<meta name="keywords" content="the action pixel, action pixel, action, pixel, comics, animation, gaming, 3D, pixels, media, news, publishing, entertainment, entertainment on T.A.P"/>' );
        printf( '<meta name="description" content="The Action Pixel. A curation of original, innovative and informative content, giving insight into the animation, graphic novel and gaming cultures. We are Entertainment On T.A.P. #TheActionPixel #EntertainmentOnTAP"/>
' );


    }
}
add_action( 'wp_enqueue_scripts', 'wpse_71766_seo' );


function facebook_meta_tags() {
  if (is_single()) {
    ?>
        <meta property="og:title" content="<?php the_title(); ?>"/>
        <meta property="og:description" content="<?php

        while(have_posts()) : the_post();
            $excerpt = strip_tags(get_the_excerpt('...'));
            echo $excerpt;
        endwhile; wp_reset_query(); ?>" />

        <meta property="og:url" content="<?php the_permalink(); ?>"/>

        <?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
        <?php if ($fb_image) : ?>
            <meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
        <?php endif; ?>
        <meta property="og:type" content="<?php
            if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
        />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

<?php
  }
}
add_action('wp_enqueue_scripts', 'facebook_meta_tags');


function twitter_meta_tags() {
    if(is_single()){
        ?>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@TheActionPixel" />
        <meta name="twitter:title" content="<?php the_title(); ?>" />
        <meta name="twitter:description" content="<?php
        while(have_posts()) : the_post();
            $excerpt = strip_tags(get_the_excerpt('...'));
            echo $excerpt;
        endwhile; wp_reset_query(); ?>" />
        <?php $tw_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
        <?php if ($tw_image) : ?>
        <meta name="twitter:image" content="<?php echo $tw_image[0]; ?>" />
        <?php endif; ?>
<?php
    }
}
add_action('wp_enqueue_scripts', 'twitter_meta_tags');

