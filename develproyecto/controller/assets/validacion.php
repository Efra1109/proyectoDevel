<?php

ob_start();

/**
* SEGURIDAD DE SERVIDOR
*/
class seguridad
{
  
  function __construct()
  {
    SESSION_START();
  }


  public function seguridadLogin(){

    //var_dump($_SESSION['verificaciondoble']);


    if(isset($_SESSION['template_nombre'])){

      return $inicio = true;

    }elseif($_SESSION['verificaciondoble'] == true){
      
      
      ?>
      <script>

        console.log("<? echo $_SESSION['verificaciondoble']?>")
       window.location.href = '../verificar.php';
      
      </script>
      
      <?php
    }else{


        session_destroy();

        ?>

        <script>

        console.log("Se verifico que no hay datos");
        window.location.href = '../';

        </script>

        <?php



      }
    }
    
    public function iniciologin($verificar){
      if($verificar == true){
        if(isset($_SESSION['verificaciondoble']) == false){
          //echo "verificaciondobe false " . $_SESSION['verificaciondoble'];
          header('location: ./index.php');
        }elseif(isset($_SESSION['template_nombre'])){
          header('location: ./view/');
          //echo "template_nombre";
        }
        return;
      }
  
      if(isset($_SESSION['template_nombre'])){
        header('location: ./view/');
        //echo "template_nombre";
      }elseif(isset($_SESSION['verificaciondoble']) == true){
        header('location: ./verificar.php');
        //echo "verificaciondoble true";
      }else {
        session_destroy();
      }
      return true;
    }
  

  }
  
  ob_end_flush();
  ?>
        