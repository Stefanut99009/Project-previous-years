<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$tableName = 'pentrupaw';




$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db = $conn;

$columns = ['id', 'den_p', 'val_spec', 'den_s', 'den_c', 'cant_p', 'suma_f', 'data_f', 'nume_a', 'functie_a', 'locatie_a', 'data_p', 'nr_ore_po','loc_cli' ,'adresa_cli'];
$fetchData = fetch_data($conn, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
    $msg = '';

    if (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT $columnName FROM $tableName";
        $orderBy = "";

        if (isset($_POST['pret_cresc'])) {
            $orderBy = "suma_f ASC";
        }

        if (isset($_POST['pret_desc'])) {
            $orderBy = "suma_f DESC";
        }

        if (isset($_POST['nume_asc'])) {
            $orderBy = "den_p ASC";
        }

        if (isset($_POST['nume_desc'])) {
            $orderBy = "den_p DESC";
        }
        if (isset($_POST['normal'])) {
            $query = "SELECT $columnName FROM $tableName";
        }
        if (!empty($orderBy)) {
            $query .= " ORDER BY $orderBy";
        }

        $stmt = $db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            if ($stmt->rowCount() > 0) {
                $msg = $result;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = $db->errorInfo()[2];
        }
    }

    return $msg;
}
?>
