
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
</head>
<body>

	
	<?php require_once('header.php') ?>
	
	<div id="wrapper">

        <?php require_once('sidebar.php') ?>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div id="map" style="width:100%;height:400px;"></div>

            </div><br/>
            <!-- <div class="container">
                <div style="background-image: url(<?= base_url() ?>/images/Login.jpg); color: white;">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Trang mua sắm hàng hóa
                            .......</h2>
                        </div>
                        <div class="col-sm-4">
                            <h2>Sản phẩm mới</h2>
                        </div>
                        <div class="col-sm-4">
                            <h2>@group12 2018</h2>
                        </div>
                    </div>
                </div>
            </div> -->
            <br/>
            <div class="fixed-bottom" >
                <center>
                    <h2>WEBSITE QUẢN LÝ ONLINE CHÍNH THỨC</h2> 
                    <p>Cơ quan chủ quản: group 12 - công nghệ web và dịch vụ trực tuyến</p>
                    
                </center>
            </div>
        </div>
        

    </div>

	<script>
        function initMap() {
            var hn = {lat: 21.028511, lng: 105.804817};

            // Create a map object and specify the DOM element
            // for display.
            var map = new google.maps.Map(document.getElementById('map'), {
              center: hn,
              zoom: 15
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
              map: map,
              position: hn,
              title: 'Hello World!'
            });

        }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiPaRl36sh9NMdWzthJZJj-RoFSuS2JfA&callback=initMap"
            async defer>
                
</script>
</body>
</html>