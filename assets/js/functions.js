$(document).ready(function() {
  const mq = window.matchMedia("(max-width:630px)");
  const mq_2 = window.matchMedia("(max-width:920px)");


let hArr = document.querySelectorAll(".stack");
let h2Arr = document.querySelectorAll(".stack_sized");

$( window ).on( "load", function() {
  for(i=0; i< hArr.length; i++){
    h2Arr[i].style.height = `${hArr[i].clientHeight}` + 'px';
  };
});
    $(".burger").click( function(){
        console.log("click");
        $("#menu").css("display","block");
        $(".closer").addClass("show");
        $(".burger").addClass("hide");
        $("#mobile_menu_back").addClass("show");
      });
    $(".closer").click( function(){
        $("#menu").css("display","");
        $("#mobile_menu_back").removeClass("show");
        $(".closer").removeClass("show");
        $(".burger").removeClass("hide");
      });
    $("#menu").children().click( function(){
        $("#menu").css("display","");
        $("#mobile_menu_back").removeClass("show");
        $(".closer").removeClass("show");
        $(".burger").removeClass("hide");
      });
    $(".click_ani").hover(function(){
      console.log("hover");
      $(".click_react")
    });
    	var rellax = new Rellax('.rellax');


});
