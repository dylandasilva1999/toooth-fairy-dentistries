$(document).ready(function() {
	$(".hamburger .fas").click(function(){
        $(".wrapper").addClass("active")
    })
    
    $(".wrapper .sidebar .close").click(function(){
        $(".wrapper").removeClass("active")
    })

    $('.sidebar-menu li a').click(function(e) {
    
        $('.sidebar-menu li.active').removeClass('active');
    
        var $parent = $(this).parent();
        $parent.addClass('active');
        e.preventDefault();
    });

    var zindex = 10;
  
  $("div.card").click(function(e){
    e.preventDefault();
 
    var isShowing = false;
 
    if ($(this).hasClass("d-card-show")) {
      isShowing = true
    }
 
    if ($("div.dashboard-cards").hasClass("showing")) {
      $("div.card.d-card-show")
        .removeClass("d-card-show");
 
      if (isShowing) {
        $("div.dashboard-cards")
          .removeClass("showing");
      } else {
        $(this)
          .css({zIndex: zindex})
          .addClass("d-card-show");
 
      }
 
      zindex++;
 
    } else {
      $("div.dashboard-cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("d-card-show");
 
      zindex++;
    }
    
  });

  $('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
  });

});