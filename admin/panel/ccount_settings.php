<?php
error_reporting(0);
if (!defined('IN_SCRIPT')) {die('Invalid attempt!');}

// Password hash for admin area
$ccount_settings['admin_pass']='vaner54';

// URL of the click.php file
$ccount_settings['click_url']='https://verims.com/panel/click.php';

// Number of hours a visitor is considered as "unique"
$ccount_settings['unique_hours']=24;

// Sets the preferred number notation (US, UK, FR, X1, X2)
$ccount_settings['notation']='US';

// Name of the log file
$ccount_settings['db_file']='ccount_database.php';

// Version information
$ccount_settings['version']='2.0.3';