<?php

if (!class_exists('\Httpful\Bootstrap')) {
    require(plugin_dir_path( __FILE__ )  . 'Httpful/Bootstrap.php');    
    \Httpful\Bootstrap::init();
}