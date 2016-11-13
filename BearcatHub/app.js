$('#nav-test').on('click', function(e){
	alert('hi');
	e.preventDefault();
	$(this).parent().toggleClass('.nav-open');
});
