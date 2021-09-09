<?php $data["title"] = "Trang chủ"; ?>
<?php $fullPage = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false;animation: scale; autoplay: true;">

    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom:0">
        <?php
        $data = array(
            array(
                'src' => 'images/Facade1.png',
                'title1' => 'Ecopark Swanlake The Onsen',
                'title2' => 'Tổ hợp nghỉ dưỡng khoáng nóng <br class="uk-visible@m"> giữa lòng Ecopark',
            ),
            array(
                'src' => 'images/image3.png',
                'title1' => 'Ecopark Swanlake The Landmark',
                'title2' => 'Khoáng nóng tại gia, <br class="uk-visible@m"> Trọn đời trị liệu',
            ),
            array(
                'src' => 'images/image2.png',
                'title1' => 'Ecopark Grand The Island <br class="uk-visible@m"> Sofitel Residences Villas',
                'title2' => 'Đẳng cấp thượng lưu thực sự',
            ),
            array(
                'src' => 'images/15706149972575111.png',
                'title1' => 'Malibu Residence Hội An',
                'title2' => 'Tuyệt tác giữa lòng di sản',
            ),
        );
        foreach ($data as $k => $v): ?>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-right">
                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                </div>
                <div class="uk-position-cover home__slide__overlay">

                </div>
                <div class="uk-position-cover uk-section-small home__slide__section uk-flex uk-flex-column uk-flex-between">
                    <div>
                        <div class="uk-container" uk-scrollspy="target: > *; cls: uk-animation-slide-top; delay: 500; repeat: true">
                            <h3 class="uk-h3 home__slide__section__title1">LEVISTA VIỆT NAM TRÂN TRỌNG GIỚI THIỆU</h3>
                        </div>
                    </div>
                    <div>
                        <div class="uk-container" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 500; repeat: true">
                            <div class="home__slide__section__title2"><?= $v['title1'] ?></div>
                            <h2 class="uk-h2 home__slide__section__title3"><?= $v['title2'] ?></h2>
                            <a href="" class="home__slide__section__btn uk-button uk-button-default uk-button-small uk-border-pill">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <ul class="uk-slideshow-nav uk-position-bottom-center uk-dotnav uk-flex-center uk-margin"></ul>

</div>

<?php require "template-parts/layouts/footer.php"; ?>