<?php 


require("connexion.php");

class D_Achat{
	
	
	public $id_d_br;
	public $id_br;
	public $centre;
	public $agent;
	public $id_agent;
	public $im;
	public $dap;
	public $den;
	public $mo;
	public $mmht;
	public $mmttc;
	public $nin;
	public $dat;
	public $adr;
	public $cni;
	public $cnie;
	public $ddcni;
	public $ppo;
	public $ddppo;
	public $tel1;
	public $tel2;
	public $rib1;
	public $rib2;
	public $cmt;
	
	
	
	
	
	
	public  function __construct($id,$idbr,$ctrc,$agtc,$idagtc,$imc,$dapc,$denc,$moc,$mmhtc,$mmttcc,$ninc,$datc,$adrc,$cnic,$cniec,$ddcnic,$ppoc,$ddppoc,$tel1c,$tel2c,$rib1c,$rib2c,$cmtc){
		$this->id_d_br=$id;
		$this->id_br=$id;
		$this->centre=$ctrc;
		$this->agent=$agtc;
		$this->id_agent=$idagtc;
		$this->im=$imc;
		$this->dap=$dapc;
		$this->den=$denc;
		$this->mo=$moc;
		$this->mmht=$mmhtc;
		$this->mmttc=$mmttcc;
		$this->nin=$ninc;
		$this->dat=$datc;
		$this->adr=$adrc;
		$this->cni=$cnic;
		$this->cnie=$cniec;
		$this->ddcni=$ddcnic;
		$this->ppo=$ppoc;
		$this->ddppo=$ddppoc;
		$this->tel1=$tel1c;
		$this->tel2=$tel2c;
		$this->rib1=$rib1c;
		$this->rib2=$rib2c;
		$this->cmt=$cmtc;
		/*$this->id_m=$idm;
		$this->qte_a=$qt;
		$this->im=$imh;
		$this->dda=$ddap;
		$this->dde=$ddet;*/

	}
	
    //****************************Fonction pour afficher les detaille achat avec la Pagination****************************

     public static function GetAllD($id){
		global $db;
		$req=$db->prepare("SELECT * FROM d_br db WHERE db.id_br='$id' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	    //****************************Fonction pour afficher les detaille achat*********************************************

	
	  public static function getById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM `d_br` WHERE id_br='$id'");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	    //****************************Fonction pour l'insertion des detaille Achat*********************************************

		//$centre_c=$_SESSION['centre'] ;
	
	
		public static function AjouDetBL($id,$ctrc,$agtc,$idagtc,$imc,$dapc,$denc,$moc,$mmhtc,$mmttcc,$ninc,$datc,$adrc,$cnic,$cniec,$ddcnic,$ppoc,$ddppoc,$tel1c,$tel2c,$rib1c,$rib2c,$cmtc){
		global $db;
		//$centrec=$_SESSION['centre'] ;
		$req=$db->prepare("INSERT INTO `d_br`(
			`id_d_br`,
			 `id_br`,
			 `centre`,
			 `agent`,
			 `id_agent`,
			 `im`,
			 `dap`,
			 `den`,
			 `mo`,
			 `mmht`,
			 `mmttc`,
			 `nin`,
			 `dat`,
			 `adr`,
			 `cni`,
			 `cnie`,
			 `ddcni`,
			 `ppo`,
			 `ddppo`,
			 `tel1`,
			 `tel2`,
			 `rib1`,
			 `rib2`,
			 `cmt`
			 ) VALUES
			  ('',
			  '$id',
			  '$ctrc',
			  '$agtc',
			  '$idagtc',
			  '$imc',
			  '$dapc',
			  '$denc',
			  '$moc',
			  '$mmhtc',
			  '$mmttcc',
			  '$ninc',
			  '$datc',
			  '$adrc',
			  '$cnic',
			  '$cniec',
			  '$ddcnic',
			  '$ppoc',
			  '$ddppoc',
			  '$tel1c',
			  '$tel2c',
			  '$rib1c',
			  '$rib2c',
			  '$cmtc'

			  )");
			  
		$ok=$req->execute(); 
		
		
	    
	  }
	
	
		//****************************Fonction pour la suppression des detaille Achat************************************

	public static function DeById($id){
			global $db; 
		  $req =$db->prepare("DELETE FROM d_br WHERE id_d_br='$id'");
		  $req->execute();
		}
	
	
	
	

}


?>