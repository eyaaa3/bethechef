<?php

require_once ("{$ROOT}{$DS}config{$DS}conn.php");
class Model{
    
    private static $pdo;

    public static function Init(){
		$host = Conf::getHostname();
		$dbname = Conf::getDatabase();
		$login = Conf::getLogin();
		$pass = Conf::getPassword();
		try{
			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
			} catch(PDOException $e) {
				die ($e->getMessage()); 
			}
	}

	public static function getAll(){
	    $SQL="SELECT * FROM ".static::$table;
		$rep = self::$pdo->query($SQL);
		
		
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));

		return $rep->fetchAll();
	}


	public static function select($cle_primaire) {
	    $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
	    $req_prep = self::$pdo->prepare($sql);
	    $req_prep->bindParam(":cle_primaire", $cle_primaire);
	    $req_prep->execute();
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
	    if ($req_prep->rowCount()==0){
			return null;
			die();
	  	}else{
			$rslt = $req_prep->fetch();
			return $rslt;
		}
  	}

	  public static function delete($cle_primaire) {
		$sql = "DELETE FROM ".static::$table." WHERE ".static::$primary."=:cle_primaire";
		$req_prep = self::$pdo->prepare($sql);
		$req_prep->bindParam(":cle_primaire", $cle_primaire);
		$req_prep->execute();
	}
	public static function delete1($cle_primaire) {
		$sql = "DELETE FROM ".static::$table1." WHERE ".static::$primary1."=:cle_primaire";
		$req_prep = self::$pdo->prepare($sql);
		$req_prep->bindParam(":cle_primaire", $cle_primaire);
		$req_prep->execute();
	}

	public function insert($tab){
		$sql = "INSERT INTO ".static::$table." VALUES(";
		foreach ($tab as $cle => $valeur){
			$sql .=" :".$cle.",";
		}
		$sql=rtrim($sql,",");
		$sql.=");";
		$req_prep = self::$pdo->prepare($sql);
		$values = array();
		foreach ($tab as $cle => $valeur)
				  $values[":".$cle] = $valeur;
		// execute prend l'argument $values puisqu'on a pas utilisé bindParam
		$req_prep->execute($values);
	  }

	  
	  public function insert2($tab){
		// Remove 'id_utilisateur' from the array
		unset($tab['id_utilisateur']);
	
		// Construct the SQL query
		$sql = "INSERT INTO ".static::$table1." (".implode(", ", array_keys($tab)).") VALUES(";
		foreach ($tab as $cle => $valeur){
			$sql .=" :".$cle.",";
		}
		$sql=rtrim($sql,",");
		$sql.=");";
	
		// Prepare and execute the query
		$req_prep = self::$pdo->prepare($sql);
		$values = array();
		foreach ($tab as $cle => $valeur)
			$values[":".$cle] = $valeur;
		$req_prep->execute($values);
	}

	  public static function update($tab, $cle_primaire) {
		$sql = "UPDATE ".static::$table." SET";
		foreach ($tab as $cle => $valeur){
			$sql .=" ".$cle."=:new".$cle.",";
		}
		$sql=rtrim($sql,",");
		$sql.=" WHERE ".static::$primary."=:oldid;";
		
		  $req_prep = self::$pdo->prepare($sql);
		  $values = array();
	  
	  foreach ($tab as $cle => $valeur){
				$values[":new".$cle] = $valeur;
		  }
		  $values[":oldid"] = $cle_primaire;
		  $req_prep->execute($values);
		  $obj = self::select($tab[static::$primary]);
		  return $obj;
  }
  
  
  public static function update1($tab, $cle_primaire) {
	$sql = "UPDATE ".static::$table1." SET";
	foreach ($tab as $cle => $valeur){
		$sql .=" ".$cle."=:new".$cle.",";
	}
	$sql=rtrim($sql,",");
	$sql.=" WHERE ".static::$primary1."=:oldid;";
	
	  $req_prep = self::$pdo->prepare($sql);
	  $values = array();
  
  foreach ($tab as $cle => $valeur){
			$values[":new".$cle] = $valeur;
	  }
	  $values[":oldid"] = $cle_primaire;
	  $req_prep->execute($values);
	  $obj = self::select($tab[static::$primary1]);
	  return $obj;
}




  
}
Model::Init();