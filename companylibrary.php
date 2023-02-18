<?php

/**
 * @package Company Library
 * @author Company < hello@company.com >
 * @version 1.0.0
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

define('WC_CL_VERSION', '1.0.0');

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

/**
 * Classes are correctly autoloaded if the autoload directive for the
 * package the 'root' package depends on, is specified at the 'root'
 * package level.
 * 
 * If the autoload directive is specified at the package level of the
 * 'sub' level of the package itself, no classmaps are generated.  
 */ 
$public_key("othercompanypublickey");
$context = new APIContext();
$context->set_api_key('companyapikey');
$context->set_public_key($public_key);
$request = new APIRequest($context);

?>