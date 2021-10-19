<!DOCTYPE html>
<html lang="fr">
    <?php include 'head.php' ?>
    <body class="bg-dark w-50 m-auto text-light">
        
        <?php include 'navbar.php' ?>

        <span class="display-4">Form new register</span>
        
        <form action="new_register_control.php" method="POST">
            <div class="my-3">
                <label for="alias" class="form-label text-light">Pseudo
                    <input type="text" class="form-control" name="alias" id="alias">
                </label>
            </div>
            <div class="my-3">
                <label for="first_name" class="form-label text-light">First_name
                    <input type="text" class="form-control" name="first_name" id="first_name">
                </label>
            </div>
            <div class="my-3">
                <label for="last_name" class="form-label text-light">Last_name
                    <input type="text" class="form-control" name="last_name" id="last_name">
                </label>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address
                    <input type="email" class="form-control" name="email" id="email">
                </label>
            </div>
            <div class="mb-3">
                <label for="password_1" class="form-label">Password
                    <input type="password" class="form-control" name="password_1" id="password_1">
                </label>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>

    </body>
</html>