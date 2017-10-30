$(function() {
    $('.main-list li').on("click", function () {
        $lis=$('.main-list li');
        $num=$lis.index($(this));
        console.log($num);
        $lis.removeClass("active");
        $(this).addClass("active");
        $uls=$(".content ul");
        $uls.css({"display":"none"});
        $uls.eq($num).css({"display":"block"});
    })
})