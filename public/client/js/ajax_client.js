$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $('.errorName').hide();
    $('.errorEmail').hide();
    $('.errorPassword').hide();
    $('.errorConfirm').hide();
    $('.errorLogin').hide();
    $('#register').on('submit',function(event){
        event.preventDefault();
        $.ajax({
            url : 'register',
            data : new FormData(this),
            contentType : false,
            processData : false,
            cache : false,
            type : 'post',
            success:function(result){
                $('#regis').modal('hide');
                location.reload();
            },
            error:function(error){
                var bugs = JSON.parse(error.responseText);
                if(bugs.errors.name){
                    $('.errorName').show();
                    $('.errorName').text(bugs.errors.name);
                    setTimeout(function(){
                        $('.errorName').hide();
                    },5000);
                }
                if(bugs.errors.email){
                    $('.errorEmail').show();
                    $('.errorEmail').text(bugs.errors.email);
                    setTimeout(function(){
                        $('.errorEmail').hide();
                    },5000);
                }
                if(bugs.errors.password){
                    $('.errorPassword').show();
                    $('.errorPassword').text(bugs.errors.password);
                    setTimeout(function(){
                        $('.errorPassword').hide();
                    },5000);
                }
                if(bugs.errors.password_confirmation){
                    $('.errorConfirm').show();
                    $('.errorConfirm').text(bugs.errors.password_confirmation[0]);
                    setTimeout(function(){
                        $('.errorConfirm').hide();
                    },5000);
                }
            }
        });
    })
    $('#login').on('submit',function(event){
        event.preventDefault();
        $.ajax({
            url : 'login',
            data : new FormData(this),
            contentType : false,
            processData : false,
            cache : false,
            type : 'post',
            success:function(result){
                if(result.error){
                    $('.errorLogin').show();
                    $('.errorLogin').text(result.error);
                    setTimeout(function(){
                        $('.errorLogin').hide();
                    },5000);
                }
                else{
                    $('#myModal').modal('hide');
                    location.reload();
                }
            },
            error:function(error){
                var bugs = JSON.parse(error.responseText);
                if(bugs.errors.email){
                    $('.errorEmail').show();
                    $('.errorEmail').text(bugs.errors.email);
                    setTimeout(function(){
                        $('.errorEmail').hide();
                    },5000);
                }
                if(bugs.errors.password){
                    $('.errorPassword').show();
                    $('.errorPassword').text(bugs.errors.password);
                    setTimeout(function(){
                        $('.errorPassword').hide();
                    },5000);
                }
            }
        });
    })
    $('.producttype-menu').mouseover(function(){
        let id = $(this).children('a').data('src');
        $('.mega-menu-photo > img').attr('src','img/upload/producttype/'+id);
    })
    $('.producttype-menu').mouseout(function(){
        $('.mega-menu-photo > img').attr('src','');
    })
});
