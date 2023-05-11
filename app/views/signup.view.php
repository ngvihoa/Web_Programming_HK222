<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo ROOT ?>/assets/images/logo_green.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/login.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/signup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/root.css">
    <title>Sign up</title>
</head>

<body>
    <form method="post" class="form" id="form-1">
        <h1>Signup</h1>
        <div class="form-group">
            <label for="username">Username</label>
            <input value="<?= old_value('username') ?>" name="username" placeHolder="Enter your username..." id="Username" class="TextField form-control">
            <div class="form-message" id="response"><?= $user->getError('username') ?></div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value="<?= old_value('email') ?>" name="email" placeHolder="Enter your email..." id="Email" class="TextField form-control">
            <div class="form-message" id="response"><?= $user->getError('email') ?></div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input value="<?= old_value('password') ?>" type="password" name="password" placeholder="Enter your password..." id="Password" class="PasswordField form-control">
            <div class="form-message" id="response"><?= $user->getError('password') ?></div>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input value="<?= old_value('phone') ?>" name="phone" placeHolder="Enter your phone..." id="Phone" class="TextField form-control">
            <div class="form-message" id="response"><?= $user->getError('phone') ?></div>
        </div>

        <input id="sign-up-button" type="submit" name="signup_submit" value="Sign me up" />
        <input id="back-to-login" onclick="location.href='./login';" value="Back to Login"></button>
    </form>
</body>

</html>