function NavShow(){
	var topPos = $(".navigation").css("display");
	if(topPos == 'none'){
	$('.navigation').css('display' , 'block');
}
	else{
	$(".navigation").css('display' , 'none');}
}