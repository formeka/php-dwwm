<?php require 'views/partials/header.php' ?>
<section class="note">
<p><a href="/note-new" class="btn">Ajouter une note</a></p>

    <table>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>User</th>
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
            <td><?= $note['name'] ?></td>
            <td>
                <a href="/note?id=<?=$note['id']?>" class="btn">Voir</a>
                <a href="/note-update?id=<?=$note['id']?>" class="btn">Modifier</a>
                <a href="/note-delete?id=<?=$note['id']?>" class="btn error" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" >X</a>
            </td>
    </tr>
    <?php
        $i = $i + 1;
    endforeach; ?>

    </table>

</section>

<?php require 'views/partials/footer.php' ?>