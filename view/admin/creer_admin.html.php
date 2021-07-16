<?php require_once(ROUTE_DIR.'view/inc/entete.html.php');
    require_once(ROUTE_DIR.'view/inc/quizz.html.php');
    require_once(ROUTE_DIR.'view/inc/header.html.php');
   /*  if (isset($_SESSION['arrayErrors'])) {
        $arrayErrors=$_SESSION['arrayErrors'];
        unset($_SESSION['arrayErrors']);
        
         } */
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <?php require_once(ROUTE_DIR.'view/inc/menu.html.php');?>
        </div>
        <div class="col-sm-8">
        <?php require_once(ROUTE_DIR.'view/security/inscription.html.php');?>
        </div>
    </div>
</div>