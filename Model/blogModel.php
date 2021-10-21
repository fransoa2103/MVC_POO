<?php
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