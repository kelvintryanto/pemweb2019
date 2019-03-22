<?php
 try {
    $pdo = new PDO('mysql:host=localhost;dbname=twittie', 'root', '');
     
} catch (PDOException $e) {
    print "Connetion Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
