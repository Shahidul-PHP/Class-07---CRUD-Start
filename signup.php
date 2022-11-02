<?php
// php session code
session_start();
?>
<!-- html form code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Create  Account</title>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <!-- form start -->
                <form class="login" action="signup_post.php" method="POST">
                    <h1>CREATE ACCOUNT</h1>
                    <div class="login__field uname">
                        <i class="login__icon fas fa-user"></i>

                        <input name="name" type="text" class="login__input" placeholder="User name" value="<?= isset($_SESSION['name_value_store']) ? $_SESSION['name_value_store'] : '' ?>">

                    </div>
                    <?php if (isset($_SESSION['NameErrorMsg'])) { ?>
                        <p class="p"><?= $_SESSION['NameErrorMsg'] ?></p>
                    <?php } ?>

                    <div class="login__field email">

                        <i class="login__icon fas fa-lock"></i>
                        <input name="email" type="text" class="login__input" placeholder="Email Address" value="<?= isset($_SESSION['email_value_store']) ? $_SESSION['email_value_store'] : '' ?>">

                    </div>
                    <!-- mail error -->
                    <?php if (isset($_SESSION['MailErrorMsg'])) { ?>
                        <p class="p"><?= $_SESSION['MailErrorMsg'] ?></p>
                    <?php } ?>

                    <div class="login__field password">
                        <i class="login__icon fas fa-lock"></i>
                        <input id="pass" name="password" type="password" class="login__input" placeholder="Password" value="<?= isset($_SESSION['pass_value_store']) ? $_SESSION['pass_value_store'] : '' ?>">
                        <i class="fa fa-eye third" onclick="showPass()" aria-hidden="true"></i>
                    </div>
                    <!-- pass one error -->
                    <?php if (isset($_SESSION['PassErrorMsg'])) { ?>
                        <p class="p"><?= $_SESSION['PassErrorMsg'] ?></p>
                    <?php } ?>

                    <div class="login__field confirm_password">
                        <i class="login__icon fas fa-lock"></i>
                        <input id="two" name="confirmPassword" type="password" class="login__input" placeholder="Confirm Password" value="<?= isset($_SESSION['pass_value']) ? $_SESSION['pass_value'] : '' ?>">
                        <i class="fa fa-eye second" onclick="ptwo()" aria-hidden="true"></i>
                    </div>

                    <?php if (isset($_SESSION['PassErrorMsgTwo'])) { ?>
                        <p class="pi"><?= $_SESSION['PassErrorMsgTwo'] ?></p>
                    <?php } ?>

                    <button class="button login__submit">
                        <span class="button__text">Create Account</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                   
                </form>
                <!-- form end -->
            </div>

            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="index.js"></script>

    <?php if (isset($_SESSION['successMsg'])) { ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?= $_SESSION['successMsg'] ?>',
                showConfirmButton: false,
                timer: 2200
            })
        </script>
    <?php }
    unset($_SESSION['successMsg']); ?>

</body>

</html>



<!-- php session code -->

<?php
unset($_SESSION['NameErrorMsg']);
unset($_SESSION['MailErrorMsg']);
unset($_SESSION['PassErrorMsg']);
unset($_SESSION['PassErrorMsgTwo']);
unset($_SESSION['email_value_store']);
unset($_SESSION['name_value_store']);
unset($_SESSION['pass_value_store']);
unset($_SESSION['pass_value']);

?>