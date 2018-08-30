let buttons = document.querySelectorAll('button:not([class])')

buttons.forEach((e) => {
	e.classList.add('btn');
	e.classList.add('btn-secondary');
	e.classList.add('submitbutton');
});
