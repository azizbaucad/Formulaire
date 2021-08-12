<?php 
require("connexion.php");
class Medicament{	 

      public $id_m;
	  public $cdb;
	  public $desg;
	  public $form;
	  public $famille;
	  public $Prix_u;  
	  public $mmttc;
	  public $nin;
	  public $dat;
	  public $adr;
	  public $cni;
	  public $ddcni;
	  
	  public $ppo;  
	  public $ddppo;
	  public $tel1;
	  public $tel2;
	  public $rib1;
	  public $rib2;
	  public $cmt;


	  
	  public function __construct($id,$cdb,$des,$fo,$fa,$p,$mmtt,$nia,$datt,$adrs,$cnis,$ddcnis,$ppot,$ddppot,$te1,$te2,$r1,$r2,$ct){
		  $this->id_m=$id;
		  $this->cdb=$cdb;
		  $this->desg=$des;
		  $this->form=$fo;
		  $this->famille=$fa;
		  $this->Prix_u=$p;
		  $this->mmttc=$mmtt;
		  $this->nin=$nia;
		  $this->dat=$datt;
		  $this->adr=$adrs;
		  $this->cni=$cnis;
		  $this->ddcni=$ddcnis;

		  $this->ppo=$ppot;
		  $this->ddppo=$ddppot;
		  $this->tel1=$te1;
		  $this->tel2=$te2;
		  $this->rib1=$r1;
		  $this->rib2=$r2;
		  $this->cmt=$ct;
		  
	  }
	  
	  
	  

	public static function afficherGlobal($re)
		{
          global $db;
		  $req =$db->prepare("SELECT * FROM `medicament` WHERE  desg LIKE '$re%'");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
	
			public static function afficherPage($re,$page,$limit)
		{
          global $db;
		  $req =$db->prepare("SELECT * FROM `medicament` WHERE  desg LIKE '$re%' LIMIT $page,$limit ");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
				
		
		
		public static function delet($cb)
		{
          global $db;
		  $req =$db->prepare("DELETE FROM `medicament` WHERE id_m='$cb'");
		  $req->execute();
		  
		
		
		}
			public static function GetAll($cd)
		{
          global $db;
		  $req =$db->prepare("SELECT * FROM `medicament` WHERE  code_barre LIKE '$cd%'");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
		
		
		
		  public  function Add(){
		  global $db;
		
     
$req=$db->prepare("INSERT INTO `medicament`(
	
											`code_barre`,
											 `desg`,
											  `form`,
											  `famille`,
											   `Prix_u`, 
											   `mmttc`,
											   `nin`,
											   `dat`,
											   `adr`,
											   `cni`,
											   `ddcni`,

											   `ppo`, 
											   `ddppo`,
											   `tel1`,
											   `tel2`,
											   `rib1`,
											   `rib2`,
											   `cmt`
											   )
											    VALUES
												 (
												 :cdb,
												 :desg,
												 :form,
												 :fam,
												 :Prix,
												 :mmt,
												 :ni,
												 :da,
												 :ad,
												 :cn,
												 :ddcn,

												 :pp,
												 :ddpp,
												 :tep1,
												 :tep2,
												 :ri1,
												 :ri2,
												 :cm
											     

												 )");           
		
		@$ok=$req->execute(Array('cdb'=>$this->cdb,
								  'desg'=>$this->desg,
								  'form'=>$this->form,
								  'fam'=>$this->famille,
								  'Prix'=>$this->Prix_u,
								  'mmt'=>$this->mmttc,
								  'ni'=>$this->nin,
								  'da'=>$this->dat,
								  'ad'=>$this->adr,
								  'cn'=>$this->cni,
								  'ddcn'=>$this->ddcni,

								  'pp'=>$this->ppo,
								  'ddpp'=>$this->ddppo,
								  'tep1'=>$this->tel1,
								  'tep2'=>$this->tel2,
								  'ri1'=>$this->rib1,
								  'ri2'=>$this->rib2,
								  'cm'=>$this->cmt


		));
		$this->id_m=$db->lastInsertId();
		
		return @$ok;
		
		
		}
		
		
		
		
		
		public static function getAllById($re)
		{
          global $db;
		  $req =$db->prepare("SELECT * FROM `medicament` WHERE id_m='$re'");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
		
	
		  public  function Edit(){
		  global $db;
		
     
$req=$db->prepare("UPDATE `medicament` SET `code_barre`=:cdb, `desg`=:desg,`form`=:form,`famille`=:fam,`Prix_u`=:Prix WHERE id_m=:id_m");           
		
		@$ok=$req->execute(Array(  'id_m'=>$this->id_m,
		                           'cdb'=>$this->cdb,
								  'desg'=>$this->desg,
								  'form'=>$this->form,
								  'fam'=>$this->famille,
								  'Prix'=>$this->Prix_u
								 
		));
		
		
		return @$ok;
		
		
		}	
		
		
			public static function NbrMed()
		{
          global $db;
		  $req =$db->prepare("SELECT SUM(desg) FROM `medicament` GROUP BY id_m");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
		public static function GetAl()
		{
          global $db;
		  $req =$db->prepare("SELECT * FROM `medicament`");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
}
	
	?>