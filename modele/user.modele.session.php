<?php 

function find_login_password(string $login, string $password){
    // 1 lire contenu du fichier 
    $json=file_get_contents(ROUTE_DIR.'data/user.data.json');
    // 2 convertir le json en tableau
    $arrayUser= json_decode($json,true);
    foreach($arrayUser as $user){
        if ($user['login']==$login && $user['password']==$password) {
          return $user;
        }
    }
    return [];
}
 function find_all_users(){
   $json =file_get_contents(FILE_USERS);
   // 2 convertir le json en tableau
  return json_decode($json,true);
 }
 function find_all_question(){
  $json =file_get_contents(FILE_QUESTION);
  // 2 convertir le json en tableau
 return json_decode($json,true);
}


function add_user(array $user){
 $json=file_get_contents(FILE_USERS);
  $arrayUser= json_decode($json,true);
   $arrayUser[]=$user;
      //convertir le tableau en json
$json = json_encode($arrayUser);
file_put_contents(FILE_USERS , $json);
 }

function add_question(array $question){
  $json=file_get_contents(FILE_QUESTION);
  $question['id']=uniqid();
   $arrayQuestion= json_decode($json,true);
    $arrayQuestion[]=$question;
       //convertir le tableau en json
 $json = json_encode($arrayQuestion);
 file_put_contents(FILE_QUESTION , $json);
  }

 function login_exist(string $login):array{
  $arrayUser=find_all_users();
  foreach($arrayUser as $user){
      if ($user['login']==$login) {
        return $user;
      }
   }
  return [];
 }
 function nombrePage($array,$nombreElement):int{
   $nombrePage=0;
   if ((count($array)%$nombreElement)==0) {
       $nombrePage=(count($array)/$nombreElement);
   }else{
    $nombrePage=(count($array)/$nombreElement)+1;
   }
   return $nombrePage;
 } 

 function pagination($array,int $page,int $nombreElement):array{
   $arrayelement=array();
   $indiceDepart=($page*$nombreElement)-$nombreElement;
   $indiceArrivee=$page*$nombreElement;
   for ($i=$indiceDepart; $i < $indiceArrivee ; $i++) { 
     if ($i>count($array)) {
       return $arrayelement;
     }else {
        $arrayelement[]=$array[$i];
     }
   }
   return $arrayelement;
 }


?>