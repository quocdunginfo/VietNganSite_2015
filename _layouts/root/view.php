<?php

/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/06/2015
 * Time: 10:15 PM
 * Version: 150607, 151024, 151101
 */
class QdT_Layout_Root_View
{

    protected $page = null;

    function __construct($page)
    {
        $this->page = $page;
    }

    protected function getContentTitle()
    {
        return QdT_Library::getNotSetText();
    }

    protected function getContentPart()
    {
        return QdT_Library::getNotSetText();
    }

    protected function getPageTitle()
    {
        return $this->page->getPageTitle();
    }

    protected function getPageDescription()
    {
        return $this->page->getPageDescription();
    }

    protected function getPageKeywords()
    {
        return $this->page->getPageKeywords();
    }

    public function render()
    {

        ?>
        <!DOCTYPE html>
        <!-- saved from url=(0019)http://vietngan.vn/ -->
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title><?= $this->getPageTitle() ?></title>


            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="<?= $this->getPageDescription() ?>">
            <meta name="keywords" content="<?= $this->getPageKeywords() ?>"/>
            <meta http-equiv="content-language" content="vi"/>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="author" content="quocdunginfo">

            <!--link rel="stylesheet/less" href="<?= $this->page->theme_uri ?>less/bootstrap.less" type="text/css" /-->
            <!--link rel="stylesheet/less" href="<?= $this->page->theme_uri ?>less/responsive.less" type="text/css" /-->
            <!--script src="<?= $this->page->theme_uri ?>js/less-1.3.3.min.js"></script-->
            <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

            <link href="<?= $this->page->theme_uri ?>css/bootstrap.min.css" rel="stylesheet">
            <!-- <link href="<?= $this->page->theme_uri ?>css/style.css" rel="stylesheet"> -->


            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <script src="<?=$this->page->theme_uri?>js/html5shiv.js"></script>
            <![endif]-->

            <!-- Fav and touch icons -->

            <link rel="shortcut icon" href="<?= ot_get_option('favor_icon', $this->page->default_img) ?>">

            <script type="text/javascript" src="<?= $this->page->theme_uri ?>js/jquery.min.js"></script>
            <!-- <script type="text/javascript" src="<?= $this->page->theme_uri ?>js/jquery-2.1.3.min.js"></script> -->
            <!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
            <script type="text/javascript" src="<?= $this->page->theme_uri ?>js/bootstrap.min-3.3.1.js"></script>
            <!--<script type="text/javascript" src="<?= $this->page->theme_uri ?>js/scripts.js"></script>-->
            <?php wp_head(); ?>
            <!-- wp_head MAY CONFLICT WITH JSSLIDER because of jQuery ver -->
            <link rel="stylesheet" href="<?= $this->page->theme_uri ?>plugin/wow/animate.css">

        </head>

        <body <?php body_class(); ?>">

        <img style="z-index: 0; position: fixed; min-height: 100%; min-width: 100%"
             src="<?= ot_get_option('background', $this->page->default_img) ?>">
        <!--POPUP TAG-->
        <style>
            .modal .modal-body {

            }

            .modal .modal-header {
                padding: 15px 15px 10px 15px;
            }
        </style>
        <div class="modal fade" id="modal-container-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">
                            <?=$this->page->popup_modal_title?></h4>
                    </div>
                    <div class="modal-body">
                        <?= ot_get_option('sec3_item2_full_content', $default_string) ?>
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
                            <?=$this->page->popup_modal_title?>
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
                            <?=$this->page->popup_modal_title?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?= ot_get_option('sec3_item3_full_content', $default_string) ?>
                    </div>
                </div>

            </div>

        </div>
        <style>
            /*General*/

            .container a {
                text-decoration: none !important;
            }
            .container .qd-row{
                background: none; position: relative;
            }
            .container .qd-opacity{
                opacity: <?=ot_get_option('main_content_opacity',$this->page->default_string)?>;
            }
            .container .qd-opacity-paper {
                position: absolute; width: 100%; height: 100%;
            }

            .container .qd-pag {
                width: 90%;
                max-width: 600px;
                min-width: 200px;
                display: inline-block;
                text-align: center;
                margin-top: 10px;
                padding: 0;
            }

            .container {
                color: <?=ot_get_option('text_color', $this->page->default_string)?>;
                font-size: 16px;
            }

            .container .trongsuot-0 {
                background: url(<?=$this->page->theme_uri?>img/0_percent_white_bg.png);
            }

            .container .trongsuot-80 {
                background: url(<?=$this->page->theme_uri?>img/80_percent_white_bg.png);
            }

            .container .trongsuot-blue-80 {
                background: url(<?=$this->page->theme_uri?>img/80_percent_blue_bg.png);
            }

            .container .qd-button {
                font-size: 20px;
                padding: 5px 0px 5px 0px;
                display: inline-block;
                white-space: nowrap;
                vertical-align: middle;
                margin-top: <?=$this->page->button_margin_top?>;
                min-width: 200px;
                text-align: center;
                border: solid 2px ;
                color: <?=$this->page->button_color?>;
                width: 220px;
                height: 40px;
            }

            #qd-button-hoatdong {
                padding: 7px 0px 3px 0px; /*because of no-border*/
            }
            .container .qd-click {
                cursor: pointer;
                padding: 10px;
                background-color: <?=ot_get_option('sec3_item_bg_color', $this->page->default_string)?>;
                height: 100px;
                position: absolute;
                text-align: center;
                color: <?=ot_get_option('sec3_item_text_color', $this->page->default_string)?>;
                width: 220px;
                line-height: 27px;
            }
            /*iPad, PC*/
            @media (min-width: 680px) {
                /*About Viet Ngan*/
                #qd-button-about {
                    float: left;
                    margin-left: 15%;
                }

