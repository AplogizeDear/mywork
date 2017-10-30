$(function(){
    let ses=sessionStorage.getItem('name');
    /*如果有值得话，显示登录人*/
    if(ses){
        $(".mi-left-two").css({"display":"none"});
        $('.mi-left').css({"display":"block"})
        $('.login-block').css({"display":"none"});
        $('.head-p').css({"display":"block"}).hover(function(){
        $('.drop-menu').css({"display":"block"});
        },function(){
         $('.drop-menu').css({"display":"none"}
                );
            })
    }else{
        $('.login-block').css({"display":"block"});
        $('.head-p').css({"display":"none"});
    }
})

