$(document).ready(function() {
        $(".collapsible").collapsible({
            accordion: !1
        })
    }), $(document).ready(function() {
        $(".search-toggle").click(function() {
            $("#search-container").slideToggle("slow", function() {
                $(".search-toggle").toggleClass("active")
            })
        })
    }), 
    function(c) {
        c(function() {
            c(".button-collapse").sideNav()
        })
    }(jQuery);