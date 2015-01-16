<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$theme_uri = get_stylesheet_directory_uri() . '/';
$default_string = '[not set]';
$default_url = '#';
$default_img = $theme_uri . 'img/favicon.png';

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title><?= ot_get_option('site_title', $default_string) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= ot_get_option('seo_meta_desc', $default_string) ?>">
    <meta name="keywords" content="<?= ot_get_option('seo_meta_keywords', $default_string) ?>"/>
    <meta http-equiv="content-language" content="vi"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="quocdunginfo">

    <!--link rel="stylesheet/less" href="<?= $theme_uri ?>less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="<?= $theme_uri ?>less/responsive.less" type="text/css" /-->
    <!--script src="<?= $theme_uri ?>js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="<?= $theme_uri ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?= $theme_uri ?>css/style.css" rel="stylesheet"> -->


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?=$theme_uri?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?= $theme_uri ?>img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?= $theme_uri ?>img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?= $theme_uri ?>img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= $theme_uri ?>img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?= ot_get_option('favor_icon', $default_img) ?>">

    <script type="text/javascript" src="<?= $theme_uri ?>js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="<?= $theme_uri ?>js/jquery-2.1.3.min.js"></script> -->
    <!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
    <script type="text/javascript" src="<?= $theme_uri ?>js/bootstrap.min-3.3.1.js"></script>
    <!--<script type="text/javascript" src="<?= $theme_uri ?>js/scripts.js"></script>-->
    <!-- <?php //wp_head(); ?> -->
    <!-- wp_head MAY CONFLICT WITH JSSLIDER because of jQuery ver -->

    <!-- <link rel="stylesheet" type="text/css" href="<?= $theme_uri ?>plugin/jslider/css/default.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?= $theme_uri ?>plugin/jslider/css/component.css"/>
    <script src="<?= $theme_uri ?>plugin/jslider/js/modernizr.custom.js"></script>
    <script src="<?= $theme_uri ?>plugin/jslider/js/jquery.cbpFWSlider.min.js"></script>

</head>

<body <?php body_class(); ?>">


<img style="z-index: 0; position: fixed; min-height: 100%; min-width: 100%"
     src="<?= ot_get_option('background', $default_img) ?>">
<!--POPUP TAG-->

<div class="modal fade" id="modal-container-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Message
                </h4>
            </div>
            <div class="modal-body">
                <?= ot_get_option('sec3_item1_full_content', $default_string) ?>
            </div>
        </div>

    </div>

</div>
<div class="modal fade" id="modal-container-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: ;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Message
                </h4>
            </div>
            <div class="modal-body">
                <?= ot_get_option('sec3_item2_full_content', $default_string) ?>
            </div>
        </div>

    </div>

</div>
<div class="modal fade" id="modal-container-3" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Message
                </h4>
            </div>
            <div class="modal-body">
                <?= ot_get_option('sec3_item3_full_content', $default_string) ?>
            </div>
        </div>

    </div>

</div>

<!--END POPUP TAG -->
<style>
    .container a {
        text-decoration: none !important;
    }

    .container .qd-pag {
        width: 90%;
        max-width: 600px;
        display: inline-block;
        text-align: center;
        margin-top: 10px;
        padding: 0;
    }

    .container {
        color: #575757;
        font-size: 16px;
    }

    .container .qd-button {
        font-size: 20px;
        padding: 5px 0px 5px 0px;
        display: inline-block;
        border: solid 1px black;
        white-space: nowrap;
        vertical-align: middle;
        margin-top: 60px;
        min-width: 220px;
        text-align: center;
        border: solid 2px #464646;
        color: #464646;
    }

    .container .trongsuot-0 {
        background: url(<?=$theme_uri?>img/0_percent_white_bg.png);
    }

    .container .trongsuot-80 {
        background: url(<?=$theme_uri?>img/80_percent_white_bg.png);
    }
    .container .trongsuot-blue-80 {
        background: url(<?=$theme_uri?>img/80_percent_blue_bg.png);
    }
</style>

<div class="container" style="z-index: 5; padding: 0 auto; width: 100%;">
<div class="row clearfix">
<div class="col-md-12 column">

<!-- SHOW EFFECT -->
<script>
    $(document).ready(function() {
        tiles = $(".hideme").fadeTo(0, 0);

        $(window).scroll(function(d,h) {
            tiles.each(function(i) {
                a = $(this).offset().top + $(this).height();
                b = $(window).scrollTop() + $(window).height();
                if (a < b) $(this).delay(700).fadeTo(500,1);
            });
        });
    });
</script>
<!-- END SHOW EFFECT -->

