<div class="col profile-container">
    <!-- <h3>User CV</h3> -->
    <?php
        $cv_show = isset($cvId) ? 'profile_cv_yes' : 'profile_cv_no';
        include ''.$cv_show.'.view.php';
    ?>

    <div class="blank"></div>

</div>