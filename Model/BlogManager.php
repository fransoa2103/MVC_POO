<?php
    namespace fcb;
    require_once 'Model\ConnectDataBase.php';

    class BlogManager extends ConnectDataBase{
        public function displayPosts(){
            $dataBase = $this->dbConnect();
            if ($_SESSION == null){
                $req = $dataBase->query('SELECT * FROM post');
                return $req;
            }
            else {
                $req = $dataBase->prepare  ('   SELECT      post.*, users.*
                                                FROM        post
                                                INNER JOIN  users
                                                ON          post.author = users.id
                                                WHERE       post.author = ?');
                $req->execute([$_SESSION['user']['id']]);
                return $req;
            }
        }   
    }