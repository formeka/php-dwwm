<?php require 'views/partials/header.php' ?>

<?php if ($note['image']) : ?>
    <p><img src="uploads/<?= $note['image'] ?>" alt=""></p>
<?php endif; ?>

<h2><?= $note['title'] ?></h2>
<p><?= $note['content'] ?></p>
<p>Publiée le <?= $note['created_at'] ?> par <strong><?= $note['name'] ?></strong></p>

<section class="dspflex">
<p><a href="/note-update?id=<?=$note['id']?>" class="btn btn-norm">Modifier cette article</a></p>

<p><a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="btn btn-supp">
Supprimer cette note
</a></p>
</section>

<p><a href="/admin" class="btn btn-norm">Retour à la liste des notes</a></p>
<?php require 'views/partials/footer.php' ?>