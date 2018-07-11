$('#hamburger').on('click', function(){
  if($("ul li").hasClass("responsive-nav-on")) {
    $("ul li").removeClass("responsive-nav-on");
    $("#hamburger").css("border-bottom","none");
  } else {
    $("ul li").addClass("responsive-nav-on");
    $("#hamburger").css("border-bottom","white 2px solid");
  }
});
