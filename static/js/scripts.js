
$(document).ready(startUp);


function startUp() {
	// Add classes
	var path = window.location.pathname.split('/').slice(-1);
	var str = '#navbar a[href="' + path + '"]';
	$(str).parent().addClass('active');
}
