<?php
require("connexion.php");

class Vente{
	
	public $id_v;
	public $id_clt;
	public $date_v;
	
	
	
	public function __construct($id,$idclt,$dte){
		$this->id_v=$id;
		$this->id_clt=$idclt;
		$this->date_v=$dte;
	}
	
	
	
	public static function GetAll($re){
		global $db;
		$req=$db->prepare("SELECT * FROM vente v,client c WHERE c.id_clt = v.id_clt AND c.Nom LIKE '$re%' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	public static function GetAllPag($re,$page,$limit){
		global $db;
		$req=$db->prepare("SELECT * FROM vente v,client c WHERE c.id_clt = v.id_clt AND c.Nom LIKE '$re%' LIMIT $page,$limit ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	
	
	public static function GetByClt($idd){
		global $db;
		$req=$db->prepare("SELECT * FROM vente v,client c WHERE c.id_clt = v.id_clt AND v.id_v='$idd' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	
	
	
	
	
		
		public static function ADDVente($clt,$dt){
			global $db; 
		  $req =$db->prepare("INSERT INTO `vente`(`id_v`, `id_clt`, `date_v`) VALUES ('','$clt','$dt')");
		  $req->execute();
		  $ok=$db->lastInsertId();
			 return $ok;
		}
	
	
	
	
	
	
	
	
	
	
	public static function DeByIdV($id){
			global $db; 
			try{
				$db->beginTransaction();
		        $req =$db->prepare("DELETE FROM vente WHERE id_v='$id'");
		        $sql =$db->prepare("DELETE FROM d_vente WHERE id_v='$id'");
		        $sql->execute();
				$req->execute();
		        
		        $db->commit();
		  
			}catch(Exeception $e){
				$db->rollBack();
			}
		}
	

public static function NbrVent(){
			global $db; 
		  $req =$db->prepare("SELECT SUM(id_v) FROM vente  GROUP BY id_v");
		  $req->execute();
		  return $req->fetchAll(PDO::FETCH_OBJ);
		}






	
	
}






?>