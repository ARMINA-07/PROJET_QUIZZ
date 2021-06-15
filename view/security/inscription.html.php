<?php
 if (isset($_SESSION['arrayErrors'])) {
     $arrayErrors=$_SESSION['arrayErrors'];
     unset($_SESSION['arrayErrors']);
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="WEB_ROUTE/css/inscription.css">
<style>

</style>
  </head>
  <body class="overflow x:header" >
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        <div class="container-fluid " style="padding: 0%;">
        <h3 id="gana">LE PLAISIR DE JOUER </h3>
        <img style="width: 200px;heigth:200px;margin-top:-13%;" src="<?= WEB_ROUTE."images/tech221.png"?>" class="" alt="logo">
        </div>


    <div class="container ">    
        <div id="loginbox " style="margin-top:30px ;" class="mainbox col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-5  ">                    
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
                                           
                                <input id="login-username" type="text" class="form-control" name="nom" value="" placeholder="Aaaa">  
                                <div class="form-text text-danger">
                                                                    <?php echo isset($arrayErrors['nom']) ? $arrayErrors['nom']: '';?> 

                                </div>
                                      
                                </div>
                                <label>Prenom</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            <input id="login-username" type="text" class="form-control" name="prenom" value="" placeholder="Bbbb">   
                                           <div class="form-text text-danger">
                                                                                           <?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom']: '';?> 

                                           </div>
                                     
                                </div>
                                <label>Login</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="AbBaa">    
                                            <div class="form-text text-danger">
                                                                                            <?php echo isset($arrayErrors['login']) ? $arrayErrors['login']: '';?> 

                                            </div>
                                    
                                </div>
                                <label>Password</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            <input id="login-username" type="text" class="form-control" name="password" value="" placeholder="........">  
                                           <div class="form-text text-danger">
                                                                                         <?php echo isset($arrayErrors['password']) ? $arrayErrors['password'] : ''; ?>  
  
                                           </div> 
                                      
                                </div>
                                <label>Confirm Password</label>  

                                <div style="margin-bottom: 10px" class="input-group">
                                            
                                <input id="login-username" type="text" class="form-control" name="conpassword" value="" placeholder="........">  
                                <div class="form-text text-danger">
                                                                    <?php echo isset($arrayErrors['conpassword']) ? $arrayErrors['conpassword'] : ''; ?>  

                                </div>           
                                      
                                </div>

                                    <div id="avatar">

                                    <label>Avatar</label>

                                    </div>
                                    <a style="background-color:#E92929; color:#fff;" href="#" class="btn btn-form-text " style="float:right">Choisir un fichier  </a>



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
    <style>
        .panel-title{
    height:80px;
    background-color: #E92929;
    color: white;
    padding: 30px;

}  
    
   
   
   
   

#login-username{
    height: 55px;
}      
#login-password{
    height: 55px;
} 
#gana{
    text-align: center;
    background-color: #E92929;
    height: 200px;
    color: white ;
    padding: 70px;
} 
#header{
   color: #E92929;

}      
#title{
   color:#E92929 ;

}   

.container{
    margin-left: 3%;
}


    </style>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>