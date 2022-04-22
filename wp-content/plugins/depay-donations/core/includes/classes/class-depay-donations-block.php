<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

class DePay_Donations_Block {

  public static function register() {
    add_action( 'enqueue_block_editor_assets', array( 'DePay_Donations_Block', 'enqueue_block' ));
    register_block_type( 'depay-donations/block', 
      array(
        'editor_script' => 'depay-donations-editor-block',
        'render_callback' => array( 'DePay_Donations_Block', 'render_block' )
      )
    );
  }

  public static function enqueue_block() {

    wp_register_script(
      'depay-donations-editor-block',
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/block.js',
      array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor' ),
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/block.js'
    );

    wp_enqueue_script( 'depay-donations-script' );

  }

  public static function render_block() {
    wp_register_script(
      'depay-donations-widgets',
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/widgets.bundle.js',
      array(),
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/widgets.bundle.js'
    );
    wp_enqueue_script( 'depay-donations-widgets' );

    wp_register_script(
      'depay-donations-react-shadow-dom',
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/react-shadow-dom.js',
      ['wp-element'],
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/react-shadow-dom.js'
    );
    wp_enqueue_script( 'depay-donations-react-shadow-dom' );

    wp_register_script(
      'depay-donations-buttons',
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/buttons.js',
      ['wp-element'],
      DEPAYDONATIONS_PLUGIN_URL . 'core/includes/assets/js/buttons.js'
    );
    wp_enqueue_script( 'depay-donations-buttons' );

    $widgetColorPrimary = get_option( 'DePay_donations_widget_color_primary' );
    $widgetColorButtons = get_option( 'DePay_donations_widget_color_buttons' );
    $widgetColorIcons = get_option( 'DePay_donations_widget_color_icons' );
    $widgetColorText = get_option( 'DePay_donations_widget_color_text' );
    $widgetCSS = preg_replace('~[\r\n]+~', '', get_option( 'DePay_donations_widget_css' ));
    $buttonCSS = preg_replace('~[\r\n]+~', '', get_option( 'DePay_donations_button_css' ));
    $buttonLabel = get_option( 'DePay_donations_button_label' );
    $receiver = get_option('DePay_donations_receiving_wallet_address');
    $accept = [];
    foreach (get_option('DePay_donations_accepted_payments') as $accepted) {
      $accepted = (object) $accepted;
      array_push($accept, (object)[
        'blockchain' => $accepted->blockchain,
        'token' => $accepted->address,
        'receiver' => $receiver
      ]);
    }
    $accept = json_encode($accept);
    $configuration = "{ \"style\": { \"colors\": { \"primary\": \"".$widgetColorPrimary."\", \"buttonText\": \"".$widgetColorButtons."\", \"icons\": \"".$widgetColorIcons."\", \"text\": \"".$widgetColorIcons."\" }, \"css\": \"".$widgetCSS."\" }, \"accept\": $accept}";
    $str = <<<EOD
    <div
      class="DePayButton"
      label="$buttonLabel"
      widget="Donation"
      configuration='$configuration'
      css="$buttonCSS"
    ></div>
    <script>DePayButtons.init({document: document});</script>
    EOD;
    return $str;
  }
}
