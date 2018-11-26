<?php
    if(!isset($_SESSION["admin"])){

        header("Location:".base_url()."index.php/manager/login");

    }

?>

<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh sách chi tiết các đơn hàng </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url(); ?>vendor/css/toggle.css" rel="stylesheet">
	<style type="text/css">
	    #pagination a{
	      padding-left: 15px;
	      padding-right: 15px;
	      margin-left: 15px;
	      margin-right: 15px;
	    }
    </style>
</head>
<body >

	<?php require_once('header.php') ?>
 	<div id="wrapper">
 		<?php require_once('sidebar.php') ?>
 		<div id="page-content-wrapper">
			
			<div class="container">
 				<h3 class="jumbotron">Danh sách các đơn hàng</h3>
 			</div>

	 		<div class="container-fluid">
				<div class="row" id='postsList'>
	 				
	 			</div>	
	 			<center>
	 				<div class="page-link" style='margin-top: 10px;' id='pagination'></div>
	 			</center>
	 		</div> <!--end class fluid-->
 		</div>
 	</div>
 	<script type='text/javascript'>
	    $(document).ready(function(){

	    	// Detect pagination click
	    	$('#pagination').on('click','a',function(e){
	       		e.preventDefault(); 
	       		var pageno = $(this).attr('data-ci-pagination-page');
	       		loadPagination(pageno);
	    	});

		    loadPagination(0);

	    	// Load pagination
	     	function loadPagination(pagno){
	       		$.ajax({
	         		url: '<?=base_url()?>index.php/manager/DetailOrder/loadRecord/'+pagno,
	         		type: 'get',
	         		dataType: 'json',
	         		success: function(response){
		            	$('#pagination').html(response.pagination);
		            	createTable(response.result,response.row);
	         		}
	        	});
	    	}

		    // Create table list
		    function createTable(result,sno){
		       	sno = Number(sno);
		       	$('#postsList').empty();
	
		       	for(index in result){
		          	var product_id = result[index].product_id;
		          	var order_id  = result[index].order_id;
		          	var quantity=result[index].quantity;
		          	var transaction_id = result[index].transaction_id;
		          	var status = result[index].status;


		          	// Xu ly convert string to json
		          	var product = result[index].product;
		          	var product = product.replace("[","");
		          	var product = product.replace("]","");
		          	var product = JSON.parse(product);



		          	var user = result[index].user;
		          	var user = user.replace("[","");
		          	var user = user.replace("]","");
		          	var user = JSON.parse(user);


		          	// content = content.substr(0, 60) + " ...";
		          	sno+=1;

		          	var tr = '<div class="col-sm-4">';
		          	tr += '<div class="card" id="content_'+order_id+'">';
		          	tr += '<p class="card-text transaction">Mã Giao dịch: <b>'+ transaction_id+'</b></p>';
		          	tr += '<p class="card-text product_id">Người mua: <b>'+user.user_name+'</b></p>';
		          	tr += '<p class="card-text product_id">Số điện thoại: <b>'+user.phone_number+'</b></p>';
		          	tr += '<p class="card-text product_id">Địa chỉ: <b>'+user.address+'</b></p>';
		          	tr += '<label class="switch">';
		          	tr += '<input type="checkbox" ';
		          	if(status==0){
		          		tr += 'checked="cheked"';
		          	}
		          	tr += ' >';
		          	tr += '<span class="slider round" onclick="checkOrder('+order_id+')"></span>';
		          	tr += '</label>';
		          	
		          	tr += '<p class="card-text product_id">Mã sản phẩm: <b>'+product_id+'</b></p>';
		          	tr += '<p class="card-text product">Tên sản phẩm: <b>'+ product.product_name+'</b></p>';
		          	tr += '<p class="card-text price">Giá sản phẩm: <b>'+ product.price+' VNĐ</b></p>';
		          	tr += '<p class="card-text discount">Khuyến mại: <b>'+product.discount+' %</b></p>';
		          	tr += '<p class="card-text quantity">Số lượng đã mua: <b>'+quantity+'</b></p>';
		          	// tr += '<center><p class="card-text print"><button class="btn btn-outline-primary btn-xs" onclick="print('+order_id+')" >In hóa đơn</button></p></center><br/>';
		          	tr += '</div><br/>';
		          	
		          	  	
		          	$('#postsList').append(tr);
		 			
		        }
		    }
		    

	    });
	    function checkOrder(id){
       		$.get('<?=base_url()?>index.php/manager/DetailOrder/checkOrder/'+id, function(data) {
       			alert("Đã thực hiện giao hàng!");
       		});
    	}
    	
   //  	function print(id){

   //  		var x = document.getElementById("content_"+id).textContent;

   //  		var data = new FormData();
			// data.append("data" , x);
			// var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
			// xhr.open( 'post', '<?= base_url() ?>/Fileupload/test.txt', true );
			// xhr.send(data);

			// alert(x);
   //  	}
	    
    </script>
</body>
</html>