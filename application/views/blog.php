<!DOCTYPE html>
<html>
    <head>
        <title>Hello Bootstrap</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?= base_url();?>css/main.css">
        <!-- Blog CSS -->
        <link rel="stylesheet" href="<?= base_url();?>css/blog.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md" id="navbar">
            <div class="navbar-brand">
                <img src="Favicon.png" alt="Favicon">
            </div>
            <ul class="nav">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?= base_url();?>">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?= base_url();?>blog">Blog</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Dokter Kopi</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </nav>
        <section class="main-content">
            <div class="title row">
                <div class="col-12 my-auto">
                    <h1 class="display-3 text-center">Blog</h1>
                </div>
            </div>
            <div class="row">
                <div class="side col-2">
                    Side Content
                </div>
                <div class="main col-10">
                    <div class="row">
                        <?php foreach($blog_post as $post) : ?>
                        <div class="col-5 text-center blog-post mx-3 my-3">
                            <h1><?= $post['title']; ?></h1>
                            <p><?= $post['post']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                var navHeight = $('#navbar').height();
                console.log('Navbar Height = ' + navHeight);
                $(window).scroll(function(){
                    if($(this).scrollTop() > navHeight){
                        $('.navbar').addClass('fixed-top');
                    }
                    else{
                        $('.navbar').removeClass('fixed-top');
                    }
                });
            });
        </script>
    </body>
</html>