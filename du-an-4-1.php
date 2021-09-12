<?php $data["title"] = "DỰ ÁN 4.1"; ?>
<?php $fullPage = false; ?>
<?php $footer = true; ?>
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
        <div><img class="uk-width-1-1" src="images/du-an-4-1/MaskGroup.png" alt=""></div>
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
                                    <div>Thư Viện</div>
                                    Ảnh
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!--Phối Cảnh Dự Án Malibu Hội An-->
                        <div class="duan__tieukhu__item" id="loithephankhu">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Phối Cảnh Dự Án Malibu Hội An</h1>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="duan__tieukhu__item1">
                                    <ul class="uk-list uk-list-bullet duan__tieukhu__list">
                                        <li>Thiết kế hiện đại mang phong cách Mỹ tới Hội An</li>
                                    </ul>
                                    <div>
                                        <img class="uk-width-1-1" src="images/du-an-4-1/image101.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Phối Cảnh Dự Án Malibu Hội An-->

                        <!--Sơ Đồ Mặt Bằng Căn Hộ-->
                        <div class="duan__tieukhu__item" id="cactoacanho">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Sơ Đồ Mặt Bằng Căn Hộ</h1>
                                </div>
                            </div>

                            <div class="uk-flex-center uk-flex uk-grid-7" uk-switcher="animation: uk-animation-fade; toggle: > *" uk-grid>
                                <div><button class="uk-button uk-button-default duan__sodo__btn" type="button">Tầng 1</button></div>
                                <div><button class="uk-button uk-button-default duan__sodo__btn" type="button">Tầng 2</button></div>
                                <div><button class="uk-button uk-button-default duan__sodo__btn" type="button">Tầng 3</button></div>
                                <div><button class="uk-button uk-button-default duan__sodo__btn" type="button">Tầng 4</button></div>
                                <div><button class="uk-button uk-button-default duan__sodo__btn" type="button">Tầng 5</button></div>
                            </div>

                            <ul class="uk-switcher uk-margin duan__sodo__tab">
                                <li>
                                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-27-m" uk-grid>
                                        <div>
                                            <img class="uk-width-1-1" src="images/du-an-4-1/image105.png" alt="">
                                        </div>
                                        <div>
                                            <img class="uk-width-1-1" src="images/du-an-4-1/image106.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                            </ul>
                        </div>
                        <!--/Sơ Đồ Mặt Bằng Căn Hộ-->

                        <!--Nội Thất Biệt Thự Malibu Hội An-->
                        <div class="duan__tieukhu__item">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Nội Thất Biệt Thự Malibu Hội An</h1>
                                </div>
                            </div>
                            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-10 uk-grid-30-m uk-grid">
                                    <?php
                                    $data = array(
                                        array(
                                            'src' => 'images/du-an-4-1/noithat1.png',
                                            'txt' => 'Vườn nhật 1,000m2 dưới chân toà tháp',
                                        ),
                                        array(
                                            'src' => 'images/du-an-4-1/noithat2.png',
                                            'txt' => 'Vườn thượng uyển trên cao và suối nước',
                                        ),
                                        array(
                                            'src' => 'images/du-an-4-1/noithat3.png',
                                            'txt' => 'Đại sảnh thông tầng',
                                        ),
                                        array(
                                            'src' => 'images/du-an-4-1/noithat4.png',
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
                        <!--/Nội Thất Biệt Thự Malibu Hội An-->

                        <!--Ngoại Thất Biệt Thự Malibu Hội An-->
                        <div class="duan__tieukhu__item">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Ngoại Thất Biệt Thự Malibu Hội An</h1>
                                </div>
                            </div>
                            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid-10 uk-grid-30-m uk-grid">
                                    <?php
                                    $data = array(
                                        array(
                                            'src' => 'images/du-an-4-1/ngoaithat1.png',
                                            'txt' => 'Vườn nhật 1,000m2 dưới chân toà tháp',
                                        ),
                                        array(
                                            'src' => 'images/du-an-4-1/ngoaithat2.png',
                                            'txt' => 'Vườn thượng uyển trên cao và suối nước',
                                        ),
                                        array(
                                            'src' => 'images/du-an-4-1/ngoaithat3.png',
                                            'txt' => 'Đại sảnh thông tầng',
                                        ),
                                        array(
                                            'src' => 'images/du-an-4-1/ngoaithat4.png',
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
                        <!--/Ngoại Thất Biệt Thự Malibu Hội An-->

                        <!--Nội Thất Căn Hộ Malibu Hội An-->
                        <div class="duan__tieukhu__item">
                            <div class="uk-grid-10 uk-grid-15-m uk-grid uk-margin" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tuyendung__content__title uk-text-uppercase">Nội Thất Căn Hộ Malibu Hội An</h1>
                                </div>
                            </div>
                            <div class="uk-grid-small uk-grid-18-m uk-child-width-1-3@m" uk-grid>
                                <div>
                                    <img class="uk-width-1-1" src="images/du-an-4-1/nt1.png" alt="">
                                </div>
                                <div>
                                    <img class="uk-width-1-1" src="images/du-an-4-1/nt2.png" alt="">
                                </div>
                                <div>
                                    <img class="uk-width-1-1" src="images/du-an-4-1/nt3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!--/Nội Thất Căn Hộ Malibu Hội An-->

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