<?php

/**
 * Created by IntelliJ IDEA.
 * User: Michael
 * Date: 15.07.2016
 * Time: 14:56
 */
class DB_Connect
{
	/**
	 * Stores a database object
	 *
	 * @var object A database object
	 */
	protected $db;

	protected function __construct($db=NULL)
	{
		if(is_object($db)){
			$this->db = $db;
		}else{
			// Constants are defined in /sys/config/db-cred.inc.php
			$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
			try{
				$this->db = new PDO($dsn, DB_USER, DB_PASS);
			}catch(PDOException $e){
				// if the DB connection fails, output the error
				die( $e->getMessage());
			}
		}
	}
}