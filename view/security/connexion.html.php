<?php
 if (isset($_SESSION['arrayErrors'])) {
     $arrayErrors=$_SESSION['arrayErrors'];
     unset($_SESSION['arrayErrors']);
 }
 require_once(ROUTE_DIR.'view/inc/header.html.php');
 require_once(ROUTE_DIR.'view/inc/footer.html.php');

?>


<div class="container-fluid " style="padding: 0%;">
<img src="<?= WEB_ROUTE."images/tech221.png"?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
<h3 class="gana">LE PLAISIR DE JOUER </h3>


</div>
    <div class="container">    
        <div id="loginbox" style="margin-top:200px;" class="mainbox col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-5 ">                    
            <div class="panel panel" >
                    <div class="panel-heading ">
                        <div class="panel-title "> login Form</div>
                    </div>     

                    <div style="padding-top:50px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-form-text text-danger col-sm-12"></div>
                            
                        <form  method="POST" action="<?= WEB_ROUTE ?>">
                        <input type="hidden"  name="controlleurs" value="security">
                        <input type="hidden"  name="action" value="connexion">

                                    
                                <div style="margin-bottom: 40px" class="input-group">
                                            <input id="username" type="text" class="form-control" name="login" value="" placeholder="login">  
                                            <div class="form-text text-danger">
                                            <?php echo isset($arrayErrors['login']) ? $arrayErrors['login']: '';?> 
                                    </div>
                                </div>
                              

                                    
                                <div style="margin-bottom: 40px" class="input-group">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="password">
                                            <div class="form-text text-danger">
                                                                  <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>  

                                             </div>
                                        </div>
                            

                                    


                                         <div style="margin-top:50px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">
                                        <button style="background-color:#E92929;" class="btn btn-form-text text-white" name="valider" type="submit">Connexion </button> 
                                        <a href=" <?= WEB_ROUTE.'?controlleurs=security&view=inscription'?>" style="float:right; margin-top:15px;">S'inscrire en tant que joueur?</a>

                                        </div>
                                    </div>


                        </form>     



                    </div>  

            </div>  

        </div>
        <style type="text/css">
         
    

       </style>        
                
    </div>
    
      


