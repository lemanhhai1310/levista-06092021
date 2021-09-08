<?php $data["title"] = "TUYỂN DỤNG"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/tuyendung_bg.png" alt="" uk-cover>
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

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center"></ul>

</div>
<div uk-sticky="offset: 93;media: @m" class="uk-background-cover uk-background-bottom-center uk-background-norepeat" data-src="images/bg1.png" uk-img>
    <div class="uk-container uk-padding-remove">
        <ul class="uk-child-width-expand tuyendung__tab uk-grid-match uk-grid-collapse uk-grid" uk-tab uk-scrollspy-nav="closest: li; scroll: true; offset: 42">
            <li class="uk-active"><a href="#tinmoinhat">Tin mới Nhất</a></li>
            <li><a href="#tintuyendung">tin tức tuyển dụng</a></li>
            <li><a href="#tindaotao">tin tức đào tạo</a></li>
        </ul>
    </div>
</div>
<div id="tinmoinhat" class="uk-position-relative uk-overflow-hidden uk-background-top-center uk-section-small tuyendung__box2 uk-background-cover" data-src="images/bg1.png" uk-img>
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
    <div class="uk-section-small uk-position-relative">
        <div class="uk-container">
            <div class="uk-margin">
                <div class="uk-grid-small uk-flex-middle uk-child-width-auto" uk-grid>
                    <div>
                        <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                    </div>
                    <div>
                        <div class="tuyendung__box1__title">
                            <div>Thông Tin</div>
                            Tuyển Dụng
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid-49-m uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-margin">
                        <img class="uk-width-1-1" src="images/tuyendung/MaskGroup.png" alt="">
                    </div>
                    <div class="uk-grid-10 uk-grid-15-m" uk-grid>
                        <div class="uk-width-auto">
                            <img class="tuyendung__content__img" src="images/tuyendung/Vector.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <h1 class="uk-h1 tuyendung__content__title">TUYỂN DỤNG NHÂN VIÊN KINH DOANH BẤT ĐỘNG SẢN</h1>
                            <div class="tuyendung__content__desc1">
                                Thu nhập lên đến 100 triệu <br>
                                Không yêu cầu kinh nghiệm
                            </div>
                            <div class="tuyendung__content__desc2">
                                Với môi trường làm việc thân thiện, năng động, hiện đại và chuyên nghiệp, Levista mong muốn tìm kiếm những thành viên ham học hỏi, có chí hướng cùng đồng hành cùng công ty. Bạn có thành công, công ty mới phát triển, công ty không quá quan trọng bằng cấp, mà quan trọng ý chí và quyết tâm làm giàu của bạn.
                            </div>
                            <div>
                                <div class="tuyendung__content__item">
                                    <h4 class="uk-h4 tuyendung__content__item__title">QUYỀN LỢI:</h4>
                                    <ul class="uk-list uk-list-bullet tuyendung__content__item__list">
                                        <li>Hỗ trợ lương cứng + hoa hồng và chính sách thưởng hấp dẫn của công ty (Tổng thu nhập từ 30-100tr).</li>
                                        <li>Được hỗ trợ, hướng dẫn và đào tạo trực tiếp bởi đội ngũ chuyên viên tậm tâm, nhiệt huyết và đầy kinh nghiệm.</li>
                                        <li>Được tham gia các hoạt động ngoại khóa: văn nghệ, du lịch, thể thao của Công ty.</li>
                                        <li>Được nghỉ chiều thứ 7, CN và các ngày lễ theo quy định của nhà nước.</li>
                                        <li>Có cơ hội thăng tiến nhanh chóng, nhân viên có năng lực tốt có thể ký hợp đồng chính thức khi chưa hết thờ</li>
                                    </ul>
                                </div>
                                <div class="tuyendung__content__item">
                                    <h4 class="uk-h4 tuyendung__content__item__title">MÔ TẢ CÔNG VIỆC:</h4>
                                    <ul class="uk-list uk-list-bullet tuyendung__content__item__list">
                                        <li>Tìm kiếm khách hàng, Tư vấn, hỗ trợ KH, chốt sản phẩm.</li>
                                        <li>Tìm hiểu về thị trường mục tiêu của doanh nghiệp.</li>
                                        <li>Có kỹ năng đàm phán, thuyết phục khách hàng CAM KẾT đào tạo nhân viên mới dù chưa biết gì đến đỉnh cao bài bản trong lĩnh vực BĐS.</li>
                                        <li>Thực hiện các công việc theo sự phân công của người quản lý.</li>
                                    </ul>
                                </div>
                                <div class="tuyendung__content__item">
                                    <h4 class="uk-h4 tuyendung__content__item__title">ỨNG TUYỂN NGAY</h4>
                                    <ul class="uk-list uk-list-bullet tuyendung__content__item__list">
                                        <li>Call: Ms Tuyết: 0559946666</li>
                                        <li>Địa chỉ liên hệ: Levista Property Vietnam, 16 Thảo Nguyên, KDT Ecopark, Văn Giang, Hưng Yên.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-2-5@m">
                    <div class="uk-card uk-card-default uk-card-body tuyendung__form__card">
                        <form class="uk-form-stacked">
                            <legend class="uk-legend tuyendung__form__title">ỨNG TUYỂN NGAY</legend>
                            <div class="uk-margin">
                                <label class="uk-form-label tuyendung__form__label" for="form-stacked-text">Họ và Tên</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-small tuyendung__form__input" id="form-stacked-text" type="text" placeholder="*Tên đầy đủ">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label tuyendung__form__label" for="form-stacked-text">Số điện thoại</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-small tuyendung__form__input" id="form-stacked-text" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label tuyendung__form__label" for="form-stacked-text">Email</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-small tuyendung__form__input" id="form-stacked-text" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label tuyendung__form__label" for="form-stacked-text">Lời nhắn</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-small tuyendung__form__input" rows="5" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="uk-text-right">
                                <button type="submit" class="uk-button uk-button-default tuyendung__form__btn">Gửi</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Tin tuc tuyen dung-->
