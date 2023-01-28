function matchPassword() {
        var submit=document.getElementById('submit');
        if(document.getElementById('user_password').value ==
        document.getElementById('user_passwordconfirm').value) 
        {
            document.getElementById('user_password').style.borderColor = 'green';
            document.getElementById('user_passwordconfirm').style.borderColor = 'green';
            submit.disabled=false;
        } 
        else{
            document.getElementById('user_password').style.borderColor = 'red';
            document.getElementById('user_passwordconfirm').style.borderColor = 'red';
            submit.disabled=true;
  }
}

function blank_name() {
    if(document.getElementById('name').value==""){
        document.getElementById('name').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('name').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_uname() {
    if(document.getElementById('user_name').value==""){
        document.getElementById('user_name').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('user_name').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_email() {
    if(document.getElementById('user_email').value==""){
        document.getElementById('user_email').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('user_email').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_pwd() {
    if(document.getElementById('user_password').value==""){
        document.getElementById('user_password').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('user_password').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_cpwd() {
    if(document.getElementById('user_passwordconfirm').value==""){
        document.getElementById('user_passwordconfirm').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('user_passwordconfirm').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_phone() {
    if(document.getElementById('phone').value==""){
        document.getElementById('phone').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('phone').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_age() {
    if(document.getElementById('age').value==""){
        document.getElementById('age').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('age').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_weight() {
    if(document.getElementById('weight').value==""){
        document.getElementById('weight').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('weight').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_blood() {
    if(document.getElementById('bloodgroup').value=="select"){
        document.getElementById('bloodgroup').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('bloodgroup').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_gender() {
    if(document.getElementById('gender').value=="select"){
        document.getElementById('gender').style.borderColor = 'red';
        submit.disabled=true;
    }
    else {
        document.getElementById('gender').style.borderColor = '';
        submit.disabled=false;
    }
}
function blank_submit() {
    if(document.getElementById('name').value==""||
    document.getElementById('user_name').value==""||
    document.getElementById('user_email').value==""||
    document.getElementById('user_password').value==""||
    document.getElementById('user_passwordconfirm').value==""||
    document.getElementById('phone').value==""||
    document.getElementById('age').value==""||
    document.getElementById('weight').value==""||
    document.getElementById('bloodgroup').value=="select"||
    document.getElementById('gender').value=="select") {
        submit.disabled=true;
    }
    else {
        submit.disabled=false;
    }
}
