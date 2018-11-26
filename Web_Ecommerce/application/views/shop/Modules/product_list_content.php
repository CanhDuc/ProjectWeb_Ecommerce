<section class="section-61" style="background-color:#f3f3f3">
  <div class="container">
    <div id="titleDisplay">
          </div>
    <div class="col-xs-12 col-sm-3 col-md-3 padding-horizontal-5">

  
  <input id="filterValue" type="hidden" value="">
</div>

<script>
//  $(document).ready(function () {
    $('.item-checkbox1').on('change', function () {
      $('#formFilterDevice').submit();
    });

    $('#amount').on('change', function () {
      $('#formFilterDevice').submit();
    });

    $('#formFilterDevice').on('submit', function (e) {
      e.preventDefault();
      var obj = $(this);
      var countInTitle = $('#titleDisplay span');
      $('#page-num').remove();
      var pageClicked = $('.numb-paging.clicked');
      var listDevice = $('#filterDeviceDisplay');
      var page = pageClicked.attr('page');
      if(page != null) {
        listDevice = pageClicked.parents('.page-container');
        $(this).append('<input type="hidden" id="is-promotion" name="is-promotion" value="' + pageClicked.attr('is-promotion') + '"/>');
        $(this).append('<input type="hidden" id="page-num" name="page-num" value="' + page + '"/>');
      }
      listDevice.css("opacity", "0.7");

      $.ajax({
        url: obj.attr('action'),
        type: obj.attr('method'),
        cache: false,
        data: obj.serialize(),
        success: function (result) {
//          var data = JSON.parse(result);
//          listDevice.html(data.template);
//          title.html(data.title);
          listDevice.html(result);
          countInTitle.html(listDevice.find("#countTotal").html());
          listDevice.css("opacity", "1");
        },
        error: function (request, status, err) {
          listDevice.html('<h4>Không có dữ liệu.</h4>');
          listDevice.css("opacity", "1");
        }
      });
    });
//  }
</script>    <div id="filterDeviceDisplay">
      <!--<div class="page-container">-->
<!--  --><!--</div>-->
<div class="page-container">
    <div id="countTotal"  style="display: none">58</div>
  <div class="col-xs-12 col-sm-9 col-md-9 padding-horizontal-5">
    <div class="row">
<!--      <div class="col-xs-12 col-sm-12 col-md-12 col-xs-12">-->
<!--        <div id="titleDisplay">-->
<!--          --><!--          <hr/>-->
<!--        </div>-->
<!--      </div>-->

    <?php foreach($product_list as $product): ?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
                                <a href="<?php echo base_url(); ?>index.php/clientProductDetail?id=<?php echo $product['product_id']?>">
            <div class="item-01">
              <div class="images">
                  <img src="<?php echo base_url(); ?><?php echo $product['image']?>" alt="something wrong" width="232.16px" height="232.16px">
                
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  <?php echo $product['product_name']?>               
                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div><?php echo ($product['price'] * (1 - $product['discount']/100))?> đồng</div>
                                      <div><span style="text-decoration:line-through"><?php echo $product['price']?> đồng</span></div>
                                  </div>
                <div class="text-center">
                  <a href="<?php echo base_url(); ?>index.php/clientProductDetail?id=<?php echo $product['product_id']?>" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          
        </div>
                      
      <?php endforeach; ?>
      <div class="clearfix"></div>
<!--        <div class="paging-bottom">
    
                  <a href="javascript:void(0)" class="numb-paging active" page="1">1</a>
                        <a href="javascript:void(0)" class="numb-paging" page="2">2</a>
                        <a href="javascript:void(0)" class="numb-paging" page="3">3</a>
                        <a href="javascript:void(0)" class="numb-paging" page="4">4</a>
                        <a href="javascript:void(0)" class="numb-paging" page="5">5</a>
          
          <a href="javascript:void(0)" class="numb-paging" page="2">Trang sau ></a>
      </div>-->

<script>
  $('.numb-paging').not('.active').on('click', function () {
    $(this).toggleClass('clicked');
    if($('#mobileFilter').is(":visible")) {
      $('#formMobileFilterDevice').submit();
    } else {
      $('#formFilterDevice').submit();
    }
  });
</script>

<!--<div class="paging-bottom">-->
<!--  <a href="#" class="numb-paging active">1</a>-->
<!--  <a href="#" class="numb-paging">2</a>-->
<!--  <a href="#" class="numb-paging">3</a>-->
<!--  <a href="#" class="numb-paging">4</a>-->
<!--  <a href="#" class="numb-paging">5</a>-->
<!--</div>-->
          </div>
  </div>


