
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/footer.css">
    <title>Footer</title>
    
</head>
<body>
    <section class="myfooter">
        <div class="container">
            <footer class="py-2">
                <ul class="nav justify-content-center pb-2 mb-1">
                    <!-- <li class="nav-item"><a href="#" class="nav-link px-4 text-light">About</a></li> -->
                    <li class="nav-item"><a href="<?php echo ROOT ?>/home" class="nav-link px-4 text-light">Home</a></li>
                    <li class="nav-item"><a href="<?php echo ROOT ?>/search" class="nav-link px-4 text-light">Search</a></li>
                    <li class="nav-item"><a href="<?php echo ROOT ?>/contact" class="nav-link px-4 text-light">Contact</a></li>
                    <li class="nav-item"><a href="<?php echo ROOT ?>/login" class="nav-link px-4 text-light">Login</a></li>
                </ul>
                <div class="d-flex flex-wrap justify-content-between border-top align-items-center py-3 my-2 mx-5">
                    <div class="col-md-4 d-flex align-items-center">
                    <a href="<?php echo ROOT ?>/home" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <img
                        src="<?php echo ROOT ?>/assets/images/logo_green.png"
                        style="width:100px;height:80px;"
                        />
                    </a>
                    <span class="mb-3 mb-md-0 text-light">© 2023 Copyright</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">Follow us</li>
                        <li class="ms-3">
                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" width="25" height="25">
                        </li>
                        <li class="ms-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670211.png" width="25" height="25">
                        </li>
                        <li class="ms-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/1377/1377213.png" width="25" height="25">
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
</body>
</html>