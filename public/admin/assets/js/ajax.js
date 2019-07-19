$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
	$('.edit').click(function(){
		$('.errorName').hide();
        let id = $(this).data('id');
		//Edit
		$.ajax({
			url : 'admin/category/'+id+'/edit',
			dataType : 'json',
			type : 'get',
			success :function($result){
				$('.name').val($result.name);
				$('.title').text($result.name);
			}
		});
		$('#updateCategory').on('submit',function(event){
            event.preventDefault();
			$.ajax({
				url : 'admin/updateCate/'+id,
				data : new FormData(this),
				contentType : false,
				processData : false,
				cache : false,
				type : 'post',
				success : function($result){
                    $('#edit').modal('hide');
                    location.reload();
                },
                error:function(error){
                    var bugs = JSON.parse(error.responseText);
                    $('.errorName').show();
                    $('.errorName').text(bugs.errors.name);
                }
			});
		});
	});
	//Delete category
	$('.delete').click(function(){
		let id = $(this).data('id');
		$('.del').click(function(){
			$.ajax({
				url : 'admin/category/'+id,
				dataType : 'json',
				type : 'delete',
				success : function($result){
					$('#delete').modal('hide');
					location.reload();
				}
			});
		});
	});

	//Edit ProductType
	$('.editProducttype').click(function(){
        $('.errorName').hide();
        $('.errorImage').hide();
		let id = $(this).data('id');
		$.ajax({
			url : 'admin/producttype/'+id+'/edit',
			dataType : 'json',
			type : 'get',
			success : function($result){
				$('.name').val($result.producttype.name);
				var html = '';
				$.each($result.category,function($key,$value){
					if($value['id'] == $result.producttype.idCategory){
						html += '<option value='+$value['id']+' selected>';
							html += $value['name'];
						html += '</option>';
					}else{
						html += '<option value='+$value['id']+'>';
							html += $value['name'];
						html += '</option>';
					}
				});
                $('.idCategory').html(html);
                $('.imageThum').attr('src','img/upload/producttype/'+$result.producttype.image);
            }
		});
		$('#updateProducttype').on('submit',function(event){
            event.preventDefault();
			$.ajax({
				url : 'admin/updateProductype/'+id,
                data: new FormData(this),
                contentType:false,
                processData:false,
                cache:false,
				type : 'post',
				success : function($result){
                    $('#edit').modal('hide');
                    location.reload();
                },
                error:function(error){
                    var bugs = JSON.parse(error.responseText);
                    if(bugs.errors.name){
                        $('.errorName').show();
                        $('.errorName').text(bugs.errors.name);
                    }
                    if(bugs.errors.image){
                        $('.Image').val('');
                        $('.errorImage').show();
                        $('.errorImage').text(bugs.errors.image);
                    }
                }
			})
		});
	});
	$('.deleteProducttype').click(function(){
		let id = $(this).data('id');
		$('.delProductType').click(function(){
			$.ajax({
				url : 'admin/producttype/'+id,
				dataType : 'json',
				type : 'delete',
				success : function($data){
					$('#delete').modal('hide');
					location.reload();
				}
			});
		});
    });
    //Lấy loại sản phẩm thuộc danh mục
	$('.cateProduct').change(function(){
		let idCate = $(this).val();
		$.ajax({
			url : 'ajax/getproducttype',
			data : {
				idCate : idCate
			},
			type : 'get',
			dataType : 'json',
			success : function($data){
				let html = '';
				$.each($data,function($key,$value){
					html += '<option value='+$value['id']+'>';
						html += $value['name'];
					html += '</option>';
				});
				$('.proTypeProduct').html(html);
			}
		});
	});
	//Edit product
	$('.editProduct').click(function(){
		$('.errorName').hide();
		$('.errorQuantity').hide();
		$('.errorPrice').hide();
		$('.errorPromotional').hide();
        $('.errorImage').hide();
        $('.errorPhoto').hide();
        $('.errorDescription').hide();
        $('.errorColor').hide();
        $('.errorInformation').hide();
		let id = $(this).data('id');
		$.ajax({
			url : 'admin/product/'+id+'/edit',
			dataType : 'json',
			type : 'get',
			success : function(data){
				$('.name').val(data.product.name);
				$('.quantity').val(data.product.quantity);
				$('.price').val(data.product.price);
                $('.promotional').val(data.product.promotional);
                $('.color').val(data.product.color);
                $('.imageThum').attr('src','img/upload/product/'+data.product.image);
                let thum ='';
                $.each(data.product_details,function(key,value){
                    thum +='<img style="border:1px gray solid;margin-left:3px" class"img img-thumnail" with="50" height="50" lign="center" src ="img/upload/product_details/'+value.image+'">';
                });
                $('.imageThums').html(thum);
                CKEDITOR.instances['ckeditor'].setData(data.product.description);
                CKEDITOR.instances['information'].setData(data.product.information);
				let html1 = '';
				$.each(data.category,function(key,value){
					if(data.product.idCategory == value['id']){
						html1 += '<option value='+value['id']+' selected>';
							html1 += value['name'];
						html1 += '</option>';
					}else{
						html1 += '<option value='+value['id']+'>';
							html1 += value['name'];
						html1 += '</option>';
					}
				});
				$('.cateProduct').html(html1);
				let html2 = '';
				$.each(data.producttype,function(key,value){
					if(data.product.idProductType == value['id']){
						html2 += '<option value='+value['id']+' selected>';
							html2 += value['name'];
						html2 += '</option>';
					}else{
						html2 += '<option value='+value['id']+'>';
							html2 += value['name'];
						html2 += '</option>';
					}
				});
				$('.proTypeProduct').html(html2);
			}
		});
		$('#updateProduct').on('submit',function(event){
			//chặn form submit
			event.preventDefault();
			$.ajax({
				url : 'admin/updatePro/'+id,
				data : new FormData(this),
				contentType : false,
				processData : false,
				cache : false,
				type : 'post',
				success : function(data){
					$('#edit').modal('hide');
					location.reload();
				},
				error:function(error){
                    var bugs = JSON.parse(error.responseText);
					if(bugs.errors.image){
						$('.errorImage').show();
						$('.errorImage').text(bugs.errors.image[0]);
						$('.image').val('');
                    }
                    if(bugs.errors.product_details+'.0'){
						$('.errorPhoto').show();
						$('.errorPhoto').text('Chi tiết ảnh có file không phải là ảnh');
                        $('.product_details').val('');
					}
					if(bugs.errors.name){
						$('.errorName').show();
						$('.errorName').text(bugs.errors.name[0]);
						$('.name').val('');
					}
					if(bugs.errors.quantity){
						$('.errorQuantity').show();
						$('.errorQuantity').text(bugs.errors.quantity[0]);
						$('.quantity').val('');
					}
					if(bugs.errors.price){
						$('.errorPrice').show();
						$('.errorPrice').text(bugs.errors.price[0]);
						$('.price').val('');
					}
					if(bugs.errors.promotional){
						$('.errorPromotional').show();
						$('.errorPromotional').text(bugs.errors.promotional[0]);
						$('.promotional').val('');
					}
					if(bugs.errors.description){
						$('.errorDescription').show();
						$('.errorDescription').text(bugs.errors.description[0]);
						$('.description').val('');
					}
					if(bugs.errors.information){
						$('.errorInformation').show();
						$('.errorInformation').text(bugs.errors.information[0]);
						$('.information').val('');
					}
					if(bugs.errors.color){
						$('.errorColor').show();
						$('.errorColor').text(bugs.errors.color[0]);
						$('.color').val('');
					}
                }
			});
		});
	});
	//Delete product
	$('.deleteProduct').click(function(){
        let id = $(this).data('id');
		$('.delProduct').click(function(){
			$.ajax({
				url : 'admin/product/'+id,
				type : 'delete',
				dataType : 'json',
				success : function($data){
				 $('#delete').modal('hide');
			     location.reload();
			 	}
			 });
		});
	});

});
