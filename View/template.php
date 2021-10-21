<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="vendor\node_modules\bootstrap\scss\bootstrap.scss">
        <link rel="stylesheet" href="public\design\css\style.css">
        <title><?= $title ?></title>
    </head>
        
    <body class="bg-dark w-50 m-auto text-light">
        <?php include 'navbar.php'; ?>
        <?= $content ?>
    </body>
</html>