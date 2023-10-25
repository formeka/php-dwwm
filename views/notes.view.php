<?php require 'partials/header.php' ?>
    <ul>
    <?php foreach($notes as $note) : ?>
        <li>
            <a href="/note?id=<?=$note['id']?>">
                <?=$note['title']?>
            </a>    
        </li>
    <?php endforeach; ?>
    </ul>
    <?php require 'partials/footer.php' ?>