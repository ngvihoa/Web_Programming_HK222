
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid navbound">
                <a class="navbar-brand" href="<?php echo ROOT ?>/home">
                    <img src="<?php echo ROOT ?>/assets/images/logo_green.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT ?>/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT ?>/search">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT ?>/contact">Contact</a>
                        </li>
                        <li class="nav-item" >
                            <?php 
                            $tmp = 'login';
                            $tmp2 = 'Login';
                            if (isset($user)) { 
                                $tmp = 'logout';
                                $tmp2 = 'Logout';
                            }
                            ?>
                            <a class='nav-link'href='<?php echo ROOT.'/'.$tmp; ?>'><?php echo $tmp2; ?></a>
                        </li>
                    </ul>
                    <div class='myhello'>
                    <?php 
                            if (isset($user)) { 
                    echo "<a href='<?php echo ROOT ?>/profile'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                        <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                        </svg>".$user."</a>";
                            }
                    ?>
                    </div>
                </div>
            </div>
        </nav>