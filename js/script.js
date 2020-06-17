// Маска ввода номера телефона (плагин maskedinput)
$('document').ready(function() {
	$('input[name=phone]').mask("+7(999) 999-9999");
});

// функция открытия меню
var neutral1  = false;

function openMenu(menu) {
	menu = document.getElementById("header-menu");

	if (neutral1 === false) {
		menu.style.transform = "translate(-295px,0)";
		menu.style.display = "block";
		neutral1 = true;
	} else {
    menu.style.transform = "translate(0,0)";
    menu.style.display = "none";
    neutral1 = false;
	}
}


// функция смены родителя
function priceChange() {
	var fragment = document.createDocumentFragment();
	fragment.appendChild(document.getElementById("box-packaging"));
	document.getElementById("packaging").appendChild(fragment);
}

function startMobileVersion() {
  if (screen.width <= 600) {
		priceChange();
  }
}
startMobileVersion();

//слайдер
var controls = document.querySelectorAll('.controls');
for (var i = 0; i < controls.length; i++){
  controls[i].style.display = 'inline-flex';
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;

function nextSlide(){
  goToSlide(currentSlide + 1);
}

function previousSlide(){
  goToSlide(currentSlide - 1);
}

function goToSlide(n){
  slides[currentSlide].className = 'slide';
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].className = 'slide showing';
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
  nextSlide();
};

previous.onclick = function(){
  previousSlide();
};

// функция открытия модального окна
var neutral2 = false;

function openModal(modal) {
  modal = document.getElementById("modal-window");

  if (neutral2 === false) {
    modal.style.display = "flex";
    neutral2 = true;
  } else {
    modal.style.display = "none";
    neutral2 = false;
  }
}