<?php if($_SESSION['login']!=='Admin'){echo "<script>location.href='index.php';</script>";}?>

<div id="rest" class="box box-solid box-success">
    <div class="box-header with-border">
         <h3 class="box-title fa fa-truck "> Gestion Fournisseur</h3>
         <div class="box-tools pull-right">
      <div class="has-feedback">
        <input type="text" class="form-control input-sm" name="recherch" id="Re" placeholder="Recherche par Nom et Tele ...."/>
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </div>
      </div>
   
      </div><!-- /.box-header -->
      
    <div  class="box-body">
         <div class="container" id="ctr">
        <br>
    <div class="row">
        <div class="col-xs-6">
      <a href="javascript:affForm();"   class="btn btn-success glyphicon glyphicon-plus" onclick="cacher();" > Ajouter</a>
      </div>

    <div class="col-xs-6">
           
     </div>
     </div>


   <br/>


<hr>
</div>
<div id="tbl">


</div>
</div>

