<?php
/**
 * Plugin Name: Hello Dolly
 * Plugin URI: https://wordpress.org/plugins/hello-dolly/
 * Description: This is a test plugin for custom deployment.
 * Version: 1.0
 * Author: Yashita
 * * Description: 🚀 CUSTOM DEPLOYMENT TEST - This is not just a plugin, it symbolizes...
 */

function hello_dolly() {
    $lyrics = "Hello, Dolly, well, hello, Dolly!";
    echo "<p style='float:right;padding:10px;'>$lyrics</p>";
}

add_action( 'admin_notices', 'hello_dolly' );
