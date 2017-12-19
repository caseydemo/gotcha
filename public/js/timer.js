$(document).ready(function() {
var delay = 3 ;
var url = "/home";
function countdown() {
setTimeout(countdown, 1000) ;
$('#countmesg').html( delay  );
delay --;
if (delay < 0 ) {
window.location = url ;
delay = 0 ;
}
}
countdown() ;
});


// var timeleft = 5;
// var downloadTimer = setInterval(function(){
//   document.getElementById("progressBar").value = 5 - --timeleft;
  
//   if(timeleft <= 0)
// 	window.location = '/home' ;
// },1000);
	

