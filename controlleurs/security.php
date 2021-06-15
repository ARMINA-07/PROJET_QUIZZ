<?php
//il intreagit avec user.model.session pour savois si l'utilisateur existe
if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['view'])) {
       if ($_GET['view']=='connexion') {
        require_once(ROUTE_DIR.'view/security/connexion.html.php');
       }elseif($_GET['view']=='inscription') {
        require_once(ROUTE_DIR.'view/security/inscription.html.php');
       }elseif($_GET['view']=='deconnexion') {
           deconnexion();
        require_once(ROUTE_DIR.'view/security/connexion.html.php');
       }
    }else {
        require_once(ROUTE_DIR.'view/security/connexion.html.php');
    }
}elseif ($_SERVER['REQUEST_METHOD']=='POST')  {
    if (isset($_POST['action'])) {
       if ($_POST['action']=='connexion') {
           connexion((string)$_POST['login'],(string)$_POST['password']);
          
       }elseif ($_POST['action']=='inscription') {
          // unset($_POST['valider']);
          // unset($_POST['controlleurs']);
         //  unset($_POST['action']);
        inscription($_POST);
     
    }
    }
}


function connexion(string $login,string $password):void{
   
    $arrayErrors=array();
     validation_login((string) $login,'login',$arrayErrors);
     
     validation_password((string)$password,'password',$arrayErrors);

     if (form_valid($arrayErrors)) {
        // appel du model
        $user = find_login_password($login , $password);

        if (count($user)==0) {
          $arrayErrors['erreurConnexion']="login ou password incorrect ";
          $_SESSION['arrayErrors']= $arrayErrors;
          header('location:'.WEB_ROUTE.'?controlleurs=security&view=connexion');
        }else{
            $_SESSION['userConnect']=$user;
            if ($user['role']=='ROLE_ADMIN') {
                header('location:'.WEB_ROUTE.'?controlleurs=admin&view=liste.question');
            }elseif ($user['role']== 'ROLE_JOUEUR') {
             header('location:'.WEB_ROUTE.'?controlleurs=joueur&view=jeu');
            }
        }
     }else {
         $_SESSION['arrayErrors']=$arrayErrors;
         header('location:'.WEB_ROUTE.'?controlleurs=security&view=connexion');
     }
}

function inscription( array $data):void{
    $arrayErrors=array();
    extract($data);
     validation_login($login,'login',$arrayErrors);
     if (empty($login)) {
        $arrayErrors['login']="oblogatoire";

     }
     if (login_exist($login)) {
       $arrayErrors['login']="Ce login existe deja ";
       $_SESSION['arrayErrors']=$arrayErrors;
       header('location:'.WEB_ROUTE.'?controlleurs=security&view=inscription');
       
     }
     validation_password($password,'password',$arrayErrors);
     valid_nom($nom,'nom',$arrayErrors);
     valid_prenom($prenom,'prenom',$arrayErrors);
     valid_date($age,'age',$arrayErrors);
     if ($password!=$conpassword) {
        $arrayErrors['conpassword']="les deux mots de passe ne sont pas identiques";
       
     }
     if (form_valid($arrayErrors)) {
        // appel du model
          $data['role']=est_admin()?'ROLE_ADMIN': 'ROLE_JOUEUR';
          add_user($data);
           header('location:'.WEB_ROUTE.'?controlleurs=security&view=connexion');
           
       
     }else {
         $_SESSION['arrayErrors']=$arrayErrors;
         header('location:'.WEB_ROUTE.'?controlleurs=security&view=inscription');
    }
}



function deconnexion():void{
    unset ($_SESSION['userConnect']);
}

?>