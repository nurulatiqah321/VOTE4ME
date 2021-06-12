<?php
use vote4me\DataSource;
require_once 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();


if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            
            
            $election_id = "";
            if (isset($column[0])) {
                $election_id = mysqli_real_escape_string($conn, $column[0]);
            }
            $matricno = "";
            if (isset($column[1])) {
                $matricno = mysqli_real_escape_string($conn, $column[1]);
            }
            $vname = "";
            if (isset($column[2])) {
                $vname = mysqli_real_escape_string($conn, $column[2]);
            }
            $kulliyyah = "";
            if (isset($column[3])) {
                $kulliyyah = mysqli_real_escape_string($conn, $column[3]);
            }
            $password = "";
            if (isset($column[4])) {
                $password = mysqli_real_escape_string($conn, $column[4]);
                
            }
            $password1 = password_hash($password, PASSWORD_DEFAULT);
            $sqlInsert = "INSERT into voters (election_id,matricno,vname,kulliyyah,password)
                   values (?,?,?,?,?)";
            $paramType = "issss";
            $paramArray = array(
                $election_id,
                $matricno,
                $vname,
                $kulliyyah,
                $password1
            );
            $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
            
            if (! empty($insertId)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
<script src="jquery-3.2.1.min.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<style>


.outer-scontainer {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-top: 15px;
    margin-bottom: 20px;
}

.btn-submit {
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 14px;
    width: 90px;
    border-radius: 2px;
    cursor: pointer;
    margin-top: 5px;
}

.outer-scontainer table {
    border-collapse: collapse;
    width: 100%;
}

.outer-scontainer th {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

.outer-scontainer td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display: none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
</head>



</html>