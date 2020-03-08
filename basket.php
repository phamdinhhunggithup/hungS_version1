			<?php
				require "inc/header.php";
			?>
			<!-- end header  -->
			<?php
				require "inc/search-bar.php";
			?>
			<!-- end search bar  -->
            <div id="wp-content" class="mb-5">
                <div id="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-head">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4 class="box-head-title">Thanh toán giỏ hàng</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-4 border_ my-3 my-md-0">
                                                <div class="info-order">
                                                    <h4 class="box-content-title"><span class="d-inline-block border-0 rounded-circle text-white mr-1 text-center">1</span>Thông tin đơn hàng</h4>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="fullname">Họ và tên</label>
                                                            <input type="text" name="fullname" id="fullname" class="form-control shadow-none">
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" name="email" id="email" class="form-control shadow-none">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Điện thoại</label>
                                                                    <input type="text" name="phone" id="phone" class="form-control shadow-none">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Địa chỉ</label>
                                                            <input type="text" name="address" id="address" class="form-control shadow-none">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="citi-select">Tỉnh / Thành phố</label>
                                                                    <select name="citi-select" class="w-100" id="citi-select" autofocus="autofocus">
                                                                        <option value=''>Chọn tỉnh / Thành phố</option>
                                                                        <option value=''>Hồ Chí Minh</option>
                                                                        <option value=''>An Giang</option>
                                                                        <option value=''>Bà Rịa - Vũng Tàu</option>
                                                                        <option value=''>Bắc Ninh</option>
                                                                        <option value=''>Bắc Giang</option>
                                                                        <option value=''>Bình Dương</option>
                                                                        <option value=''>Bình Định</option>
                                                                        <option value=''>Bình Phước</option>
                                                                        <option value=''>Bình Thuận</option>
                                                                        <option value=''>Bến Tre</option>
                                                                        <option value=''>Bắc Cạn</option>
                                                                        <option value=''>Cần Thơ</option>
                                                                        <option value=''>Khánh Hòa</option>
                                                                        <option value=''>Thừa Thiên Huế</option>
                                                                        <option value=''>Lào Cai</option>
                                                                        <option value=''>Quảng Ninh</option>
                                                                        <option value=''>Đồng Nai</option>
                                                                        <option value=''>Nam Định</option>
                                                                        <option value=''>Cà Mau</option>
                                                                        <option value=''>Cao Bằng</option>
                                                                        <option value=''>Gia Lai</option>
                                                                        <option value=''>Hà Giang</option>
                                                                        <option value=''>Hà Nam</option>
                                                                        <option value=''>Hà Tĩnh</option>
                                                                        <option value=''>Hải Dương</option>
                                                                        <option value=''>Hải Phòng</option>
                                                                        <option value=''>Hoà Bình</option>
                                                                        <option value=''>Hưng Yên</option>
                                                                        <option value=''>Kiên Giang</option>
                                                                        <option value=''>Kon Tum</option>
                                                                        <option value=''>Lai Châu</option>
                                                                        <option value=''>Lâm Đồng</option>
                                                                        <option value=''>Lạng Sơn</option>
                                                                        <option value=''>Long An</option>
                                                                        <option value=''>Nghệ An</option>
                                                                        <option value=''>Ninh Bình</option>
                                                                        <option value=''>Ninh Thuận</option>
                                                                        <option value=''>Phú Thọ</option>
                                                                        <option value=''>Phú Yên</option>
                                                                        <option value=''>Quảng Bình</option>
                                                                        <option value=''>Quảng Nam</option>
                                                                        <option value=''>Quảng Ngãi</option>
                                                                        <option value=''>Quảng Trị</option>
                                                                        <option value=''>Sóc Trăng</option>
                                                                        <option value=''>Sơn La</option>
                                                                        <option value=''>Tây Ninh</option>
                                                                        <option value=''>Thái Bình</option>
                                                                        <option value=''>Thái Nguyên</option>
                                                                        <option value=''>Thanh Hoá</option>
                                                                        <option value=''>Tiền Giang</option>
                                                                        <option value=''>Trà Vinh</option>
                                                                        <option value=''>Tuyên Quang</option>
                                                                        <option value=''>Vĩnh Long</option>
                                                                        <option value=''>Vĩnh Phúc</option>
                                                                        <option value=''>Yên Bái</option>
                                                                        <option value=''>Đắc Lắc</option>
                                                                        <option value=''>Đồng Tháp</option>
                                                                        <option value=''>Đà Nẵng</option>
                                                                        <option value=''>Đắc Nông</option>
                                                                        <option value=''>Hậu Giang</option>
                                                                        <option value=''>Bạc Liêu</option>
                                                                        <option value=''>Điện Biên</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="citi-select">Quận / Huyện</label>
                                                                    <select name="citi-select" id="citi-select" class="w-100">
                                                                        <option value="">Quận / Huyện</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="" id="" placeholder="Ghi chú đơn hàng" cols="30" rows="10" class="form-control shadow-none"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border_ mb-3 m-mb-0">
                                                <div class="payment-methods">
                                                    <h4 class="box-content-title"><span class="d-inline-block border-0 rounded-circle text-white mr-1 text-center">2</span>Phương thức thanh toán</h4>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <input type="radio" name="payment-methods" id="payment-methods-option-1" class="form-check-input shadow-none">
                                                            <label for="payment-methods-option-1" class="form-check-label">Thanh toán tiền mặt khi nhận hàng</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="radio" name="payment-methods" id="payment-methods-option-2" class="form-check-input shadow-none">
                                                            <label for="payment-methods-option-2" class="form-check-label">Thanh toán bằng thẻ ngân hàng</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border__ py-3 py-md-0">
                                                <div class="info-basket">
                                                    <h4 class="box-content-title"><span class="d-inline-block border-0 rounded-circle text-white mr-1 text-center">3</span>Tiến hành thanh toán</h4>
                                                    <div class="wp-table">
                                                        <table class="table table-borderless">
                                                            <thead>
                                                                <th class="px-0">Tên sản phẩm</th>
                                                                <th class="px-0 w-25">Số lượng</th>
                                                                <th class="px-0 text-center">Giá</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name the product 1</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 2</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 3</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 4</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 5</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 6</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 4</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 5</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name the product 6</td>
                                                                    <td>2</td>
                                                                    <td><span class="rice">200,000</span>VND</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="order">
                                                        <ul class="list-relative text-right mb-4">
                                                            <li class="pay-provisional" data-label="Tạm tính">
                                                                <span class="price">600,000</span> VND
                                                            </li>
                                                            <li class="transport-fee" data-label="Phí vận chuyển">
                                                                <span class="price">0</span> VND
                                                            </li>
                                                            <li class="price-total" data-label="Tổng cộng">
                                                                <span class="price">600,000</span> VND
                                                            </li>
                                                        </ul>
                                                        <div class="promotion-code mb-4">
                                                            <div class="widget">
                                                                <div class="widget-title">
                                                                    <label for="ip-code" class="">Nhập mã ưu đãi</label>
                                                                    <label for="ip-code" class="notification"></label>
                                                                </div>
                                                                <div class="widget-content">
                                                                    <form action="">
                                                                        <div class="form-row">
                                                                            <div class="col-8 col-md-12 col-lg-8 mb-2 mb-lg-0">
                                                                                <input type="text" id="ip-code" name="promotion-code" class="form-control shadow-none" placeholder="Nhập vào nếu có">
                                                                            </div>
                                                                            <div class="col-4 col-md-12 col-lg-4">
                                                                                <button type="button" class="btn btn-block">Áp dụng</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="control-basket">
                                                            <a href="aokhoat001.php" class="btn btn-block text-uppercase prev">tiếp tục mua hàng</a>
                                                            <a href="" class="btn btn-block text-uppercase next">Tiến hành thanh toán</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end wp-content -->
			<?php
				require "inc/footer.php";
			?>
			<!-- end footer  -->
			<!-- ---- -->
			<?php
				require "inc/plugin-msg.php";
			?>
			<!-- end plugin msg  -->
			<!-- ---- -->
			<?php
				require "inc/backtop.php";
			?>
			<!-- end backtop  -->
			<?php
				require "inc/copyright.php";
			?>
			<!-- end copy right -->
        </div>
        <?php
			require "inc/respon.php";
		?>
		<!-- end respon  -->
    </div>
</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/main-js.js"></script>
<script src="js/jsOfproduct.js"></script>
<script src="js/basket.js"></script>

<script src="js/masonry.pkgd.min.js"></script>
</html>