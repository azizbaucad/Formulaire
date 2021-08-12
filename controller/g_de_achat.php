
<!-- ******** recuperation de l'utilisateur qui s'est logger ***********-->
<!--html>
<head>
    <meta charset="UTF-8">
    <title>DGID</title>
    <link rel="stylesheet" href="style.css" />
    </head>
  <body-->

  <?php
     session_start();
     if(!isset($_SESSION['password'])){
       header('location:../index.php');
     }
    ?>

  <script type="text/javascript">
  function leadingZeros(input) {
    if(!isNaN(input.value) && input.value.length === 1) {
      input.value = '00' + input.value;
    }
  }

  function addHash(elem) {
  var val = elem.value;
  if(!val.match(/^SN/)) {
    elem.value = "SN" + val;
  }
}



  
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength);
  }

  document.getElementById("ajgda").onclick = function () { 
   // var ves = parseFloat(document.getElementById("cnii").value);
    const cnii = document.getElementById('cnii')
    const imi = document.getElementById('imi')
    const cniei = document.getElementById('cniei')
    const dapi = document.getElementById('dapi')
    const ddcnii = document.getElementById('ddcnii')
    const deni = document.getElementById('deni')
    const ppoi = document.getElementById('ppoi')
    const moi = document.getElementById('moi')
    const ddppoi = document.getElementById('ddppoi')
    const mmhti = document.getElementById('mmhti')
    const tel1i = document.getElementById('tel1i')
    const mmttci = document.getElementById('mmttci')
    const tel2i = document.getElementById('tel2i')
    const nini = document.getElementById('nini')
    const rib1i = document.getElementById('rib1i')
    const dati = document.getElementById('dati')
    const rib2i = document.getElementById('rib2i')
    const adri = document.getElementById('adri')
    const cmti = document.getElementById('cmti')
//const imi = document.getElementById('imi')
    let messages = []

    // fonction to  required

    if (cnii.value.length <= 6 ) {
      alert('le cnni ne peut pa etre inferieur ou egale à 6 char')  ;
    }
    else if (cnii.value.length >= 20) {
      alert('le cnni ne peut pas depasser 20 char') ; 
    } 
    else if (cnii.value.length == '' || cnii.value == null) {
     alert('Saisir le champs cnii') ;
    }
    else if (imi.value == '' || imi.value == null) {
      alert('Saisir le champs imi') ;
    }
    else if (cniei.value == '' || cniei.value == null) {
      alert('Sasisir le champs cnie etranger')  ;
    }
    else if (dapi.value == '' || dapi.value == null) {
      alert('Saisir le champs date appro') ;
    }
    else if (ddcnii.value == '' || ddcnii.value == null) {
      alert('Sasisir le date enregistremnt ')  ;
    }
    else if (deni.value == '' || deni.value == null) {
      alert('Saisir le deni') ;
    }
    else if (ppoi.value == '' || ppoi.value == null) {
      alert('Saisir le passport') ;
    }
    else if (moi.value == '' || moi.value == null) {
      alert('Sasisir le maitre ouvrage ')  ;
    }
    else if (ddppoi.value == '' || ddppoi.value == null) {
      alert('Saisir le champs date denerrige passport') ;
    }
    else if (mmhti.value == '' || mmhti.value == null) {
      alert('Sasisir le montant marché ht ')  ;
    }
    else if (tel1i.value == '' || tel1i.value == null) {
      alert('Saisir le telephone 1') ;
    }
    else if (mmttci.value == '' || mmttci.value == null) {
      alert('Sasisir le motant marche ttc')  ;
    }
    else if (tel2i.value == '' || tel2i.value == null) {
      alert('Saisir telephone 2') ;
    }
    else if (nini.value == '' || nini.value == null) {
      alert('Sasisir le champs ninea')  ;
    }
    else if (rib1i.value == '' || rib1i.value == null) {
      alert('Saisir le rib 1') ;
    }
    else if (dati.value == '' || dati.value == null) {
      alert('Sasisir le designation attributtaire')  ;
    }
    else if (rib2i.value == '' || rib2i.value == null) {
      alert('Saisir le champs Rib 2') ;
    }
    else if (adri.value == '' || adri.value == null) {
      alert('Sasisir le champs adresse ')  ;
    }
    else if (cmti.value == '' || cmti.value == null) {
      alert('Saisir le champs comentaires') ;
    } 
    else AjouDetBL();
    
     };

