<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="<?php echo ROOT ?>/assets/images/logo_green.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/root.css">
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/search.css">
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/footer.css">

    <title>CVblog.com</title>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="space"></div>

    <div class="central-frame">
        <div id="central-frame">
            <form method="post">
                <div class="search-container">
                    <input type="text" name="firstname" id="search-input" placeholder="Find your candidates...">
                    <button type="submit" id="search-button">Search</button>
                </div>

                <div class="filter-dropdown">
                    <div class="search-dropdown">
                        <select name="jobtitle" id="job-title">
                            <option value="" >Select a job title</option>
                            <?php if(is_array($data['jobtitle'])): ?>      
                            <?php foreach($data['jobtitle'] as $row): ?>
                            <option value=<?=$row->jobtitle ?>><?=$row->jobtitle?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>



                    <div class="search-dropdown">
                        <select name="degree" id="degree">
                            <option value="">Select a degree</option>
                            <option value="bachelors">Bachelor's Degree</option>
                            <option value="masters">Master's Degree</option>
                            <option value="phd">PhD</option>
                        </select>
                    </div>


                    <div class="search-dropdown">
                        <select name="country" id="location">
                            <option value="">Select a location</option>
                            <?php if(is_array($data['countries'])): ?>      
                            <?php foreach($data['countries'] as $row): ?>
                            <option value="<?=$row->country?>"><?=$row->country?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                </div>

            </form>
        </div>

        <!-- <hr> -->
        <!-- <div class="bar"></div> -->
    </div>

    <div class="cvFrame">
        <?php
            if(!$searchValue){
                include 'search_no.view.php';
            }
            else{
                include 'search_yes.view.php';
            }
        ?>
    </div>

    <div class="space2"></div>

    <?php
    include 'footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>