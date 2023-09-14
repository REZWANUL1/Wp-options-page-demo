<?php
/*
 * Plugin Name:       wp-options-demo
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rezwanul Haque
 */
if (!defined('ABSPATH')) {
   exit;
}
// this is using settings api
require_once('inc/options.php');
// this is using settings api(hesti)
require_once('inc/optionsdemo.php');
// this is using settings form
require_once('inc/options-demo-form.php');
