<?php
require 'vendor/autoload.php';
require 'header.php';

use App\Commentaire;
use App\CommentaireManager;
use App\Connexion;

try {
    $pdo = Connexion::getPDO();
    $manager = new CommentaireManager($pdo);
    $id_comment = null;
    $nombre_comments = $manager->countComments();
    
    /* Validation du commentaire précédent */
    if (isset($_GET["id"]) && isset($_GET["valid"])) {
        $valid = (int)$_GET["valid"];
        $id_comment = $_GET["id"];
        $commentairePrecedent = new Commentaire($manager->getById($_GET["id"]));
        if ( (isset($_POST['ko1']) || isset($_POST['ko2'])) && $valid == 0) {
                $commentairePrecedent->setKoFirst($_POST['ko1'] ?? 0);
                $commentairePrecedent->setKoSecond($_POST['ko2'] ?? 0);
            }
            $commentairePrecedent->setValide($valid);
            $manager->update($commentairePrecedent);
    }
    
    /* Récupération des informations du commentaire à afficher */
    if (isset($_GET["done"])) {
        $comments_traites = $_GET["done"];
    } else {
        $comments_traites = 0;
    }
    if ($nombre_comments > $comments_traites) {
        $data_comment = $manager->get((int)$comments_traites);
        $data_comment['labels'] = $manager->getLabels($data_comment['id']);
        if (!$data_comment) {
            throw new Exception("Problème lors de la récupération des données du commentaire");
        }
        $commentaire = new Commentaire($data_comment);
    }
} catch (Exception $e) {
    $error = "Code " . $e->getCode() . ": " . $e->getMessage() . ". Ligne: ". $e->getLine();
}
?>

<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
    <div class="col-8">
        <a class="text-decoration-none" href="index.php"><h1 class="text-center">Validation des commentaires</h1></a>
        <hr class="my-4">
        <?php if (isset($_GET["done"])): ?>
            <p>Commentaires traités : <?= $comments_traites ?> sur <?= $manager->countComments() ?></p>
        <?php else: ?>
            <p>Commentaires traités : 0 sur <?= $manager->countComments() ?></p>
        <?php endif ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif ?>
    </div>

    <!-- Affichage des informations du commentaire -->
    <?php if (isset($commentaire)): ?>
        <div class="card bg-light col-10 p-0">
            <div class="card-body">
                <h4 class="card-title">#<?= $commentaire->getId() ?></h4>
                <p class="card-text"><?= $commentaire->formatedComment() ?></p>
                <p class="card-text">Label : <span class="text-danger"><?= implode(', ', $commentaire->getLabels()) ?></span></p>
                <?php if ($commentaire->getValide()): ?>
                    <div class="alert-success text-center">
                        Commentaire validé
                    </div>
                <?php endif ?>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <a class="btn btn-danger mx-2  text-white" onclick="afficherDiv();">Non valide</a>
                <a class="btn btn-success mx-2 px-4" href="index.php?id=<?= $commentaire->getId() ?>&valid=1&done=<?= $comments_traites+1 ?>">Valide</a>
            </div>
        </div>

        <!-- Formulaire de justification en cas de non validation -->
        <div id="div" style="display:none" class="card bg-light col-10 p-0">
        <form method="post" action="index.php?id=<?= $commentaire->getId() ?>&valid=0&done=<?= $comments_traites+1 ?>">
            <div class="card-body d-flex flex-column align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ko1" value="1" id="ko1">
                        <label class="form-check-label" for="ko1">
                            Pertinence des mots sensibles détectés
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ko2" value="1" id="ko2">
                        <label class="form-check-label" for="ko2">
                            La formulation globale du commentaire n'est pas adaptée
                        </label>
                    </div>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-danger mx-2">Confirmer</button>
            </div>
        </form>
        </div>

    <?php else: ?>
        <h2>Tous les commentaires ont été traité</h2>
    <?php endif ?>
</div>

<?php
require 'footer.php';