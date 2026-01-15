<nav class="nav">
    <ul>
        <li><a href="registreerimine.php">Registration</a></li>
        <li><a href="Teooriaeksam.php">Teooria eksam</a></li>
        <li><a href="Slaalom.php">Slaalom</a></li>
        <li><a href="Ringtee.php">Ringtee</a></li>
        <li><a href="Tanav.php">Tänavasõit</a>
        <li><a href="Lubadeleht.php">Lubadeleht</a>
        <?php
        if (isset($_SESSION['turvastamine'])) {
            echo '<li>Tere, '.htmlspecialchars($_SESSION['turvastamine']).'</li>';
            echo '<li class="right"><a href="logout.php">Logi välja</a>';
        }
        else{
            echo '<li class="right"><a href="login.php">Logi sisse</a>';
        }
        ?>
    </ul>
</nav>
