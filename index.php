			<?php
				require "inc/header.php";
			?>
			<!-- end header  -->
			<?php
				require "inc/search-bar.php";
			?>
			<!-- end search bar  -->
			<div class="modal fade" id="post-new">
				<div class="modal-dialog" style="max-width: 700px!important;">
					<div class="modal-content border-0 rounded-0">
						<div class="modal-body p-0">
							<!-- <div class="container"> -->
								<div class="row">
									<div class="col-sm-6">
										<a href="" class="thumb-img-modal overflow-hidden text-center" style="top: 0; left: -50px;">
											<img src="img/modal-demo/modal.png" class="img-fluid d-inline" alt="">
										</a>
									</div>
									<div class="col-sm-6 ml-3 ml-sm-0">
										<div class="content-modal">
											<h3 class="title-modal">HungS.vn</h3>
											<aside class="sub-title-modal mb-4 mt-1">Đăng ký tài khoảng để nhận được những thông báo sớm nhất nhé </aside>
											<form action="">
												<div class="form-group">
													<label for="username" class="mb-2">Họ tên</label>
													<input type="text" name="username" id="username" class="form-control shadow-none rounded-0" style="width: 93%;" placeholder="Nhập họ tên nhé !">
												</div>
												<div class="form-group">
													<label for="password" class="mb-2">Mật khẩu</label>
													<input type="password" name="password" id="password" class="form-control shadow-none rounded-0 hide-password" style="width: 93%;" placeholder="Nhập password nhé !">
													<input type="checkbox" name="showpassword" id="showpassword" class="form-check-input ml-0"><label for="showpassword" class="form-check-label">hiện mật khẩu</label>
												</div>
												<div class="form-group">
													<label for="email" class="mb-2">Email</label>
													<input type="email" name="email" id="email" class="form-control shadow-none rounded-0" style="width: 93%;" placeholder="Nhập email nhé !">
												</div>
												<div class="row mb-4 pr-4">
													<div class="col-sm-6 mb-3 mb-sm-0"><button type="submit" class="btn btn-block py-2 px-3" data-dismiss="modal">Đăng ký</button></div>
													<div class="col-sm-6">
														<div class="follow-us">
															<h4 class="mb-1">Theo dõi chúng tôi</h4>
															<ul class="list-socal d-flex justify-content-start">
																<li><a href=""><span class="fb-item fa fa-facebook"></span></a></li>
																<li><a href=""><span class="isg-item fa fa-instagram"></span></a></li>
																<li><a href="" ><span class="yt-item fa fa-youtube-play"></span></a></li>
																<li><a href=""><span class="pinterest-item fa fa-pinterest-p"></span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</form>
											<p class="text-center text-decoration-underline end">Thank you !</p>
											<button type="submit" class="close-modal border-0 rounded-0 mb-3" data-dismiss="modal">Thoát</button>
										</div>
									</div>
								</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
			<button type="hidden" class="open-modal-post-new" data-toggle="modal" data-target="#post-new">
			</button>
			<!-- ----- end popup modal ----- -->
			<div id="banner" class="mb-3">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 my-3">
							<div class="carousel slide" id="my-slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li class="active" data-target="#my-slide" data-slide-to="0"></li>
									<li data-target="#my-slide" data-slide-to="1"></li>
									<li data-target="#my-slide" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<a href="" class="thumb-img">
											<img src="img/banner/banner-1.jpg" class="d-block w-100" alt="">
										</a>
									</div>
									<div class="carousel-item">
										<a href="" class="thumb-img">
											<img src="img/banner/banner-2.png" class="d-block w-100" alt="">
										</a>
									</div>
									<div class="carousel-item">
										<a href="" class="thumb-img">
											<img src="img/banner/banner-3.png" class="d-block w-100" alt="">
										</a>
									</div>
								</div>
								<a href="#my-slide" class="carousel-control-prev" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</a>
								<a href="#my-slide" class="carousel-control-next" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end banner  -->
			<div id="wp-content">
				<section id="opening">
					<div class="container-fluid">
						<div class="row mb-3">
							<div class="col-md-6 overflow-hidden opening-1 zoom" data-aos="zoom">
								<h4 class="theme"><a href="" class="text-decoration-none d-inline-block">MỞ BÁN 27/2 - Đăng ký nhanh ngay để nhận ưu đãi</a></h4>
								<div class="py-2">
									<a href="">
										<img src="img/content/content-1.jpg" class="img-fluid w-100" alt="">
									</a>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="list-p">
											<div class="owl-carousel owl-theme">
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1a.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1b.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1c.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1d.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1e.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1f.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-1g.jpg" alt="">
											    </a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 overflow-hidden opening-1 zoom" data-aos="zoom">
								<h4 class="theme"><a href="" class="text-decoration-none d-inline-block">MỞ BÁN 17/1 - Ưu đãi chỉ dành cho 10 người nhanh nhất</a></h4>
								<div class="py-2">
									<a href="">
										<img src="img/content/content-2.jpg" class="img-fluid w-100" alt="">
									</a>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="list-p">
											<div class="owl-carousel owl-theme">
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2a.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2b.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2c.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2d.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2e.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2f.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-2g.jpg" alt="">
											    </a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end row 1 of opening -->
						<div class="row">
							<div class="col-md-6 overflow-hidden opening-2 zoom" data-aos="zoom">
								<h4 class="theme"><a href="" class="text-decoration-none d-inline-block">MỞ BÁN 27/2 - Đăng ký nhanh ngay để nhận ưu đãi</a></h4>
								<div class="py-2">
									<a href="">
										<img src="img/content/content-3.jpg" class="img-fluid w-100" alt="">
									</a>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="list-p">
											<div class="owl-carousel owl-theme">
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3a.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3b.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3c.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3d.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3e.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3f.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-3g.jpg" alt="">
											    </a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 overflow-hidden opening-2 zoom" data-aos="zoom">
								<h4 class="theme"><a href="" class="text-decoration-none d-inline-block">MỞ BÁN 27/2 - Ưu đãi chỉ dành cho 10 người nhanh nhất</a></h4>
								<div class="py-2">
									<a href="">
										<img src="img/content/content-4.jpg" class="img-fluid w-100" alt="">
									</a>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="list-p">
											<div class="owl-carousel owl-theme">
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4a.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4b.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4c.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4d.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4e.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4f.jpg" alt="">
											    </a></div>
											    <div class="item"><a href="" class="thumb-img">
											    	<img src="img/content/content-4g.jpg" alt="">
											    </a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end row 2 of opening-->
					</div>
				</section>
				<section id="top-product">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="box">
									<div class="box-head border-0 px-0 py-3">
										<div class="row">
											<div class="col-md-8 mx-auto text-center">
												<h2 class="name-box mb-1">Top sản phẩm HOT</h2>
												<aside class="sub-name">Những sản phẩm thời trang mới nhất/Hot nhất</aside>
											</div>
										</div>
									</div>
									<div class="box-body">
										<div class="row mb-4">
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="aokhoat001.php" class="thumb-img">
															<img src="img/content/product-hot/hot-img1.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img1.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img1a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img1b.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 1 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img2.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img2.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img2a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img2b.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 2 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img3.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img3.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img3a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img3b.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img3c.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 3 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img4.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img4.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img4a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img4b.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 4 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img5.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img5.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img5a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img5b.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img5c.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 5 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img6.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img6.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img6a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img6b.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img6c.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 6 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img7.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img7.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img7a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img7b.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img7c.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 7 -->
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="p-item overflow-hidden">
													<div class="p-img mb-5">
														<a href="" class="thumb-img">
															<img src="img/content/product-hot/hot-img8.jpg" class="img-fluid" alt="">
														</a>
													</div>
													<div class="p-info d-flex justify-content-center position-relative">
														<div class="p-1 position-absolute see-more">
															<ul class="list-p d-flex justify-content-center">
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img8.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img8a.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img8b.jpg" alt="">
																</a></li>
																<li><a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img8c.jpg" alt="">
																</a></li>
															</ul>
														</div>
														<span class="price text-center d-block">120.000 ₫</span>
													</div>
												</div>
											</div>
											<!-- end product 8 -->
										</div>
										<!-- end row 2 of top product -->
										<div class="row mb-4">
											<div class="col-md-12 product-zoom-1 zoom" data-aos="zoom">
												<div class="">
													<a href=""><img src="img/banner/banner-5.png" class="w-100 img-fluid" alt=""></a>
												</div>
											</div>
										</div>
										<!-- end row 3 of top product -->
										<div class="row mb-4">
											<div class="col-md-12">
												<div class="owl-carousel owl-theme">
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img9.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img9a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img9b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img9c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    	<!-- end product 9 -->
												    </div>
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img10.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img10.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img10a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    	<!-- end product 10 -->
												    </div>
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img11.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img11.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img11a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img11b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img11c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    	<!-- end product 11 -->
												    </div>
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img12.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img12.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img12a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img12b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img12c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    	<!-- end product 12 -->
												    </div>
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img13.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img13.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img13a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img13b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img13c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    	<!-- end product 13 -->
												    </div>
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img14.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img14.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img14a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img14b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												   	 	<!-- end product 14 -->
												    </div>
												</div>
											</div>
										</div>
										<!-- end row 4 of top product -->
										<div class="row mb-4">
											<div class="col-md-12">
												<div class="owl-carousel owl-theme">
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img15.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img15.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img15a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 15 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img16.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img16.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 16 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img17.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img17.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 17 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img18.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img18.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img18a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 18 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img19.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img19.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 19 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img20.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img20.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 20 -->
												</div>
											</div>
										</div>
										<!-- end row 5 of product -->
										<div class="row mb-4">
											<div class="col-md-12 product-zoom-2 zoom" data-aos="zoom">
												<div>
													<a href="">
														<img src="img/banner/banner-8.jpg" class="w-100 img-fluid" alt="">
													</a>
												</div>
											</div>
										</div>
										<!-- end row 6 of product  -->
										<div class="row mb-4">
											<div class="col-md-12">
												<div class="owl-carousel owl-theme">
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img21.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img21.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img21a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img21b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 21 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img22.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img22.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img22a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 22 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img23.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img23.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img23a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img23b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 23 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img24.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img24.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img24a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img24b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 24 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img25.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img25.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img25a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img25b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 25 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img26.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img26.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img26a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 26 -->
												</div>
											</div>
										</div>
										<!-- end row 7 of hot product -->
										<div class="row mb-4">
											<div class="col-md-12 product-zoom-3 zoom" data-aos="zoom">
												<div>
													<a href="">
														<img src="img/banner/banner-6.png" class="w-100 img-fluid" alt="">
													</a>
												</div>
											</div>
										</div>
										<!-- end row 8 of hot product -->
										<div class="row mb-4">
											<div class="col-md-12">
												<div class="owl-carousel owl-theme">
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img27.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img27.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img27a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img27b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img27c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 27 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img28.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img28.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img28a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img28b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img28c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 28 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img29.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img29.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img29a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img29b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img29c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 29 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img30.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img30.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 30 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img31.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img31.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img31a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img31b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 31 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img32.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img32.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img32a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img32b.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 32 -->
												</div>
											</div>
										</div>
										<!-- end row 9 of hot product -->
										<div class="row mb-4">
											<div class="col-md-12">
												<div class="owl-carousel owl-theme">
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img33.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img33.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img33a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img33b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img33c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 33 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img34.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img34.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img34a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 34 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img35.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img35.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img35a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img35b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img35c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 35 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img36.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img36.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img36a.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img36b.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img36c.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 36 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img37.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">

																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 37 -->
												    <div class="item">
												    	<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img38.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">

																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
												    </div>
												    <!-- end product 38 -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="new-see" class="mb-5">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="box">
									<div class="box-head">
										<div class="row">
											<div class="col-md-8 mx-auto text-center">
												<h2 class="name-box mb-1">Sản phẩm bạn vừa xem</h2>
												<aside class="sub-name">Những sản phẩm thời trang bạn đã xem - Hãy mua ngay</aside>
											</div>
										</div>
									</div>
									<div class="box-body">
										<div class="row mb-4">
											<div class="col-md-8 mx-auto">
												<p class="notification text-underline text-center">Bạn đã xem <strong class="num-p">5</strong> sản phẩm</p>
											</div>
										</div>
										<div class="row mb-4">
											<div class="col-md-12">
												<div class="owl-carousel owl-theme">
													<div class="item">
														<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img15.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img15.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img15a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img16.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img16.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img17.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img17.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img18.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img18.jpg" alt="">
																		</a></li>
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img18a.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="p-item overflow-hidden">
															<div class="p-img mb-5">
																<a href="" class="thumb-img">
																	<img src="img/content/product-hot/hot-img20.jpg" class="img-fluid" alt="">
																</a>
															</div>
															<div class="p-info d-flex justify-content-center position-relative">
																<div class="p-1 position-absolute see-more">
																	<ul class="list-p d-flex justify-content-center">
																		<li><a href="" class="thumb-img">
																			<img src="img/content/product-hot/hot-img20.jpg" alt="">
																		</a></li>
																	</ul>
																</div>
																<span class="price text-center d-block">120.000 ₫</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="category">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="box">
									<div class="box-head mb-3">
										<div class="row">
											<div class="col-md-8 mx-auto text-center">
												<h2 class="name-box mb-1">Nhiều sản phẩm khác đang chờ đón bạn</h2>
												<aside class="sub-name">Đừng bỏ lỡ các sản phầm Hot tại HungS.vn</aside>
											</div>
										</div>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-6 mb-3">
												<div class="item-box animate-1 text-center border-bottom zoom" data-aos="zoom">
													<a href="">
														<img src="img/banner/banner-11.jpg" class="w-100 img-fluid" alt="">
													</a>
													<h2 class="name-item my-2"><a href="" class="text-decoration-none">Bộ sưu tập Xinh Xắn mới nhất của HungS</a></h2>
													<p class="desc">Đừng bỏ lỡ..! cơ hội và thời gian rất hạn chế</p>
												</div>
											</div>
											<!-- end 1 -->
											<div class="col-md-6 mb-3">
												<div class="item-box animate-1 text-center border-bottom zoom" data-aos="zoom">
													<a href="">
														<img src="img/banner/banner-10.jpg" class="w-100 img-fluid" alt="">
													</a>
													<h2 class="name-item my-2"><a href="" class="text-decoration-none">JUMPSUIT Nữ tính chỉ có tại HungS</a></h2>
													<p class="desc">Nhanh tay kẽo hết nào các bạn Nữ xinh xắn ơi ..!</p>
												</div>
											</div>
											<!-- end 2 -->
											<div class="col-md-6 mb-3">
												<div class="item-box animate-2 text-center border-bottom zoom" data-aos="zoom">
													<a href="">
														<img src="img/banner/banner-12.jpg" class="w-100 img-fluid" alt="">
													</a>
													<h2 class="name-item my-2"><a href="" class="text-decoration-none">BEYOs Be your best version</a></h2>
													<p class="desc">Ngại gì mà không để mình trở thành tâm điểm của mọi sự chú ý ..!</p>
												</div>
											</div>
											<!-- end 3 -->
											<div class="col-md-6 mb-3">
												<div class="item-box animate-2 text-center border-bottom zoom" data-aos="zoom">
													<a href="">
														<img src="img/banner/banner-9.jpg" class="w-100 img-fluid" alt="">
													</a>
													<h2 class="name-item my-2"><a href="" class="text-decoration-none">Số lượng có hạn đấy các bạn</a></h2>
													<p class="desc">Rạng ngời mỗi ngày với Đầm công sở Dáng suông tại nơi làm việc ..!</p>
												</div>
											</div>
											<!-- end 4 --> 
										</div>
										<div class="row my-4">
											<div class="col-md-8 mx-auto text-center">
												<a href="" class="loadnews text-uppercase text-decoration-none d-inline-block p-2">
													<i class="fa fa-refresh"></i>
													Xem thêm nhiều tin khác
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
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

<script src="js/masonry.pkgd.min.js"></script>
</html>