</script>


    
    <!--doctype html-->


    <!--******************************************** Detail BR au lieu de Achat *********************************************-->
    
    
    
    
    
    
   
     <!--*************************************************LA SUPPRESSION BR au lieu de BL*******************************-->  
     
	  <?php  if(isset($_POST['iddA'])){
		
	 include('../Model/d_achat.class.php');
	
	$nbrl=count(D_Achat::getById($_POST['idA']));
	if($nbrl>1){
		
		 D_Achat::DeById($_POST['iddA']);
		 
		echo  "<script>location.href='../view/index.php?page=d_achat&&id=".$_POST['idA']."';</script>";
		
	}else{
		
		 include('../Model/achat.class.php');	 
		Achat::DeByIdA($_POST['idA']);
        
	echo  "<script>location.href='../view/index.php?page=achat';</script>";

		}

	} ?>

  

    <!--*************************************************Ajout Detail BR au lieu de BL*******************************-->
    

     <?php if(isset($_POST['paj'])){ ?>

     <div class="table-responsive">
       <form name="formulaire"  >
	 <table class="tableCommune" border=1 size=1 align="center">

          <tr align="right" class='ca'>
          <th align="right" class='ca'>Centre</th>
          <td align="right" class='ca'><input style="text-align:center; FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;color:black; background-color:#C0C0C0;" size="30"  type="text" class="" disabled="disabled" placeholder="Intitule Marche" id="ctri" required="" readonly value="<?php echo $_SESSION['centre']; ?>"></td>
          <th align="right">Agent</th>
          <td><input  style="text-align:center; FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;color:black; background-color:#C0C0C0;"  size="30"  type="text" class="" disabled="disabled" placeholder="Intitule Marche" id="agti" required="" readonly value="<?php echo $_SESSION['id_cpt']; ?>"></td>
         
        </tr>
         <tr>
         <th align="right">ID Agent</th>
          <td><input  style="text-align:center;  FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;color:black; background-color:#C0C0C0;"  size="30"  type="text" class="" disabled="disabled" placeholder="Intitule Marche" id="idagti" required="" readonly value="<?php echo $_SESSION['centre'].''.$_SESSION['id_cpt']; ?>"></td>
          <th>CNI(SN ou CEDEAO)<em>*</em></th>
          <td><input size="45" autofocus type="text" value="" name="cnii" class="" placeholder="CNI" id="cnii" required></td> <!--pattern=".{5,10}"-->
        </tr>
         <tr>
         <th align="left">Intitule Marche</th>
          <td><input  size="45" autofocus type="text" value="" class="" placeholder="Intitule Marche" id="imi" required></td>
        

         <!--th align="right">Date approbation</th>
          <td><input  type="date" size="45" autofocus  class="" placeholder="Date approbation" id="dapi" required=""></td-->
          
          <th>CNIE</th>
          <td><input size="45" autofocus type="text" class="" placeholder="CNI" id="cniei" value="" required></td>
           <!--th align="left">Date délivrance CNI</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enregistrement CNI" id="ddcnii" required=""></td-->
          </tr>
          
         <tr>
           <th align="right">Date approbation</th>
          <td><input  type="date" size="45" autofocus  class="" placeholder="Date approbation" id="dapi" value="" required></td>
         <!--th align="right">Maitre ouvrage</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Maitre ouvrage" id="moi" required=""></td-->
         
          <th align="left">Date délivrance CNI</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enregistrement CNI" id="ddcnii" value="" required></td>
          </tr>
         <tr>
         <!--th>Montant marche TTC</th>
          <td><input type="number" size="45" autofocus type="text" class="" placeholder="Montant marche TTC" id="mmttci" required=""></td-->
          <th align="left">Date enregistrement</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enregistrement" id="deni" value="" required></td>
          
          <th>Passeport</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Passeport" id="ppoi" value="" required></td>
          </tr> 
         <tr>   
         <!--th>Designation attributaire</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Designation attributaire" id="dati" required=""></td-->
          <th align="right">Maitre ouvrage</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Maitre ouvrage" id="moi" value="" required></td>
           <th align="left">Date délivrance passeport</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enrgistrement passeport" id="ddppoi" value="" required></td>
          </tr>
     <tr>
     <th align="left">Montant marche HT</th>
          <td><input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  size="45" autofocus  class="" placeholder="Montant marche HT" id="mmhti" value="" required></td>
          <!--th align="left">Date enregistrement CNI</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enregistrement CNI" id="ddcnii" required=""></td-->
          <th>Telephone 1</th>
          <td><input size="45" autofocus oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" 
          oninput="maxLengthCheck(this)"
type = "number"
maxlength = "9" class="" placeholder="Telephone 1" id="tel1i" value="" required>
  </td>
     </tr>
     <tr>
     <th>Montant marche TTC</th>
          <td><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="number" size="45" autofocus type="text" class="" placeholder="Montant marche TTC" id="mmttci" value="" required></td>
          <!--th align="left">Date enregistrement CNI</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enregistrement CNI" id="ddcnii" required=""></td-->
          <th align="left">Telephone 2</th>
          <td><input size="45" autofocus oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
          oninput="maxLengthCheck(this)"
type = "number"
maxlength = "9" class="" placeholder="Telephone 1" id="tel2i" value="" required></td>
     </tr>
     <tr>
     <th align="left">Ninea</th>
          <td><input size="45" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
       
        maxlength="9"  autofocus  class="" placeholder="Ninea" id="nini" value="" required></td>
          <!--th align="left">Date enregistrement passeport</th>
          <td><input type="date" size="45" autofocus  class="" placeholder="Date enrgistrement passeport" id="ddppoi" required=""></td-->
          <th>Rib 1</th>
          <td><input  size="45" type="text"
          onkeyup="addHash(this)" size="45" autofocus  class="" placeholder="Rib 1" id="rib1i" value="" required></td>
     </tr>
     <tr>
       <th>Designation attributaire</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Designation attributaire" id="dati" value="" required></td>
     <!--th align="left">Adresse</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Adresse" id="adri" required=""></td-->
          <!--th align="left">Telephone 2</th>
          <td><input oninput="maxLengthCheck(this)"
type = "number"
maxlength = "7" size="45" autofocus type="text" class="" placeholder="Telephone 2" id="tel2i" required=""></td-->
         <th align="left">Rib 2</th>
          <td><input  size="45" type="text"
       
       onkeyup="addHash(this)" size="45" autofocus  class="" placeholder="Rib 2" id="rib2i" value="" required></td>
     </tr>
     <tr>
     <!--th>CNI</th>
          <td><input size="45" autofocus type="text" class="" placeholder="CNI" id="cnii" required=""></td-->
          <th align="left">Adresse</th>
          <td><input size="45" autofocus type="text" class="" placeholder="Adresse" id="adri" value="" required></td>
          <!--th align="left">Rib 2</th>
          <td><input input size="45" type="text"
       
       onkeyup="addHash(this)" size="45" autofocus  class="" placeholder="Rib 2" id="rib2i" required=""></td-->
          <th>Commentaires</th>
          <td><textarea size="45" autofocus type="text" class="" placeholder="Commentaires" id="cmti" value="" required></textarea></td>
     </tr>
	 </table>
   <br>
   
   <center><input type="submit" class="btn btn-success" value="valider" id="ajgda"  class="boutonValider" onclick="AjouDetBL();"/>
   &nbsp;&nbsp;&nbsp
   <input class="boutonAnnuler btn btn-default" value="Annuler"   type="reset" class="boutonAnnuler"/></center>
     </form>
     </div>
	 
	<?php  }?>
    
    
    <?php if(isset($_POST['gid'])) {
		 include('../Model/d_achat.class.php');
		 
		 $id_achat=$_POST['gid'];
		 $ctri=$_POST['ctri'];
     $agti=$_POST['agti'];
     $idagti=$_POST['idagti'];
		 $imi=$_POST['imi'];
		 $dapi=$_POST['dapi'];
     $deni=$_POST['deni'];
		 $moi=$_POST['moi'];
     $mmhti=$_POST['mmhti'];
		 $mmttci=$_POST['mmttci'];
     $nini=$_POST['nini'];
		 $dati=$_POST['dati'];
     $adri=$_POST['adri'];
		 $cnii=$_POST['cnii'];
     $cniei=$_POST['cniei'];
     $ddcnii=$_POST['ddcnii'];
		 $ppoi=$_POST['ppoi'];
     $ddppoi=$_POST['ddppoi'];
		 $tel1i=$_POST['tel1i'];
     $tel2i=$_POST['tel2i'];
		 $rib1i=$_POST['rib1i'];
     $rib2i=$_POST['rib2i'];
		 $cmti=$_POST['cmti'];

     
		 
		
		
		D_Achat::AjouDetBL($id_achat,$ctri,$agti,$idagti,$imi,$dapi,$deni,$moi,$mmhti,$mmttci,$nini,$dati,$adri,$cnii,$cniei,$ddcnii,$ppoi,$ddppoi,$tel1i,$tel2i,$rib1i,$rib2i,$cmti);
    
    
    
    echo '<script language="javascript">';
    echo 'alert("Ajout réussi !!!")';
    echo '</script>';
    echo  "<script>location.href='../view/index.php?page=d_achat&&id=".$_POST['gid']."';</script>";
        
    } ?>

    <!--********************************************Medicament*****************************************************-->  
	
    <?php if(isset($_POST['tbl'])){?>
    <div class="table-responsive">
     
     	<table class="table table-striped table table-bordered table-condensed table-striped"  cellpadding="0" cellspacing="0" border="1" size="10" class="table table-condensed">
        
        <tr id="tt">
       
          <th>Centre</th>
          <th>N° Agent</th>
          <th>ID Agent</th>
          <th>Intitule Marche</th>
          <th>Date approbation</th>
          <th>Date d'enregistrement</th>
          <th>Maitre ouvrage</th>
          <th>Montant marché HT</th>
          <th>Montant marché TTC</th>
          <th>Ninea</th>
          <th>Designation attributaire</th>
          <th>Adresse</th>
          <th>CNI</th>
          <th>Date enregistrement CNI</th>
          <th>Passeport</th>
          <th>Date enregistrement passeport</th>
          <th>Telephone 1</th>
          <th>Telephone 2</th>
          <th>Rib 1</th>
          <th>Rib 2</th>
          <th>Commentaires</th>
          <th colspan="2" >Action</th> <colspan="2">
        </tr>
        <?php 
		include('../Model/d_achat.class.php');
		
		   $nb = count(D_Achat::GetAllD($_POST['id']));
		if($nb>0){
			
			foreach(D_Achat::GetAllD($_POST['id']) as $data){@$rs+= $data;
				
			 ?>
        <tr>
        
        <td><?php echo $_SESSION['centre']; ?></td>
        <td><?php echo $_SESSION['id_cpt']; ?></td>
        <td><?php echo $_SESSION['centre'].''.$_SESSION['id_cpt']; ?></td>
        <td><?php echo $data->im; ?></td>
        <td><?php echo $data->dap; ?></td>
        <td><?php echo $data->den; ?></td>
        <td><?php echo $data->mo; ?></td>
        <td><?php echo number_format("$data->mmht", 0, '', ' '); ?></td>
        <td><?php echo $data->mmttc; ?></td>
        <td><?php echo $data->nin; ?></td>
        <td><?php echo $data->dat; ?></td>
        <td><?php echo $data->adr; ?></td>
        <td><?php echo $data->cni; ?></td>
        <td><?php echo $data->ddcni; ?></td>
        <td><?php echo $data->ppo; ?></td>
        <td><?php echo $data->ddppo; ?></td>
        <td><?php echo $data->tel1; ?></td>
        <td><?php echo $data->tel2; ?></td>
        <td><?php echo $data->rib1; ?></td>
        <td><?php echo $data->rib2; ?></td>
        <td><?php echo $data->cmt; ?></td>
        
        <td><a href="javascript:delet(<?php  echo $data->id_d_br; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="supprimer" ></a></td>
      
        
       </tr>   
      
       <?php } ?>
        <tr>
       </tr> <?php  }else{  ?>
			<tr>
 <td colspan="5"><center><?php echo "Aucune Donnée"; ?></center></td>
</tr>
     
     
     <?php } }?>
       </table>
     
     </div>  

    <style>





    
  html {
	height:100%;
}




