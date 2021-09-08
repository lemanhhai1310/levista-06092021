<?php $data["title"] = "DỰ ÁN 5"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-overflow-hidden uk-background-top-center tuyendung__box2 uk-background-cover" data-src="images/bg1.png" uk-img>
    <div class="uk-position-top uk-visible@m">
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

        <!---->
        <div uk-sticky="offset: 93;media: @m" class="uk-background-cover uk-background-bottom-center uk-background-norepeat" data-src="images/bg1.png" uk-img>
            <div class="uk-container uk-padding-remove">
                <ul class="uk-child-width-expand tuyendung__tab uk-grid-match uk-grid-collapse uk-grid" uk-tab uk-scrollspy-nav="closest: li; scroll: true; offset: 42">
                    <li class="uk-active"><a href="#">Thông tin dự án</a></li>
                    <li><a href="#">Chính sách bán hàng</a></li>
                    <li><a href="#">Tiện ích phân khu</a></li>
                    <li>
                        <a href="#">Tiểu khu <span uk-icon="icon: chevron-down; ratio: 0.8"></span></a>
                        <div uk-dropdown="mode: click">
                            <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="#">Lợi thế phân khu</a></li>
                                <li><a href="#">Các toà căn hộ</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--/-->

        <!--Content-->
        <div class="uk-section-small duan__content" uk-height-viewport>
            <div class="uk-position-relative">
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
        </div>
        <!--/Content-->


    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>