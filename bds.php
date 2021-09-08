<?php $data["title"] = "BDS"; ?>
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
        <div><img class="uk-width-1-1" src="images/bds/MaskGroup.png" alt=""></div>
        <!--/Banner-->

        <!--Content-->
        <div class="uk-section-small bds__content__section">
            <div class="uk-container">
                <h2 class="uk-h2 bds__content__title bds__content__title--margin">BẠN CẦN GỢI Ý ĐẦU TƯ?</h2>
                <div class="bds__content__box">
                    <div class="uk-child-width-auto uk-grid-10 uk-grid-15-m" uk-grid>
                        <div>
                            <div uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">thị trường</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button bds__content__selectbtn uk-button-default uk-text-capitalize uk-button-small uk-position-relative" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" style="right: 5px;" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">mô hình</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button bds__content__selectbtn uk-button-default uk-text-capitalize uk-button-small uk-position-relative" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" style="right: 5px;" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">dự án</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button bds__content__selectbtn uk-button-default uk-text-capitalize uk-button-small uk-position-relative" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" style="right: 5px;" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">mục đích đầu tư</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button bds__content__selectbtn uk-button-default uk-text-capitalize uk-button-small uk-position-relative" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" style="right: 5px;" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="uk-button bds__content__btnSearch uk-button-small uk-button-default">Tìm kiếm</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bds__content__item">
                        <div class="uk-position-relative uk-text-center bds__content__header">
                            <h2 class="uk-h2 bds__content__header__title">Có thể bạn cần tìm</h2>
                        </div>
                        <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small uk-grid-20-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/bds/image18.png',
                                    'title' => 'CHUNG CƯ CAO CẤP',
                                ),
                                array(
                                    'src' => 'images/bds/image24.png',
                                    'title' => 'CĂN HỘ CAO CẤP',
                                ),
                                array(
                                    'src' => 'images/bds/image13.png',
                                    'title' => 'BIỆT THỰ NGHỈ DƯỠNG',
                                ),
                                array(
                                    'src' => 'images/bds/image12.png',
                                    'title' => 'NHÀ PHỐ THƯƠNG MạI',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="uk-card uk-card-default uk-text-center bds__content__card">
                                    <div class="uk-cover-container">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                        <canvas width="768" height="540"></canvas>
                                    </div>
                                    <div class="uk-card-body bds__content__card__body">
                                        <h3 class="uk-h3 bds__content__card__title"><a href="du-an-5.php"><?= $v['title'] ?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="bds__content__item">
                        <div class="uk-position-relative uk-text-center bds__content__header">
                            <h2 class="uk-h2 bds__content__header__title">dự án tiêu biểu</h2>
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
        <!--/Content-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>