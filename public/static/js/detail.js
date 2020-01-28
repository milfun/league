/*
* @Author: MilFun
* @Date:   2019-10-12 16:07:46
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-12 16:08:05
*/
var dist 
$(window).scroll(function () {
  if ($(window).scrollTop() >= 50) {
    $(".share-btn").addClass("show-share");
  } else {
     $(".share-btn").removeClass("show-share");
  }
  
  dist =$(".zan").offset().top - $(window).scrollTop() 
  //console.log(dist)
  if (dist  < 400) {
     $(".share-btn").removeClass("show-share");
  }
}).trigger("scroll");


$(".sb-phone").hover(function(){
    $(".code").css("display","block");
},function(){
    $(".code").css("display","none");
});