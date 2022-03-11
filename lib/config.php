<?php
/*Globa config*/
session_start();
ob_start();
date_default_timezone_set("Asia/Tbilisi");

/*Domain config*/
define('domain','http://192.168.64.2');
define('path', '');
//define('path', '/fw');
define('baseurl',domain.path);

/*db config*/
define('dbHost','192.168.64.2');
define('dbUser','wpuser');
define('dbPass','password');
define('dbName','shopdb');
/********Project Mode********/
/**Change dev to production**/
define('project_mode', 'production');