<?php require_once(ROUTE_DIR.'view/inc/entete.html.php');
    require_once(ROUTE_DIR.'view/inc/quizz.html.php');
    require_once(ROUTE_DIR.'view/inc/header.html.php');
?>

      <div class="container">
          <div class="row">
              <div class="col-md-4">
              <?php require_once(ROUTE_DIR.'view/inc/menu.html.php')?>
            </div>
            <div class="col-md-6 ml- 5  ">
                <?php 
                $arrayUser=find_all_users();
                ?>
               <div class="row">
               <div class="table">
                   <div class="border border-danger"> 
                       <?php $json=file_get_contents(ROUTE_DIR.'data/user.data.json');
                            $arrayUser= json_decode($json,true);
                            $nombrePage=0;
                            $suivant=2;
                            $precedent=0;
                            $page=0;
                            $tabAdmin=[];
                            foreach ($arrayUser as $user ) {
                                if ($user['role']=='ROLE_ADMIN') {
                                    $tabAdmin[]=$user;
                                }
                            }
                            if (!$_GET['page']) {
                                $page=1;
                                $_SESSION['admin']=$tabAdmin;
                                $nombrePage=nombrePage($_SESSION['admin'],10);
                                $arrayAdmin=pagination( $_SESSION['admin'],$page,10);
                            }elseif ($_GET['page']) {
                                $page=$_GET['page'];
                                $suivant=$page+1;
                                $precedent=$page-1;
                                $_SESSION['admin']=$tabAdmin;
                                $nombrePage=nombrePage($_SESSION['admin'],10);
                                $arrayAdmin=pagination( $_SESSION['admin'],$page,10);
                            }

                       ?>
                    <table class="table ">
                        <thead>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            
                            <?php foreach($arrayAdmin as $user): ?>
                                    <tr>
                                        <td><?=$user['prenom']?></td>
                                        <td><?=$user['nom']?></td>
                                    </tr>
                                <?php endforeach ?>
                        </tbody>
                        </div>
                    </table>
                    <a name="" id="" class="btn btn-primary <?=(empty($_GET['page']) || $_GET['page']==1) ? 'disabled':''; ?>" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste_admin&page='.$precedent?>" role="button">precedent</a>
                    <a name="" id="" class="btn btn-primary <?=($_GET['page']) >  $nombrePage-1 ? 'disabled':''; ?>" href="<?= WEB_ROUTE.'?controlleurs=admin&view=liste_admin&page='.$suivant?>" role="button">suivant</a>
                    
                </div>
               </div>
            </div>
          </div>
      </div>
  <?php  require_once(ROUTE_DIR.'view/inc/footer.html.php');?>
