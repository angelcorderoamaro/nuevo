<?php
$n=$_POST['nom'];
$p=$_POST['pass'];
if($n=="")

    {
    //echo"El campo nombre esta vacio";
   // header('Location:ndex.php');
    echo "<script>alert('Campo nombre vacio');  window.location='index.php'</script>";
    }
if($p=="")
{
      echo "<script>alert('Campo password vacio');  window.location='index.php'</script>";
}
if($n=="admin" && $p=="123")
{
    echo"<script>alert('Bienvenido al sistema');window.location='sistema.php'</script>";
}
else{
    echo"<script>alert('usuario o password invalidos');window.location='login.php'</script>";
}
?>