input {
	border-style: solid;
	border-width : 1px;
	border-color : #AAAAAA;
  padding: 10px;
}

.lienFondVert {
	color:#EEEEEE;
	text-decoration: underline;
}

.lienFondVert:hover {
	color:#006573;
	text-decoration: underline;
	BACKGROUND:#EEEEEE;
}

.lienFondBlanc {
	color:#006573;
	text-decoration: underline;
}

.lienFondBlanc:hover {
	color:#EEEEEE;
	text-decoration: underline;
	BACKGROUND:#006573;
}

.tableLoginGSS {
	width:100%;
	height:100%;
	BACKGROUND:#006573;
}

.tableLoginGSS tr td {
	text-align: center;
}

.tableBandeauHaut {
	width:100%;
	height:5%;
	BACKGROUND:#006573;
}

.tableBandeauHaut tr td {
	color:#EEEEEE;
}

.spanNomStock, .spanTitreAdministration {
	color:#EEEEEE;
	FONT-SIZE: 20px;
}

a {
	TEXT-DECORATION:none;COLOR: #83112A;
}

a:hover {
	COLOR: #1C6FBD;
}

.tableCommune {
	border-collapse:separate;
}

.tableCommune tr th {
	padding:4px;
	padding-left:5px;
	padding-right:5px;
	BACKGROUND:#b0e0e6 	;
}

