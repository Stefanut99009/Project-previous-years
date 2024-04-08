<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

if (isset($_POST["insert"]) && $_POST["insert"] != "") {
     $den_p = $_POST["den_p"];
    $val_spec = $_POST["val_spec"];
    $den_s = $_POST["den_s"];
    $den_c = $_POST["den_c"];
    $cant_p = $_POST["cant_p"];
    $suma_f = $_POST["suma_f"];
    $data_f = $_POST["data_f"];
    $nume_a = $_POST["nume_a"];
    $functie_a = $_POST["functie_a"];
    $locatie_a = $_POST["locatie_a"];
    $data_p = $_POST["data_p"];
    $nr_ore_po = $_POST["nr_ore_po"];
    $loc_cli = $_POST["loc_cli"];
    $adresa_cli = $_POST["adresa_cli"];
    
    try {
        
        $stmt = $conn->prepare("INSERT INTO pentrupaw (den_p, val_spec, den_s, den_c, cant_p, suma_f, data_f, nume_a, functie_a, locatie_a, data_p, nr_ore_po, loc_cli, adresa_cli)
                                VALUES (:den_p, :val_spec, :den_s, :den_c, :cant_p, :suma_f, :data_f, :nume_a, :functie_a, :locatie_a, :data_p, :nr_ore_po, :loc_cli, :adresa_cli)");

        
        $stmt->bindParam(':den_p', $den_p);
        $stmt->bindParam(':val_spec', $val_spec);
        $stmt->bindParam(':den_s', $den_s);
        $stmt->bindParam(':den_c', $den_c);
        $stmt->bindParam(':cant_p', $cant_p);
        $stmt->bindParam(':suma_f', $suma_f);
        $stmt->bindParam(':data_f', $data_f);
        $stmt->bindParam(':nume_a', $nume_a);
        $stmt->bindParam(':functie_a', $functie_a);
        $stmt->bindParam(':locatie_a', $locatie_a);
        $stmt->bindParam(':data_p', $data_p);
        $stmt->bindParam(':nr_ore_po', $nr_ore_po);
        $stmt->bindParam(':loc_cli', $loc_cli);
        $stmt->bindParam(':adresa_cli', $adresa_cli);

        
        $stmt->execute();

        echo "Record inserted successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
if (isset($_POST["update"]) && $_POST["update"] != "") {
    $den_p = $_POST["den_p"];
    $val_spec = $_POST["val_spec"];
    $den_s = $_POST["den_s"];
    $den_c = $_POST["den_c"];
    $cant_p = $_POST["cant_p"];
    $suma_f = $_POST["suma_f"];
    $data_f = $_POST["data_f"];
    $nume_a = $_POST["nume_a"];
    $functie_a = $_POST["functie_a"];
    $locatie_a = $_POST["locatie_a"];
    $data_p = $_POST["data_p"];
    $nr_ore_po = $_POST["nr_ore_po"];
    $loc_cli = $_POST["loc_cli"];
    $adresa_cli = $_POST["adresa_cli"];
    
    try {
        
        $stmt = $conn->prepare("UPDATE pentrupaw SET val_spec=:val_spec, den_s=:den_s, den_c=:den_c, cant_p=:cant_p, suma_f=:suma_f, data_f=:data_f,
                               nume_a=:nume_a, functie_a=:functie_a, locatie_a=:locatie_a, data_p=:data_p, nr_ore_po=:nr_ore_po, loc_cli=:loc_cli, adresa_cli=:adresa_cli WHERE den_p=:den_p");

        
        $stmt->bindParam(':val_spec', $val_spec);
        $stmt->bindParam(':den_s', $den_s);
        $stmt->bindParam(':den_c', $den_c);
        $stmt->bindParam(':cant_p', $cant_p);
        $stmt->bindParam(':suma_f', $suma_f);
        $stmt->bindParam(':data_f', $data_f);
        $stmt->bindParam(':nume_a', $nume_a);
        $stmt->bindParam(':functie_a', $functie_a);
        $stmt->bindParam(':locatie_a', $locatie_a);
        $stmt->bindParam(':data_p', $data_p);
        $stmt->bindParam(':nr_ore_po', $nr_ore_po);
        $stmt->bindParam(':loc_cli', $loc_cli);
        $stmt->bindParam(':adresa_cli', $adresa_cli);
        $stmt->bindParam(':den_p', $den_p);

        
        $stmt->execute();

        echo "Record updated successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
if (isset($_POST["delete"]) && $_POST["delete"] != "") {
    $den_p = $_POST["den_p"];
    $val_spec = $_POST["val_spec"];
    $den_s = $_POST["den_s"];
    $den_c = $_POST["den_c"];
    $cant_p = $_POST["cant_p"];
    $suma_f = $_POST["suma_f"];
    $data_f = $_POST["data_f"];
    $nume_a = $_POST["nume_a"];
    $functie_a = $_POST["functie_a"];
    $locatie_a = $_POST["locatie_a"];
    $data_p = $_POST["data_p"];
    $nr_ore_po = $_POST["nr_ore_po"];
    $loc_cli = $_POST["loc_cli"];
    $adresa_cli = $_POST["adresa_cli"];
    
    
        try {
    
    $stmt = $conn->prepare("DELETE FROM pentrupaw WHERE val_spec=:val_spec OR den_s=:den_s OR den_c=:den_c OR cant_p=:cant_p OR suma_f=:suma_f OR data_f=:data_f OR
                           nume_a=:nume_a OR functie_a=:functie_a OR locatie_a=:locatie_a OR data_p=:data_p OR nr_ore_po=:nr_ore_po OR loc_cli=:loc_cli OR adresa_cli=:adresa_cli OR den_p=:den_p");

    
    $stmt->bindParam(':val_spec', $val_spec);
    $stmt->bindParam(':den_s', $den_s);
    $stmt->bindParam(':den_c', $den_c);
    $stmt->bindParam(':cant_p', $cant_p);
    $stmt->bindParam(':suma_f', $suma_f);
    $stmt->bindParam(':data_f', $data_f);
    $stmt->bindParam(':nume_a', $nume_a);
    $stmt->bindParam(':functie_a', $functie_a);
    $stmt->bindParam(':locatie_a', $locatie_a);
    $stmt->bindParam(':data_p', $data_p);
    $stmt->bindParam(':nr_ore_po', $nr_ore_po);
    $stmt->bindParam(':loc_cli', $loc_cli);
    $stmt->bindParam(':adresa_cli', $adresa_cli);
    $stmt->bindParam(':den_p', $den_p);

    
    $stmt->execute();

    echo "Record deleted successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();

    }
}
    if (isset($_POST["export"])) {
$stmt = $conn->query("SELECT id, den_p, val_spec, den_s, den_c, cant_p, suma_f, data_f, nume_a, functie_a, locatie_a, data_p, nr_ore_po, loc_cli, adresa_cli FROM pentrupaw");

if($stmt->rowCount() > 0){
$delimiter = ",";
$filename = "text".".xlsx";

$f = fopen('php://memory','w');

$fields = array('id','den_p', 'val_spec','den_s', 'den_c', 'cant_p', 'suma_f', 'data_f', 'nume_a', 'functie_a', 'locatie_a', 'data_p', 'nr_ore_po', 'loc_cli', 'adresa_cli');
fputcsv($f,$fields,$delimiter);

while($row = $stmt->fetch()){
$lineData = array($row['id'],$row['den_p'],$row['val_spec'],$row['den_s'],$row['den_c'],$row['cant_p'],$row['suma_f'],date('d/m/Y', strtotime($row['data_f'])),$row['nume_a'],$row['functie_a'],$row['locatie_a'],date('d/m/Y', strtotime($row['data_p'])),$row['nr_ore_po'],$row['loc_cli'],$row['adresa_cli']);
fputcsv($f,$lineData,$delimiter);
}

fseek($f,0);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="'. $filename .'";');

fpassthru($f);

}    
exit;
$stmt->close();

    }
    if (isset($_POST["import"])) {
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0 )
     {
        $file = fopen($filename, "r");
        $headerSkipped = false;
        
          while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
           {
               if (!$headerSkipped) {
                $headerSkipped = true;
                continue; 
            }
            
        
           
            
            $stmt = $conn->prepare("INSERT INTO pentrupaw ( den_p, val_spec, den_s, den_c, cant_p, suma_f, data_f, nume_a, functie_a, locatie_a, data_p, nr_ore_po, loc_cli, adresa_cli) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]')");
           $data[7] = date('d/m/Y', strtotime($data[7])); 
            $data[11] = date('d/m/Y', strtotime($data[11]));
       
            $stmt->execute();
             
             fclose($file);
            if(!isset($stmt))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
        }
           $stmt->close();
      
           
            
     }
     

           
     }
}
$conn = null;
?>