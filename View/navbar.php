<nav class="navbar navbar-expand-lg navbar-dark bg-primary my-3 rounded ">
    <div class="container-fluid">
        
        <a class="navbar-brand">
            <?php
            if (isset($_SESSION['logged']) && $_SESSION['logged']){
                echo "<p class='text-center rounded m-1 p-1 bg-light text-success'>Welcome</br>".$_SESSION['user']['nick_name']."</p>";
            }
           ?>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="http://localhost/MVC_POO/index.php">Home</a> -->
                    <a class="nav-link" href="http://localhost/MVC_POO/?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/MVC_POO/?page=login">Log-in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/MVC_POO/?page=blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/MVC_POO/?page=newAccount">Create a New account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/MVC_POO/?page=logout">Log-out</a>
                </li>
            </ul>
        </div>
        
    </div>
    <?php include ('date.php'); ?>
</nav>