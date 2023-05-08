
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/navbar.css">
    <title>NavBar</title>
    
</head>
<body>
    <section class="mynav">
        <nav class="navbar navbar-expand-lg header-nav fixed-top">
            <div class="container-fluid mx-4">
                <a class="navbar-logo p-1 ms-3" href="<?php echo ROOT ?>/home">
                    <img
                    src="<?php echo ROOT ?>/assets/images/logo_white.png"
                    style="width:80px;height:60px;"
                    />
                </a>
            
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div
                    class="collapse navbar-collapse justify-content-between"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="">ABOUT</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT ?>/home">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT ?>/contact">CONTACT</a>
                        </li>
                        <li class="nav-item" >
                            <?php 
                            if (!isset($user)) { 
                                echo "<a class='nav-link'href='<?php echo ROOT ?>/login'>LOGIN</a>" ;
                            }
                            else{
                                echo "<a class='nav-link' href='<?php echo ROOT ?>/login'>LOGOUT</a>" ;
                            }
                            ?>
                        </li>
                        </div>
                    </ul>
                    <?php 
                        if (isset($user)) { 
                            echo "<p class='myhello justify-content-between'>Hello, username</p>" ;
                        }
                        ?>
                    <a href="<?php echo ROOT ?>/search" class="btn">
                        <img src="https://cdn-icons-png.flaticon.com/512/622/622669.png" width="20" height="20">
                    </a>
                </div>
            </div>
        </nav>
    </section>
</body>
</html>