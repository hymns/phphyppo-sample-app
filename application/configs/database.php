<?php
/**
 * phpHyppo
 *
 * An open source MVC application framework for PHP 5.1+
 *
 * @package		phpHyppo
 * @author			Muhammad Hamizi Jaminan, hymns [at] time [dot] net [dot] my
 * @copyright		Copyright (c) 2008 - 2010, Green Apple Software.
 * @license			LGPL, see included license file
 * @link				http://www.phphyppo.com
 * @since			Version 9.07
 */

/**
 * database.php
 *
 * application database configuration
 *
 * @package	    phpHyppo
 * @subpackage	Application Configuration
 * @author			Muhammad Hamizi Jaminan
 */


/* database engine plugin */
$config['db_plugin'] 	= 'ActiveRecord';

/* connection engine type (mysql, pgsql, dblib) */
$config['db_type'] 		= 'mysql';

/* database information */
$config['db_host'] 		= 'localhost'; // mssql (10.42.8.8, pfcs, sa)
$config['db_name'] 	= 'tutor';
$config['db_user'] 		= 'root';
$config['db_pass'] 		= '';
$config['db_prefix'] 	= '';

/* database connection persistence */
$config['db_persistent'] = false;

/* database encoding character set */
$config['db_charset'] 	= 'UTF-8';

?>