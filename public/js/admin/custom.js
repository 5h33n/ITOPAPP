$(function(){
    "use strict";
    $(".preloader").fadeOut(),$(".left-sidebar").hover(function(){
        $(".navbar-header").addClass("expand-logo")
    },function(){
        $(".navbar-header").removeClass("expand-logo")
    }),$(".nav-toggler").on("click",function(){
        $("#main-wrapper").toggleClass("hide-sidebar"),$(".nav-toggler i").toggleClass("ti-menu")
    }),$(".nav-lock").on("click",function(){
        $("body").toggleClass("lock-nav"),$(".nav-lock i").toggleClass("mdi-toggle-switch-off"),$("body, .page-wrapper").trigger("resize")
    }),$(".search-box a, .search-box .app-search .srh-btn").on("click",function(){
        $(".app-search").toggle(200)
    }),$(function(){
        $(".service-panel-toggle").on("click",function(){
            $(".customizer").toggleClass("show-service-panel")
        }),$(".page-wrapper").on("click",function(){
            $(".customizer").removeClass("show-service-panel")
        })
    }),$(".floating-labels .form-control").on("focus blur",function(e){
        $(this).parents(".form-group").toggleClass("focused","focus"===e.type||0<this.value.length)
    }).trigger("blur"),$(function(){
        $('[data-toggle="tooltip"]').tooltip()
    }),$(function(){
        $('[data-toggle="popover"]').popover()
    }),$(".customizer-body, .scrollable").perfectScrollbar({
        wheelPropagation:!0
    }),$("body, .page-wrapper").trigger("resize"),$(".page-wrapper").delay(20).show(),$(".list-task li label").click(function(){
        $(this).toggleClass("task-done")
    }),$('a[data-action="collapse"]').on("click",function(e){
        e.preventDefault(),$(this).closest(".card").find('[data-action="collapse"] i').toggleClass("ti-minus ti-plus"),$(this).closest(".card").children(".card-body").collapse("toggle")
    }),$('a[data-action="expand"]').on("click",function(e){
        e.preventDefault(),$(this).closest(".card").find('[data-action="expand"] i').toggleClass("mdi-arrow-expand mdi-arrow-compress"),$(this).closest(".card").toggleClass("card-fullscreen")
    }),$('a[data-action="close"]').on("click",function(){
        $(this).closest(".card").removeClass().slideUp("fast")
    }),$(document).on("click",".mega-dropdown",function(e){
        e.stopPropagation()
    });
    var o,a=function(){
        $(".lastmonth").sparkline([6,10,9,11,9,10,12],{
            type:"bar",height:"35",barWidth:"4",width:"100%",resize:!0,barSpacing:"8",barColor:"#2961ff"
        })
    };
    $(window).resize(function(e){
        clearTimeout(o),o=setTimeout(a,500)}),a(),$(".show-left-part").on("click",function(){
        $(".left-part").toggleClass("show-panel"),$(".show-left-part").toggleClass("ti-menu")
    }),$(".custom-file-input").on("change",function(){
        var e=$(this).val();
        $(this).next(".custom-file-label").html(e)
    })
});