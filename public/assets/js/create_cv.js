
let block_boundary_content = document.querySelectorAll('.block-boundary h5');

block_boundary_content.forEach(item=>{
    item.addEventListener('click', event=>{
        // event.target.classList.toggle('show');
        event.srcElement.nextElementSibling.classList.toggle('show');
    });
});


function extractNumber(str){
    let numb = str.match(/\d/g);
    numb = numb.join("");
    return numb;
}

// //////


function addWE(){
    let weform = document.getElementsByClassName('we');
    let nextId = parseInt(extractNumber(weform[weform.length - 1].id)) + 1;
    // console.log(nextId);
    $("#addition-we-boundary").append(`<div class="block-boundary-content we show" id="workexp${nextId}">
    <div class="bar"></div>
    <div class="block">
        <div class="sub-block">
            <label for="jobtitle">Job Title <span class="star">*<span></label>
            <input type="text" value="" name="jobtitle${nextId}" id="jobtitle${nextId}" placeholder="e.g. Backend Developer" >
        </div>
        <div class="sub-block">
            <label for="wecountry">Country <span class="star">*<span></label>
            <input type="text" value="" name="wecountry${nextId}" id="wecountry${nextId}" placeholder="e.g. Vietnam" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="company">Company <span class="star">*<span></label>
            <input type="text" value="" name="company${nextId}" id="company${nextId}" placeholder="e.g. Meta" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="start">Start Date <span class="star">*<span></label>
            <input type="month" value="" name="start${nextId}" id="start${nextId}" placeholder="e.g. Backend Developer" >
        </div>
        <div class="sub-block">
            <label for="end">End Date <span class="star">*<span></label>
            <input type="month" value="" name="end${nextId}" id="end${nextId}" placeholder="e.g. Backend Developer" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="wed">Description</label>
            <textarea type="text" value="" name="wed${nextId}" id="wed${nextId}"></textarea>
        </div>
    </div>
    <button name="delete-we-button" onclick="deleteWE(${nextId})" type="button" id="deletewe${nextId}">Delete</button>
</div>`);
}

function addED(){
    let edform = document.getElementsByClassName('ed');
    let nextId = parseInt(extractNumber(edform[edform.length - 1].id)) + 1;
    $("#addition-ed-boundary").append(`<div class="block-boundary-content ed show" id="education${nextId}">
    <div class="bar"></div>
    <div class="block">
        <div class="sub-block">
            <label for="degree">Degree <span class="star">*<span></label>
            <input type="text" value="" name="degree${nextId}" id="degree${nextId}" placeholder="e.g. Bachelor of Computer Science" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="school">School <span class="star">*<span></label>
            <input type="text" value="" name="school${nextId}" id="school${nextId}" placeholder="e.g. University of Technology" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="gradate">Graduated Date <span class="star">*<span></label>
            <input type="month" value="" name="gradate${nextId}" id="gradate${nextId}" placeholder="" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="edd">Description</label>
            <textarea type="text" value="" name="edd${nextId}" id="edd${nextId}"></textarea>
        </div>
    </div>
    <button name="delete-ed-button" onclick="deleteED(${nextId})" type="button" id="deleteed${nextId}">Delete</button>
</div>`);
}

function addCE(){
    let ceform = document.getElementsByClassName('ce');
    let nextId = parseInt(extractNumber(ceform[ceform.length - 1].id)) + 1;
    $("#addition-ce-boundary").append(`<div class="block-boundary-content ce show" id="certificate${nextId}">
    <div class="bar"></div>
    <div class="block">
        <div class="sub-block">
            <label for="cert">Certificate <span class="star">*<span></label>
            <input type="text" value="" name="cert${nextId}" id="cert${nextId}" placeholder="e.g. Beginner of Computer Science" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="org">Organization <span class="star">*<span></label>
            <input type="text" value="" name="org${nextId}" id="org${nextId}" placeholder="e.g. Hacker Rank" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="finish">Finish Date <span class="star">*<span></label>
            <input type="month" value="" name="finish${nextId}" id="finish${nextId}" placeholder="" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="ced">Description</label>
            <textarea type="text" value="" name="ced${nextId}" id="ced${nextId}"></textarea>
        </div>
    </div>
    <button name="delete-ce-button" onclick="deleteCE(${nextId})" type="button" id="deletece${nextId}">Delete</button>
</div>`);
}

function addREF(){
    let refform = document.getElementsByClassName('ref');
    let nextId = parseInt(extractNumber(refform[refform.length - 1].id)) + 1;
    $("#addition-ref-boundary").append(`<div class="block-boundary-content ref show" id="references${nextId}">
    <div class="bar"></div>
    <div class="block">
        <div class="sub-block">
            <label for="refname">Name <span class="star">*<span></label>
            <input type="text" value="" name="refname${nextId}" id="refname${nextId}" placeholder="e.g. John Doe" >
        </div>
        <div class="sub-block">
            <label for="rel">Relationship <span class="star">*<span></label>
            <input type="text" value="" name="rel${nextId}" id="rel${nextId}" placeholder="e.g. Project Manager" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="refcomp">Company <span class="star">*<span></label>
            <input type="text" value="" name="refcomp${nextId}" id="refcomp${nextId}" placeholder="" >
        </div>
    </div>
    <div class="block">
        <div class="sub-block">
            <label for="refmail">Email <span class="star">*<span></label>
            <input type="email" value="" name="refmail${nextId}" id="refmail${nextId}" placeholder="e.g. example@gmail.com" >
        </div>
        <div class="sub-block">
            <label for="refphone">Phone <span class="star">*<span></label>
            <input type="text" value="" name="refphone${nextId}" id="refphone${nextId}" placeholder="" >
        </div>
    </div>
    <button name="delete-ref-button" onclick="deleteREF(${nextId})" type="button" id="deleteref${nextId}">Delete</button>
</div>`);
}

