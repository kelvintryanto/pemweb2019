<?php
 try {
    $dbh = new PDO('mysql:host=localhost;dbname=twittie', 'root', '');
    // set error mode
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
} catch (PDOException $e) {
    print "Connetion Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
