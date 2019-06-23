$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
	$('.edit').click(function(){
		$('.error').hide();
        let id = $(this).data('id');
		//Edit
		$.ajax({
			url : 'admin/category/'+id+'/edit',
			dataType : 'json',
			type : 'get',
			success :function($result){
				console.log($result);
				$('.name').val($result.name);
				$('.title').text($result.name);
			}
		});
		$('.update').click(function(){
			let ten = $('.name').val();
			$.ajax({
				url : 'admin/category/'+id,
				data : {
					name : ten,
				},
				type : 'put',
				dataType : 'json',
				success : function($result){
					console.log($result);
					if($result.errors == 'true'){
						$('.error').show();
						$('.error').text($result.message.name[0]);
					}else{
						$('#edit').modal('hide');
						location.reload();
					}

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
		$('.error').hide();
		let id = $(this).data('id');
		$.ajax({
			url : 'admin/producttype/'+id+'/edit',
			dataType : 'json',
			type : 'get',
			success : function($result){
                console.log($result);
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
			}
		});
		$('.updateProductType').click(function(){
			let idCategory = $('.idCategory').val();
			let name = $('.name').val();
			let status = $('status').val();
			$.ajax({
				url : 'admin/producttype/'+id,
				dataType : 'json',
				data : {
					idCategory : idCategory,
					name : name,
				},
				type : 'put',
				success : function($result){
                    console.log($result);
					if($result.errors == 'true'){
						$('.error').show();
						$('.error').text($result.message.name[0]);
					}else{
						$('#edit').modal('hide');
						location.reload();
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
			url : 'getproducttype',
			data : {
				idCate : idCate
			},
			type : 'get',
			dataType : 'json',
			success : function($data){
                console.log($data)
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
                console.log(data);
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
					console.log(data);
					if(data.error == 'true'){
						if(data.message.image){
							$('.errorImage').show();
							$('.errorImage').text(data.message.image[0]);
							$('.image').val('');
						}
						if(data.message.name){
							$('.errorName').show();
							$('.errorName').text(data.message.name[0]);
							$('.name').val('');
						}
						if(data.message.quantity){
							$('.errorQuantity').show();
							$('.errorQuantity').text(data.message.quantity[0]);
							$('.quantity').val('');
						}
						if(data.message.price){
							$('.errorPrice').show();
							$('.errorPrice').text(data.message.price[0]);
							$('.price').val('');
						}
						if(data.message.promotional){
							$('.errorPromotional').show();
							$('.errorPromotional').text(data.message.promotional[0]);
							$('.promotional').val('');
						}
						if(data.message.description){
							$('.errorDescription').show();
							$('.errorDescription').text(data.message.description[0]);
							$('.description').val('');
						}
						if(data.message.information){
							$('.errorInformation').show();
							$('.errorInformation').text(data.message.information[0]);
							$('.information').val('');
                        }
                        if(data.message.color){
							$('.errorColor').show();
							$('.errorColor').text(data.message.color[0]);
							$('.color').val('');
						}
					}
					else{
						$('#edit').modal('hide');
						location.reload();
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
                    console.log($data);
				 $('#delete').modal('hide');
			     location.reload();
			 	}
			 });
		});
	});

});