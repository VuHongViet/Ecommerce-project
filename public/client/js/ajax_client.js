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
            url : 'http://suba.com/register',
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
            url : 'http://suba.com/login',
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
                console.log(bugs);
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
        $('.mega-menu-photo > img').attr('src','http://suba.com/img/upload/producttype/'+id);
    })
    $('.producttype-menu').mouseout(function(){
        $('.mega-menu-photo > img').attr('src','');
    })
    $('.quickview').click(function(){
        let id = $(this).data('id');
        $.ajax({
            url:'http://suba.com/ajax/getproduct',
            data:{
                idProduct:id
            },
            type:'get',
            dataType:'json',
            success:function(data){
                $('.product-info h1').text(data.product[0].name);
                $('.quick-desc').html(data.product[0].description);
                $('.thumpImage').attr('src','http://suba.com/img/upload/product/'+data.product[0].image);
                if(data.product.promotional =='0'){
                    $('.new-price').text(data.product.price+' VNĐ');
                    $('.old-price').text('');
                }
                else{
                    $('.new-price').text(data.product.promotional+' VNĐ');
                    $('.old-price').text(data.product.price);
                }
            },
        })
    })
    $('.addcart').click(function(){
        let id = $(this).data('id');
        // $this để giữ lại biến $(this)
        var $this = $(this);
        $.ajax({
            url:'http://suba.com/ajax/addcart',
            data:{
                idProduct:id
            },
            type:'post',
            dataType:'json',
            success:function(data){
                let i=data.cart.length;
                let count =0;
                for (let index = 0; index < i; index++) {
                    count += data.cart[index].quantity;
                }
                $this.parent().next().css({'opacity':1,'z-index':1});
                setTimeout(function(){
                    $this.parent().next().css({'opacity':0,'z-index':-1});
                },2500);
                $('.infor_count').attr('title','Bạn có '+count +' sản phẩm');
                $('.count').text(count);
            }
        })
    })
    // lấy id sản phẩm về modal để xóa
    $('.remove-product').click(function(){
        let id = $(this).data('id');
        $('#id-remove').val(id);
    })
    $('.text-center > li').each(function(){
        let quantity = $(this).find('.input_297o').val();
        if(quantity==1){
            $(this).find('.sub').prop({disabled:true});
            $(this).find('.sub').css({"opacity":"0.4"});
        }
        else{
            $(this).find('.sub').prop({disabled:false});
            $(this).find('.sub').css({"opacity":"1"});
        }
    });
    $('.add').click(function(e){
        e.preventDefault();
        let quantity = $(this).prev('.input_297o').val();
        quantity ++;
        $(this).prev('.input_297o').val(quantity);
            quantity = $(this).prev('.input_297o').val();
        if(quantity==1){
            $(this).parent().find('.sub').prop({disabled:true});
            $(this).parent().find('.sub').css({"opacity":"0.4"});
        }
        else{
            $(this).parent().find('.sub').prop({disabled:false});
            $(this).parent().find('.sub').css({"opacity":"1"});
        }
    })
    $('.sub').click(function(e){
        e.preventDefault();
        let sub = $(this).next('.input_297o').val();
        sub --;
        $(this).next('.input_297o').val(sub);
        sub = $(this).next('.input_297o').val();
        if(sub==1){
            $(this).parent().find('.sub').prop({disabled:true});
            $(this).parent().find('.sub').css({"opacity":"0.4"});
        }
        else{
            $(this).parent().find('.sub').prop({disabled:false});
            $(this).parent().find('.sub').css({"opacity":"1"});
        }
    })
    $('.sin-plus-minus .button').each(function(){
        let quantity = $(this).find('.input_297o').val();
        if(quantity==1){
            $(this).find('.sub').prop({disabled:true});
            $(this).find('.sub').css({"opacity":"0.4"});
        }
        else{
            $(this).find('.sub').prop({disabled:false});
            $(this).find('.sub').css({"opacity":"1"});
        }
    })

    //update cart
    $('.change-quantity').click(function(){
        let id = $(this).data('id');
        let value = $(this).siblings('.input_297o').val();
        var $this = $(this);
        $.ajax({
            url:'http://localhost:8000/ajax/updateCart/'+id,
            data:{
                idProduct:id,
                value:value
            },
            type:'post',
            dataType:'json',
            success:function(data){
                let i=data.cart.count;
                let count =0;
                for (let index = 0; index < i; index++) {
                    count += data.cart[index].quantity;
                }
                $this.parents('.product-quantity').next().text(data.product.total + ' VNĐ');
                $('.total').text(data.cart.total + ' VNĐ');
                $('.order-total-price').text(data.cart.alltotal + ' VNĐ');
                $('.infor_count').attr('title','Bạn có '+count +' sản phẩm');
                $('.count').text(count);
            }
        })
    })
});
