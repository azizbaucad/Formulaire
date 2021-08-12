<script type="text/javascript">


jQuery(function(){
  
  
  var v =jQuery("#ff").validate({
    
    submitHandler:function(form){
      
      jQuery(form).ajaxSubmit({
        target:"#reponse"
        });
    }
    });


    
    
   
});


$(document).ready(function() {
  
  
  $('.form-control').keyup( function(){
    
    
    document.getElementById('AjMed').disabled=false;});
    
    
    
    
    
    $('.form-control').change( function(){
    
    
    document.getElementById('AjMed').disabled=false;});
    
    
    
    
    
  
    $('form').submit(function(){
    
     $(':submit',this).attr('disabled','disabled');
      $("#cdb").val('');
     $("#des").val('');
        $("#form").val('');
          $("#fam").val('');
            $("#px").val('');
     
     
     });
     

      $('.form-control').keyup( function(){
        $("#al").hide(50);
        
        });
  
  
  
  
  
  
  
  
  
  
  
  

}); 
</script>

<style>
  html {
	height:100%;
}

body {
	padding: 10px;
	margin: 10px;
	height:100%;
}

* {
	FONT-SIZE: 11px; FONT-FAMILY: Verdana, 'Lucida Grande', Arial, sans-serif; color: #000000;
}

input {
	border-style: solid;
	border-width : 1px;
	border-color : #AAAAAA;
  padding: 1px;
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
legend {
  
  
}
</style>




<!--h3>Marché</h3>

<CENTER-->
	<br>
	<h1>Ajout d'un agent</h1>
    </br>

	<!--form-->

<table class="tableCommune" id="">
	<tr><th align="left">Nom&nbsp;&nbsp;&nbsp;</th><td><input autofocus size="16" type="text" value="" name="txtNomSortie"></td></tr>
	<tr><th align="left">Login&nbsp;&nbsp;&nbsp;</th><td><input size="16" maxlength="10" type="text" value="" name="txtDate"></td></tr>
	<tr><th align="left">Prenom&nbsp;&nbsp;&nbsp;</th><td><input size="16" maxlength="10" type="text" value="" name="txtDate"></td></tr>
	<tr><th align="left">ID_Agent&nbsp;&nbsp;&nbsp;</th><td><input size="16" maxlength="10" type="text" value="" name="txtDate"></td></tr>
<!--tr><th align="left">Prénom&nbsp;&nbsp;&nbsp;</th><td><textarea id="idCommentaire" rows="2" cols="35" name="txtCommentaire"></textarea><br></td></tr>
<tr><th align="left">Login&nbsp;&nbsp;&nbsp;</th><td><textarea id="idRessources" rows="2" cols="35" name="txtRessources"></textarea><br></td></tr-->	
</table>
<!--/form-->


  <!--br><br-->

<form class="" id="ff" action="../controller/medicament.php" method="post">
<div id="reponse"></div>
  
  

  <!--fieldset-->
    <center><legend>Ajout d'un Bon de recouvrement Marché</legend></center>
  <table class="tableCommune" border=1 size=1 align="center">
  <tr>
    <th align="left">Intitule Marché</th>
    <td><input autofocus size="25"  type="text" class="form-control" name="cdb" id="cdb"  required="" placeholder="Intitule marché"></td>
    <th align="center">Date d'approbation&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="25"  type="date" class="form-control" name="des" id="des"  required="" placeholder="Date approbation"></td>
  </tr>
  <tr>
  <th align="left">Date d'enregistrement&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" name="form" id="form" placeholder="Date d'enregistrement"></td>
    <th align="left">Maitre d'ouvrage&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="65"  type="text" class="form-control" name="fam" id="fam" required="" placeholder="Maitre d'ouvrage" onkeyup="lokup(this.value);"></td>
  
  </tr>
  <tr>
    <th align="left">Montant Marché HT&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="px" name="px" required="" placeholder="Montant marché HT"></td>
    <th align="left">Montant Marché TTC&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="mmt" name="mmt" required="" placeholder="Montant marché TTC"></td>
  
  </tr>
  <tr>
  <th align="left">NINEA&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class=" form-control" id="ni" name="ni" required="" placeholder="NINEA"></td>
    <th align="left">Désignation attributaire&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class=" form-control" id="da" name="da" required="" placeholder="Désignation attributaire"></td>
 
  </tr>
  <tr>
    <th align="left">Adresse&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="ad" name="ad" required="" placeholder="Adresse"></td>
    <th align="left">CNI&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="cn" name="cn" required="" placeholder="CNI"></td>
  </tr>
  <tr>
    <th align="left">Date délivrance CNI&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="ddcn" name="ddcn" required="" placeholder="Date délivrance CNI"></td>
    <th align="left">Passeport&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="pp" name="pp" required="" placeholder="Passeport"></td>
  
  </tr>
  <tr>
  <th align="left">Date délivrance passeport&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="ddpp" name="ddpp" required="" placeholder="Date délivrance passeport"></td>
    <th align="left">Téléphone 1&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="tep1" name="tep1" required="" placeholder="Téléphone 1"></td>
  
  </tr>
  <tr>
  
    <th align="left">Téléphone 2&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="tep2" name="tep2" required="" placeholder="Téléphone 2"></td>  
    <th align="left">RIB 1&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="ri1" name="ri1" required="" placeholder="RIB 1"></td></tr>

    <tr>
  
    <th align="left">RIB 2&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="ri2" name="ri2" required="" placeholder="RIB 2"></td>  
    <th align="left">Commentaires&nbsp;&nbsp;&nbsp;</th>
    <td><input autofocus size="35"  type="text" class="form-control" id="cm" name="cm" required="" placeholder="Commentaires" rows="2" cols="35"></td></tr>
  
    
  </tr>
  <tr>
  
  <br></br><br></br>
  <p></p>



<!--?php
	// TODO: vérifier la date en javascript
	chargerStock(); // impose de rechargement du stock
	foreach ($stock->tLigneStock as $ligneStock) {
		$article=$ligneStock->article;
		$idArticle=$article->idArticle;
		$quantiteReelle=$ligneStock->quantiteReelle;
		$quantiteVirtuelle=$ligneStock->quantiteVirtuelle;
		if ($quantiteReelle==$quantiteVirtuelle) $quantiteVirtuelle="";
		$quantiteReelle=afficherEntierSansDec($quantiteReelle);
		$quantiteVirtuelle=afficherEntierSansDec($quantiteVirtuelle);
		echo "<tr>";
		echo "<td>$article->nom</td>";
		if ($bUtiliseBeneficiaire) echo "<td><input type='text' size='25' name='BENEF_$idArticle' value=''></td>";
		echo "<td><input size='5' name=\"PRIX_$idArticle\" value=\"$article->prixTTCCourant\" type='text'></td>";
		echo "<td><input size='5' name=\"QUANTITE_$idArticle\" type='text'></td>";
		echo "<td class=\"tdQuantite\">$quantiteReelle</td>";
		echo "<td class=\"tdQuantiteVirtuelle\">$quantiteVirtuelle</td>";
		echo "</tr>";
	}
?-->
</table>
<br></br>
<center><button type="submit" id="AjMed" name="AjMed"  class="boutonValider" value="Ajouter" >Valider</button>&nbsp;&nbsp;&nbsp <button type="reset"  class="boutonAnnuler" onClick="window.location.href='../view/index.php?page=medicament'" value="Annuler">Annuler</button></center>
</fieldset>
<br><br>

</form> <!--limit-->


