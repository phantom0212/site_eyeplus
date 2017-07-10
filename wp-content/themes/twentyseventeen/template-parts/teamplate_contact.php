<?php
/*
Template Name: Contact
*/
get_header();
?>
<section class="contact-section-in tab-in bg-cover text-center" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="statistics wow fadeInDown">
                    <div class="statistics-icon"><img
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/contact-us-icon.png"/></div>
                    <div class="statistics-content">
                        <h5>
                            Liên hệ</h5>
                    </div>
                </div>
                <div class="tab-gt left w100pt wow fadeInDown">
                    <h2>Thông tin liên hệ</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics end -->

<!-- team - -->
<section id="newsE-section-list" class="newsE-section about-section cd-section section-space-padding8 bg-cover"
         data-stellar-background-ratio="0.3">
    <div class="bg1-top"></div>
    <div class="bg1-bottom"></div>

    <div class="container">
        <div class="row">
            <h2 class="tittlemameCT">Công ty TNHH Truyền Thông Tầm Nhìn Cộng - EyePlus Media</h2>
            <div class="col-md-4 contact-grid">
                <div class="call">
                    <div class="col-xs-2 contact-grdl">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/img-new/c-pin.png">
                    </div>
                    <div class="col-xs-10 contact-grdr">
                        Tầng 2, tòa nhà Star Tower, Dương Đình Nghệ,
                        Cầu Giấy, Hà Nội
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="call">
                    <div class="col-xs-2 contact-grdl">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/img-new/c-phone.png">
                    </div>
                    <div class="col-xs-10 contact-grdr number-call">
                        0975 490 153
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="call">
                    <div class="col-xs-2 contact-grdl">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/img-new/c-email.png">
                    </div>
                    <div class="col-xs-10 contact-grdr">
                        <a href="mailto:contact@eyeplus.vn">contact@eyeplus.vn
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="call">
                    <div class="col-xs-2 contact-grdl">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/img-new/c-email.png">
                    </div>
                    <div class="col-xs-10 contact-grdr">
                        <a href="mailto:ads@eyeplus.vn">ads@eyeplus.vn
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="l-subfooter top-bar">
                    <div class="l-subfooter-h g-cols offset_default">
                        <div class="full-width">
                            <div id="us_socials-5" class="widget widget_us_socials"><h2 class="tittle1">Mạng xã
                                    hội:</h2>
                                <div class="w-socials size_small style_desaturated">
                                    <div class="w-socials-list">
                                        <div class="w-socials-item email"><a class="w-socials-item-link" target="_blank"
                                                                             href="mailto:contact@eyeplus.vn"><span
                                                        class="w-socials-item-link-hover"></span></a>
                                            <div class="w-socials-item-popup"><span>Email</span></div>
                                        </div>
                                        <div class="w-socials-item facebook"><a class="w-socials-item-link"
                                                                                target="_blank"
                                                                                href="https://www.facebook.com/Eyeplusmedia/"><span
                                                        class="w-socials-item-link-hover"></span></a>
                                            <div class="w-socials-item-popup"><span>Facebook</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php do_shortcode('[contact-form-7 id="269" title="Contact"]'); ?>
            <!--            <div class="col-md-8 contact-grid agileits-1">-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt"></div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <h2 class="tittle2">Liên hệ với chúng tôi</h2>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Họ và tên :</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <input type="text" name="name" placeholder="Nhập họ tên">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Địa chỉ :</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <input type="text" placeholder="Nhập Địa chỉ" name="Address" >-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Điện thoại di động :</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <input type="text" placeholder="Nhập Điện thoại di động" name="PhoneNumber">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Điện thoại cố định :</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <input type="text" placeholder="Nhập điện thoại cố định" name="name">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Email :</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <input type="text" name="Email" placeholder="Nhập email">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Fax :</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <input type="text" name="Fax" placeholder="Nhập fax">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt">Nội dung:</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                         <textarea type="text" onfocus="this.value = '';"-->
            <!--                                   onblur="if (this.value == '') {this.value = 'Message...';}"-->
            <!--                                   required="">Nhập nội dung...</textarea>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-lg-12 form-CT">-->
            <!--                    <div class="col-lg-3 txt" style="color: #fff">.</div>-->
            <!--                    <div class="col-lg-9">-->
            <!--                        <div class="btContact">-->
            <!--                            <input type="submit" value="Gửi" class="btSend">-->
            <!--                            <input type="submit" value="Hủy" class="btHuy">-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

