<?php
 if (isset($_SESSION['arrayErrors'])) {
     $arrayErrors=$_SESSION['arrayErrors'];
     unset($_SESSION['arrayErrors']);
     
      }
     require_once(ROUTE_DIR.'view/inc/header.html.php');
     require_once(ROUTE_DIR.'view/inc/footer.html.php');
    
        require_once(ROUTE_DIR.'view/inc/entete.html.php');

 
?>

<body class="overflow x:header" >


    <div class="container ">    
        <div id="loginbox " style="margin-top:30px ;" class="mainbox col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-5 ">                    
            <div class="panel" >
                    <div id="header">
                        <h2>S'INSCRIRE</h2>
                    </div>
                    <div id="title">
                        <h3>Pour tester votre niveau de culture générale</h3>
                    </div>

                    <div style="padding-top:10px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-form-text text-danger col-sm-12"></div>
                        <?php if (isset($arrayErrors['erreurConnexion'])):?>
                    <div class="alert alert-primary" role="alert">
                        <strong><?php echo isset($arrayErrors['erreurConnexion']) ? $arrayErrors['erreurConnexion']: '';?> </strong>
                    </div>
                    <?php endif ?>

                            
                        <form id="" class="form-horizontal" action="<?=WEB_ROUTE?>" method="POST" >
                        <input type="hidden"  name="controlleurs" value="security">
                        <input type="hidden"  name="action" value="inscription">

                                  <label>Nom</label>  
                                <div style="margin-bottom: 10px" class="input-group">
                                           
                                <input class="login-username" type="text" class="form-control" name="nom" value="" placeholder="Aaaa">  
                                <div class="form-text text-danger">
                                    <?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom']: '';?> 

                                </div>
                                      
                                </div>
                                <label>Prenom</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            <input class="login-username" type="text" class="form-control" name="prenom" value="" placeholder="Bbbb">   
                                           <div class="form-text text-danger">
                                                <?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom']: '';?> 

                                           </div>
                                     
                                </div>
                                <label>Login</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            <input class="login-username" type="text" class="form-control" name="login" value="" placeholder="AbBaa">    
                                            <div class="form-text text-danger">
                                                <?php echo isset($arrayErrors['login']) ? $arrayErrors['login']: '';?> 

                                            </div>
                                    
                                </div>
                                <label>Password</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            <input class="login-username" type="text" class="form-control" name="password" value="" placeholder="........">  
                                           <div class="form-text text-danger">
                                                <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>  
  
                                           </div> 
                                      
                                </div>
                                <label>Confirm Password</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            
                                <input class="login-username" type="text" class="form-control" name="conpassword" value="" placeholder="........">  
                                <div class="form-text text-danger">
                                    <?php echo isset($arrayErrors['conpassword']) ? $arrayErrors['conpassword'] : ''; ?>  

                                </div>           
                                      
                                </div>




                                    <div class="form-group">
                                        <!-- Button -->

                                        <div class="  ml-3 mt-3">
                                             <button class="btn"  style="margin-top:10px;color:#fff; background-color:#E92929" type="submit" name="valider"   >Creer compte </button> 


                                        </div>
                                        <a href="<?= WEB_ROUTE.'?controlleurs=security&view=connexion' ?>" style="float:left; margin-top:15px;">SE CONNECTER</a>

                                    </div>


                        </form>     



                    </div>  

            </div>  

        </div>
                
    </div>
   