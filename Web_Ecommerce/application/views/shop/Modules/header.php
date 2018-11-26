<section class="section-01 ex">
  <div class="header-wrapper2">
      <div class="container">
  <div class="header-top-text2">

    <div class="logo-mobile">
      <a href="/">
        <img class="logo" src="https://shop.viettel.vn/img/logo_viettel.png" alt="viettel"/>
              </a>
    </div>
    <div class="hotline-mobile">
              <i class="fa fa-phone img-circle"></i>
                  <span class="big">1800 8168</span>
                  </div>
    

    <div class="navbar-right">
      <div class="menu-shoping">
        <div class="item-shoping">
          <a href="javascript:void(0)" id="btn-search-show-destop"><span>
              <img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/tim kiem_mobile.svg" alt="tìm kiếm"/>
              <span class="des">Tìm kiếm</span></span></a>

          <div class="serch-destop input-group">
            <form action="<?php echo base_url() ?>index.php/searchController" method="get">
              <input name="name" data-url="/ajax/goi-y-tim-kiem" id="input-search-index" type="text" class="form-control input-search-index"
                     aria-label="Text input with segmented button dropdown" placeholder="Tìm kiếm ">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default button-search-index"><i class="fa fa-search"></i></button>
              </div>
<!--              <div id="search-panel"></div>-->
            </form>
          </div>
        </div>
        <div class="item-shoping">
            <a href="<?php echo base_url() ?>index.php/orderListController">
            <img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/check-order.svg" alt="kiểm tra giỏ hàng"/>
            <span class="des">Kiểm tra giỏ hàng</span>
          </a>
        </div>
          <div class="item-shoping">
            <a href="<?php echo base_url() ?>index.php/transactionListController">
            <img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/check-order.svg" alt="kiểm tra đơn hàng"/>
            <span class="des">Kiểm tra đơn hàng</span>
          </a>
        </div>
        
<!--        <div class="item-shoping">-->
<!--          <a href="#"><img class="svg img-mobile-menu" src="img/gio hang _ mobile.svg" /> <span class="des">Giỏ hàng</span></a>-->
<!--        </div>-->

        <?php
            
            if(!isset($_SESSION["user"])){
                
                ?>
                    <div class="item-shoping border">
                        <a href="<?php echo base_url() ?>index.php/signinController"><span class="user">Đăng nhập</span>
                      </a>
                  </div>
                <?php
            }
            else{
                
                ?>
<div class="item-shoping border" style="color: white">
                        <?php echo "Hello ".$_SESSION["user"]["user_name"] ?>
                    </div>
                    <div class="item-shoping border">
                        <a href="<?php echo base_url() ?>index.php/unsetSessionController"><span class="user">Đăng xuất</span>
                      </a>
                  </div>
                <?php
            }
        
        ?>
        
      </div>
    </div>

  </div>
  <div class="clearfix"></div>
</div>      <div class="header-menu-main2" id="menutop-fixed">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" tabindex="1" accesskey="m" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="menu-shoping-mobile">

        <a id="checkOrderTemp" href="javascript:void(0)" data-url="/ajax/check-order-temp"
           class="" title="kiểm tra đơn hàng">
          <img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/check-order.svg" alt="cửa hàng"/>
        </a>
        <a href="/cua-hang" class=""><img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/cua hang _ mobile.svg" alt="cửa hàng"/></a>
        <a href="/yeu-thich" class=""><img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/wish list _ mobile.svg" alt="yêu thích"/></a>
<!--        <a href="#" class="giohang"><img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/gio hang _ mobile.svg" /><span>2</span></a>-->
      </div>
      <div class="menu-loaikh-mobile">
        <a href="#" class="tab-menu-header" data-toggle="collapse" data-target="#bs-navbar-mobi-search" aria-controls="bs-navbar-mobi-search" aria-expanded="false"><img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/tim kiem_mobile.svg" alt="tìm kiếm"/></a>
                  <a href="javascript:void(0)" class="tab-menu-header" data-toggle="collapse" data-target="#bs-navbar-mobi-diadiem" aria-controls="bs-navbar-mobi-diadiem" aria-expanded="false"><img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/dia diem_mobile.svg" alt="địa điểm"/></a>
                          <a id="btnLogin" href="javascript:void(0)" data-url="/ajax/get-login-template" class="tab-menu-header"><img class="svg img-mobile-menu" src="https://shop.viettel.vn/img/tai khoan_mobile.svg" alt="tài khoản"/></a>
              </div>

    </div>
    <nav id="bs-navbar-mobi-search" class="collapse navbar-collapse">
      <div class="input-group">
        <form action="<?php echo base_url() ?>index.php/searchController" method="get">
          <input  id="input-search-index" type="text" name="name" class="form-control input-search-index" aria-label="Text input with segmented button dropdown" placeholder="Tìm kiếm ">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default button-search-index"><i class="fa fa-search"></i></button>
          </div>