.tableCommune tr {
	BACKGROUND:#f4e4d0;
}

.tableCommune tr:hover {
	BACKGROUND:#f4d4ad;
}

.tableCommune  tr td  {
	padding-top:2px;
	padding-bottom:2px;
	padding-left:10px;
	padding-right:10px;
}

button {
	padding:6px 0 6px 0;
	color:#fff;
	cursor:pointer;
	border-radius:2px;
	border:none;
	width:100px;
}

.bouton {
	background:#56abac;
}

.bouton:focus {
	outline: none;
}

.bouton:hover {
	background:#f4d4ad;
}

.boutonValider {
	background:#298A08;
}

.boutonValider:hover {
	background:#00FF00;
}

.boutonAnnuler {
	background:#d34836;
}

.boutonAnnuler:hover {
	background:#FF0000;
}

.menu {
	color:#FFFFFF;
	display:block;
	width:300px;
	height:30px;
	font-weight:bold;
	BACKGROUND:#56abac;
	text-align: center;
	line-height: 30px;
}

.menu:hover {
	BACKGROUND:#f4d4ad;
}

.tdDroiteStock {
	border-left: 2px solid #006573;
	FONT-SIZE: 10px;
	font-weight:bold;
}

.tableStockADroite {
	border-collapse:separate;
}

