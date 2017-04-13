
//menu
window.onload = function() {
    var dot = document.querySelector('#dot');
    dot.addEventListener('click', slide, false);

    var menu = document.querySelector('#menu');
    menu.addEventListener('click', hide, false);
};


function slide() {
	menu.classList.add('show');	
};

function hide() {
	menu.classList.remove('show');	
};


var form_email, form_sprava, submit;
form_email = document.getElementById('email');
form_sprava = document.getElementById('sprava');
form_submit = document.getElementById('submit');

//form_submit.addEventListener('click', validate);

if(form_email.value === ''){
    form_email.style.border = '1px solid red';    
};
if(form_sprava.value === ''){
    form_sprava.style.border = '1px solid red';    
};