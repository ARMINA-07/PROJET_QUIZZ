<?php 
 if (!est_admin()) header("location:".WEB_ROUTE.'?controlleurs=security&view=connexion');

 if ($_SERVER['REQUEST_METHOD']=='GET') {
     if (isset($_GET['view'])) {
         
        if ($_GET['view']=='list.question') {
            require_once(ROUTE_DIR.'view/admin/list.question.html.php');
        }elseif ($_GET['view']=='creer_question') {
            require_once(ROUTE_DIR.'view/admin/creer_question.html.php');
        }elseif ($_GET['view']=='liste_joueur') {
            require_once(ROUTE_DIR.'view/admin/liste_joueur.html.php');
        }elseif ($_GET['view']=='creer_admin') {
            require_once(ROUTE_DIR.'view/admin/creer_admin.html.php');
        }elseif ($_GET['view']=='liste_admin') {
            require_once(ROUTE_DIR.'view/admin/liste_admin.html.php');
        }elseif ($_GET['view']=='tableaudebord') {
            require_once(ROUTE_DIR.'view/admin/tableaudebord.html.php');
        }


           
           
     
   }

 }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
     if (isset($_POST['action'])) {
         if ($_POST['action']=='creer_question') {
             if (isset($_POST['enregistrer'])) {
                 unset($_POST['controlleurs']);
                 unset($_POST['action']);
                 unset($_POST['enregistrer']);
                question($_POST);
             }elseif (isset($_POST['plus'])) {
                 $_SESSION['question']=$_POST['question'];
                 $_SESSION['points']=$_POST['points'];
                 $_SESSION['nbr_reponse']=$_POST['nbr_reponse'];
                 $_SESSION['type_reponse']=$_POST['type_reponse'];
                 header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer_question');
             }
         }
     }
 }
 
function question(array $data){
    $arrayErrors=[];
    extract($data);
    champs_obligatoire($question,'question',$arrayErrors);
    champs_obligatoire($points,'points',$arrayErrors);
    champs_obligatoire($nbr_reponse,'nbr_reponse',$arrayErrors);
    if (form_valid($arrayErrors)) {
        add_question($data);
        header('location:'.WEB_ROUTE.'?controlleurs=admin&view=list.question');
    }else {
        $_SESSION['arrayErrors'] =  $arrayErrors;
        header('location:'.WEB_ROUTE.'?controlleurs=admin&view=creer_question');
    }

}

?>