<?php

class Database{
	public static function connect(){
		$db = new mysqli('http://contracultura.eu/database/db.sql', 'root', '', 'tienda_master');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

