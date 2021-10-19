<?php
    require 'Model\Class\ConnectDataBase.php';
    $dataBase = ConnectDataBase::dbConnect();
    $req = $dataBase->query('SELECT alias, date_content, subject_content, content FROM users INNER JOIN post ON post.author = users.id');
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php'?>
    <body class="bg-dark w-50 m-auto text-light">
        <?php
        include 'navbar.php';
            while ($post = $req->fetch()) {
                ?>
                    <div class='border border-info rounded mb-1'>
                        <span class="bg-info text-dark fw-bolder p-1 m-2 rounded"><?=$post['subject_content']?></span>
                        <p class="p-1"><?=$post['content']?></p>
                        <p class='text-end text-info pe-1'>from <?=$post['alias']?>, <?=$post['date_content']?></p>
                        </p>
                    </div>
                <?php
            }
        ?>
    </body>

</html>