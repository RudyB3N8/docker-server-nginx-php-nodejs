<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    try {
        echo '<h1>PHP Version '.getenv('PHP_VERSION').'</h1>';
        $dbh = new PDO('mysql:host=db;port=3306', $_SERVER['MYSQL_USER'], $_SERVER['MYSQL_PASSWORD']);
        foreach($dbh->query("SHOW VARIABLES LIKE 'version';") as $row) {
            echo '<h2>MySQL Version '.$row['Value'].'</h2>';
        }
        $dbh = null;
        echo '<a href="/phpinfo.php">phpinfo</a>';
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>