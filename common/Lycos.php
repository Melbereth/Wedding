<?php

class Lycos{

  function __construct(){

  }


  function Vachercher(){

        $testpage = (isset($_GET['action']))?$_GET['action']:"contain";
        $testouillle = array('contain', 'about', 'service', 'gallery', 'contact');
        $teste = in_array($testpage, $testouillle);
        $test2 = $testpage != 'contact';

        if($teste){
          include ('content/'.$testpage.'.php');
        }else{
          include ('content/contain.php');
        }

         if($test2){
          include ('form.php');
         }

         require ('connexion.php');
         $tartanpion = new Connexion();

        if(isset($_GET['sql'])){
          $tartanpion->donne();
        }

        if(isset($_GET['piou'])){
          $tartanpion->confirme();
        }

    }



}
