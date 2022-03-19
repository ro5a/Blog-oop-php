<?php

namespace BlogPHP\App;

/**
 * Class Database Containing the Database informations
 * @package BlogPHP\App
 */
class Database extends \PDO{

    /**
     * Database constructor.
     */
    public function __construct() {
		
		//Change these values to your own database.
		$_MYSQL_DB = 'blogmvc_oop';
		$_MYSQL_HOST = 'localhost'; 
		$_MYSQL_USER = 'root';
		$_MYSQL_PW = '';
	
		$dsn = 'mysql:dbname=' . $_MYSQL_DB . ';host=' . $_MYSQL_HOST;
		$user = $_MYSQL_USER;
		$pw = $_MYSQL_PW;
		
		try {
			parent::__construct($dsn, $user, $pw);
			$this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
	
}