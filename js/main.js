
$(document).ready(function(){
    let check = 0;
  
    getbanner();
    subcounts();
     many();
     setInterval(function(){subcount()},6000);
      setInterval(function(){manys()},7000);
       channeln();
function getbanner(){
jQuery.ajax({
type:"GET",
url: "inc/geturlbanner.php",
data:{},
 beforeSend: function() {

},
complete: function() {
   
},
success: function(data) {

  
$("#banneryt").attr("src",data)

}
});
}
function subcounts(){
jQuery.ajax({
type:"GET",
url: "inc/getsub.php",
data:{},
 beforeSend: function() {

},
complete: function(data) {
  
},
success: function(data) {
 $("#subcount").html(data);

}


});
}

function many(){
jQuery.ajax({
type:"GET",
url: "inc/getsub.php",
data:{},
 beforeSend: function() {

},
complete: function(data) {
  
},
success: function(data) {
 $("#subcount").html(data);

}


});
}
function manys(){
jQuery.ajax({
type:"GET",
url: "inc/call.php",
data:{},
 beforeSend: function() {

},
complete: function(data) {
  
},
success: function(data) {
  let old = $("#subcm").text();
if(old != data){
  $("#subcm").slideUp('5000');

  $("#subcm").slideDown('5000');
  $("#subcm").html(data);
}else{

}

}


});
}
function subcount(){
jQuery.ajax({
type:"GET",
url: "inc/getsub.php",
data:{},
 beforeSend: function() {

},
complete: function(data) {
  
},
success: function(data) {
  let old = $("#subcount").text();
if(old != data){
  $("#subcount").slideUp('5000');

  $("#subcount").slideDown('5000');
  $("#subcount").html(data);
}else{

}

}


});
}

function channeln(){
jQuery.ajax({
type:"GET",
url: "inc/getchannel.php",
data:{},
 beforeSend: function() {

},
complete: function() {
   
},
success: function(data) {

  
$(".ytchanneln").text(data);

}
});
}



});
