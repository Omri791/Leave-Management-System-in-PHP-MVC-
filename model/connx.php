<?php
abstract class connx {
protected $pdo;
function __construct(){
$this->pdo =new PDO('mysql:host=localhost;dbname=congeee','root','');
}
function __destruct(){
 $this->pdo=null;
}
}?>