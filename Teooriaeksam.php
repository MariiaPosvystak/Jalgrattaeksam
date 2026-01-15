<?php
require_once("funktsioonid.php");
if (isset($_REQUEST['teooriatulemus'])) {
    teooriatulemus($_REQUEST['id'], $_REQUEST['teooriatulemus']);
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!doctype html>
<html lang="et">
<head>
    <title>Teooriaeksam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.php");
include("nav.php");
?>
<table>
    <?php
    /*while($kask->fetch()){
        echo " 
 <tr> 
 <td>$eesnimi</td> 
 <td>$perekonnanimi</td> 
 <td><form action=''> 
 <input type='hidden' name='id' value='$id' /> 
 <input type='text' name='teooriatulemus' />
 <input type='submit' value='Sisesta tulemus' /> 
 </form> 
 </td> 
</tr>
 ";
    }*/
    ?>
</table>
<?php
include("footer.php");
?>
</body>
</html>