<!-- Part 1 Slider -->
<div class="row clearfix">
    <div class="col-md-12 column" style="padding: 0px; ">
        <div id="qd-banner" class="col-md-12 column" style="padding: 0px; ">
            <!-- STATIC POSITION LOGO -->
            <style>
            @media (min-width: 0px) and (max-width: 798px) {
                #qd-logo, #qd-logo-wrapper {
                    height: 40px;
                }
            }

            @media (min-width: 799px) {
                #qd-logo, #qd-logo-wrapper {
                    height: 85px;
                }
            }
            </style>
            <div id="qd-logo-wrapper"
                 style="z-index: 10; padding: 0;width: 100%; max-height: 85px; text-align: center; background-color: white; opacity: 0.9 ; ">
                <img id="qd-logo" style="height: 100%; width: auto; max-height: 85px; min-height: 25px; height: 100%;"
                     src="<?= ot_get_option('header_logo', $default_img) ?>"/>
            </div>
            <!-- END LOGO -->
            <style>
                #cbp-fwslider {
                    padding: 0;
                }
                .cbp-fwprev, .cbp-fwnext {
                    display: none !important;
                }

            </style>
            <!--IMG SLIDER-->
            <style>
                @media (min-width: 0px) and (max-width: 499px) {
                    .carousel-indicators li {
                        border-radius: 0px;
                        margin-right: 20px;
                        height: 15px;
                        width: 15px;
                    }

                    .carousel-indicators li.active {
                        border-radius: 0px;
                        margin-right: 20px;
                        height: 15px;
                        width: 15px;
                    }
                }
                @media (min-width: 500px) {
                    .carousel-indicators li {
                        border-radius: 0px;
                        margin-right: 20px;
                        height: 30px;
                        width: 30px;
                    }

                    .carousel-indicators li.active {
                        border-radius: 0px;
                        margin-right: 20px;
                        height: 30px;
                        width: 30px;
                    }
                }
            </style>
            <!-- BANNER -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?= ot_get_option('header_banner_1', $default_img) ?>" style="width:100%" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="<?= ot_get_option('header_banner_2', $default_img) ?>" style="width:100%" data-src=""
                                           alt="Second    slide">


                    </div>
                    <div class="item">
                        <img src="<?= ot_get_option('header_banner_3', $default_img) ?>" style="width:100%" data-src=""
                                           alt="Third slide">

                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                        class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel"
                                                                                data-slide="next"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <!-- END BANNER -->

            <!--END SLIDER-->

        </div>
    </div>
</div>
<!-- END Part 1 -->

<!-- Part 2 Ve Viet Ngan -->
<div class="row clearfix trongsuot-80" style="">
    <div class="col-md-12 column">
        <div style="text-align: center;">
            <div class="trongsuot-0 qd-button hideme pull-left" style="margin-left: 15%;">
                <?= ot_get_option('sec2_title', $default_string) ?>
            </div>
            <div style="clear: both;"></div>
            <br/>

            <div class="hideme trongsuot-0 qd-pag"
                 style="display: inline-block;">
                <?= ot_get_option('sec2_content', $default_string) ?>
            </div>
        </div>

    </div>
</div>
<!-- END Part 2 -->
<!-- Style: Hoat Dong -->
<style>
    @media (min-width: 500px) {
        .qd-hoatdong-wrapper{
            position: relative;
            text-align: center;
            margin-top: 10px;
            height: 450px;
            width: 650px;
            margin: 0 auto;
        }
        .qd-hinhthoi-wrapper{
            position: absolute;
            margin-top: 50px;
        }
        .qd-hinhthoi-wrapper > img{
            margin-left: 180px; width: 300px;
        }
        .qd-click {
            cursor: pointer;
            padding: 10px;
            background-color: #3973b1;
            width: 200px;
            height: 100px;
            position: absolute;
            text-align: center;
            color: #EEEEEE;
            width: 220px;
        }
        .qd-click .qd-title {
            color: white;
        }
        #click1{
            margin-left: 65px; margin-top: 150px;
        }
        #click2{
            margin-left: 370px; margin-top: 150px;
        }
        #click3{
            margin-left: 220px; margin-top: 290px;
        }
    }
    @media (min-width: 0px) and (max-width: 499px) {
        .qd-hinhthoi-wrapper {
            text-align: center;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            margin-top: 50px;

        }
        .qd-hinhthoi-wrapper > img {
            width: 220px; height: 50%;
        }

        .qd-hoatdong-wrapper {
            position: relative;
            text-align: center;
            margin-top: 10px;
            height: 400px;
            width: 100%;
            margin: 0 auto;
        }

        .qd-click {
            cursor: pointer;
            padding: 10px;
            background-color: #3973b1;
            width: 200px;
            height: 85px;
            text-align: center;
            color: #EEEEEE;
            position: absolute;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            font-size: 12px;
            margin-top: 10px;
        }

        .qd-click .qd-title {
            color: white;
        }
        #click1{
            /*N/A*/
        }
        #click2{
            margin-top: 120px;
        }
        #click3{
            margin-top: 230px;
        }
    }
