<?php require 'views/partials/header.php'; ?>

<h2>Connexion</h2>

<form method="POST">
    <!------------>
    <!-- EMAIL -->
    <!------------>    
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">

    <!------------------->
    <!-- MOT DE PASSE -->
    <!------------------->
    <label for="motdepasse">Mot de passe :</label>
    <input type="password" name="motdepasse" id="motdepasse">

    <!------------>
    <!-- SUBMIT -->
    <!------------>
    <input type="submit" value="Connexion">
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