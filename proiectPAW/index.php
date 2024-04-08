<?php
include("filters.php");
?>
<html>
<style>
label{
    
    background:rgb(255,255,255,0.8);
    width:100%;
}
table, th, td {
  border: 1px solid;
  background:rgb(255,255,255,0.8);
  
}
</style>
<head>
<style>
.fundal{
background-image:url("static/images/image3.jpg");
  background-color: rgb(34,34,34);
  width: 150%;
  height:250%;
  opacity:0.8;
  left:0%;
  top:0%;
  position:absolute;
}
.fundal2{
    background-color: rgb(0,0,0);
    height:5%;
    width:150%;
    left:0%;
    top:250%;
    opacity:0.8;
    position:absolute;
}
</style>
  
</head>
<body>
<header>

<div class="fundal">
</div>
<div class="fundal2">

</div>
</header>
<div class="left" style="position:absolute; top:2%; left: 1%;width: 100%;height: 0%">

<form id="Form" method="post" action="all_operations.php" enctype="multipart/form-data">

<label>Denumire Produs:</label><br><textarea id="den_p" type ="text" name="den_p" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Valoare Specificata:</label><br><input id="val_spec" type="number" name="val_spec" style="width:45%;" min="0" max="10000000000000000000000000000000" ><br><br>
<label>Denumire Specificatie:</label><br><textarea id="den_s" type="text" name="den_s" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Denumire Categorie:</label><br><textarea id="den_c" type="text" name="den_c" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Cantitate Produs:</label><br><input id="cant_p" type="number" name="cant_p" style="width:45%;" min="0" max="10000000000000000000000000000000" ><br><br>
<label>Suma factura:</label><br><input id="suma_f" type="number" name="suma_f" style="width:45%;" min="0" max="10000000000000000000000000000000" ><br><br>
<label>Data factura:</label><br><input id="data_f" name="data_f" type="date" style="width:45%;"><br><br>
<label>Nume angajat:</label><br><textarea id="nume_a" type="text" name="nume_a" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Functie angajat:</label><br><textarea id="functie_a" type="text" name="functie_a" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Locatie angajat:</label><br><textarea id="locatie_a" type="text" name="locatie_a" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Data pontaj:</label><br><input id="data_p" name="data_p" type="date" style="width:45%;"><br><br>
<label>Numar ore pontaj:</label><br><input id="nr_ore_po" type="number" name="nr_ore_po" style="width:45%;" min="0" max="10000000000000000000000000000000"><br><br>
<label>Locatie client:</label><br><textarea id="loc_cli" type="text" name="loc_cli" style="width:45%;" col="1" rows="3"></textarea><br><br>
<label>Adresa client:</label><br><textarea id="adresa_cli" type="text" name="adresa_cli" style="width:45%;"col="1" rows="3"></textarea><br><br>
<input type="file" name="file" accept=".xlsx">
<input type= "button" onclick= "clearInput()" value= "Reset">
<input id="insert" name="insert" type= "submit" value= "Insert">
<input id="update" name="update" type= "submit" value= "Update">
<input id="delete" name="delete" type= "submit" value= "Delete">
<input id="search" name="search" type= "submit" onclick="searchGoogle()" value= "Search">
<input id="export" name="export" type= "submit" value= "Export">
<input id="import" name="import" type= "submit" value= "Import"><br><br>
</form>
<input type= "button" onclick= "window.location.href='login_form.php';" value= "Logout">


</div>
<div class="right" style=" position: absolute; top:2%; left: 47%;height: 0%;width:100%">
<form method="post">
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>id</th>
         <th>den_p</th>
         <th>val_spec</th>
         <th>den_s</th>
         <th>den_c</th>
         <th>cant_p</th>
         <th>suma_f</th>
         <th>data_f</th>
         <th>nume_a</th>
         <th>functie_a</th>
         <th>locatie_a</th>
         <th>data_p</th>
         <th>nr_ore_po</th>
         <th>loc_cli</th>
         <th>adresa_cli</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['den_p']??''; ?></td>
      <td><?php echo $data['val_spec']??''; ?></td>
      <td><?php echo $data['den_s']??''; ?></td>
      <td><?php echo $data['den_c']??''; ?></td>
      <td><?php echo $data['cant_p']??''; ?></td>
      <td><?php echo $data['suma_f']??''; ?></td>
      <td><?php echo $data['data_f']??''; ?></td>
      <td><?php echo $data['nume_a']??''; ?></td>
      <td><?php echo $data['functie_a']??''; ?></td>
      <td><?php echo $data['locatie_a']??''; ?></td>
      <td><?php echo $data['data_p']??''; ?></td>
      <td><?php echo $data['nr_ore_po']??''; ?></td>
      <td><?php echo $data['loc_cli']??''; ?></td>
      <td><?php echo $data['adresa_cli']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   <input id="pret_cresc" name="pret_cresc" type="submit" value="Pret crescator" >
<input id="pret_desc" name="pret_desc" type="submit" value="Pret descrescator">
<input id="nume_asc" name="nume_asc" type="submit" value="Nume ascendent" >
<input id="nume_desc" name="nume_desc" type="submit" value="Nume descendent" >
<input id="normal" name="normal" type="submit" value="Normal" >
<form>
     </div>
</div>
</div>
</div>

</div>

<div class="right" style=" position: absolute; top:120%; left: 0.5%;width: 100%;height: 0%;">

</div>


</body>
<script>
function searchGoogle() {
        var one = document.getElementById("den_p").value;
        var three = document.getElementById("den_c").value;
        if(one==='' && three===''){
        return;
        }else{
            var two = 'http://www.google.com/search?q=' + encodeURIComponent(one) +" "+ encodeURIComponent(three);
        return window.open(two);
        }
    }

</script>
</html>