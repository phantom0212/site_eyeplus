<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <!-- Section About ======================== -->
    <section id="about" class="about-section">
        <div class="bg1-top"></div>
        <div class="bg1-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h4>Về chúng tôi</h4>
                    <h2 class="section-heading"><b>EyePlus Media</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                    <p>
                        Công ty TNHH Truyền Thông Tầm Nhìn là doanh nghiệp hoạt động trong lĩnh vực truyền thông và
                        internet. We are website chủ quản blogtamsu.vn uy tín hoạt động trên lĩnh vực truyền thông và cung
                        cấp thông tin cho bạn đọc.
                    </p>
                </div>
            </div>
        </div>
        <!-- Section Services -->
        <div class="container">
            <div class="row">

                <!-- begin 1st row -->
                <div class="col-lg-3 col-md-6 text-center  wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon1.png">
                            </div>
                            <h3>Tầm nhìn</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu, Phát triển và xây dựng công ty truyền thông đa phương tiện, đa
                            chức năng, trở thành nhà cung cấp dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#f34219">
                    </div>
                </div>
                <!-- begin 1st row -->
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon2.png">
                            </div>
                            <h3>Tầm nhìn</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#2ab514">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon3.png">
                            </div>
                            <h3>Tầm nhìn</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#ecb60c">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon4.png">
                            </div>
                            <h3>Tầm nhìn</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#2ab514">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon5.png">
                            </div>
                            <h3>Tầm nhìn</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#765099">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon6.png">
                            </div>
                            <h3>Kênh marketing tốt</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#3d4f9d">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon7.png">
                            </div>
                            <h3>Đội nhân viên chuyên nghiệp </h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#c02b5c">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow fadeInDown">
                    <div class="service-box">
                        <a href="#">
                            <div class="iconbox">
                                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon8.png">
                            </div>
                            <h3>Sự khác biệt</h3></a>
                        <p class="text-muted">
                            Phát triển và xây dựng công ty truyền thông đa phương tiện, đa chức năng, trở thành nhà cung cấp
                            dịch vụ chuyên nghiệp hàng đầu
                        </p>
                        <hr style="background:#428c7d">
                    </div>
                </div>
            </div>

            <!-- end 2nd row -->
        </div>
        <div class="clearfix"></div>
    </section>

    <!-- statistics -->
    <section class="statistics-section section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="statistics-center">  <!-- This code will work at max-width: 767px -->
                    <div class="col-md-3 col-sm-6">
                        <div class="statistics">
                            <div class="statistics-icon"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon-eye.png"/></div>
                            <div class="statistics-content">
                                <h5><span data-count="2025" class="statistics-count">2025</span></h5>
                                <p>Page views <span>/ month</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="statistics">
                            <div class="statistics-icon"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon-users.png"/></div>
                            <div class="statistics-content">
                                <h5><span data-count="181500499" class="statistics-count">181500499</span></h5>
                                <p>User <span>/ month</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="statistics">
                            <div class="statistics-icon"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon-calender.png"/></div>
                            <div class="statistics-content">
                                <h5><span data-count="8000" class="statistics-count">8000</span></h5>
                                <p>Vistis <span>/ month</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="statistics">
                            <div class="statistics-icon"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon-time.png"/></div>
                            <div class="statistics-content">
                                <h5><span data-count="4000" class="statistics-count">4000</span></h5>
                                <p>Time on site</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- statistics end -->

    <!-- Sản phẩm - Product -->
    <section id="product" class="product-section section-space-padding bg-cover" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h2 class="section-heading"><b>Sản Phẩm</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                </div>
            </div>

            <div class="row">
                <div class="testimonial-carousel-list margin-top-20">
                    <div class="testimonial-word text-center">
                        <a href="#"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/product/blogtamsu.png" class="img-responsive" alt=""></a>
                        <a href="#"><h2>Blog tâm sự</h2></a>
                        <p><i>Blogtamsu.vn</i></p>
                        <a href="#" class="btVietDetail">Xem chi tiết</a>
                    </div>

                    <div class="testimonial-word text-center">
                        <a href="#"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/product/feedy.png" class="img-responsive" alt=""></a>
                        <a href="#"><h2>Feedy</h2></a>
                        <p><i>Feedy.vn</i></p>
                        <a href="#" class="btVietDetail">Xem chi tiết</a>
                    </div>
                    <div class="testimonial-word text-center">
                        <a href="#"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/product/KTT.png" class="img-responsive" alt=""></a>
                        <a href="#"><h2>Kênh thể thao</h2></a>
                        <p><i>kenhthethao.vn</i></p>
                        <a href="#" class="btVietDetail">Xem chi tiết</a>
                    </div>
                    <div class="testimonial-word text-center">
                        <a href="#"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/product/KTT.png" class="img-responsive" alt=""></a>
                        <a href="#"><h2>Kênh thể thao</h2></a>
                        <p><i>kenhthethao.vn</i></p>
                        <a href="#" class="btVietDetail">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product End -->


    <!-- team-section -->
    <section id="team" class="team-section section-space-padding bg-cover" data-stellar-background-ratio="0.3">
        <div class="bg1-top"></div>
        <div class="bg1-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h2 class="section-heading"><b> E+ Team</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                </div>
            </div>

            <div class="row">
                <div class="team-boss">
                    <div class="col-lg-6 text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t1.png" class="img-responsive" alt=""></div>
                        <h3>Giám Đốc: NGuyễn Quang Anh</h3>
                        <h1>Thành công của bạn cũng là thành công của công ty</h1>

                        <p class="note-acc">Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của
                            khách hàng lên trên và nhìn từ vị trí của khách hàng. Chúng tôi chăm chút và gây dựng mối liên
                            hệ bền chặt với khách hàng </p>
                    </div>

                    <div class="col-lg-6 text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t1.png" class="img-responsive" alt=""></div>
                        <h3>Giám Đốc: NGuyễn Quang Anh</h3>
                        <h1>Thành công của bạn cũng là thành công của công ty</h1>

                        <p class="note-acc">Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của
                            khách hàng lên trên và nhìn từ vị trí của khách hàng. Chúng tôi chăm chút và gây dựng mối liên
                            hệ bền chặt với khách hàng </p>
                    </div>

                </div>
                <div class="team-carousel-list margin-top-20">
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t2.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t3.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t2.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t3.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t2.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t3.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t2.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t3.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t2.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t3.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t2.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <div class="imgUser"><img src="<?php  echo get_theme_file_uri(); ?>/assets/img/t3.png" class="img-responsive" alt=""></div>
                        <div class="shadow"></div>
                        <h3>Đỗ Trọng Nghĩa</h3>
                        <h4><i>Trưởng phòng code App</i></h4>
                        <p class="sup-acc">
                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" title="Link Facebook!"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip"
                                           title="ngocbich85hd@gmail.com"></i></i></a>
                            <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"
                                           title="Số DT: 0974745553"></i></a>
                        </p>
                        <p class="note-acc">Báo cáo khảo sát của HAY GROUP cho thấy tỷ lệ biến động nhân sự trung bình là
                            67% đối…</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section  End -->


    <!-- Chuyển động movementE-->
    <section id="movementE" class="movementE-section section-space-padding bg-cover" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h2 class="section-heading"><b>Chuyển động E+</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                    <p>
                        <i> Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của khách hàng lên
                            trên và nhìn từ vị trí của khách hàng. Chúng tôi chăm chút và gây dựng mối liên hệ bền chặt với
                            khách hàng và đối tác bằng sự chuyên nghiệp và chủ động
                            trong việc đề xuất thực hiện và trực tiếp.</i>
                    </p>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="slideMovement">
                <div class="team-carousel-list">
                    <div class="testimonial-word text-center">
                        <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a1.png" class="img-responsive" alt="">
                    </div>
                    <div class="testimonial-word text-center">
                        <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a1.png" class="img-responsive" alt="">
                    </div>
                    <div class="testimonial-word text-center">
                        <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a1.png" class="img-responsive" alt="">
                    </div>
                    <div class="testimonial-word text-center">
                        <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a1.png" class="img-responsive" alt="">
                    </div>
                    <div class="testimonial-word text-center">
                        <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a1.png" class="img-responsive" alt="">
                    </div>
                    <div class="testimonial-word text-center">
                        <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a1.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tin tức News-->
    <section id="newsE" class="newsE-section section-space-padding bg-cover"
             data-stellar-background-ratio="0.3">

        <div class="container">
            <div class="row">
                <div class="news-carousel-list">
                    <div class="testimonial-word text-center">
                        <a href="#" class="imgNews">
                            <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a2.png" class="img-responsive" alt="">
                            <div class="shadow2"></div>
                        </a>
                        <a href="#" class="title">
                            <h2>Văn phòng EyePlus Media ,EyePlus media by night</h2>
                        </a>
                        <p>Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của khách hàng
                            lên trên và nhìn từ vị trí của khách hàng.
                            Chúng tôi chăm chút và gây dựng mối liên hệ bền chặt với khách hàng và đối tác bằng sự
                            chuyên nghiệp và chủ động
                            trong việc đề xuất thực hiện và trực tiếp thực hiện tối ưu hóa lợi ích của khách hàng.</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <a href="#" class="imgNews">
                            <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a2.png" class="img-responsive" alt="">
                            <div class="shadow2"></div>
                        </a>
                        <a href="#" class="title">
                            <h2>Văn phòng EyePlus Media ,EyePlus media by night</h2>
                        </a>
                        <p>Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của khách hàng
                            lên trên và nhìn từ vị trí của khách hàng.
                            Chúng tôi chăm chút và gây dựng mối liên hệ bền chặt với khách hàng và đối tác bằng sự
                            chuyên nghiệp và chủ động
                            trong việc đề xuất thực hiện và trực tiếp thực hiện tối ưu hóa lợi ích của khách hàng.</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <a href="#" class="imgNews">
                            <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a3.png" class="img-responsive" alt="">
                            <div class="shadow2"></div>
                        </a>
                        <a href="#" class="title">
                            <h2>Văn phòng EyePlus Media ,EyePlus media by night</h2>
                        </a>
                        <p>Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của khách hàng
                            lên trên và nhìn từ vị trí của khách hàng.
                            Chúng tôi chăm chút và gây dựng mối liên hệ bền chặt với khách hàng và đối tác bằng sự
                            chuyên nghiệp và chủ động
                            trong việc đề xuất thực hiện và trực tiếp thực hiện tối ưu hóa lợi ích của khách hàng.</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <a href="#" class="imgNews">
                            <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a4.png" class="img-responsive" alt="">
                            <div class="shadow2"></div>
                        </a>
                        <a href="#" class="title">
                            <h2>Văn phòng EyePlus Media ,EyePlus media by night</h2>
                        </a>
                        <p>Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của khách hàng
                            lên trên và nhìn từ vị trí của khách hàng.
                            Chúng tôi chăm chút và gây dựng mối liên hệ bền chặt với khách hàng và đối tác bằng sự
                            chuyên nghiệp và chủ động
                            trong việc đề xuất thực hiện và trực tiếp thực hiện tối ưu hóa lợi ích của khách hàng.</p>
                    </div>
                    <div class="testimonial-word text-center">
                        <a href="#" class="imgNews">
                            <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/img/a5.png" class="img-responsive" alt="">
                            <div class="shadow2"></div>
                        </a>
                        <a href="#" class="title">
                            <h2>Văn phòng EyePlus Media ,EyePlus media by night</h2>
                        </a>
                        <p>Chúng tôi luôn suy nghĩ, hành động và sáng tạo trên cơ sở đặt quyền lợi ích của khách hàng
                            lên trên và nhìn từ vị trí của khách hàng.
                            Chúng tôi chăm chút và gây dựng mối liên hệ bền chặt với khách hàng và đối tác bằng sự
                            chuyên nghiệp và chủ động
                            trong việc đề xuất thực hiện và trực tiếp thực hiện tối ưu hóa lợi ích của khách hàng.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->
<?php get_footer();
