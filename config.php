<?php
/**
 * Application core configuration settings. Edit at your own risk
 *
 * @author 	David Eddj <me@davidjeddy.com>
 * @since 	0.0.1
 * @version 0.0.7
 */
/* Standard configs */
define('SITEOWNER', 	"Wind Networks, LLC");
define('SITEEMAIL', 	"support@windnetworks.net");
define('SITETITLE', 	"WiFi Accounting");
define('SITETAX',   	0.0);
define('SITESHIPRATE', 	0.0);
define('SITEPHONE', 	"352-577-5127");
define('SITECONTACT', 	"Please contact the administrator at phone number ".SITEPHONE.". Sorry for the inconvenience.");

/* Debug options */
error_reporting(E_ALL);

#SITEDIR must be from the root of the file system
define("SITEROOT", 		"../views");
define("SITEDIR",		"/var/www/windwifi/logs/");
define("SITELOG",		"Application.log");

/* DB config */
define("DB_HOST",   	"127.0.0.1");
define("DB_PORT",   	"3306");
define("DB_NAME",   	"radius");
define("DB_RAD_TABL",   "radcheck");
define("DB_DATA_TABL",  "user_data");
define("DB_DTFORMAT",	"Y-m-d H:i:s");

/* DB conn info */
// Testing host
// Ignore DB if running on the CLI
/*
if (!defined('STDIN')) {
	// Use testing DB conn data if in a dev ENV
	if ( $_SERVER["SERVER_ADDR"] == "127.0.0.1"
		|| $_SERVER["SERVER_ADDR"] == "localhost"
		|| substr($_SERVER["SERVER_ADDR"], 0,3) == "192"
	) {
	    define("DB_USER", 	"root");
	    define("DB_PASS", 	"Asdf1234");

	//Prod host
	} else {
	    define("DB_USER", 	"root");
		define("DB_PASS", 	"!6tu94E@A");
	}
}
*/
define("DB_USER", "root");
define("DB_PASS", "!6tu94E@A");


/* Edit for your locality */
date_default_timezone_set("UTC");

/* Paypal application Info */
define('PP_CLIENTID',       "AVNj_hDHDYISigTl5T9x08B9Vc9b8kh9zQ_VCzsxvMUNbMrLCfLY2jNBfz4j");
define('PP_SECRET',         "ECXsUBCGcNh7eOwWmNxNh9qchrnqCjB9NDbMMDWA_pZfwPr1lq3tiN1MLJCU");
define('PP_CONFIG_PATH',    __DIR__);



if ( !defined('STDIN')
	&& !is_dir( "../vendor" )
) {
    print_r( "Install process not run or vendor directory moved.\nPlease see README file for details.");
    exit;
}



//Start session if not already active
if (!defined('STDIN')) {
	session_start();
}
