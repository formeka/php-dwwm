<?php require $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php' ?>
<section class="note">
<p><a href="/note-new" class="btn">Ajouter une note</a></p>

    <table>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>

    <?php
    $i = 1;
    foreach ($notes as $note) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $note['id'] ?></td>
            <td><?= $note['title'] ?></td>
            <td><?= substr($note['content'],0, 20) . ' (...)' ?></td>
            <td>
                <a href="/note?id=<?=$note['id']?>" class="btn">Voir</a>
                <a href="/note?id=<?=$note['id']?>" class="btn">Modifier</a>
                <a href="/note?id=<?=$note['id']?>" class="btn error">Supprimer</a>
            </td>
    </tr>
    <?php
        $i = $i + 1;
    endforeach; ?>

    </table>

</section>

<?php require 'partials/footer.php' ?>