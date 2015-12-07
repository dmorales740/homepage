$(function () {
    $("nav li a").click(function (e) {
        
        var url = $(this).attr("href");
        var title = $(this).text();
        if($(this).is("[disabled]"))
        {
            return false;
        }
        if(title == "Blog" || title == "Home")
        {
            return;
        }
        e.preventDefault();
        ajaxLoad(url, title);
        
        $("nav li").removeClass("active");
        $(this).parent().addClass("active");
        $("nav li a").removeAttr("disabled");
        $(this).attr("disabled", "disabled");
		//$("nav li").css("cursor","pointer");
        //$(this).css("cursor","auto");
    });
	$(".imgLiquid").imgLiquid({fill: false, verticalAlign: 'top'});
    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        if (state !== null) {
            location.assign(state.url);
        } else {
            //location.reload();
            preventDefault();
        }
    });
});

function ajaxLoad(url, title) 
{
    $.post("http://darielmorales.com/"+ url,{ajax:title},function (data) {
        $("#main").html(data);
        $("#main").css("text-align","left");
    });
    window.history.pushState({url:"http://darielmorales.com/"+ url, title:title }, title, "http://darielmorales.com/"+ url);
    document.title = "Dariel Morales | "+ title;
}