<div id="tintuyendung" class="uk-background-norepeat uk-background-cover uk-section-small tuyendung__tintd__section" data-src="images/bg1.png" uk-img>
    <div class="uk-container">
        <div class="uk-margin-large">
            <div class="uk-grid-small uk-flex-middle uk-child-width-auto" uk-grid>
                <div>
                    <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                </div>
                <div>
                    <div class="tuyendung__box1__title">
                        <div>Tin Tức</div>
                        Tuyển Dụng
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-148-m" uk-grid>
            <div>
                <div class="uk-cover-container" style="margin-bottom: 8px;">
                    <img src="images/tuyendung/MaskGroup1.png" alt="" uk-cover>
                    <canvas width="1024" height="492"></canvas>
                </div>
                <?php
                $timestamp = rand( strtotime("Jan 01 2015"), strtotime("Nov 01 2016") );
                $random_Date = date("d/m/Y", $timestamp );
                ?>
                <div style="margin-bottom: 12px;">
                    <div class="uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid>
                        <div>
                            <span class="uk-label tuyendung__tintd__label">Tuyển Dụng</span>
                        </div>
                        <div>
                            <span class="tuyendung__tintd__txt">-</span>
                        </div>
                        <div>
                            <span class="tuyendung__tintd__txt"><?php echo $random_Date; ?></span>
                        </div>
                    </div>
                </div>
                <h3 class="uk-h3 tuyendung__tintd__title" style="margin-bottom: 2px;"><a href="">Tuyển Dụng Đầu Xuân 2021</a></h3>
                <div class="tuyendung__tintd__desc">Công ty TNHH LeVista - chuyên phân phối các dự án bất động sản cao cấp trong nước và quốc tế...</div>
            </div>
            <div>
                <?php
                $data = array(
                    'Tuyển Dụng Nhân Viên Kinh Doanh Bất Động Sản',
                    'Tuyển Dụng Tháng 10',
                    'Tuyển Dụng Thư Ký Giám Đốc',
                    'Tuyển Dụng Tháng 5',
                );
                foreach ($data as $k => $v): ?>
                <div class="tuyendung__tintd__item">
                    <?php
                    $timestamp = rand( strtotime("Jan 01 2015"), strtotime("Nov 01 2016") );
                    $random_Date = date("d/m/Y", $timestamp );
                    ?>
                    <div style="margin-bottom: 12px;">
                        <div class="uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid>
                            <div>
                                <span class="uk-label tuyendung__tintd__label">Tuyển Dụng</span>
                            </div>
                            <div>
                                <span class="tuyendung__tintd__txt">-</span>
                            </div>
                            <div>
                                <span class="tuyendung__tintd__txt"><?php echo $random_Date; ?></span>
                            </div>
                        </div>
                    </div>
                    <h3 class="uk-h3 tuyendung__tintd__title"><a href=""><?= $v ?></a></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Tin tuc tuyen dung-->

