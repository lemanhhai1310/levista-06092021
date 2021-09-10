<?php $data["title"] = "GIỚI THIỆU"; ?>
<?php $fullPage = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div>
    <div id="fullpage">
        <div class="section">
            <div class="uk-container uk-container-expand-right about__containerExpandRight uk-height-1-1">
                <div class="uk-grid-match uk-height-1-1 uk-grid-96-m" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-flex-middle uk-flex">
                            <div>
                                <div class="uk-margin">
                                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                        <div>
                                            <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="tuyendung__box1__title uk-margin-medium">
                                                <div>Thông Tin</div>
                                                Dự Án
                                            </div>
                                            <div class="about__thongtin__box">
                                                <div class="about__thongtin__txt1">Được thành lập từ 2017, Levista Việt Nam mang tới mô hình môi giới - tư vấn, đầu tư và quản lý bất động sản đáp ứng nhu cầu đa dạng của khách hàng với tâm nguyện hướng đến những giá trị bền vững trường tồn.</div>
                                                <div class="about__thongtin__txt2">Với kinh nghiệm của đội ngũ, sự nhanh nhạy và am hiểu thị trường, cùng sự tận tâm đồng hành cùng khách hàng trên mọi phương diện, Levista mang đến một hệ sinh thái độc nhất phục vụ khách hàng với kim chỉ nam:</div>
                                                <div class="about__thongtin__txt3">“Your needs is our care”</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <img class="uk-responsive-height uk-responsive-width uk-visible@m" src="images/about/MaskGroup.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="uk-flex uk-flex-column uk-height-1-1">
                <div class="uk-flex-auto uk-flex uk-flex-middle uk-flex-center">
                    <div class="uk-section-small">
                        <div class="uk-container">
                            <div class="uk-child-width-1-2@m uk-grid-135-m" uk-grid>
                                <div>
                                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                        <div>
                                            <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="tuyendung__box1__title uk-margin-medium">
                                                <div>Tầm</div>
                                                Nhìn
                                            </div>
                                            <div class="about__thongtin__box">
                                                <div class="about__thongtin__txt2">Levista hướng đến trong một tương lai gần sẽ trở thành một trong những nền tảng đa dịch vụ uy tín, thành công và được tin yêu bậc nhất bởi khách hàng trong nước và quốc tế.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                        <div>
                                            <img class="tuyendung__box1__img" src="images/Group2.png" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="tuyendung__box1__title uk-margin-medium">
                                                <div>Sứ</div>
                                                Mệnh
                                            </div>
                                            <div class="about__thongtin__box">
                                                <div class="about__thongtin__txt2">Levista cam kết mang đến tới khách hàng các sản phẩm tinh hoa bất động sản và đồng hành với khách hàng trên hành trình sinh lợi bền vững.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="uk-width-1-1" src="images/about/MaskGroup1.png" alt="">
                </div>
            </div>
        </div>
        <div class="section">Some section</div>
        <div class="section">
            <div>
                <?php require "template-parts/layouts/footer1.php"; ?>
            </div>
        </div>
    </div>
</div>

<script>
    new fullpage('#fullpage', {
        //options here
        autoScrolling:true,
        scrollHorizontally: true,
        loopBottom: true,

        //Design
        paddingTop: '93px',

    });

    //methods

</script>
<?php require "template-parts/layouts/footer.php"; ?>