<!--          <div id="search-panel"></div>-->
        </form>
      </div>
    </nav>
        <nav id="bs-navbar-mobi-diadiem" class="collapse navbar-collapse">
      <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);"
              class="selectpicker-location" style="width:100%; background-color:#f3f3f3">
        <option value="/">Tất cả</option>
                  <option value="/hanoi"
            >Hà Nội</option>
                  <option value="/hcm"
            >TP.HCM</option>
                  <option value="/angiang"
            >An Giang</option>
                  <option value="/bariavungtau"
            >Bà Rịa Vũng Tàu</option>
                  <option value="/bacgiang"
            >Bắc Giang</option>
                  <option value="/backan"
            >Bắc Kạn</option>
                  <option value="/baclieu"
            >Bạc Liêu</option>
                  <option value="/bacninh"
            >Bắc Ninh</option>
                  <option value="/bentre"
            >Bến Tre</option>
                  <option value="/binhduong"
            >Bình Dương</option>
                  <option value="/binhphuoc"
            >Bình Phước</option>
                  <option value="/binhthuan"
            >Bình Thuận</option>
                  <option value="/binhdinh"
            >Bình Định</option>
                  <option value="/camau"
            >Cà Mau</option>
                  <option value="/cantho"
            >Cần Thơ</option>
                  <option value="/caobang"
            >Cao Bằng</option>
                  <option value="/gialai"
            >Gia Lai</option>
                  <option value="/hagiang"
            >Hà Giang</option>
                  <option value="/hanam"
            >Hà Nam</option>
                  <option value="/hatinh"
            >Hà Tĩnh</option>
                  <option value="/haiduong"
            >Hải Dương</option>
                  <option value="/haiphong"
            >Hải Phòng</option>
                  <option value="/haugiang"
            >Hậu Giang</option>
                  <option value="/hoabinh"
            >Hòa Bình</option>
                  <option value="/hungyen"
            >Hưng Yên</option>
                  <option value="/khanhhoa"
            >Khánh Hòa</option>
                  <option value="/kiengiang"
            >Kiên Giang</option>
                  <option value="/kontum"
            >Kon Tum</option>
                  <option value="/laichau"
            >Lai Châu</option>
                  <option value="/lamdong"
            >Lâm Đồng</option>
                  <option value="/langson"
            >Lạng Sơn</option>
                  <option value="/laocai"
            >Lào Cai</option>
                  <option value="/longan"
            >Long An</option>
                  <option value="/namdinh"
            >Nam Định</option>
                  <option value="/nghean"
            >Nghệ An</option>
                  <option value="/ninhbinh"
            >Ninh Bình</option>
                  <option value="/ninhthuan"
            >Ninh Thuận</option>
                  <option value="/phutho"
            >Phú Thọ</option>
                  <option value="/phuyen"
            >Phú Yên</option>
                  <option value="/quangbinh"
            >Quảng Bình</option>
                  <option value="/quangnam"
            >Quảng Nam</option>
                  <option value="/quangngai"
            >Quảng Ngãi</option>
                  <option value="/quangninh"
            >Quảng Ninh</option>
                  <option value="/quangtri"
            >Quảng Trị</option>
                  <option value="/soctrang"
            >Sóc Trăng</option>
                  <option value="/sonla"
            >Sơn La</option>
                  <option value="/tayninh"
            >Tây Ninh</option>
                  <option value="/thaibinh"
            >Thái Bình</option>
                  <option value="/thainguyen"
            >Thái Nguyên</option>
                  <option value="/thanhhoa"
            >Thanh Hóa</option>
                  <option value="/thuathienhue"
            >Thừa Thiên Huế</option>
                  <option value="/tiengiang"
            >Tiền Giang</option>
                  <option value="/travinh"
            >Trà Vinh</option>
                  <option value="/tuyenquang"
            >Tuyên Quang</option>
                  <option value="/vinhlong"
            >Vĩnh Long</option>
                  <option value="/vinhphuc"
            >Vĩnh Phúc</option>
                  <option value="/yenbai"
            >Yên Bái</option>
                  <option value="/danang"
            >Đà Nẵng</option>
                  <option value="/daklak"
            >Đắk Lắk</option>
                  <option value="/daknong"
            >Đắk Nông</option>
                  <option value="/dienbien"
            >Điện Biên</option>
                  <option value="/dongnai"
            >Đồng Nai</option>
                  <option value="/dongthap"
            >Đồng Tháp</option>
              </select>
    </nav>
        <nav id="bs-navbar-mobi-dangnhap" class="collapse navbar-collapse">
      <div class="dangnhap-mobile">
        <div class="title-dangnhap">Tài khoản</div>
        <div class="form-dangnhap">
