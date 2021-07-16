<?php
    //fonction de validation des formulaires
    function validation_date($valeur,string $key):array{
        $arrayErrors=array();
        if (empty($valeur)) {
            $arrayErrors[$key]="Ce champs est obligatoire ";
        }elseif (!is_numeric($valeur)) {
            $arrayErrors[$key]="Saisir une valeur entiere ";
        }elseif ($valeur<=0) {
            $arrayErrors[$key]="Saisir une valeur positive ";
        }
        return $arrayErrors;
        }
    function est_vide($valeur):bool{
        return empty($valeur);
    }
    function est_numerique(int $valeur):bool{
        if (is_numeric($valeur)) {
            return true;
        }
        else {
            return false;
        }
    }
    function valid_mail($valeur):bool{
        if (filter_var($valeur , FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }
    }
    function valid_password(string $valeur):bool{
        return strlen($valeur)>=8;
    }
    /* fonction pour valider mois */
function valid_mois($valeur):bool{
    if (($valeur>0)&& $valeur<=12) {
       return true;
    }else {
        return false;
    }
}

/* fonction pour valider annee  */
function bisextile_annee(int $annee):bool{
if ($annee%400==0 || ($annee%100!=0 && $annee%4==0)){
    return true ;

  }
  return false;
}
/* fonction validation date */
function valide_date(int $jour, int $mois , int $annee):bool{
    if (valid_mois($mois)==true) {
       switch ($mois) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
              return $jour>0 && $jour<=31;
            case 4:
            case 6:
            case 9:
            case 11:
                return $jour>0 && $jour<=30;
            case 2 :
                if (bisextile_annee($annee)==true) {
                    return $jour > 0 && $jour <= 29;
                } else {
                    return $jour > 0 && $jour <= 28;
                }
                default:
                return false;
       }
    }else {
        return false;
    }
}
function form_valid($arrayErrors):bool{
    if (count($arrayErrors)==0) {
        return true;
    }
    return false;
}

function validation_login(string $valeur, string $key,array &$arrayErrors){
    if (est_vide($valeur)) {
        $arrayErrors[$key] = "le login est obligatoire";
    }elseif (!valid_mail($valeur)) {
        $arrayErrors[$key] = "le login doit etre un email (exemple123@gmail.com)";
    }
        
}

function validation_password(string $valeur,string $key,array &$arrayErrors,$min=6,$max=10){
    if (est_vide($valeur)) {
        $arrayErrors[$key] = "le password est obligatoire";
    }elseif ((strlen($valeur)<$min)||(strlen($valeur)>$max)) {
        $arrayErrors[$key] = "le password doit etre entre $min et $max";
    }
   
}

function valid_nom($valeur, string $key,array &$arrayErrors){
    if (est_vide($valeur)) {
        $arrayErrors[$key] = "le nom est obligatoire ";
    }
}

function valid_prenom($valeur, string $key,array &$arrayErrors){
    if (est_vide($valeur)) {
        $arrayErrors[$key] = "le prenom est obligatoire ";
    }
}
function champs_obligatoire($valeur, string $key,array &$arrayErrors){
    if (est_vide($valeur)) {
        $arrayErrors[$key] = "le champs est obligatoire ";
    }
}

function valid_date($valeur, string $key,array &$arrayErrors){
    if (est_vide($valeur)) {
        $arrayErrors[$key] = "la date de naissance est obligatoire ";
    }
}        
    
?>