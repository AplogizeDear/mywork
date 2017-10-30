$().ready(function() {
// 在键盘按下并释放及提交后验证提交表单
    $("#form-sum").validate({
        rules: {
            nickname: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 5
            },
            phone:{
                required:true,
                minlength:15
            },
        },
        messages: {
            nickname: {
                required: "请输入你的昵称",
                minlength: "用户名字数不少于5"
            },
            phone:{
                required:"请输入手机号",
                minlength:"手机号不少于15位"
            },
            password: {
                required: "请设置密码",
                minlength: "密码长度不能小于6"
            },
        }
    });
});