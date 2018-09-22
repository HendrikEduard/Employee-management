<?php

/*
* @author     Hendrik Eduard Kuiper
* @copyright  Hendrik Eduard Kuiper
* @license    http://opensource.org/licenses/MIT MIT
* @version    1.0.1
* @link       
*/

defined('LNBPATH') or define('LNBPATH', __DIR__);
// *_*_*_*_*_*_*_*_*_*
// uncomment these in production
// ini_set('display_errors', 'Off');
// error_reporting(0);

// comment these out in production
ini_set('display_errors', 'On');
error_reporting('E_All');
// *_*_*_*_*_*_*_*_*_*
ini_set('log_errors', TRUE); // Error logging
ini_set('error_log', LNBPATH.'/logs/errors.log'); // Logging file
ini_set('log_errors_max_len', 1024); // Logging file size

spl_autoload_register(function($class) {
  require_once LNBPATH."/classes/{$class}.php";
});

defined('LNBURL') or define('LNBURL', 'http://localhost/');
function base_url($location) {return LNBURL.'/'.$location;}
function css_url($location) {return LNBURL.'/assets/css/'.$location;}
function js_url($location) {return LNBURL.'/assets/js/'.$location;}
function image_url($location) {return LNBURL.'/assets/img/'.$location;}

/* Example Usage
** <?= base_url('index.php') ?> <?= css_url('app.css') ?> 
** <?= js_url('app.js') ?> <?= image_url('showcase.png') ?> 
* * * * * * * * * * * * * * * * * */

require_once 'functions.php';
