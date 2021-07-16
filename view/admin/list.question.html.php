<?php require_once(ROUTE_DIR . 'view/inc/entete.html.php');
require_once(ROUTE_DIR . 'view/inc/quizz.html.php');
require_once(ROUTE_DIR . 'view/inc/header.html.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?php require(ROUTE_DIR . 'view/inc/menu.html.php') ?>
        </div>
        <div class="col-md-8">
            <?php $arrayQuestion = find_all_question(); ?>
            <div class="table ml-4">
                <div class="border border-danger ml-4">
                    <?php $json = file_get_contents(ROUTE_DIR . 'data/question.json');
                    $arrayQuestion = json_decode($json, true);
                    $nombrePage = 0;
                    $suivant = 2;
                    $precedent = 0;
                    $page = 0;
                    $tabAdmin = [];
                    foreach ($arrayQuestion as $question) {
                        if ($user['role'] == 'ROLE_ADMIN') {
                            $tabAdmin[] = $user;
                        }
                    }
                    if (!$_GET['page']) {
                        $page = 1;
                        $_SESSION['admin'] = $tabAdmin;
                        $nombrePage = nombrePage($_SESSION['admin'], 10);
                        $arrayAdmin = pagination($_SESSION['admin'], $page, 10);
                    } elseif ($_GET['page']) {
                        $page = $_GET['page'];
                        $suivant = $page + 1;
                        $precedent = $page - 1;
                        $_SESSION['admin'] = $tabAdmin;
                        $nombrePage = nombrePage($_SESSION['admin'], 10);
                        $arrayAdmin = pagination($_SESSION['admin'], $page, 10);
                    }

                    ?>

                    <table class="table ml-4">
                        <tbody>
                            <?php foreach ($arrayQuestion as $question) : ?>
                                <tr>
                                    <td><?= $question['question'] ?></td>
                                    <td><a name="" id="" class="btn btn-primary" href="#" role="button">Modifier</a></td>
                                    <td><a name="" id="" class="btn btn-primary" href="#" role="button">Supprimer</a></td>

                                </tr>
                                <tr>
                                    <td><?= $question['reponse0'] ?> </td>
                                </tr>
                                <tr>
                                    <td><?= $question['reponse1'] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $question['reponse2'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <a name="" id="" class="btn btn-primary <?= (empty($_GET['page']) || $_GET['page'] == 1) ? 'disabled' : ''; ?>" href="<?= WEB_ROUTE . '?controlleurs=admin&view=list.question&page=' . $precedent ?>" role="button">precedent</a>
                    <a name="" id="" class="btn btn-primary <?= ($_GET['page']) >  $nombrePage - 1 ? 'disabled' : ''; ?>" href="<?= WEB_ROUTE . '?controlleurs=admin&view=list.question&page=' . $suivant ?>" role="button">suivant</a>

                </div>
            </div>
        </div>
    </div>
</div>