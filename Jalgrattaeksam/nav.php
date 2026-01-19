<?php
session_start();
?>
<nav class="nav">
    <ul>
        <li><a href="registreerimine.php">Registration</a></li>
        <?php
        if (isset($_SESSION['kasutaja'])&& $_SESSION['kasutaja']=='admin') {
            echo       '<li><a href="Teooriaeksam.php">Teooria eksam</a></li>
        <li><a href="Slaalom.php">Slaalom</a></li>
        <li><a href="Ringtee.php">Ringtee</a></li>
        <li><a href="Tanav.php">Tänavasõit</a></li>
        <li><a href="admin.php">Lubadeleht</a></li>';
        }
        if (isset($_SESSION['kasutaja'])&& $_SESSION['kasutaja']!=='admin') {
            echo             '<li>
                <li><a href="Lubadeleht.php">Lubadeleht</a></li>
            </li>';
        }
        if (isset($_SESSION['kasutaja'])) {
            echo '<li><p>';
            echo 'Tere, '.htmlspecialchars($_SESSION['kasutaja']);}
        echo '</li></p>';
        ?>

        <li><a href="Lubadeleht.php">Lubadeleht</a></li>
        <?php

        if (isset($_SESSION['kasutaja'])) {

            echo '<li class="right">Tere, '.htmlspecialchars($_SESSION['kasutaja']);
            echo '</li><li class="right"><a href="logout.php" class="btn2" id="login">Logi välja</a></li>';}
        else{
            echo '<li class="right"><a href="reg.php">Registreeruge</a></li>';
            echo  '<li class="right"><a href="login.php">Logi sisse</a></li>';
        }
        ?>
    </ul>
</nav>
