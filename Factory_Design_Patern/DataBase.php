<?php
	class DataBase{
		public $driver;
		public $link;

		public function setDriver($driver){
			$this->driver = $driver;
		}

		public function connect(){
			if($this->driver == "mysql"){
				$mngmysql = new ManageMySql();
				$mngmysql->setHost($host);
				$mngmysql->setDB($db);
				$mngmysql->setUser($user);
				$mngmysql->setPass($pass);
				$this->link = $mngmysql->connect();

			}elseif($this->driver == "sqlite"){
				$mngSqlite = new ManageSqlite();
				$mngSqlite->setHost($host);
				$mngSqlite->setDB($db);
				$mngSqlite->setUser($user);
				$mngSqlite->setPass($pass);
				$this->link = $mngSqlite->connect();
			}elseif($this->driver == "msAccess"){
				$mngAccess = new ManageMsAccess();
				$mngAccess->setHost($host);
				$mngAccess->setDB($db);
				$mngAccess->setUser($user);
				$mngAccess->setPass($pass);
				$this->link = $mngAccess->connect();
			}
		}
	}
?>