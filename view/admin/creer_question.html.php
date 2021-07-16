<?php require_once(ROUTE_DIR.'view/inc/header.html.php')?>
<?php require_once(ROUTE_DIR.'view/inc/entete.html.php')?>
<?php require_once(ROUTE_DIR.'view/inc/quizz.html.php');
 if (isset($_SESSION['arrayErrors'])) {
    $arrayErrors=$_SESSION['arrayErrors'];
    unset($_SESSION['arrayErrors']);
    
     }
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <?php require_once(ROUTE_DIR.'view/inc/menu.html.php')?>
        </div>
            <div class="col-md-8 ">
                <div class="border border-danger ml-5 p-4 rounded">
                    <form action="<?=WEB_ROUTE?>" method="post">
                    <input type="hidden"  name="controlleurs" value="admin">
                     <input type="hidden"  name="action" value="creer_question">
                    <div class="ml-5">
                    <div class="row">
               <div class="form-group">
                 <label for="">Questions</label>
                 <textarea class="form-control" name="question" id="" rows="4" cols="50"><?=isset($_SESSION['question']) ? $_SESSION['question'] :'' ?></textarea>
                 <small id="helpId" class="form-text text-danger"> <?php echo isset($arrayErrors['question']) ? $arrayErrors['question']: '';?> </small>
               </div>
            </div> <br>
            <div class="row">
                <div class="form-group">
                  <label for="">nbr points</label>
                  <input type="number"
                    class="form-control" name="points" id="" value="<?=isset($_SESSION['points']) ? $_SESSION['points'] :'' ?>" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-danger"> <?php echo isset($arrayErrors['points']) ? $arrayErrors['points']: '';?></small>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                  <label for="">type de reponse</label>
                  <select  name="type_reponse" id="">
                  <option >choisir...</option>
                    <option value="text">texte</option>
                    <option value="simple">simple</option>
                    <option value="multiple">multiple</option>
                  </select>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-6">
                <div class="form-group">
                  <label for="">nbr reponse</label>
                  <input type="number"
                    class="form-control" name="nbr_reponse" id="" aria-describedby="helpId" value="<?=isset($_SESSION['nbr_reponse']) ? $_SESSION['nbr_reponse'] :'' ?>" placeholder="">
                  <small id="helpId" class="form-text text-danger"><?php echo isset($arrayErrors['nbr_reponse']) ? $arrayErrors['nbr_reponse']: '';?></small>
                </div>
                 </div>
                 <div class="col-4">
                     <button type="submit" class="btn btn-dark text-white mt-4 " name="plus">+</button>
                 </div>
             </div>
                    <?php for($i=0;$i<$_SESSION['nbr_reponse'];$i++): ?>
                       <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">reponse<?=$i?></label>
                                    <input type="text"
                                        class="form-control" name="reponse<?=$i?>" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted"></small>
                                </div>
                           </div>
                       
                        <?php if ($_SESSION['type_reponse']=='simple'):?>
                            <div class="form-check">
                                <input type="radio" class="form-check-input mt-5" name="" id="" value="checkedValue" >
                            </div>
                            <?php elseif($_SESSION['type_reponse']=='multiple'): ?>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input  mt-5" name="" id="" value="checkedValue" >
                                </div>
                         <?php endif ?>
                         </div>
                    <?php endfor ?>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-danger jjj mt-2 " name="enregistrer">Enregistrer</button>
                </div>
                    </form>
            </div>
    </div>
</div>


<style>
    .jjj{
       margin-left: 80%;
    }
</style>
<?php 
    if (isset($_SESSION['question'])) {
        unset($_SESSION['question']);
    }
    if (isset($_SESSION['nbr_reponse'])) {
        unset($_SESSION['nbr_reponse']);
    }
    if (isset($_SESSION['points'])) {
        unset($_SESSION['points']);
    }
    if (isset($_SESSION['type_reponse'])) {
        unset($_SESSION['type_reponse']);
    }

?>