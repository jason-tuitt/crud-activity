let buttons = document.querySelectorAll('button:not([class])')

let edit = false;

buttons.forEach((e) => {
	e.classList.add('buttoncsssecondary');
	if (edit) {
		e.classList.add('btn');
		e.classList.add('btn-info');
	} else {
		e.classList.add('btn');
		e.classList.add('btn-dark');
	}
	edit = !edit;
});

buttons[0].removeAttribute('class');
buttons[0].classList.add('btn');
buttons[0].classList.add('btn-success');
buttons[0].classList.add('buttoncssprimary');
// buttons[0].classList.add('buttonmargin');