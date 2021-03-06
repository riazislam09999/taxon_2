@extends('layouts.master_page')

@section('content')
    

     <!--slider with banners-->
        <section class="container">
				<div class="row clearfix">
					<!--slider-->
					<div class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
						<div class="flexslider animate_ftr long">
							<ul class="slides">
								<li>
									<img src="{{asset('master_style/images')}}/slide_04.jpg" alt="" data-custom-thumb="{{asset('master_style/images')}}/slide_01.jpg">
									<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
								</li>
								<li>
									<img src="{{asset('master_style/images')}}/slide_05.jpg" alt="" data-custom-thumb="{{asset('master_style/images')}}/slide_03.jpg">
									<section class="slide_caption_2 t_align_c d_xs_none">
										<div class="f_size_large tt_uppercase slider_title_3 scheme_color">New arrivals</div>
										<hr class="slider_divider type_2 m_bottom_5 d_inline_b">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_65 m_sm_bottom_20"><b><span class="scheme_color">Spring/Summer 2014</span><br><span class="color_dark">Ready-To-Wear</span></b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">View Collection</a>
									</section>
								</li>
								<li>
									<img src="{{asset('master_style/images')}}/slide_06.jpg" alt="" data-custom-thumb="{{asset('master_style/images')}}/slide_02.jpg">
									<section class="slide_caption_3 t_align_c d_xs_none">
										<img src="{{asset('master_style/images')}}/slider_layer_img.png" alt="" class="m_bottom_5">
										<div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20"><b class="color_dark">up to 70% off</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
									</section>
								</li>
							</ul>
						</div>
					</div>
					<!--banners-->
					<div class="col-lg-3 col-md-3 col-sm-3 t_xs_align_c s_banners banner_none">
						<a href="#" class="d_block d_xs_inline_b m_bottom_20 animate_ftr">
							<img src="{{asset('master_style/images')}}/banner_img_7.jpg" alt="">
						</a>
						<a href="#" class="d_block d_xs_inline_b m_xs_left_5 animate_ftr m_mxs_left_0">
							<img src="{{asset('master_style/images')}}/banner_img_8.jpg" alt="">
						</a>
					</div>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<!--banners-->
					<section class="row clearfix banner_none">
						<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
							<a href="#" class="d_block banner animate_ftr wrapper r_corners relative m_xs_bottom_30">
								<img src="{{asset('master_style/images')}}/banner_img_1.png" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
										<span class="d_block divider_type_2 centered_db m_bottom_5"></span>
										<span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
							<a href="#" class="d_block banner animate_ftr wrapper r_corners type_2 relative">
								<img src="{{asset('master_style/images')}}/banner_img_2.png" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
										<span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
										<span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
										<span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
					</section>
					
					<div class="row clearfix ">
						<aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30 banner_none ">
							<!--widgets-->
							<figure class="widget  animate_ftr shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<li class="active">
											<a href="#" class="f_size_large scheme_color d_block relative">
												<b>Women</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
											<ul>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
													<ul>
														<li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Party Dresses</a></li>
													</ul>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Men</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
											<ul class="d_none">
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
													<ul class="d_none">
														<li><a href="#" class="color_dark d_block">Evening</a></li>
														<li><a href="#" class="color_dark d_block">Casual</a></li>
														<li><a href="#" class="color_dark d_block">Party</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Kids</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
										</li>
									</ul>
								</div>
							</figure>
							<!--compare products-->
							
							<!--banner-->
							<a href="#" class="widget animate_ftr d_block r_corners m_bottom_30">
								<img src="{{asset('master_style/images')}}/banner_img_6.jpg" alt="">
							</a>
						
						</aside>
						<section class="col-lg-9 col-md-9 col-sm-9 ">
							<h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Featured products</h2>
							<!--products-->
							<section class="products_container a_type_2 category_grid clearfix m_bottom_25 ">
								<!--product item-->
								<div class="product_item hit w_xs_full">
									<figure class="r_corners photoframe animate_ftb type_2 t_align_c tr_all_hover shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<!--hot product-->
											<span class="hot_stripe"><img src="{{asset('master_style/images')}}/hot_product.png" alt=""></span>
											<img src="{{asset('master_style/images')}}/product_img_1.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15">$102.00</p>	
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item featured w_xs_full">
									<figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<img src="{{asset('master_style/images')}}/product_img_2.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Ut tellus dolor dapibus</a></h5>
											<div class="clearfix m_bottom_15">
												<!--rating-->
												<ul class="horizontal_list type_2 m_bottom_10 d_inline_b clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large">$57.00</p>
											</div>
											<div class="clearfix">
												<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											</div>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item new w_xs_full">
									<figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<img src="{{asset('master_style/images')}}/product_img_3.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Cursus eleifend elit aenean.</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$99.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item specials w_xs_full">
									<figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<img src="{{asset('master_style/images')}}/product_img_7.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$99.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item specials w_xs_full">
									<figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<!--sale product-->
											<span class="hot_stripe"><img src="{{asset('master_style/images')}}/sale_product.png" alt=""></span>
											<img src="{{asset('master_style/images')}}/product_img_9.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Cursus eleifend elit aenean.</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$99.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item rated w_xs_full">
									<figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<img src="{{asset('master_style/images')}}/product_img_6.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$36.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
							</section>
							<!--banners-->
							<div class="row clearfix m_bottom_45">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
										<span class="d_inline_middle">
											<img class="d_inline_middle m_md_bottom_5" src="{{asset('master_style/images')}}/banner_img_3.png" alt="">
											<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
												<b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
										<span class="d_inline_middle">
											<img class="d_inline_middle m_md_bottom_5" src="{{asset('master_style/images')}}/banner_img_4.png" alt="">
											<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
												<b>Free<br class="d_none d_sm_block"> Shipping</b><br><span class="color_dark">On All Items</span>
											</span>
										</span>
									</a>
								</div>
							</div>

                              <!-- Categories product List -->
                         

							<div class="clearfix">
								<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">New Collection</h2>
								<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none m_mxs_bottom_5">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners nc_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners nc_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--bestsellers carousel-->
							<div class="nc_carousel m_bottom_30 m_sm_bottom_20">
								<figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
									<!--product preview-->
									<a href="#" class="d_block relative pp_wrap m_bottom_15">
										<!--hot product-->
										<span class="hot_stripe type_2"><img src="{{asset('master_style/images')}}/hot_product_type_2.png" alt=""></span>
										<img src="{{asset('master_style/images')}}/product_img_5.jpg" class="tr_all_hover" alt="">
										<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
									</a>
									<!--description and price of product-->
									<figcaption class="p_vr_0">
										<h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
										<div class="clearfix">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15">$102.00</p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
												<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
											</ul>
										</div>
									</figcaption>
								</figure>
								<figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
									<!--product preview-->
									<a href="#" class="d_block relative pp_wrap m_bottom_15">
										<img src="{{asset('master_style/images')}}/product_img_8.jpg" class="tr_all_hover" alt="">
										<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
									</a>
									<!--description and price of product-->
									<figcaption class="p_vr_0">
										<h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
										<div class="clearfix">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15">$102.00</p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
												<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
											</ul>
										</div>
									</figcaption>
								</figure>
								<figure class="r_corners photoframe animate_ftb long type_2 t_align_c shadow relative tr_all_hover">
									<!--product preview-->
									<a href="#" class="d_block relative pp_wrap m_bottom_15">
										<!--sale product-->
										<span class="hot_stripe type_2"><img src="{{asset('master_style/images')}}/sale_product_type_2.png" alt=""></span>
										<img src="{{asset('master_style/images')}}/product_img_4.jpg" class="tr_all_hover" alt="">
										<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
									</a>
									<!--description and price of product-->
									<figcaption class="p_vr_0">
										<h5 class="m_bottom_10"><a href="#" class="color_dark">Ut tellus dolor dapibus</a></h5>
										<div class="clearfix m_bottom_15">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large">$57.00</p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
												<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
											</ul>
										</div>
									</figcaption>
								</figure>
								<figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
									<!--product preview-->
									<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
										<img src="{{asset('master_style/images')}}/product_img_6.jpg" class="tr_all_hover" alt="">
										<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
									</a>
									<!--description and price of product-->
									<figcaption class="p_vr_0">
										<h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
										<div class="clearfix">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15">$36.00</p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
												<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
											</ul>
										</div>
									</figcaption>
								</figure>
							</div>
							  
							 

							

							<!-- Categories product List -->
						
						</section>
					</div>
				</div>
			</div>
    @endsection
			<!--markup footer-->