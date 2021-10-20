<?php
    session_start();
    
    require 'Model\Class\ConnectDataBase.php';
    $dataBase = ConnectDataBase::dbConnect();
    if ($_SESSION == null){
        $req = $dataBase->query('SELECT * FROM post');
    }
    else {
    
        $req = $dataBase->prepare  ('   SELECT      post.*, users.*
                                        FROM        post
                                        INNER JOIN  users
                                        ON          post.author = users.id
                                        WHERE       post.author = ?');
        $req->execute([$_SESSION['user']['id']]);
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php'?>
    <body class="bg-dark w-50 m-auto text-light">
        <?php
        include 'navbar.php';
        while($post = $req->fetch()){?>
            
            <div class='border border-info rounded mb-1'>
                <span class="bg-info text-dark fw-bolder p-1 m-2 rounded"><?=$post['subject_content']?></span>
                <p class="p-1"><?=$post['content']?></p>
                <?php 
                if($_SESSION == null){
                    ?><p class='text-end text-info pe-1'><?=$post['date_content']?></p><?php
                }
                else {
                    ?><p class='text-end text-info pe-1'>from <?=$_SESSION['user']['alias']?>, <?=$post['date_content']?></p><?php
                }?>
            </div><?php
        }?>
    </body>

</html>