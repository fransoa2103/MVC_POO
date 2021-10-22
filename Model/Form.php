<?php
class Form {
    // creation form avec les attributs:
    // action, [forLabel, textLabel, inputType, inputName, inputId]

    public static function formConnection(){
        
        ?><form action="http://localhost/MVC_POO/?page=userExist" method="POST">
            <div class="my-3">
                <label for="nick_name" class="form-label">Nick_name
                    <input type="text" class="form-control" name="nick_name" id="nick_name">
                </label>
            </div>
            <div class="mb-3">
                <label for="password_1" class="form-label">Password
                    <input type="password" class="form-control" name="password_1" id="password_1">
                </label>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form><?php
    }
    
    public static function formNewAccount(){
        ?>
            <form action="http://localhost/MVC_POO/?page=newAccountCtrl" method="POST">
                <div class="my-3">
                    <label for="nick_name" class="form-label text-light">Nick_name
                        <input type="text" class="form-control" name="nick_name" id="nick_name">
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
        <?php
    }
    
    public static function formLogout(){?>
        <form action="http://localhost/MVC_POO/?page=logoutValid" method="POST">
            <div class="m-1">
                <input type="radio" id="yes" name="logoutYesOrNo" value="yes"> 
                <label for="yes">YES</label>
            </div>
            <div class="m-1">
                <input type="radio" id="no" name="logoutYesOrNo" value="no"> 
                <label for="no">NO</label>
            </div>
            <input type="submit" class="btn btn-warning text-dark" value="Submit">
        </form><?php
    }
}