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
});