.tableStockADroite tr th {
	padding:4px;
	FONT-SIZE:9px;
}

.tableStockADroite tr {
	BACKGROUND:#f4d4ad;
	font-weight:normal;
}

.tableStockADroite tr td {
	padding:4px;
	BACKGROUND:#f4e4d0;
	FONT-SIZE: 9px;
}

.tdQuantite {
	text-align:center;
}

.tdQuantiteNegative {
	text-align:center;
	font-weight:bold;
	color:#EE0000;
}

.tdQuantiteVirtuelle {
	text-align:center;
	color:#006573;
}

.tdQuantiteVirtuelleNegative {
	text-align:center;
	font-weight:bold;
	color:#EE0000;
}

.tdPrix {
	text-align:right;
}

.attention {
	color:#EE0000;
}

.attention b {
	color:#EE0000;
}

h1 {
	color:#006573;
	FONT-SIZE: 15px;
	text-shadow : 2px 2px 5px #aaa;
}

.erreur {
	color:red;
	font-weight:bold;
}



img  {
    border:0px;
}
table , td , th{
  border: 1px solid white;
  padding: 1px;
}
fieldset {
  margin-bottom: 15px;
  padding: 10px;
}




    </style>

    



    
     <!--/body-->
	 
    
<!--/html-->



    
     
     
     
     
     