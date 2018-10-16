<?php
class Connexion {


  private $bdd;

  public function Connexion(){

    try { $this->bdd = new PDO('mysql:host=localhost;dbname=wedding;charset=utf8', 'admin', 'admin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }

      catch (PDOException $e) {

        echo 'Connexion échouée : ' . $e->getMessage();

    }

  }

  public function donne(){

    // $p = $_POST["prenom"];
    // $n = $_POST["nom"];
    // $e = $_POST["email"];
    // $s = $_POST["sujet"];
    // $m = $_POST["txtmsg"];
    $chsql = "INSERT INTO formulaire (prenom, nom, email, sujet, message) VALUES (:p,:n,:e,:s,:m)";
    $req = $this->bdd->prepare($chsql);
    $req->bindParam(":p",$_POST["prenom"]);
    $req->bindParam(":n",$_POST["nom"]);
    $req->bindParam(":e",$_POST["email"]);
    $req->bindParam(":s",$_POST["sujet"]);
    $req->bindParam(":m",$_POST["txtmsg"]);
    $req->execute();


  }

  public function confirme(){
    $miniform = "INSERT INTO Confirmation (name, mail) VALUES (:nc,:ec)";
    $bouh = $this->bdd->prepare($miniform);
    $bouh->bindParam(":nc",$_POST["nomconf"]);
    $bouh->bindParam(":ec",$_POST["mailconf"]);
    $bouh->execute();
  }


}


?>
