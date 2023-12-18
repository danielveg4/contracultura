<?php

class Database{
	public static function connect(){
		$db = new mysqli('http://contrao.cluster030.hosting.ovh.net/cc_avanzada/database/db.sql', 'root', '', 'tienda_master');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