<!--Tin tuc dao tao-->
<div id="tindaotao" class="uk-background-norepeat uk-background-cover uk-section-small tuyendung__tintd__section" data-src="images/bg1.png" uk-img>
    <div class="uk-container">
        <div class="uk-margin-large">
            <div class="uk-grid-small uk-flex-middle uk-child-width-auto" uk-grid>
                <div>
                    <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                </div>
                <div>
                    <div class="tuyendung__box1__title">
                        <div>Tin Tức</div>
                        Đào Tạo
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-148-m" uk-grid>
            <div>
                <div class="uk-cover-container" style="margin-bottom: 8px;">
                    <img src="images/tuyendung/MaskGroup2.png" alt="" uk-cover>
                    <canvas width="1024" height="492"></canvas>
                </div>
                <?php
                $timestamp = rand( strtotime("Jan 01 2015"), strtotime("Nov 01 2016") );
                $random_Date = date("d/m/Y", $timestamp );
                ?>
                <div style="margin-bottom: 12px;">
                    <div class="uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid>
                        <div>
                            <span class="uk-label tuyendung__tintd__label">Đào Tạo</span>
                        </div>
                        <div>
                            <span class="tuyendung__tintd__txt">-</span>
                        </div>
                        <div>
                            <span class="tuyendung__tintd__txt"><?php echo $random_Date; ?></span>
                        </div>
                    </div>
                </div>
                <h3 class="uk-h3 tuyendung__tintd__title" style="margin-bottom: 2px;"><a href="">Tiến độ thi công dự án Malibu Hội An tháng 8/2021</a></h3>
                <div class="tuyendung__tintd__desc">Chủ đầu tư thông báo tiến độ thi công dự án nằm trên con đường huyết mạch Đà Nẵng - Quảng Nam...</div>
            </div>
            <div>
                <?php
                $data = array(
                    'Bất động sản nghỉ dưỡng - dẫn đầu xu hướng đầu tư BĐS 2021',
                    'Hâm nóng thị trường BĐS cuối năm',
                    'Ba “ông lớn” Nhật chung tay dự án',
                    'The Landmark vẻ đẹp kỳ vĩ hiếm thấy',
                );
                foreach ($data as $k => $v): ?>
                    <div class="tuyendung__tintd__item">
                        <?php
                        $timestamp = rand( strtotime("Jan 01 2015"), strtotime("Nov 01 2016") );
                        $random_Date = date("d/m/Y", $timestamp );
                        ?>
                        <div style="margin-bottom: 12px;">
                            <div class="uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid>
                                <div>
                                    <span class="uk-label tuyendung__tintd__label">Đào Tạo</span>
                                </div>
                                <div>
                                    <span class="tuyendung__tintd__txt">-</span>
                                </div>
                                <div>
                                    <span class="tuyendung__tintd__txt"><?php echo $random_Date; ?></span>
                                </div>
                            </div>
                        </div>
                        <h3 class="uk-h3 tuyendung__tintd__title"><a href=""><?= $v ?></a></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Tin tuc dao tao-->
<?php require "template-parts/layouts/footer.php"; ?>