                /*HOAT DONG*/
                #qd-button-hoatdong {
                    float: right;
                    margin-right: 15%;
                    width: 220px;
                    height: 40px;
                }

                .container .qd-hoatdong-wrapper {
                    position: relative;
                    text-align: center;
                    height: 450px;
                    width: 650px;
                    margin: 0 auto;
                }

                .container .qd-hinhthoi-wrapper {
                    position: absolute;
                    margin-top: 50px;
                }

                .container .qd-hinhthoi-wrapper > img {
                    margin-left: 180px;
                    width: 300px;
                }

                #click1 {
                    margin-left: 65px;
                    margin-top: 150px;
                }

                #click2 {
                    margin-left: 370px;
                    margin-top: 150px;
                }

                #click3 {
                    margin-left: 220px;
                    margin-top: 290px;
                }

                .container .qd-button {
                    width: 220px;
                }

                /*Hợp tác*/
                #qd-button-hoptac {
                    float: left;
                    margin-left: 15%;
                }

            }

            /*MOBILE*/
            @media (min-width: 0px) and (max-width: 679px) {
                .container .qd-button {
                    width: 200px;
                }

                /*Về việt ngân*/
                #qd-button-about {

                }

                /*Hoạt động*/
                #qd-button-hoatdong {

                }

                .container .qd-hinhthoi-wrapper {
                    text-align: center;
                    position: absolute;
                    margin-left: auto;
                    margin-right: auto;
                    left: 0;
                    right: 0;
                    margin-top: 50px;
                }

                .container .qd-hinhthoi-wrapper > img {
                    width: 220px;
                    height: 50%;
                }

                .container .qd-hoatdong-wrapper {
                    position: relative;
                    text-align: center;
                    height: 350px;
                    width: 100%;
                    margin: auto;
                    margin-top: 15px;
                }

                .container .qd-click {
                    padding: 10px;
                    width: 200px;
                    height: 85px;
                    left: 0;
                    right: 0;
                    margin-left: auto;
                    margin-right: auto;
                    font-size: 12px;
                    margin-top: 10px;
                    line-height: 22px;
                }

                #click2 {
                    margin-top: 120px;
                }

                #click3 {
                    margin-top: 230px;
                }
            }
        </style>
        <!--END POPUP TAG -->

        <div class="container" style="z-index: 5; padding: 0 auto; width: 100%;">
            <div class="row clearfix">
                <div class="col-md-12 column">

                    <!-- Part 1 Slider -->
                    <div class="row clearfix">
                        <div class="col-md-12 column" style="padding: 0px; ">

                            <nav class="navbar navbar-default navbar-fixed-top" role="navigation"
                                 style="background-color: rgba(255, 255, 255, 0.701961)">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand hidden-md hidden-sm hidden-lg" href="./index.html"
                                           style="text-align: center;margin-left:20px; padding: 0px 0px;">
                                            <img
                                                style="width: auto;text-align: center; max-height: 50px; min-height: 50px"
                                                src="<?= ot_get_option('header_logo', $this->page->default_img) ?>">
                                        </a>

                                    </div>
                                    <a class="navbar-brand hidden-xs" href="./index.html"
                                       style="position: absolute;width: 100%;left: 0;text-align: center;margin: auto;  padding: 0px 0px;">
                                        <img style="max-height: 60px; min-height: 60px" src="<?= ot_get_option('header_logo', $this->page->default_img) ?>">
                                    </a>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"
                                         style="margin-left:0px;">
                                        <ul class="nav navbar-nav marginmobile" style="margin-left:0px;">
                                            <li style="height:60px;padding-top:5px;color:#555;">
                                                <a href="./product.html" style="color:#555;">NHÀ BÁN</a>
                                            </li>
                                            <li style="height:60px;padding-top:5px;">
                                                <a href="./product.html" style="color:#555;">NHÀ CHO THUÊ</a>
                                            </li>

                                        </ul>
                                        <div class=" navbar-right col-sm-2 col-md-2" role="search"
                                             style="padding-top:15px;padding-bottom:10px;">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search" name="q"
                                                       style="height:30px;">

                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit" style="height:30px;">
                                                        <i class="glyphicon glyphicon-search" style="color:#999;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>

                        </div>
                        <style>

                            .container .carousel-indicators li {
                                border-radius: 0px;
                                margin-right: 20px;
                                height: 30px;
                                width: 30px;
                                background: none;
                                border: solid 2px white;
                                opacity: 0.4;
                            }

                            .container .carousel-indicators li.active {
                                border-radius: 0px;
                                margin-right: 20px;
                                /*height: 30px;
                                width: 30px;*/
                                background-color: white;
                                opacity: 0.8;
                            }


                        </style>
                        <div class="col-md-12 column" style="padding: 0px; ">
                            <!-- BANNER -->
                            <div id="myCarousel" data-interval="<?=$this->page->banner_animation_duration?>" data-pause="false" data-ride="carousel" class="carousel slide wow fadeIn" data-wow-duration="1s">
                                <!-- Indicators -->

                                <?php
                                if(count($this->page->banner_array)>1):
                                    ?>
                                    <ol class="carousel-indicators">
                                        <?php
                                        for ($i = 1; $i <= 4; $i++):
                                            if (ot_get_option('header_banner_' . $i, '') != ''):
                                                ?>
                                                <li data-target="#myCarousel" data-slide-to="<?= $i - 1 ?>"
                                                    class="<?php if ($i == 1) echo 'active'; ?>"></li>
                                            <?php
                                            endif;
                                        endfor;
                                        ?>
                                    </ol>
                                <?php
                                endif;

                                ?>
                                <div class="carousel-inner">
                                    <?php
                                    for ($i = 1; $i <= 4; $i++):
                                        if (ot_get_option('header_banner_' . $i, '') != ''):
                                            ?>
                                            <div class="item <?php if ($i == 1) echo 'active'; ?>">
                                                <img src="<?= ot_get_option('header_banner_' . $i, $this->page->default_img) ?>" style="width:100%"
                                                     alt="Slide <?= $i ?>">
                                            </div>
                                        <?php
                                        endif;
                                    endfor;
                                    ?>
                                </div>

                                <a style="display: none" class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span
                        class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a style="display: none" class="right carousel-control" href="#myCarousel"
                                   data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>


                            </div>
                        </div>
                    </div>
                    <!-- END Part 1 -->

                    <!-- Part 2 Ve Viet Ngan -->
                    <div class="row clearfix qd-row">
                        <div style="background-color: #ffffff;" class="qd-opacity qd-opacity-paper"></div>

                        <div class="col-md-12 column">
                            <div style="text-align: center;">
                                <div id="qd-button-about" class="qd-button wow fadeInUp" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                     data-wow-delay="<?= $this->page->show_animation_delay ?>">
                                    <?= ot_get_option('sec2_title', $this->page->default_string) ?>
                                </div>
                                <div style="clear: both;"></div>
                                <br/>

                                <div class="qd-pag wow fadeInUp" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                     data-wow-delay="<?= $thi->page->show_animation_delay ?>"
                                     style="display: inline-block;">
                                    <?= ot_get_option('sec2_content', $this->page->default_string) ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END Part 2 -->
                    <!-- Part 3 Hoat Dong -->
                    <div class="row clearfix">
                        <div class="col-md-12 column" style="text-align: center">
                            <div id="qd-button-hoatdong" class="qd-button wow fadeInUp" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                 data-wow-delay="<?= $this->page->show_animation_delay ?>"
                                 style="border: none; position: relative;">
                                <div style="width: 100%; height: 100%; background-color: <?=ot_get_option('sec3_button_bg_color', $this->page->default_string)?>; position: absolute" class="qd-opacity"></div>
                                <div
                                    style="color: <?=ot_get_option('sec3_button_text_color', $this->page->default_string)?>; line-height: 40px; position: absolute; height: 100%; width: 100%; text-align: center">
                                    <?= ot_get_option('sec3_title', $this->page->default_string) ?>
                                </div>


                            </div>
                            <div class="clearfix"></div>

                            <div class="qd-hoatdong-wrapper wow fadeInUp" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                 data-wow-delay="<?= $this->page->show_animation_delay ?>">
                                <div class="qd-hinhthoi-wrapper">
                                    <img src="<?= $this->page->theme_uri ?>img/vn_hinhthoi.png"/>
                                </div>
                                <div class="qd-click" id="click1">
                                    <div class="qd-title">
                                        <?= ot_get_option('sec3_item1_title', $this->page->default_string) ?>

                                    </div>
                                    <div>
                                        <?= ot_get_option('sec3_item1_desc', $this->page->default_string) ?>
                                    </div>

                                </div>

                                <div class="qd-click" id="click2">
                                    <div class="qd-title">
                                        <?= ot_get_option('sec3_item2_title', $this->page->default_string) ?>
                                    </div>
                                    <div>
                                        <?= ot_get_option('sec3_item2_desc', $this->page->default_string) ?>
                                    </div>

                                </div>

                                <div class="qd-click" id="click3">
                                    <div class="qd-title">
                                        <?= ot_get_option('sec3_item3_title', $this->page->default_string) ?>
                                    </div>
                                    <div>
                                        <?= ot_get_option('sec3_item3_desc', $this->page->default_string) ?>
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
                    <div class="row clearfix qd-row">
                        <div style="background-color: <?=ot_get_option('sec4_bg_color', $this->page->default_string)?>;" class="qd-opacity qd-opacity-paper"></div>
                        <div class="col-md-12 column" style="text-align: center">

                            <div id="qd-button-hoptac" class="qd-button wow fadeInUp" data-wow-duration="<?= $show_animation_duration ?>"
                                 data-wow-delay="<?= $this->page->show_animation_delay ?>">
                                <?= ot_get_option('sec4_title', $this->page->default_string) ?>
                            </div>
                            <div style="clear: both"></div>

                            <div style="text-align: center" class="wow fadeInUp" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                 data-wow-delay="<?= $this->page->show_animation_delay ?>">
                                <div class="qd-pag"
                                    >
                                    <?= ot_get_option('sec4_content', $this->page->default_string) ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END Part 4 -->
                    <!-- Part 5 Lien He -->
                    <div class="row clearfix qd-row">
                        <div style="background-color: <?=ot_get_option('sec5_bg_color', $this->page->default_string)?>;" class="qd-opacity qd-opacity-paper"></div>
                        <div class="col-md-12 column">

                            <div style="text-align: center;">
                                <?php
                                $lienhe_button_color = ot_get_option('sec5_button_color', $this->page->default_string);
                                ?>
                                <div id="qd-button-lienhe"
                                     style="border: solid 2px <?=$lienhe_button_color?>; color: <?=$lienhe_button_color?>;" class="qd-button wow fadeInDown"
                                     data-wow-duration="<?= $this->page->show_animation_duration ?>" data-wow-delay="<?= $this->page->show_animation_delay ?>">
                                    <?= ot_get_option('sec5_title', $this->page->default_string) ?>
                                </div>
                                <br/>

                                <div class="qd-pag wow fadeInDown" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                     data-wow-delay="<?= $this->page->show_animation_delay ?>"
                                     style="color: #004080;">
                                    <?= ot_get_option('sec5_content', $this->page->default_string) ?>
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
                                <div style="margin-top: 30px; height: 70px; vertical-align: middle;" class="wow fadeInRight"
                                     data-wow-duration="<?= $this->page->show_animation_duration ?>" data-wow-delay="<?= $this->page->show_animation_delay ?>">
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
                                    <a href="<?= ot_get_option('sec6_icon1_url', $this->page->default_url) ?>"/>
                                    <img class="social-first-left" src="<?= ot_get_option('sec6_icon1_img', $this->page->default_img) ?>"/>
                                    </a>
                                    <a href="<?= ot_get_option('sec6_icon2_url', $this->page->default_url) ?>"/>
                                    <img class="social" src="<?= ot_get_option('sec6_icon2_img', $this->page->default_img) ?>"/>
                                    </a>
                                    <a href="<?= ot_get_option('sec6_icon3_url', $this->page->default_url) ?>"/>
                                    <img class="social" src="<?= ot_get_option('sec6_icon3_img', $this->page->default_img) ?>"/>
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                    <!-- END Part 5 -->
                    <!-- Part 6 Copyright Statement -->
                    <div class="row clearfix qd-row">
                        <div style="background-color: <?=ot_get_option('sec6_bg_color', $this->page->default_string)?>;" class="qd-opacity qd-opacity-paper"></div>
                        <div class="col-md-12 column">
                            <div id="qd-footer-copyright" class="wow fadeInLeft" data-wow-duration="<?= $this->page->show_animation_duration ?>"
                                 data-wow-delay="<?= $this->page->show_animation_delay ?>" style="text-align: center; padding: 40px 0px 27px 0px;">
                                <?= ot_get_option('footer_text', $this->page->default_string) ?>
                            </div>

                        </div>
                    </div>
                    <!-- END Part 6 -->
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
        <!-- WOW -->
        <script src="<?= $this->page->theme_uri ?>plugin/wow/wow.min.js"></script>
        <script>
            $.fn.is_on_screen = function () {
                var win = $(window);
                var viewport = {
                    top: win.scrollTop(),
                    left: win.scrollLeft()
                };
                viewport.right = viewport.left + win.width();
                viewport.bottom = viewport.top + win.height();

                var bounds = this.offset();
                bounds.right = bounds.left + this.outerWidth();
                bounds.bottom = bounds.top + this.outerHeight();

                return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
            };

            $(document).ready(function () {

                $("#qd-logo-wrapper").click(function () {
                    //$("#qd-logo-wrapper").slideDown(1000);
                    //alert("ddd");

                });


                //on scrolling
                $(window).scroll(function () {
                    if (!$("#qd-logo-wrapper").is_on_screen() && !$("#qd-logo-wrapper").hasClass("animated")) {
                        //console.log("#qd-logo-wrapper is not on screen");
                        //change to fixed pos
                        $("#qd-logo-wrapper").css({position: 'fixed'});
                        //trigger animation
                        $('#qd-logo-wrapper').addClass('fadeInDown animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                            //disable animation
                            $(this).removeClass('fadeInDown');
                        });
                    }
                    else {
                        //console.log("#qd-logo-wrapper come back");
                        //$("#qd-logo-wrapper").css({position: 'relative'});
                    }
                });

                wow = new WOW();
                wow.init();
            });
        </script>


        </body>
        </html>

    <?php
    }

    private function getDefaultMaterial()
    {
        ?>

    <?php
    }

    /*
     * Menu, Top Line, Logo, Search Box
     * */
    protected function getHeaderPart()
    {
        //$logo_url = ot_get_option('header_logo', 'img/logo.jpg');
        ?>

    <?php
    }

    private function getSearchBoxPart($id = 1, $istop = true)
    {
        ?>

    <?php
    }

    protected function getFooterPart()
    {

        ?>

    <?php
    }
}