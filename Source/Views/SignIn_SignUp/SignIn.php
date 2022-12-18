<?php
    if(isset($_COOKIE["username"])){
        header("Location: Home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- logo header -->
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div id="sign-in-board">
            <form class="display-flex-center">
                <h1 class="main-title">Sign in</h1>
                <div class="stick"></div>

                <!-- username -->
                <div class="input-box">
                    <input type="text"  name="username" id="username" class="form-input" placeholder=" " required/>
                    <label class="input-label" for="username"><i class="fa-solid fa-user "></i> Username</label>
                </div>

                <!-- password -->
                <div class="input-box">
                    <input type="password"  name="password" id="password" class="form-input" placeholder=" " required/>
                    <label class="input-label" for="password"><i class="fa-solid fa-key "></i> Password</label>
                </div>

                <!-- Show password -->
                <div class="show-password-check-box">
                    <input type="checkbox" id="show-password" name="show-password">
                    <label for="show-password">Show password <i class="fa-solid fa-eye icon-background"></i></label>
                </div>

                <!-- submit btn -->
                <input type="submit" name="sign-in" class="btn sign-in-btn" value="Sign in">
                <br>

                <!-- sign up -->
                <footer>
                    <h5 class="footer-title">Forgot your password !</h5>
                    <p class="footer-desc">If you don't have account, just sign up now !</p>
                    <a href="SignUp.html" class="btn second-btn" style="top: 12px;left: 25%;">Create account</a>

                    <!-- Message -->
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </footer>
            </form>
        </div>

    </main>
    <script>
        const password = document.querySelector("input[name=password]");
        const show_password = document.getElementById("show-password");
        // show pass - error
        $(show_password).change(function(){
            if(password.type === "password"){
                password.type = "text";
            }else{
                password.type = "password";
            }
        })
    </script>
</body>

</html>
