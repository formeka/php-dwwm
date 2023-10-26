<?php require 'partials/header.php' ?>
<section class="note">

    <?php
    $i = 1;
    foreach ($notes as $note) : ?>
        <p>
            <?= $i ?> - <a href="/note?id=<?= $note['id'] ?>">
                <?= $note['title'] ?>
            </a> - <a href="/note-delete?id=<?= $note['id'] ?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="error">X</a>
        </p>
    <?php
        $i = $i + 1;
    endforeach; ?>

</section>
<p><a href="/note-new">Ajouter une note</a></p>

<?php require 'partials/footer.php' ?>