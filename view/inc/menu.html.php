<?php
   require_once(ROUTE_DIR.'view/inc/header.html.php');
   require_once(ROUTE_DIR.'view/inc/footer.html.php');
   
  ?>



<?php if (est_admin()) :?>
<div class="vertical-menu">
  <h3 class="active">AAA BBB</h3>
  <div class="icon">
    <a href="<?=WEB_ROUTE.'?controlleurs=admin&view=list.question'?>">Liste question</a>
    <img src="<?= WEB_ROUTE."images/note.jpg"?>"  id="menu1"class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> 
  </div>
  <div class="icon">
    <a href="<?=WEB_ROUTE.'?controlleurs=admin&view=creer_admin'?>">creer admin</a>
    <img src="<?= WEB_ROUTE."images/plus.png"?>"  id="menu2"class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> 

  </div>

  <div class="icon">
    <a href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste_joueur'?>">Liste joueur</a>
    <img src="<?= WEB_ROUTE."images/note.jpg"?>"  id="menu3"class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> 

  </div>

  <div class="icon">
   <a href="<?=WEB_ROUTE.'?controlleurs=admin&view=creer_question'?>">creer question</a>
   <img src="<?= WEB_ROUTE."images/plus.png"?>"  id="menu4"class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> 

  </div>

  <div class="icon">
    <a href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste_admin'?>">liste admin</a>
    <img src="<?= WEB_ROUTE."images/note.jpg"?>"  id="menu5"class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> 

  </div>

  <div class="icon">
    <a href="#">tableau de bord</a>
    <img src="<?= WEB_ROUTE."images/note.jpg"?>" id="menu6" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> 

  </div>
    <a name="" id="" class=" " href="<?=WEB_ROUTE.'?controlleurs=security&view=deconnexion'?>">Deconnexion</a>
</div>
<?php endif ?>

<style>
  .icon a:hover{
      background-color: #ddd;
      color: black;
      border-left: black 2px solid;
  }
</style>

