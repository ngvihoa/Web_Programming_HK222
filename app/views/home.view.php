<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/root.css">

    <title>HomePage</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <section class="home d-flex align-items-center" >
        <div class="container">
            <div class="row bound">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 ">
                    <h3>Impress your next employers with</h3>
                    <h1><span style="color:var(--color1);">CV</span>blog</h1>
                    <h5>Create your very own professional resume to win your dream jobs.</h5>
                    <h5>It’s quick and always free.</h5>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="<?php echo ROOT ?>/login" class="btn-create">Create your resume</a>
                    </div>
                </div>
                <div class="col-lg-4 home-img" >
                    <img class="img-fluid animated" src="https://www.cvmaker.com/assets/images/cvs/3/cv-example-standford-424954.jpg" style="width:29rem;height:35rem;">
                </div>
            </div>
            <hr>
            <div class="row bound">
                <div class="mycard">
                    <img src="https://cdn-icons-png.flaticon.com/512/10547/10547859.png" width="100" height="100" >
                    <h4>Quick and easy resume builder</h4>
                    <p class="block">With our online CVblog, it is simple for anyone to quickly create a professional resume. Enter your personal details and begin filling out your resume content.</p>
                    <p><a class="btn" href="<?php echo ROOT ?>/login">View details »</a></p>
                    <!-- link to cv form if user already login -->
                </div>
                
                <div class="mycard">
                    <img src="https://cdn-icons-png.flaticon.com/512/871/871960.png" width="100" height="100">
                    <h4>Organize your applications</h4>
                    <p class="block">Often, it is important to be able to tailor your resume based on the job you wish to apply for. With CVblog, you can create and manage several different resumes in an organised way through your own personal account hub.</p>
                    <p><a class="btn" href="<?php echo ROOT ?>/login">View details »</a></p>
                </div>

                <div class="mycard">
                    <img src="https://cdn-icons-png.flaticon.com/512/3772/3772027.png" width="100" height="100">
                    <h4>More likely to land a job</h4>
                    <p class="block">With a representative and professional resume, you will stand out amongst all other applicants. You are probably more likely to be invited to an interview with an professional resume.</p>
                    <p><a class="btn" href="<?php echo ROOT ?>/login">View details »</a></p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>