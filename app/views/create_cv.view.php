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

    <title>Create CV</title>
</head>
<body>

    <div class="headbg">
        <img src="<?php echo ROOT ?>/assets/images/logo_green.png" alt="Logo" srcset="<?php echo ROOT ?>/assets/images/logo_green.png">
        
    </div>

    <div class="blank"></div>

    <div class="step-boundary">
        <div>Create your own CV</div>
        <div class="caution"><p>Fill in all fields have the '*' to complete your CV.</p></div>
    </div>

    <form class="first-form" autocomplete>
        <!-- Personal details -->
        <div class="block-boundary">
            <h5><strong>Personal details</strong></h5>
            <hr>
            <div class="block">
                <div class="sub-block">
                    <label for="fname">First name <span class="star">*<span></label>
                    <input type="text" name="fname" id="fname" placeholder="e.g. John" required>
                </div>
                <div class="sub-block">
                    <label for="lname">First name <span class="star">*<span></label>
                    <input type="text" name="lname" id="lname" placeholder="e.g. Doe" required>
                </div>
            </div>
            <div class="block">
                <div class="sub-block">
                    <label for="city">City <span class="star">*<span></label>
                    <input type="text" name="city" id="city"  required>
                </div>
                <div class="sub-block">
                    <label for="country">Country <span class="star">*<span></label>
                    <input type="text" name="country" id="country" required>
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
                        <input type="text" name="job" id="job" placeholder="e.g. Web Developer, Fullstack Developer, ..." required>
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
                        <input type="text" name="jobtitle0" id="jobtitle0" placeholder="e.g. Backend Developer" required>
                    </div>
                    <div class="sub-block">
                        <label for="wecountry0">Country <span class="star">*<span></label>
                        <input type="text" name="wecountry0" id="wecountry0" placeholder="e.g. Vietnam" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="company0">Company <span class="star">*<span></label>
                        <input type="text" name="company0" id="company0" placeholder="e.g. Backend Developer" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="start0">Start Date <span class="star">*<span></label>
                        <input type="month" name="start0" id="start0" placeholder="e.g. Backend Developer" required>
                    </div>
                    <div class="sub-block">
                        <label for="end0">End Date <span class="star">*<span></label>
                        <input type="month" name="end0" id="end0" placeholder="e.g. Backend Developer" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="wed0">Description</label>
                        <textarea type="text" name="wed0" id="wed0"></textarea>
                    </div>
                </div>
                
                <div id="addition-we-boundary">
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
                        <input type="text" name="degree0" id="degree0" placeholder="e.g. Bachelor of Computer Science" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="school0">School <span class="star">*<span></label>
                        <input type="text" name="school0" id="school0" placeholder="e.g. University of Technology" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="gradate0">Graduated Date <span class="star">*<span></label>
                        <input type="month" name="gradate0" id="gradate0" placeholder="" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="edd0">Description</label>
                        <textarea type="text" name="edd0" id="edd0"></textarea>
                    </div>
                </div>
                
                <div id="addition-ed-boundary">
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
                        <input type="text" name="cert0" id="cert0" placeholder="e.g. Beginner of Computer Science" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="org0">Organization <span class="star">*<span></label>
                        <input type="text" name="org0" id="org0" placeholder="e.g. Hacker Rank" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="finish0">Finish Date <span class="star">*<span></label>
                        <input type="month" name="finish0" id="finish0" placeholder="" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="ced0">Description</label>
                        <textarea type="text" name="ced0" id="ced0"></textarea>
                    </div>
                </div>
                <div id="addition-ce-boundary">
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
                        <input type="text" name="hobby" id="hobby" placeholder="e.g. Swimming">
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
                        <input type="text" name="refname0" id="refname0" placeholder="e.g. John Doe" required>
                    </div>
                    <div class="sub-block">
                        <label for="rel0">Relationship <span class="star">*<span></label>
                        <input type="text" name="rel0" id="rel0" placeholder="e.g. Project Manager" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="refcomp0">Company <span class="star">*<span></label>
                        <input type="text" name="refcomp0" id="refcomp0" placeholder="" required>
                    </div>
                </div>
                <div class="block">
                    <div class="sub-block">
                        <label for="refmail0">Email <span class="star">*<span></label>
                        <input type="email" name="refmail0" id="refmail0" placeholder="e.g. example@gmail.com" required>
                    </div>
                    <div class="sub-block">
                        <label for="refphone0">Phone <span class="star">*<span></label>
                        <input type="text" name="refphone0" id="refphone0" placeholder="" required>
                    </div>
                </div>

                <div id="addition-ref-boundary">
                </div>

                <div class="bar-last"></div>
                <button name="add-ref-button" type="button" onclick="addREF()">Add more References</button>
            </div>
        </div>
        <div class="block">
            <!-- <button type="submit"><a href="<?php echo ROOT ?>/create_cv/insert_cv">Submit</a></button> -->
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