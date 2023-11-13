<?php require 'views/partials/header.php' ?>
<section class="note">
<p><a href="/note-new" class="btn btn-norm">Ajouter une note</a></p>

    <table>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Image</th>
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
            <td>
                <?php if($note['image']): ?>    
                    <img src="uploads/<?= $note['image']?>" class="imgxs">
                <?php else: ?>
                    ...
                <?php endif; ?>
            </td>
            <td><?= $note['title'] ?></td>
            <td><?= substr($note['content'],0, 20) . ' (...)' ?></td>
            <td><?= $note['name'] ?></td>
            <td>
                <a href="/note?id=<?=$note['id']?>" class="btn btn-norm">Voir</a>
                <a href="/note-update?id=<?=$note['id']?>" class="btn btn-norm">Modifier</a>
                <a href="/note-delete?id=<?=$note['id']?>" class="btn btn-supp" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" >X</a>
            </td>
    </tr>
    <?php
        $i = $i + 1;
    endforeach; ?>

    </table>

</section>

<?php require 'views/partials/footer.php' ?>