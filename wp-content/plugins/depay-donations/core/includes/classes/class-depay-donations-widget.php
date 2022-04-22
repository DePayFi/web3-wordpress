<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

class DePay_Donations_Widget extends WP_Widget {

  function __construct() {
    parent::__construct(
      'DePay_Donations_Widget', // ID
      'DePay Donations', // name
      array ( 'description' => 'DePay Donations Description' )
    );
  }

  public static function register() {
    register_widget( 'DePay_Donations_Widget' );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    echo $args['before widget'];
    //if title is present
    If ( ! empty ( $title ) )
    Echo $args['before_title'] . $title . $args['after_title'];
    //output
    echo __( 'Greetings from Hostinger.com!', 'hstngr_widget_domain' );
    echo $args['after_widget'];
  }

  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) )
      $title = $instance[ 'title' ];
      else
      $title = __( 'Default Title', 'hstngr_widget_domain' );
      ?>
      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>
    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}
