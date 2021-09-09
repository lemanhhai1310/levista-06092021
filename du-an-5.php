<?php $data["title"] = "DỰ ÁN 5"; ?>
<?php $fullPage = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-overflow-hidden uk-background-top-center tuyendung__box2 uk-background-cover" data-src="images/bg1.png" uk-img>
    <div class="uk-position-top uk-visible@m" hidden>
        <div class="uk-background-norepeat uk-background-cover" data-src="images/bg1.png" uk-img>
            <canvas width="1920" height="1013"></canvas>
        </div>
        <div class="uk-background-norepeat uk-background-cover" data-src="images/bg1.png" uk-img>
            <canvas width="1920" height="1013"></canvas>
        </div>
        <div class="uk-background-norepeat uk-background-cover" data-src="images/bg1.png" uk-img>
            <canvas width="1920" height="1013"></canvas>
        </div>
    </div>
    <div class="uk-position-relative">
        <!--Tim kiem bds-->
        <div class="uk-section-xsmall bds__boloc__bg">
            <div class="uk-container">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h3 class="uk-h3 uk-margin-remove bds__boloc__title">Tìm Kiếm Bất Động Sản</h3>
                    </div>
                    <div class="uk-width-auto@m">
                        <div class="uk-child-width-auto uk-grid-10 uk-grid-15-m" uk-grid>
                            <div>
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: search; ratio: 0.8"></span>
                                    <input class="uk-input bds__boloc__input uk-form-small uk-border-pill" type="text" placeholder="Tìm kiếm...">
                                </div>
                            </div>
                            <div>
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Tất Cả Vị Trí</option>
                                        <option value="1">Hà Nội</option>
                                        <option value="2">Đà Nẵng</option>
                                        <option value="3">Sài Gòn</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="uk-button bds__boloc__select uk-button-default uk-button-small uk-border-pill" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-left" style="left: 8px" uk-icon="icon: location; ratio: 0.9"></span>
                                        <span class="uk-position-center-right" style="right: 8px;" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="bds__boloc__btn uk-button uk-button-default uk-button-small uk-border-pill">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Tim kiem bds-->

        <!--Banner-->
        <div><img class="uk-width-1-1" src="images/du-an5/MaskGroup.png" alt=""></div>
        <!--/Banner-->

        <!--scrollspy-nav-->
        <div uk-sticky="offset: 93;" class="duan__scrollspy-nav uk-background-cover uk-background-bottom-center uk-background-norepeat" data-src="images/bg1.png" uk-img>
            <div class="uk-container uk-padding-remove">
                <ul class="uk-child-width-expand tuyendung__tab uk-grid-match uk-grid-collapse uk-grid" uk-tab uk-scrollspy-nav="closest: li; scroll: true; offset: 100">
                    <li class="uk-active"><a href="#thongtinduan">Thông tin dự án</a></li>
                    <li><a href="#chinhsachbanhang">Chính sách bán hàng</a></li>
                    <li><a href="#tienichphankhu">Tiện ích phân khu</a></li>
                    <li>
                        <a href="#tieukhu">Tiểu khu <span uk-icon="icon: chevron-down; ratio: 0.8"></span></a>
                        <div uk-dropdown>
                            <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="#loithephankhu">Lợi thế phân khu</a></li>
                                <li><a href="#cactoacanho">Các toà căn hộ</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--/scrollspy-nav-->

        <!--Content-->
        <div class="uk-section-small duan__content">

            <!--Thong tin du an-->
            <div class="uk-position-relative duan__item" id="thongtinduan">
                <div class="uk-position-top-left duan__overlay" style="background: rgba(229, 229, 229, 0.6);">
                    <canvas width="2529" height="1611"></canvas>
                </div>
                <div class="uk-position-relative">
                    <div class="uk-container uk-margin">
                        <div class="uk-margin">
                            <div class="uk-grid-small uk-flex-middle uk-child-width-auto" uk-grid>
                                <div>
                                    <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                                </div>
                                <div>
                                    <div class="tuyendung__box1__title">
                                        <div>Thông Tin</div>
                                        Dự Án
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-container uk-container-expand-left duan__containerExpandLeft">
                        <div class="uk-grid-small uk-grid-96-m" uk-grid>
                            <div class="uk-width-expand">
                                <div class="uk-cover-container uk-margin-small">
                                    <img src="images/du-an5/Facade1.png" alt="" uk-cover>
                                    <canvas width="1364" height="726"></canvas>
                                </div>
                                <div class="uk-margin-small uk-text-center duan__txtBrand uk-hidden@m">“Nâng niu nhịp sống, trọn từng phút giây”</div>
                            </div>
                            <div class="uk-width-2-5@m">
                                <div class="uk-margin">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                    <h1 class="uk-h1 tuyendung__content__title uk-margin-remove">Swanlake Residences The Onsen</h1>
                                </div>
                                <div class="duan__thongtin__txt1">
                                    Tổ hợp căn hộ khoáng nóng <span>Swanlake Residences The Onsen</span> nằm tại trung tâm của Ecopark – khu đô thị có thiết kế cảnh quan đẹp nhất thế giới. Được kiến tạo với vị trí độc tôn cùng thiết kế tối đa hóa tầm view ôm trọn tổ hợp công viên Hồ Thiên Nga, sân Golf EPGA, quảng trường Marina và vịnh Aquabay sầm uất...
                                </div>
                                <ul class="uk-list uk-list-bullet duan__thongtin__list">
                                    <li>Kiến trúc giật tầng với vườn thượng uyển trên cao và suối nước nóng hòa quyện cùng thiên nhiên.</li>
                                    <li>Cầu đi bộ Anh Đào liên hoàn giữa các tòa kết nối trực tiếp với hồ Thiên Nga tuyệt đẹp.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-container">
                        <div class="uk-margin-small duan__txtBrand uk-visible@m">“Nâng niu nhịp sống, trọn từng phút giây”</div>
                    </div>
                </div>
            </div>
            <!--/Thong tin du an-->

            <!--Chinh sach ban hang-->
            <div class="duan__item uk-position-relative" id="chinhsachbanhang">
                <div class="uk-container">
                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                        <div class="uk-width-auto">
                            <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="tuyendung__box1__title">
                                <div>Chính Sách</div>
                                Bán Hàng
                            </div>
                            <ul class="uk-list uk-list-bullet">
                                <li>
                                    <span class="duan__chinhsach__list__txt">Chính sách hỗ trợ tài chính</span>
                                    <div class="uk-child-width-1-3@m uk-margin" uk-grid>
                                        <div>
                                            <div class="uk-text-center">
                                                <div class="duan__chinhsach__txt">80%</div>
                                                <div class="duan__chinhsach__desc">Hỗ trợ vay vốn lên tới <span>80%</span> giá trị căn hộ</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-text-center">
                                                <div class="duan__chinhsach__txt">0%</div>
                                                <div class="duan__chinhsach__desc">Hỗ trợ lãi suất <span>0%</span> trong <span>24 tháng</span></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-text-center">
                                                <div class="duan__chinhsach__txt">24 <sup>Tháng</sup></div>
                                                <div class="duan__chinhsach__desc">Hỗ trợ trả nợ trước hạn và ân hạn nợ gốc <span>24 tháng</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="duan__chinhsach__list__txt">Chính sách chiết khấu không vay</span>
                                </li>
                                <li>
                                    <span class="duan__chinhsach__list__txt">Chiết khấu không vay lên tới 2%</span>
                                </li>
                                <li>
                                    <span class="duan__chinhsach__list__txt">Chính sách chiết khấu thanh toán sớm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Chinh sach ban hang-->

            <!--Tien ich phan khu-->
            <div class="duan__item uk-position-relative" id="tienichphankhu">
                <div class="uk-container uk-margin-medium">
                    <div class="uk-margin">
                        <div class="uk-grid-small uk-flex-middle uk-child-width-auto" uk-grid>
                            <div>
                                <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                            </div>
                            <div>
                                <div class="tuyendung__box1__title">
                                    <div>Tiện Ích</div>
                                    Phân Khu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="duan__tienich__item">
                        <div class="uk-container uk-margin-medium">
                            <h3 class="uk-h3 duan__tienich__title">Tiện ích sức khỏe</h3>
                        </div>
                        <div uk-slideshow="animation: fade;ratio: 1280:451">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="background: rgba(229, 229, 229, 0.6);">

                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="images/du-an5/tienich/Frame34.png" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/photo.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/dark.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/light.jpg" alt="" uk-cover>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>

                            <ul class="uk-slideshow-nav uk-dotnav duan__tienich__dotnav uk-flex-center uk-margin"></ul>

                        </div>
                    </div>

                    <div class="duan__tienich__item">
                        <div class="uk-container uk-margin-medium">
                            <h3 class="uk-h3 duan__tienich__title">Tiện ích thư giãn và vui chơi giải trí</h3>
                        </div>
                        <div uk-slideshow="animation: fade;ratio: 1280:451">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="background: rgba(229, 229, 229, 0.6);">

                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="images/du-an5/tienich/TIGT-OSEN.png" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/photo.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/dark.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/light.jpg" alt="" uk-cover>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>

                            <ul class="uk-slideshow-nav uk-dotnav duan__tienich__dotnav uk-flex-center uk-margin"></ul>

                        </div>
                    </div>

                    <div class="duan__tienich__item">
                        <div class="uk-container uk-margin-medium">
                            <h3 class="uk-h3 duan__tienich__title">Tiện ích mua sắm</h3>
                        </div>
                        <div uk-slideshow="animation: fade;ratio: 1280:451">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="background: rgba(229, 229, 229, 0.6);">

                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="images/du-an5/tienich/_TIMS-OSEN.png" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/photo.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/dark.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/light.jpg" alt="" uk-cover>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>

                            <ul class="uk-slideshow-nav uk-dotnav duan__tienich__dotnav uk-flex-center uk-margin"></ul>

                        </div>
                    </div>

                    <div class="duan__tienich__item">
                        <div class="uk-container uk-margin-medium">
                            <h3 class="uk-h3 duan__tienich__title">Tiện ích giáo dục</h3>
                        </div>
                        <div uk-slideshow="animation: fade;ratio: 1280:451">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="background: rgba(229, 229, 229, 0.6);">

                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="images/du-an5/tienich/TIGD-OSEN.png" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/photo.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/dark.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/light.jpg" alt="" uk-cover>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>

                            <ul class="uk-slideshow-nav uk-dotnav duan__tienich__dotnav uk-flex-center uk-margin"></ul>

                        </div>
                    </div>
                </div>
            </div>
            <!--/Tien ich phan khu-->

            <!--Tieu khu-->
            <div class="duan__item uk-position-relative" id="tieukhu">
                <div class="uk-container">
                    <div class="uk-margin">
                        <div class="uk-grid-small uk-flex-middle uk-child-width-auto" uk-grid>
                            <div>
                                <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                            </div>
                            <div>
                                <div class="tuyendung__box1__title">
                                    <div>Tiểu</div>
                                    Khu
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!--Lợi thế phân khu-->
                        <div class="duan__tieukhu__item" id="loithephankhu">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Lợi thế phân khu</h1>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="duan__tieukhu__item1">
                                    <ul class="uk-list uk-list-bullet duan__tieukhu__list">
                                        <li>Thiết kế trên nguyên tắc tối đa hoá tầm view tuyệt đẹp và hoà lẫn với thiên nhiên.</li>
                                    </ul>
                                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m" uk-grid>
                                        <div>
                                            <div class="uk-cover-container">
                                                <img src="images/du-an5/tieukhu-loithe/dd1259981459e307ba481.png" alt="" uk-cover>
                                                <canvas width="1060" height="600"></canvas>
                                            </div>
                                            <h3 class="uk-h3 duan__tieukhu__title">View sông Hồng</h3>
                                        </div>
                                        <div>
                                            <div class="uk-cover-container">
                                                <img src="images/du-an5/tieukhu-loithe/4db8f9a6b46743391a761.png" alt="" uk-cover>
                                                <canvas width="1060" height="600"></canvas>
                                            </div>
                                            <h3 class="uk-h3 duan__tieukhu__title">View hồ Thiên Nga</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="duan__tieukhu__item1">
                                    <ul class="uk-list uk-list-bullet duan__tieukhu__list">
                                        <li>Kiến trúc chữ T - 75% căn hộ bao trọn Hồ Thiên Nga, Công viên Hồ Thiên Nga, Golf, CBD</li>
                                    </ul>
                                    <div>
                                        <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/Asset16-100.png" alt="">
                                    </div>
                                </div>
                                <div class="duan__tieukhu__item1">
                                    <ul class="uk-list uk-list-bullet duan__tieukhu__list">
                                        <li>Sở hữu riêng</li>
                                    </ul>
                                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-10 uk-grid-30-m uk-grid">
                                            <?php
                                            $data = array(
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu1.png',
                                                    'txt' => 'Vườn nhật 1,000m2 dưới chân toà tháp',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu2.png',
                                                    'txt' => 'Vườn thượng uyển trên cao và suối nước',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu3.png',
                                                    'txt' => 'Đại sảnh thông tầng',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu4.png',
                                                    'txt' => 'Lounge bar',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu1.png',
                                                    'txt' => 'Vườn nhật 1,000m2 dưới chân toà tháp',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu2.png',
                                                    'txt' => 'Vườn thượng uyển trên cao và suối nước',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu3.png',
                                                    'txt' => 'Đại sảnh thông tầng',
                                                ),
                                                array(
                                                    'src' => 'images/du-an5/tieukhu-loithe/sohuu4.png',
                                                    'txt' => 'Lounge bar',
                                                ),
                                            );
                                            foreach ($data as $k=>$v): ?>
                                            <li>
                                                <div class="uk-cover-container">
                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                    <canvas width="600" height="600"></canvas>
                                                </div>
                                                <h3 class="uk-h3 duan__tieukhu__title"><?= $v['txt'] ?></h3>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <div class="duan__tieukhu__nav">
                                            <div class="uk-child-width-auto uk-grid-10 uk-grid-20-m" uk-grid>
                                                <div>
                                                    <a href="#" uk-slider-item="previous"><img class="duan__tieukhu__nav__img" src="images/du-an5/tieukhu-loithe/icon-prev.png" alt=""></a>
                                                </div>
                                                <div>
                                                    <a href="#" uk-slider-item="next"><img class="duan__tieukhu__nav__img" src="images/du-an5/tieukhu-loithe/icon-next.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Lợi thế phân khu-->

                        <!--Các toà căn hộ-->
                        <div class="duan__tieukhu__item" id="cactoacanho">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Các toà căn hộ</h1>
                                </div>
                            </div>
                            <div>
                                <div class="duan__tieukhu__item2 uk-grid-match uk-grid-collapse" uk-grid>
                                    <div class="uk-width-1-4@m duan__tieukhu__item2__w1">
                                        <div class="uk-cover-container">
                                            <img src="images/du-an5/tieukhu-loithe/canhor1.png" alt="" uk-cover>
                                            <canvas width="702" height="966"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand uk-padding duan__tieukhu__item2__body">
                                        <div>
                                            <h3 class="uk-h3 uk-text-uppercase duan__tieukhu__item2__title"><span>khu R1</span> | 39 tầng/ 514 căn hộ</h3>

                                            <h5 class="uk-h5 duan__tieukhu__item2__title1">Tiện ích R1:</h5>
                                            <ul class="uk-list uk-list-bullet duan__tieukhu__item2__list">
                                                <li>Cầu dạo bộ Anh đào liên toà, kết nối trực tiếp hồ Thiên Nga</li>
                                                <li>Vườn thượng uyển trên cao và suối nước</li>
                                                <li>Hồ cá Koi và trà đạo</li>
                                                <li>Vườn Nhật dưới chân toà tháp</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="duan__tieukhu__item2 uk-grid-match uk-grid-collapse" uk-grid>
                                    <div class="uk-width-1-4@m duan__tieukhu__item2__w1">
                                        <div class="uk-cover-container">
                                            <img src="images/du-an5/tieukhu-loithe/canhor2.png" alt="" uk-cover>
                                            <canvas width="702" height="966"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand uk-padding duan__tieukhu__item2__body">
                                        <div>
                                            <h3 class="uk-h3 uk-text-uppercase duan__tieukhu__item2__title"><span>khu R2</span> | 36 tầng/ 469 căn hộ</h3>

                                            <h5 class="uk-h5 duan__tieukhu__item2__title1">Tiện ích R2:</h5>
                                            <ul class="uk-list uk-list-bullet duan__tieukhu__item2__list">
                                                <li>Tổ hợp Onsen, Sauna, Spa & Detox</li>
                                                <li>Hồ bơi thác nước</li>
                                                <li>Vườn thượng uyển trên cao và suối nước</li>
                                                <li>Vườn Nhật dưới chân tòa tháp</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="duan__tieukhu__item2 uk-grid-match uk-grid-collapse" uk-grid>
                                    <div class="uk-width-1-4@m duan__tieukhu__item2__w1">
                                        <div class="uk-cover-container">
                                            <img src="images/du-an5/tieukhu-loithe/canhor3.png" alt="" uk-cover>
                                            <canvas width="702" height="966"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand uk-padding duan__tieukhu__item2__body">
                                        <div>
                                            <h3 class="uk-h3 uk-text-uppercase duan__tieukhu__item2__title"><span>khu R3</span> | 33 tầng/ 424 căn hộ</h3>

                                            <h5 class="uk-h5 duan__tieukhu__item2__title1">Tiện ích R3:</h5>
                                            <ul class="uk-list uk-list-bullet duan__tieukhu__item2__list uk-column-1-2@m">
                                                <li>Vườn nhật 1,000m2 dưới chân toà tháp</li>
                                                <li>Vườn thượng uyển trên cao và suối nước</li>
                                                <li>Đại sảnh thông tầng</li>
                                                <li>Lounge bar</li>
                                                <li>Business lounge</li>
                                                <li>Phòng họp</li>
                                                <li>Chuỗi nhà hàng nhật</li>
                                                <li>Hệ thống phòng gym</li>
                                                <li>Đại trung tâm spa</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="uk-h3 uk-text-uppercase duan__canho__title">4 loại căn hộ:</h3>
                            <ul class="uk-list uk-list-bullet duan__tieukhu__list">
                                <li>Căn hộ điển hình gồm Studio, 1PN, 2PN, 3PN</li>
                            </ul>
                            <div>
                                <div class="duan__canho__item uk-text-center">
                                    <div class="uk-grid-10 uk-grid-20-m" uk-grid>
                                        <div class="uk-width-1-2@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai1.png" alt="">
                                        </div>
                                        <div class="uk-width-1-2@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai2.png" alt="">
                                        </div>

                                        <div class="uk-width-1-3@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai3.png" alt="">
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai4.png" alt="">
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai5.png" alt="">
                                        </div>

                                        <div class="uk-width-1-2@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai7.png" alt="">
                                        </div>
                                        <div class="uk-width-1-2@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/loai6.png" alt="">
                                        </div>
                                    </div>
                                    <h3 class="uk-h3 duan__tieukhu__title">Layout căn hộ điển hình tại Swan Lake <br class="uk-visible@m">
                                        Onsen Ecopark</h3>
                                </div>
                                <div class="duan__canho__item uk-text-center">
                                    <div class="uk-grid-10 uk-grid-20-m" uk-grid>
                                        <div class="uk-width-1-2@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/layout1.png" alt="">
                                        </div>
                                        <div class="uk-width-1-2@m">
                                            <img class="uk-width-1-1" src="images/du-an5/tieukhu-loithe/layout2.png" alt="">
                                        </div>
                                    </div>
                                    <h3 class="uk-h3 duan__tieukhu__title">Layout Tầng điển hình tại Swan Lake <br class="uk-visible@m">
                                        Onsen Ecopark</h3>
                                </div>
                            </div>

                            <ul class="uk-list uk-list-bullet duan__tieukhu__list uk-margin-medium">
                                <li>Căn hộ Garden Villas –Sở hữu sân vườn riêng, trần cao 6m</li>
                                <li>Căn hộ Mezza –Trần cao tới 7m tại tầng19</li>
                                <li>Căn hộ Sky villa–Trần cao 6m tại tầng 21</li>
                                <li>Căn hộ Penthouse –Trần cao 9m tầng 38, 39, sở hữu sân vườn & bể bơi riêng biệt</li>
                            </ul>
                        </div>
                        <!--/Các toà căn hộ-->

                        <div class="bds__content__item">
                            <div class="uk-position-relative uk-text-center bds__content__header">
                                <h2 class="uk-h2 bds__content__header__title">Tham Khảo Thêm</h2>
                            </div>
                            <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small uk-grid-20-m" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/bds/MaskGroup1.png',
                                        'title' => 'Swan Lake Onsen Ecopark',
                                        'tag' => 'căn hộ',
                                    ),
                                    array(
                                        'src' => 'images/bds/MaskGroup2.png',
                                        'title' => 'The Landmark Swanlake Residence',
                                        'tag' => 'căn hộ',
                                    ),
                                    array(
                                        'src' => 'images/bds/MaskGroup3.png',
                                        'title' => 'Ecopark Grand - The Island',
                                        'tag' => 'BIỆT THỰ',
                                    ),
                                    array(
                                        'src' => 'images/bds/MaskGroup4.png',
                                        'title' => 'malibu hội an',
                                        'tag' => 'căn hộ',
                                    ),
                                );
                                foreach ($data as $k=>$v): ?>
                                    <div>
                                        <div class="uk-card uk-card-default uk-text-center bds__content__card">
                                            <div class="uk-cover-container uk-background-muted">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                <canvas width="768" height="540"></canvas>
                                                <span class="uk-label uk-border-pill uk-position-top-right bds__content__card__tag"><?= $v['tag'] ?></span>
                                            </div>
                                            <div class="uk-card-body bds__content__card__body">
                                                <h3 class="uk-h3 bds__content__card__title"><a href="du-an-5.php"><?= $v['title'] ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--/Tieu khu-->
        </div>
        <!--/Content-->


    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>