// //////

function deleteWE(id){
    let form = document.getElementsByClassName('we');
    let block = document.getElementById(`workexp${id}`);
    block.remove();
    for(let i=1;i<form.length;i++){
        let num = parseInt(extractNumber(form[i].id));
        if(num > id){
            $(`#workexp${num} #jobtitle${num}`).attr('name',`jobtitle${num-1}`);
            $(`#workexp${num} #jobtitle${num}`).attr('id',`jobtitle${num-1}`);

            $(`#workexp${num} #wecountry${num}`).attr('name',`wecountry${num-1}`);
            $(`#workexp${num} #wecountry${num}`).attr('id',`wecountry${num-1}`);

            $(`#workexp${num} #company${num}`).attr('name',`company${num-1}`);
            $(`#workexp${num} #company${num}`).attr('id',`company${num-1}`);

            $(`#workexp${num} #start${num}`).attr('name',`start${num-1}`);
            $(`#workexp${num} #start${num}`).attr('id',`start${num-1}`);

            $(`#workexp${num} #end${num}`).attr('name',`end${num-1}`);
            $(`#workexp${num} #end${num}`).attr('id',`end${num-1}`);

            $(`#workexp${num} #wed${num}`).attr('name',`wed${num-1}`);
            $(`#workexp${num} #wed${num}`).attr('id',`wed${num-1}`);

            $(`#workexp${num} #deletewe${num}`).attr('onclick',`deleteWE(${num-1})`);
            $(`#workexp${num} #deletewe${num}`).attr('id',`deletewe${num-1}`);

            form[i].id = `workexp${num-1}`;
        }
    }
}

function deleteED(id){
    let form = document.getElementsByClassName('ed');
    let block = document.getElementById(`education${id}`);
    block.remove();
    for(let i=1;i<form.length;i++){
        let num = parseInt(extractNumber(form[i].id));
        if(num > id){
            $(`#education${num} #degree${num}`).attr('name',`degree${num-1}`);
            $(`#education${num} #degree${num}`).attr('id',`degree${num-1}`);

            $(`#education${num} #school${num}`).attr('name',`school${num-1}`);
            $(`#education${num} #school${num}`).attr('id',`school${num-1}`);

            $(`#education${num} #gradate${num}`).attr('name',`gradate${num-1}`);
            $(`#education${num} #gradate${num}`).attr('id',`gradate${num-1}`);

            $(`#education${num} #edd${num}`).attr('name',`edd${num-1}`);
            $(`#education${num} #edd${num}`).attr('id',`edd${num-1}`);

            $(`#education${num} #deleteed${num}`).attr('onclick',`deleteED(${num-1})`);
            $(`#education${num} #deleteed${num}`).attr('id',`deleteed${num-1}`);

            form[i].id = `education${num-1}`;
        }
    }
}

function deleteCE(id){
    let form = document.getElementsByClassName('ce');
    let block = document.getElementById(`certificate${id}`);
    block.remove();
    for(let i=1;i<form.length;i++){
        let num = parseInt(extractNumber(form[i].id));
        if(num > id){
            $(`#certificate${num} #cert${num}`).attr('name',`cert${num-1}`);
            $(`#certificate${num} #cert${num}`).attr('id',`cert${num-1}`);

            $(`#certificate${num} #org${num}`).attr('name',`org${num-1}`);
            $(`#certificate${num} #org${num}`).attr('id',`org${num-1}`);

            $(`#certificate${num} #finish${num}`).attr('name',`finish${num-1}`);
            $(`#certificate${num} #finish${num}`).attr('id',`finish${num-1}`);

            $(`#certificate${num} #ced${num}`).attr('name',`ced${num-1}`);
            $(`#certificate${num} #ced${num}`).attr('id',`ced${num-1}`);

            $(`#certificate${num} #deletece${num}`).attr('onclick',`deleteCE(${num-1})`);
            $(`#certificate${num} #deletece${num}`).attr('id',`deletece${num-1}`);

            form[i].id = `certificate${num-1}`;
        }
    }
}

function deleteREF(id){
    let form = document.getElementsByClassName('ce');
    let block = document.getElementById(`references${id}`);
    block.remove();
    for(let i=1;i<form.length;i++){
        let num = parseInt(extractNumber(form[i].id));
        if(num > id){
            $(`#references${num} #refname${num}`).attr('name',`refname${num-1}`);
            $(`#references${num} #refname${num}`).attr('id',`refname${num-1}`);

            $(`#references${num} #rel${num}`).attr('name',`rel${num-1}`);
            $(`#references${num} #rel${num}`).attr('id',`rel${num-1}`);

            $(`#references${num} #refcomp${num}`).attr('name',`refcomp${num-1}`);
            $(`#references${num} #refcomp${num}`).attr('id',`refcomp${num-1}`);

            $(`#references${num} #refmail${num}`).attr('name',`refmail${num-1}`);
            $(`#references${num} #refmail${num}`).attr('id',`refmail${num-1}`);
            
            $(`#references${num} #refphone${num}`).attr('name',`refphone${num-1}`);
            $(`#references${num} #refphone${num}`).attr('id',`refphone${num-1}`);

            $(`#references${num} #deleteref${num}`).attr('onclick',`deleteREF(${num-1})`);
            $(`#references${num} #deleteref${num}`).attr('id',`deleteref${num-1}`);

            form[i].id = `references${num-1}`;
        }
    }
}

