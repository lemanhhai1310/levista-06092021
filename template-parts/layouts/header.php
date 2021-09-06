<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>BASE - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <div class="uk-display-inline-block header__lang">
            <div class="uk-position-center" style="top: calc(50% - 3px)">
                <a href="" class="uk-active">VN</a> <span>/</span> <a href="">EN</a>
            </div>
        </div>

        <ul class="uk-nav-default uk-nav-parent-icon uk-margin header__menuNav" uk-nav>
            <li class="uk-active"><a href="#">TRANG CHỦ</a></li>
            <li><a href="#">GIỚI THIỆU</a></li>
            <li><a href="#">DỰ ÁN</a></li>
            <li><a href="#">Privilege</a></li>
            <li><a href="#">TIN TỨC</a></li>
            <li><a href="#">Cơ hội nghề nghiệp</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>

    </div>
</div>
<div uk-sticky="">
    <div id="header" class="header">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item uk-logo"><img src="images/logo1.png" alt=""></a>
                </div>

                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-hidden@m">
                        <div id="m_nav_menu" class="m_nav menu" uk-toggle="target: #offcanvas-flip">
                            <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                        </div>
                    </div>
                    <div class="uk-visible@m">
                        <div class="uk-text-right">
                            <div class="uk-display-inline-block header__lang">
                                <div class="uk-position-center" style="top: calc(50% - 3px)">
                                    <a href="" class="uk-active">VN</a> <span>/</span> <a href="">EN</a>
                                </div>
                            </div>
                        </div>
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="#">TRANG CHỦ</a></li>
                            <li><a href="#">GIỚI THIỆU</a></li>
                            <li><a href="#">DỰ ÁN</a></li>
                            <li><a href="#">Privilege</a></li>
                            <li><a href="#">TIN TỨC</a></li>
                            <li><a href="#">Cơ hội nghề nghiệp</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>

                </div>

            </nav>
        </div>
    </div>
</div>