<!--          <div class="item-input"><input type="text" class="form-control input-login" placeholder="Số điện thoại"></div>-->
<!--          <div class="item-input"><input type="password" class="form-control input-login" placeholder="Mật khẩu"></div>-->

          <div class="item-btn">
            <a href="/user-info" class="quenpass">Quản lý tài khoản</a>
            <br/>
                          <a href="/dang-xuat" class="btn">Đăng xuất</a>
                      </div>

<!--          <div class="item-dangky">Chưa có tài khoản? <a href="#" class="btn-dangky">Đăng ký ngay</a></div>-->
        </div>
        <div class="clearfix"></div>
      </div>
    </nav>

    <nav id="bs-navbar" class="collapse navbar-collapse">

<!--  <a href="--><!--" class="navbar-brand"><img class="logo" src="https://shop.viettel.vn/img/logo viettel_mobile.svg" /></a>-->
<!--  <a href="/" class="navbar-brand">
    <img class="logo" src="https://shop.viettel.vn/img/logo_viettel.png" alt="viettel"/>
      </a>-->
<a href="<?php echo base_url() ?>index.php/clientHome" class="navbar-brand">
    <img class="logo" src="https://cdn.dribbble.com/users/64815/screenshots/1518220/attachments/229248/shop_logo_big.png" alt="logo" style="width: 160px; height: 40px">
      </a>
  <ul class="nav navbar-nav navbar-left">
    <!--Phần code đăng nhập ẩn đi-->
    <!--<li class="dropdown dropdown-mobile">
        <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">
            Đăng nhập  <i class="fa fa-angle-down"></i>
        </a>
        <div class="dropdown-menu">
            <ul class="col-md-2 ul-menu-mobile">
                <li class="item-mobile"><input type="text" class="form-control input-login" placeholder="Tên đăng nhập:"></li>
                <li class="item-mobile"><input type="password" class="form-control input-login" placeholder="Mật khẩu:"></li>

                <li class="item-mobile"><a href="#" class="btn-style2 margin-0">Đăng nhập</a></li>
                <li class="item-mobile">Chưa có tài khoản? <a href="#" class="btn-dangky">Đăng ký <i class="fa fa-chevron-circle-right"></i></a></li>

            </ul>
        </div>
    </li>-->

<!--    <li class="dropdown dropdown-mobile">
      <a href="/" class="item-home dropdown-toggle disabled">
        Trang chủ
      </a>
    </li>-->
    
    <?php foreach ($root_categories as $root_categry):?>

    <li class="dropdown laptop">
      <a href="" class="dropdown-toggle disabled" data-toggle="dropdown">
        <?=$root_categry->getCategoryName()?>
      </a>
      <div class="dropdown-menu">
        <ul class="col-md-4">
            
           <?php foreach ($root_categry->getSubCategoryList() as $sub_category):?> 
            
            <li><a href="<?php echo base_url(); ?>index.php/clientHome?category_id=<?php echo $sub_category->getCategoryID() ?>"> <?=$sub_category->getCategoryName()?> </a></li>
            
          
          <?php endforeach; ?>
        </ul>
      </div>
    </li>
   <?php endforeach; ?>
    <style>
      .section-01 .header-menu-main2 .navbar-right .hotline span.big
      {
        font-size:14px;
        line-height:30px;
      }

    </style>

   
    
       </ul>


</nav>

  </div>

</div>
  </div>
</section>