<?php
require("konf.php");
global $connect;
function lisaKasutaja($eesnimi, $perekonnanimi)
{
    global $connect;
    $stmt = $connect->prepare("INSERT INTO jalgrattaeksam (eesnimi, perekonnanimi) VALUES (?, ?)");
    $stmt->bind_param("ss", $eesnimi, $perekonnanimi);
    $stmt->execute();
    $stmt->close();
}
function teooriatulemus($id, $teooriatulemus)
{
    global $connect;
    $stmt = $connect->prepare("UPDATE jalgrattaeksam SET teooriatulemus=? WHERE id=?");
    $stmt->bind_param("ii", $teooriatulemus, $id);
    $stmt->execute();
    $stmt->close();
}
?>