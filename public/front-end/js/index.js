$(document).ready(function(){

 

    // $('#sidebar').toggleClass('active');
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    // category hover effects

    // level-1, list-1
      $("#B1").hover(function(){
        $("#A1").css("color", "red");
        $("#A1").css("border-left","5px solid red");
        }, function(){
        $("#A1").css("color", "white");
        $("#A1").css("border-left","none");
      });

    // level-1, list-2
      $("#B2").hover(function(){
        $("#A2").css("color", "red");
        $("#A2").css("border-left","5px solid red");
        }, function(){
        $("#A2").css("color", "white");
        $("#A2").css("border-left","none");
      });

    // level-1, list-3
      $("#B3").hover(function(){
        $("#A3").css("color", "red");
        $("#A3").css("border-left","5px solid red");
        }, function(){
        $("#A3").css("color", "white");
        $("#A3").css("border-left","none");
      });

      // level-1, list-4
      $("#B4").hover(function(){
        $("#A4").css("color", "red");
        $("#A4").css("border-left","5px solid red");
        }, function(){
        $("#A4").css("color", "white");
        $("#A4").css("border-left","none");
      });

      // level-1, list-5
      $("#B5").hover(function(){
        $("#A5").css("color", "red");
        $("#A5").css("border-left","5px solid red");
        }, function(){
        $("#A5").css("color", "white");
        $("#A5").css("border-left","none");
      });

      // level-1, list-6
      $("#B6").hover(function(){
        $("#A6").css("color", "red");
        $("#A6").css("border-left","5px solid red");
        }, function(){
        $("#A6").css("color", "white");
        $("#A6").css("border-left","none");
      });

      // level-1, list-7
      $("#B7").hover(function(){
        $("#A7").css("color", "red");
        $("#A7").css("border-left","5px solid red");
        }, function(){
        $("#A7").css("color", "white");
        $("#A7").css("border-left","none");
      });

      // level-1, list-8
      $("#B8").hover(function(){
        $("#A8").css("color", "red");
        $("#A8").css("border-left","5px solid red");
        }, function(){
        $("#A8").css("color", "white");
        $("#A8").css("border-left","none");
      });

      // level-1, list-9
      $("#B9").hover(function(){
        $("#A9").css("color", "red");
        $("#A9").css("border-left","5px solid red");
        }, function(){
        $("#A9").css("color", "white");
        $("#A9").css("border-left","none");
      });

      // level-1, list-10
      $("#B10").hover(function(){
        $("#A10").css("color", "red");
        $("#A10").css("border-left","5px solid red");
        }, function(){
        $("#A10").css("color", "white");
        $("#A10").css("border-left","none");
      });

      // level-2, list-1
      $("#C1").hover(function(){
        $("#A1B1").css("color", "red");
        $("#A1B1").css("border-left","5px solid red");
        }, function(){
        $("#A1B1").css("color", "white");
        $("#A1B1").css("border-left","none");
      });

      // level-2, list-2
      $("#C2").hover(function(){
        $("#A1B2").css("color", "red");
        $("#A1B2").css("border-left","5px solid red");
        }, function(){
        $("#A1B2").css("color", "white");
        $("#A1B2").css("border-left","none");
      });

      // level-2, list-3
      $("#C3").hover(function(){
        $("#A1B3").css("color", "red");
        $("#A1B3").css("border-left","5px solid red");
        }, function(){
        $("#A1B3").css("color", "white");
        $("#A1B3").css("border-left","none");
      });

      // level-2, list-4
      $("#C4").hover(function(){
        $("#A1B4").css("color", "red");
        $("#A1B4").css("border-left","5px solid red");
        }, function(){
        $("#A1B4").css("color", "white");
        $("#A1B4").css("border-left","none");
      });

      // level-2, list-5
      $("#C5").hover(function(){
        $("#A1B5").css("color", "red");
        $("#A1B5").css("border-left","5px solid red");
        }, function(){
        $("#A1B5").css("color", "white");
        $("#A1B5").css("border-left","none");
      });





	// owl plugin 1(drag)
	$('.owl-fashion').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplaySpeed:8000,
    responsive:{
        0:{
            items:2
        },
        430:{
            items:2
        },
        600:{
            items:4
        },
        800:{
            items:5
        },
        1000:{
            items:6
        }
    }
	});

    // owl plugin 1(drag)
    $('.owl-furniture').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplaySpeed:2000,
    responsive:{
        0:{
            items:2
        },
        430:{
            items:2
        },
        600:{
            items:4
        },
        800:{
            items:5
        },
        1000:{
            items:6
        }
    }
    });

    // owl plugin 1(drag)
    $('.owl-cellphone').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplaySpeed:5000,
    responsive:{
        0:{
            items:2
        },
        430:{
            items:2
        },
        600:{
            items:4
        },
        800:{
            items:5
        },
        1000:{
            items:5
        }
    }
    });
});