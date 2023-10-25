<?php require 'partials/header.php' ?>
    <ul>
    <?php foreach($notes as $note) : ?>
        <li>
            <a href="/note?id=<?=$note['id']?>">
                <?=$note['title']?>
            </a> - <a href="/note-delete?id=<?=$note['id']?>" onClick="return confirm('Etes vous certain de vouloir supprimer cette note !?');" class="error">X</a>
        </li>
    <?php endforeach; ?>
    </ul>
    
    <p><a href="/note-new">Ajouter une note</a></p>

    <?php require 'partials/footer.php' ?>