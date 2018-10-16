<!DOCTYPE html>
<?php
 include ('common/header.php');
 require ('common/Lycos.php');
 $go = new Lycos();
 $go->Vachercher();
 include ('common/footer.php');
 include ('common/scriptfin.php');

 ?>