</style>
<!-- END Style: Hoat Dong -->
<!-- Part 3 Hoat Dong -->
<div class="row clearfix">
    <div class="col-md-12 column trongsuot-0">
        <div>
            <div class="qd-button pull-right hideme trongsuot-blue-80" style="margin-right: 15%; color: ; border: solid 2px white; border: none; color: white;">
                <?= ot_get_option('sec3_title', $default_string) ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="qd-hoatdong-wrapper hideme">
            <div class="qd-hinhthoi-wrapper">
                <img src="<?= $theme_uri ?>img/vn_hinhthoi.png"/>
            </div>
            <div class="qd-click" id="click1">
                <div class="qd-title">
                    <?= ot_get_option('sec3_item1_title', $default_string) ?>

                </div>
                <div style="margin-top: 10px;">
                    <?= ot_get_option('sec3_item1_desc', $default_string) ?>
                </div>

            </div>

            <div class="qd-click" id="click2">
                <div class="qd-title">
                    <?= ot_get_option('sec3_item2_title', $default_string) ?>
                </div>
                <div style="margin-top: 10px;">
                    <?= ot_get_option('sec3_item2_desc', $default_string) ?>
                </div>

            </div>

            <div class="qd-click" id="click3">
                <div class="qd-title">
                    <?= ot_get_option('sec3_item3_title', $default_string) ?>
                </div>
                <div style="margin-top: 10px;">
                    <?= ot_get_option('sec3_item3_desc', $default_string) ?>
                </div>
            </div>
            <script>
                $("#click1").click(function () {
                    $('#modal-container-1').modal('show');
                });
                $("#click2").click(function () {
                    $('#modal-container-2').modal('show');
                });
                $("#click3").click(function () {
                    $('#modal-container-3').modal('show');
                });
            </script>
        </div>

    </div>
</div>
<!-- END Part 3 -->





<!-- Part 4 Hop Tac -->
<div class="row clearfix trongsuot-80" style="margin-top: 20px;">
    <div class="col-md-12 column">
        <div>
            <div class="trongsuot-0 qd-button pull-left hideme" style="margin-left: 15%;">
                <?= ot_get_option('sec4_title', $default_string) ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="hideme" style="text-align: center">
            <div class="qd-pag"
                >
                <?= ot_get_option('sec4_content', $default_string) ?>
            </div>
        </div>

    </div>
</div>
<!-- END Part 4 -->
<!-- Part 5 Lien He -->
<div class="row clearfix"
     style="background-color: silver; opacity: 0.9;">
    <div class="col-md-12 column">
        <div style="text-align: center;">

            <div class="trongsuot-0 qd-button hideme"
                 style="border: solid 2px #004080; color: #004080; font-size: 20px;">
                <?= ot_get_option('sec5_title', $default_string) ?>
            </div>
            <br/>

            <div class="hideme qd-pag"
                 style="color: #004080;">
                <?= ot_get_option('sec5_content', $default_string) ?>
            </div>
            <div>
                <style>
                    hr.style-six {
                        border: 0;
                        height: 0;
                        border-top: 1px solid rgba(255, 255, 255, 0.8);
                        /*border-bottom: 1px solid rgba(255, 255, 255, 0.3);*/
                    }
                </style>
                <!-- <hr class="style-six" style="width: 72%"/> -->
            </div>
            <div class="hideme" style="margin-top: 30px; height: 70px; vertical-align: middle;">
                <style>
                    .social-first-left {
                        margin-left: 0px;
                        border-radius: 50% 50% 50% 50%;
                        width: 35px;
                        height: 35px;
                    }

                    .social {
                        margin-left: 30px;
                        border-radius: 50% 50% 50% 50%;
                        width: 35px;
                        height: 35px;
                    }

                    .social:hover, .social-first-left:hover {
                        opacity: 0.4;
                    }
                </style>
                <a href="<?= ot_get_option('sec6_icon1_url', $default_url) ?>"/>
                <img class="social-first-left" src="<?= ot_get_option('sec6_icon1_img', $default_img) ?>"/>
                </a>
                <a href="<?= ot_get_option('sec6_icon2_url', $default_url) ?>"/>
                <img class="social" src="<?= ot_get_option('sec6_icon2_img', $default_img) ?>"/>
                </a>
                <a href="<?= ot_get_option('sec6_icon3_url', $default_url) ?>"/>
                <img class="social" src="<?= ot_get_option('sec6_icon3_img', $default_img) ?>"/>
                </a>
            </div>


        </div>

    </div>
</div>
<!-- END Part 5 -->
<!-- Part 6 Copyright Statement -->
<div class="row clearfix" style="margin-top: 0px; background-color: <?= ot_get_option('sec6_bg_color', $default_string) ?>; opacity: 0.9;">
    <div class="col-md-12 column">
        <div class="hideme" style="text-align: center; padding: 40px 0px 35px 0px;">
            <?= ot_get_option('footer_text', $default_string) ?>
        </div>

    </div>
</div>
<!-- END Part 6 -->
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
