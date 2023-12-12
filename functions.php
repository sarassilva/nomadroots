<?php
// register menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 // Allow featured image
if ( function_exists( 'add_theme_support' ) ) {

    add_theme_support( 'post-thumbnails' ); // This should be in your theme. But we add this here because this way we can have featured images before swicth to a theme that supports them.

    function easy_add_thumbnail($post) {

        $already_has_thumb = has_post_thumbnail();
        $post_type = get_post_type( $post->ID );
        $exclude_types = array('');
        $exclude_types = apply_filters( 'eat_exclude_types', $exclude_types );

        // do nothing if the post has already a featured image set
        if ( $already_has_thumb ) {
            return;
        }

        // do the job if the post is not from an excluded type
        if ( ! in_array( $post_type, $exclude_types ) ) {
            // get first attached image
            $attached_image = get_children( "order=ASC&post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );

            if ( $attached_image ) {
                $attachment_values = array_values( $attached_image );
                // add attachment ID
                add_post_meta( $post->ID, '_thumbnail_id', $attachment_values[0]->ID, true );
            }
        }
    }

    // set featured image before post is displayed (for old posts)
    add_action('the_post', 'easy_add_thumbnail');

    // hooks added to set the thumbnail when publishing too
    add_action('new_to_publish', 'easy_add_thumbnail');
    add_action('draft_to_publish', 'easy_add_thumbnail');
    add_action('pending_to_publish', 'easy_add_thumbnail');
    add_action('future_to_publish', 'easy_add_thumbnail');
}

// widgets
register_sidebar( array(
    'name' => 'Footer',
    'id' => 'wdg1',
    'description' => 'Widgets do rodapé',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="wdgt_titulo">',
    'after_title' => '</div>',
) );

register_sidebar( array(
    'name' => 'Parceiros',
    'id' => 'wdg2',
    'description' => 'Widgets do rodapé',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="wdgt_titulo">',
    'after_title' => '</div>',
) );

//hooks
add_action( 'woocommerce_before_add_to_cart_quantity', 'woosuite_echo_qty_front_add_cart' );
function woosuite_echo_qty_front_add_cart() {
    echo '<div class="label">Número de viajantes</div>';   
}

function move_variation_price() {
    remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
    add_action( 'woocommerce_after_add_to_cart_quantity', 'woocommerce_single_variation', 10 );
}
add_action( 'woocommerce_before_add_to_cart_form', 'move_variation_price' );

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Reserve', 'woocommerce' ); 
}



function woocommerce_quantity_input($args = array(), $product = null, $echo = true) {
    global $product;
  $product_quantity = array(
      'input_name'  	=> 'quantity',
      'input_value'  	=> $args['input_value'],
      'max_value'  	=> apply_filters( 'woocommerce_quantity_input_max', '', $product ),
      'min_value'  	=> apply_filters( 'woocommerce_quantity_input_min', '', $product ),
      'step' 		=> apply_filters( 'woocommerce_quantity_input_step', '1', $product ),
      'style'		=> apply_filters( 'woocommerce_quantity_style', 'float:left; margin-right:10px;', $product )
  );
  if ( ! empty( $product_quantity['min_value'] ) )
      $min = $product_quantity['min_value'];
  else
  $min = 1;
        if($args['min_value']) { $min = $args['min_value']; }
      if ( ! empty( $product_quantity['max_value'] ) )
          $max = $product_quantity['max_value'];
      else $max = 20;
          if($args['max_value']) { $max = $args['max_value']; }
      if ( ! empty( $product_quantity['step'] ) )
      $step = $product_quantity['step'];
      else $step = 1;
  if(isset($args['input_name'])) {
      $product_quantity['input_name'] = $args['input_name'];
  }
  $options = '';
  if ($max == -1)
      $max = 20;
  for ( $count = $min; $count <= $max; $count = $count+$step ) {
      $selected = "";
      if($args['input_value'] == $count) {
          $selected = 'selected="selected"';
      }
      $options .= '<option '.$selected.' value="' . $count . '">' . $count . '</option>';
  }
  echo '
  <div class="quantity quantity_select" style="' . $product_quantity['style'] . '">
          <select name="' . esc_attr( $product_quantity['input_name'] ) . '" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="qty">' . $options . '</select>
      </label>
  </div>';
}

//replace prices range with active variation price
add_action( 'woocommerce_variable_add_to_cart', 'bbloomer_update_price_with_variation_price' );
  
function bbloomer_update_price_with_variation_price() {
   global $product;
   $price = $product->get_price_html();
   wc_enqueue_js( "     
      $(document).on('found_variation', 'form.cart', function( event, variation ) {   
         if(variation.price_html) $('.summary > p.price').html(variation.price_html);
         $('.woocommerce-variation-price').hide();
      });
      $(document).on('hide_variation', 'form.cart', function( event, variation ) {   
         $('.summary > p.price').html('" . $price . "');
      });
   " );
}

?>