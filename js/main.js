
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