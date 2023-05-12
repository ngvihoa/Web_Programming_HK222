<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo ROOT ?>/assets/images/logo_green.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/root.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/create.css">

    <title>CVblog.com</title>
</head>
<body>
    <?php show($_POST)?>

    <div class="headbg">
        <img src="<?php echo ROOT ?>/assets/images/logo_green.png" alt="Logo" srcset="<?php echo ROOT ?>/assets/images/logo_green.png">
        
    </div>

    <div class="blank"></div>

    <div class="step-boundary">
        <div>Create your own CV</div>
        <div class="caution"><p>Fill in all fields have the '*' to complete your CV.</p></div>
    </div>
    <!-- <div> //$ed->getError('namedegree') </div> -->
    <form class="first-form" method="POST" id="form_create_cv" autocomplete>
        <!-- Personal details -->
        <div class="block-boundary">
            <h5><strong>Personal details</strong></h5>
            <hr>
            <div class="block">
                <div class="sub-block">
                    <label for="fname">First name <span class="star">*<span></label>
                    <input type="text" value="<?= old_value('fname') ?>" name="fname" id="fname" placeholder="e.g. John"> 
                </div>
                <div class="sub-block">
                    <label for="lname">Last name <span class="star">*<span></label>
                    <input type="text" value="<?= old_value('lname') ?>" name="lname" id="lname" placeholder="e.g. Doe">
                </div>
            </div>
            <div class="block">
                <div class="sub-block">
                    <label for="city">City <span class="star">*<span></label>
                    <input type="text" value="<?= old_value('city') ?>" name="city" id="city">
                </div>
                <div class="sub-block">
                    <label for="country">Country <span class="star">*<span></label>
                    <input type="text" value="<?= old_value('country') ?>" name="country" id="country">
                </div>
            </div>
        </div>
        <!-- Job Title -->
        <div class="block-boundary">
            <h5><strong>Job Title</strong></h5>
            <div class="block-boundary-content  ">
                <hr>
                <div class="block">
                    <div class="sub-block">
                        <label for="job">Description <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('job') ?>" name="job" id="job" placeholder="e.g. Web Developer, Fullstack Developer, ...">
                    </div>
                </div>
            </div>
        </div>
        <!-- Work experiences -->
        <div class="block-boundary">
            <h5><strong>Work experiences</strong></h5>
            <div class="block-boundary-content we" id="workexp0">
                <hr>
                <div class="block">
                    <div class="sub-block">
                        <label for="jobtitle0">Job Title <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('jobtitle0') ?>" name="jobtitle0" id="jobtitle0" placeholder="e.g. Backend Developer">
                    </div>
                    <div class="sub-block">
                        <label for="wecountry0">Country <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('wecountry0')?>" name="wecountry0" id="wecountry0" placeholder="e.g. Vietnam">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="company0">Company <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('company0')?>" name="company0" id="company0" placeholder="e.g. Backend Developer">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="start0">Start Date <span class="star">*<span></label>
                        <input type="month" value="<?= old_value('start0')?>" name="start0" id="start0" placeholder="e.g. Backend Developer">
                    </div>
                    <div class="sub-block">
                        <label for="end0">End Date <span class="star">*<span></label>
                        <input type="month" value="<?= old_value('end0')?>" name="end0" id="end0" placeholder="e.g. Backend Developer">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="wed0">Description</label>
                        <textarea type="text" value="<?= old_value('wed0')?>" name="wed0" id="wed0"></textarea>
                    </div>
                </div>
                
                <div id="addition-we-boundary">
                    <?php
                    $i = 1;
                    while(isset($_POST['jobtitle'.$i])){
                        echo "<div class='block-boundary-content we show' id='workexp".$i."'>
                        <div class='bar'></div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='jobtitle'>Job Title <span class='star'>*<span></label>
                                <input type='text' value='".old_value('jobtitle'.$i)."' name='jobtitle".$i."' id='jobtitle".$i."' placeholder='e.g. Backend Developer' >
                            </div>
                            <div class='sub-block'>
                                <label for='wecountry'>Country <span class='star'>*<span></label>
                                <input type='text' value='".old_value('wecountry'.$i)."' name='wecountry".$i."' id='wecountry".$i."' placeholder='e.g. Vietnam' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='company'>Company <span class='star'>*<span></label>
                                <input type='text' value='".old_value('company'.$i)."' name='company".$i."' id='company".$i."' placeholder='e.g. Backend Developer' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='start'>Start Date <span class='star'>*<span></label>
                                <input type='month' value='".old_value('start'.$i)."' name='start".$i."' id='start".$i."' placeholder='e.g. Backend Developer' >
                            </div>
                            <div class='sub-block'>
                                <label for='end'>End Date <span class='star'>*<span></label>
                                <input type='month' value='".old_value('end'.$i)."' name='end".$i."' id='end".$i."' placeholder='e.g. Backend Developer' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='wed'>Description</label>
                                <textarea type='text' value='".old_value('wed'.$i)."' name='wed".$i."' id='wed".$i."'></textarea>
                            </div>
                        </div>
                        <button name='delete-we-button' onclick='deleteWE(".$i.")' type='button' id='deletewe".$i."
                        >Delete</button>
                    </div>";

                        $i++;
                    }
                    ?>
                </div>
                
                <div class="bar-last"></div>
                <button name="add-we-button" type="button" onclick="addWE()">Add more Work experiences</button>
            </div>


        </div>
        <!-- Education -->
        <div class="block-boundary">
            <h5><strong>Education</strong></h5>
            <div class="block-boundary-content ed" id="education0">
                <hr>
                <div class="block">
                    <div class="sub-block">
                        <label for="degree0">Degree <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('degree0')?>" name="degree0" id="degree0" placeholder="e.g. Bachelor of Computer Science">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="school0">School <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('school0')?>" name="school0" id="school0" placeholder="e.g. University of Technology">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="gradate0">Graduated Date <span class="star">*<span></label>
                        <input type="month" value="<?= old_value('gradate0')?>" name="gradate0" id="gradate0" placeholder="">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="edd0">Description</label>
                        <textarea type="text" value="<?= old_value('edd0')?>" name="edd0" id="edd0"></textarea>
                    </div>
                </div>
                
                <div id="addition-ed-boundary">
                <?php
                    $i = 1;
                    while(isset($_POST['degree'.$i])){
                        echo "<div class='block-boundary-content ed show' id='education".$i."'>
                        <div class='bar'></div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='degree'>Degree <span class='star'>*<span></label>
                                <input type='text' value='".old_value('degree'.$i)."' name='degree".$i."' id='degree".$i."' placeholder='e.g. Bachelor of Computer Science' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='school'>School <span class='star'>*<span></label>
                                <input type='text' value='".old_value('school'.$i)."' name='school".$i."' id='school".$i."' placeholder='e.g. University of Technology' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='gradate'>Graduated Date <span class='star'>*<span></label>
                                <input type='month' value='".old_value('gradate'.$i)."' name='gradate".$i."' id='gradate".$i."' placeholder='' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='edd'>Description</label>
                                <textarea type='text' value='".old_value('edd'.$i)."' name='edd".$i."' id='edd".$i."'></textarea>
                            </div>
                        </div>
                        <button name='delete-ed-button' onclick='deleteED(".$i.")' type='button' id='deleteed".$i."'>Delete</button>
                    </div>";

                        $i++;
                    }
                    ?>
                </div>
                <div class="bar-last"></div>
                <button name="add-ed-button" type="button" onclick="addED()">Add more Degrees</button>
            </div>

        </div>
        <!-- Certificates -->
        <div class="block-boundary">
            <h5><strong>Certificates</strong></h5>
            <div class="block-boundary-content ce" id="certificate0">
                <hr>
                <div class="block">
                    <div class="sub-block">
                        <label for="cert0">Certificate <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('cert0')?>" name="cert0" id="cert0" placeholder="e.g. Beginner of Computer Science">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="org0">Organization <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('org0')?>" name="org0" id="org0" placeholder="e.g. Hacker Rank">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="finish0">Finish Date <span class="star">*<span></label>
                        <input type="month" value="<?= old_value('finish0')?>" name="finish0" id="finish0" placeholder="">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="ced0">Description</label>
                        <textarea type="text" value="<?= old_value('ced0')?>" name="ced0" id="ced0"></textarea>
                    </div>
                </div>
                <div id="addition-ce-boundary">
                <?php
                    $i = 1;
                    while(isset($_POST['cert'.$i])){
                        echo "<div class='block-boundary-content ce show' id='certificate".$i."'>
                        <div class='bar'></div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='cert'>Certificate <span class='star'>*<span></label>
                                <input type='text' value='".old_value('cert'.$i)."' name='cert".$i."' id='cert".$i."' placeholder='e.g. Beginner of Computer Science' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='org'>Organization <span class='star'>*<span></label>
                                <input type='text' value='".old_value('org'.$i)."' name='org".$i."' id='org".$i."' placeholder='e.g. Hacker Rank' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='finish'>Finish Date <span class='star'>*<span></label>
                                <input type='month' value='".old_value('finish'.$i)."' name='finish".$i."' id='finish".$i."' placeholder='' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='ced'>Description</label>
                                <textarea type='text' value='".old_value('ced'.$i)."' name='ced".$i."' id='ced".$i."'></textarea>
                            </div>
                        </div>
                        <button name='delete-ce-button' onclick='deleteCE(".$i.")' type='button' id='deletece".$i."'>Delete</button>
                    </div>";

                        $i++;
                    }
                    ?>
                </div>
                
                <div class="bar-last"></div>
                <button name="add-ce-button" type="button" onclick="addCE()">Add more Certificates</button>
            </div>

        </div>
        <!-- Hobbies -->
        <div class="block-boundary">
            <h5><strong>Interests (optional)</strong></h5>
            <div class="block-boundary-content  ">
                <hr>
                <div class="block">
                    <div class="sub-block">
                        <label for="hobby">Hobbies</label>
                        <input type="text" value="<?= old_value('hobby')?>" name="hobby" id="hobby" placeholder="e.g. Swimming">
                    </div>
                </div>
            </div>
        </div>
        <!-- References -->
        <div class="block-boundary">
            <h5><strong>References</strong></h5>
            <div class="block-boundary-content ref" id="references0">
                <hr>
                <div class="block">
                    <div class="sub-block">
                        <label for="refname0">Name <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('refname0')?>" name="refname0" id="refname0" placeholder="e.g. John Doe">
                    </div>
                    <div class="sub-block">
                        <label for="rel0">Relationship <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('rel0')?>" name="rel0" id="rel0" placeholder="e.g. Project Manager">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="refcomp0">Company <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('refcomp0')?>" name="refcomp0" id="refcomp0" placeholder="">
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="refmail0">Email <span class="star">*<span></label>
                        <input type="email" value="<?= old_value('refmail0')?>" name="refmail0" id="refmail0" placeholder="e.g. example@gmail.com">
                    </div>
                    <div class="sub-block">
                        <label for="refphone0">Phone <span class="star">*<span></label>
                        <input type="text" value="<?= old_value('refphone0')?>" name="refphone0" id="refphone0" placeholder="">
                    </div>
                </div>

                <div id="addition-ref-boundary">
                <?php
                    $i = 1;
                    while(isset($_POST['cert'.$i])){
                        echo "<div class='block-boundary-content ref show' id='references".$i."'>
                        <div class='bar'></div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='refname'>Name <span class='star'>*<span></label>
                                <input type='text' value='".old_value('refname'.$i)."' name='refname".$i."' id='refname".$i."' placeholder='e.g. John Doe' >
                            </div>
                            <div class='sub-block'>
                                <label for='rel'>Relationship <span class='star'>*<span></label>
                                <input type='text' value='".old_value('rel'.$i)."' name='rel".$i."' id='rel".$i."' placeholder='e.g. Project Manager' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='refcomp'>Company <span class='star'>*<span></label>
                                <input type='text' value='".old_value('refcomp'.$i)."' name='refcomp".$i."' id='refcomp".$i."' placeholder='' >
                            </div>
                        </div>
                        <div class='block'>
                            <div class='sub-block'>
                                <label for='refmail'>Email <span class='star'>*<span></label>
                                <input type='email' value='".old_value('refmail'.$i)."' name='refmail".$i."' id='refmail".$i."' placeholder='e.g. example@gmail.com' >
                            </div>
                            <div class='sub-block'>
                                <label for='refphone'>Phone <span class='star'>*<span></label>
                                <input type='text' value='".old_value('refphone'.$i)."' name='refphone".$i."' id='refphone".$i."' placeholder='' >
                            </div>
                        </div>
                        <button name='delete-ref-button' onclick='deleteREF(".$i.")' type='button' id='deleteref".$i."'>Delete</button>
                    </div>";

                        $i++;
                    }
                    ?>
                </div>

                <div class="bar-last"></div>
                <button name="add-ref-button" type="button" onclick="addREF()">Add more References</button>
            </div>
        </div>
        <div class="block">
            <button type="submit"><a>Submit</a></button>
        </div>
    </form>



    <div class="cancel-boundary"><button id="cancel"><a href="<?php echo ROOT ?>/profile/profile_cv">Previous step</a></button></div>
    



    <!-- JS file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?php echo ROOT ?>/assets/js/create_cv.js"></script>
</body>
</html>