<!--<span id="remaining-items---><!--" data-value="--><!--"></span>-->
<!--<div id="load-more-here" class="center-text margin-vertical-30">-->
<!--  --><!--      <div id="load-more-item" data-last-page="--><!--"-->
<!--           data-per-page="--><!--" data-form-id="search-device-form" class="btn-secsimso">-->
<!--        Xem thêm <span id="remaining-counter">(--><!--)</span> <i class="fa fa-chevron-circle-down"></i></div>-->
<!--    --><!--</div>--></div>    </div>
    
<section id="compare2" class="section-25 wa-compare2-destop">
  <div id="close-compare" class="close-small"><img src="https://shop.viettel.vn/img/close_small.png" alt="close"/></div>
  <div class="line-section"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="col-md-6 item-compare">

          <div id="btn-sosanh2" class="btn-sosanh">So sánh sản phẩm  <i class="fa fa-chevron-circle-right"></i></div>
          <div class="text4">Tính năng</div>
                      <div class="text3">Hệ điều hành</div>
                      <div class="text3">Camera trước</div>
                      <div class="text3">Camera sau</div>
                      <div class="text3">Độ phân giải</div>
                      <div class="text3">Màn hình</div>
                      <div class="text3">Vi xử lý</div>
                      <div class="text3">Bộ nhớ trong</div>
                      <div class="text3">PIN</div>
                  </div>

        <div class="col-md-3 item-compare item-compare-1">
          <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 1"/></div>
          <div class="text1"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
          
        </div>
        <div class="col-md-3 item-compare item-compare-2">
          <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 2"/></div>
          <div class="text1"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
          
        </div>
    </div>


  </div>
</section>    <div class="wa-compare2-mobile">
  <section class="section-25" id="compare2-mobile">
    <div class="close-small" id="close-compare-mobile"><img src="https://shop.viettel.vn/img/close_small.png" alt="close"></div>
    <div class="line-section"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 item-compare-mobile">
          <a class="btn-sosanh" id="btn-sosanh2-mobile" href="#modalCompareDevice" data-toggle="modal">So sánh <i class="fa fa-chevron-circle-right"></i></a>
          <a class="text-compare-mobile" href="#"><span id="compare-counter">1</span> thiết bị được thêm <br>(Tối đa <span>2</span> thiết bị)</a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
</div>

<div class="wa-compare2-destop">
  <section id="compare2" class="section-25">
    <div id="close-compare" class="close-small"><img src="https://shop.viettel.vn/img/close_small.png" alt="close"></div>
    <div class="line-section"></div>
    <div class="container">

      <div class="row">

        <div class="col-md-12">
          <div class="col-md-6 item-compare">

            <div id="btn-sosanh2" class="btn-sosanh">So sánh sản phẩm  <i class="fa fa-chevron-circle-right"></i></div>
            <div class="text4">Tính năng</div>
                          <div class="text3">Hệ điều hành</div>
                          <div class="text3">Camera trước</div>
                          <div class="text3">Camera sau</div>
                          <div class="text3">Độ phân giải</div>
                          <div class="text3">Màn hình</div>
                          <div class="text3">Vi xử lý</div>
                          <div class="text3">Bộ nhớ trong</div>
                          <div class="text3">PIN</div>
                      </div>

          <div class="col-md-3 item-compare item-compare-first">
            <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 1"></div>
            <div class="text1"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                      </div>
          <div class="col-md-3 item-compare item-compare-second">
            <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 2"></div>
            <div class="text1"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                      </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" id="modalCompareDevice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header popup_header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#ffffff">&times;</span>
        </button>
        <div class="fontclass_regular">So sánh sản phẩm</div>
      </div>
      <div class="modal-body" style="padding-left:30px;padding-right:30px">
        <div class="row">
          <div class="col-xs-12">
            <table class="table-striped col-xs-12 table-compare">
              <tr>
                <td style="width: 50%"><h6><span id="title-compare-first"></span></h6></td>
                <td style="width: 50%"><h6><span id="title-compare-second"></span></h6></td>
              </tr>
                              <tr>
                  <td style="width: 50%"><b>Hệ điều hành</b><br/><span id="attr-device1-os_name"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-os_name"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Camera trước</b><br/><span id="attr-device1-front_camera"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-front_camera"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Camera sau</b><br/><span id="attr-device1-main_camera"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-main_camera"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Độ phân giải</b><br/><span id="attr-device1-resolution"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-resolution"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Màn hình</b><br/><span id="attr-device1-screen_size"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-screen_size"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Vi xử lý</b><br/><span id="attr-device1-system_chip"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-system_chip"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Bộ nhớ trong</b><br/><span id="attr-device1-system_memory"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-system_memory"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>PIN</b><br/><span id="attr-device1-battery"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-battery"></span></td>
                </tr>
                          </table>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>  </div>
</section>