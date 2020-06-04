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
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?= base_url();?>css/style.css">
    </head>
    <body>
        <!-- Landing Section -->
        <section class="landing">
            <div class="layer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="container-fluid">
                            <nav class="navbar navbar-expand-md" id="navbar">
                                <div class="navbar-brand">
                                    <img src="" alt="Favicon">
                                </div>
                                <ul class="nav mr-auto">
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="<?=base_url();?>">Home</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="<?=base_url();?>blog">Blog</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#">Dokter Kopi</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="<?=base_url();?>login">Login</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="<?=base_url();?>signup">Signup</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="col-3 ml-5 info">
                                <h2 class="">Segelas kopi yang cocok untuk anda hanya perlu beberapa ketikan.</h2>
                                <p class="py-3">Ketik kopi atau kedai yang anda inginkan dibawah</p>
                                <form action="search_handle.php" method="POST">
                                    <input class="form-control" type="text" name="landing_input" placeholder="Nama kopi atau kedai">
                                    <button class="btn btn-block my-3" type="submit">Cari</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section class="about">
            <div class="container">
                <div class="row about-info">
                    <div class="col-6 my-auto">
                        <img src="#" alt="Info">
                    </div>
                    <div class="col-6 text-right my-auto">
                        <h2>Temukan kopi favoritmu disini!</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row about-info">
                    <div class="col-6 text-left my-auto">
                        <h2>Cukup dua langkah untuk menemukan kopi terbaik</h2>
                        <p>Ketik nama kopi pada layar, lalu pilih kopi yang direkomendasikan oleh kami. Bisa juga anda cari kedai langganan anda.</p>
                    </div>
                    <div class="col-6 my-auto">

                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section -->
        <footer>
            <div class="container-fluid my-3">
                <div class="row">
                    <div class="col-12 pl-5">
                        <p>@2020 Suratkopi. All rights reserved.</p>
                    </div>
                    <div class="col-12 pl-5">
                        <p><a href="#">TERMS AND CONDITIONS</a><span class="spacer"></span><a href="#">PRIVACY POLICY</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                //Navbar Responsive
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