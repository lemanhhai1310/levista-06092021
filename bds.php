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
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>