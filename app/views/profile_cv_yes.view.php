<div class="de">
    <button>
        <a href="<?php echo ROOT ?>/profile/delete_cv">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
            </svg>
            <span>Delete CV</span>
        </a>
    </button>

    <!-- <button>
        <a href="<?php echo ROOT ?>/create_cv/edit_cv">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            <span>Edit CV</span>
        </a>
    </button> -->
</div>

<div class="CVform">
    
    <div class="blockname">
        <h1 class="name"><?php echo $cv->firstname.' '.$cv->lastname ?></h1>
        <div class="address">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <span><?php echo $cv->city.', '.$cv->country ?></span>
        </div>
    </div>
    <br>
    <div class="block">
        <div class="label"><span></span><span>Job title</span><span></span></div>
        <p class="degree data"><?php echo $cv->jobtitle ?></p>
    </div>
    <?php
    if(!empty($we)){
    echo "<div class='block'>
        <div class='label'><span></span><span>Work experiences</span><span></span></div>
        <ul>";
        for($i = 0; $i < sizeof($we); $i++){

        echo "<li class='degree'>
                <span class='name'>".$we[$i]->jobtitle."</span>
                <span class='school_organization'>".$we[$i]->company."</span>
                <span class='school_organization'>".$we[$i]->country."</span>
                <div class='time'>".extractMY($we[$i]->starttime)." - ".extractMY($we[$i]->endtime)."</div>
                <div class='description'>".$we[$i]->description."</div>
            </li>";

        }
      echo   "</ul>
    </div>";
    }

    if(!empty($de)){
    echo "<div class='block'>
        <div class='label'><span></span><span>Education</span><span></span></div>
        <ul>";

        for($i = 0; $i < sizeof($de); $i++){

        echo  "<li class='degree'>
                <span class='name'>".$de[$i]->namedegree."</span>
                <span class='school_organization'>".$de[$i]->school."</span>
                <div class='time'>".extractMY($de[$i]->gradtime)."</div>
                <div class='description'>".$de[$i]->description."</div>
            </li>";
        }
    echo  "</ul>
    </div>";
    }

    if(!empty($ce)){
    echo "<div class='block'>
        <div class='label'><span></span><span>Certificates</span><span></span></div>
        <ul>";
        for($i = 0; $i < sizeof($ce); $i++){

        echo "<li class='degree'>
                <span class='name'>".$ce[$i]->namecert."</span>
                <span class='school_organization'>".$ce[$i]->organization."</span>
                <div class='time'>".extractMY($ce[$i]->time)."</div>
                <div class='description'>".$ce[$i]->description."</div>
            </li>";
        }
    echo "</ul>
    </div>";
    }

    if(!empty($cv->hobby)){

        echo "<div class='block'>
            <div class='label'><span></span><span>Hobbies</span><span></span></div>
            <p>".$cv->hobby."</p>
        </div>";
    }

    if(!empty($re)){
    echo "<div class='block'>
        <div class='label'><span></span><span>References</span><span></span></div>
        <ul>";
        for($i = 0; $i < sizeof($re); $i++){
            echo "<li class='degree'>
            <span class='name'>".$re[$i]->refname."</span>
            <span class='school_organization'>".$re[$i]->company."</span>
            <span class='school_organization'>".$re[$i]->relationship."</span>
            <div class='phone'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone' viewBox='0 0 16 16'>
                <path d='M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z'/>
                </svg> ".$re[$i]->phone."
            </div>
            <div class='email'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-envelope' viewBox='0 0 16 16'>
                <path d='M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z'/>
                </svg> ".$re[$i]->email."</div>
        </li>";
        }
            

    echo "</ul></div>";
    }
    ?>
</div>