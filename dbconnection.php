<?php   

        $host = "studentnet.dundeeandangus.ac.uk";
        $dbname = "db_1520818";
        $un = "1520818";
        $pw = "Butchart93";
		$charset = "utf8mb4";
		
		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
		$opt = [
			PDO::ATTR_ERRMODE				=>	PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE	=>	PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES		=>	false,
		];
        $pdo = new PDO($dsn, $un, $pw, $opt);


