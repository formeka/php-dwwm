<?php require 'views/partials/header.php'; ?>

<h2>Ajout d'une nouvelle note</h2>

<form method="POST" enctype="multipart/form-data">
    <!------------>
    <!-- TITRE -->
    <!------------>    
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>">

    <!------------>
    <!-- CONTENU -->
    <!------------>
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : '' ?></textarea>
 
    <!------------>
    <!-- IMAGE -->
    <!------------>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">

    <!------------>
    <!-- AUTEUR -->
    <!------------>
    <label for="author">Auteur :</label>
    <select name="author" id="author">
        <option value=""></option>

        <?php foreach ($users as $user) : ?>
            
            <option value="<?= $user['user_id'] ?>"
           
           <?php 
           if (isset($_POST['author'])) :
            $author_id = (int) $_POST['author'];
           endif;

           if ( isset($author_id) && ($author_id === $user['user_id']) ):  ?>
                    selected
          <?php endif; ?> 
            >
                <?= $user['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <!------------>
    <!-- SUBMIT -->
    <!------------>
    <input type="submit" value="Ajouter">
</form>
<?php
if (isset($errors) && !empty($errors)) :
    foreach ($errors as $error) :
?>
    <p class="error"><?=$error?></p>    
<?php
        endforeach;
endif;
?>

<?php require 'views/partials/footer.php' ?>