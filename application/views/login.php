<!DOCTYPE html>
<html>
    <head>
        <title>Hello Bootstrap</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Font Awesome Version 4.7.0 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Login.css -->
        <link rel="stylesheet" href="<?= base_url();?>css/login.css">
    </head>
    <body>
        <!-- Code goes here -->
        <section class="main-area text-center">
            <div class="text">
                <h3>Login</h3>
            </div>
            <div class="form">
                <form action="#" method="POST">
                    <div>
                        <label for="username">Username: </label>
                        <input type="text" name="user" id="username">
                    </div>
                    <div>
                        <label for="password">Password: </label>
                        <input type="password" name="pass" id="password">
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="text">
                <p>Not signup yet? <a href="<?= base_url();?>signup">Sign up here!</a></p>
            </div>
        </section>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>