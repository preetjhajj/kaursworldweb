jQuery(document).ready(function($){
    function scrolltopaddclass(){
        var st = $(window).scrollTop();
        $('.wp-block-group').each(function () {
            var self = $(this),
                top = self.offset().top - 100
                hgt = self.height();
                finl = top - hgt;
            if(st>finl){
                self.addClass("visible");
            }    
       });
    }
    scrolltopaddclass();
    if($(".hm-work__section")[0]){
        $(document).on('scroll', function(){
            scrolltopaddclass();
            var worksec = $(".hm-work__section").offset().top - 100;
            var workhgt = $(".hm-work__section").height();
            var st = $(window).scrollTop();
            var minus = worksec - workhgt;
            var fnminus = st-minus;
            console.log(fnminus)
            if(fnminus>=0){
                $('.hm-work__section.visible .work-column__inner h2').css("transform", "translateX("+ fnminus + "px)");
            }
        })
    }
    $(".openpop").click(function(e){
        e.preventDefault();
        $(".popup__content").removeClass("hide");
        $("body").addClass("popopen")
    })
    $(".close__btn").click(function(){
        $(".popup__content").addClass("hide");
        $("body").addClass("popopen")
    })  
})      
