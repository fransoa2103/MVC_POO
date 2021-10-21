<?php
    $title = "FCBlog";
    ob_start();
    while($post = $req->fetch()){?>
        <div class='border border-info rounded mb-1'>
            <span class="bg-info text-dark fw-bolder p-1 m-2 rounded"><?=$post['subject_content']?></span>
            <p class="p-1">
                <?=$post['content']?>
            </p><?php 
            if($_SESSION == null){
                ?><p class='text-end text-info pe-1'><?=$post['date_content']?></p><?php
            }
            else {
                ?><p class='text-end text-info pe-1'>from <?=$_SESSION['user']['nick_name']?>, <?=$post['date_content']?></p><?php
            }?>
        </div><?php
    }
    $content = ob_get_clean();
    require ('template.php');
    ?>