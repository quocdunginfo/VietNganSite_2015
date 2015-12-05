<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 24/06/2015
 * Time: 9:25 PM
 * Version: 150607, 151024
 */
QdT_Library::loadLayoutView('root');

class QdT_PageT_BDSDetail_View extends QdT_Layout_Root_View
{
    public function __construct($page){
        parent::__construct($page);
    }

    protected function getContentPart()
    {
        ?>
        <div class="row clearfix qd-row">
            <div style="background-color: #ffffff;" class="qd-opacity qd-opacity-paper"></div>
            <div class="col-md-12 column" style="text-align: left">
                <div style="height:50px;"></div>
            </div>
            <div class="col-md-12 column" style="text-align: center">
                <div class="col-md-12 column" style="text-align: left">
                    <div class="page-header" style="border-bottom: 0px;margin-bottom:5px;">
                        <h3>NHÀ ĐẸP NHẤT VIỆT NAM</h3>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div class="wow fadeInUp animated">
                    <!-- PRODUCTS -->
                    <div class="row col-md-12 column" style="margin-top:10px;">
                        <div class="col-md-8 column" style="padding: 0">

                            <div class="col-md-12 column">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="img-responsive" src="https://placehold.it/900x600"
                                                 alt="...">

                                        </div>
                                        <div class="item">
                                            <img class="img-responsive" src="https://placehold.it/900x600"
                                                 alt="...">

                                        </div>

                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                       data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                       data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                    <!-- Controls -->
                                    <!--<a class="carousel-control left" href="#carousel-example-generic" data-slide="prev">&lsaquo;</a>
                                    <a class="carousel-control right" href="#carousel-example-generic" data-slide="next">&rsaquo;</a>-->
                                </div>
                            </div>


                        </div>
                        <!-- PRODUCT CATEGORIES -->
                        <div id="qd_nav_danhmuc" class="col-md-4 column" style="padding-left: 0px">
                            <style>
                                #qd_nav_danhmuc ul {
                                    padding: 0;
                                }

                                #qd_nav_danhmuc ul li {
                                    list-style: none;
                                    line-height: 18px;
                                    margin-top: 20px;
                                    font-size: 13px;
                                }

                                #qd_nav_danhmuc ul li.active {
                                    font-weight: bold;
                                }

                                #qd_nav_danhmuc .btn {
                                    border-radius: 0px;
                                    color: #003399;
                                    font-size: 20px;
                                    background-color: White;
                                    width: 100%;
                                    font-weight: bold;
                                    height: 50px;
                                    padding: 0;
                                    line-height: 50px;
                                    margin-top: 10px;
                                }
                            </style>
                            <!-- css of border-top very important -->
                            <div style="/*border: solid 1px #ffffff;*/ text-align:left;" id="qd_product_properties">
                                <style>
                                    #qd_product_properties {
                                        margin-top: -12px;
                                    }

                                    #qd_product_properties ul li {
                                        position: relative;
                                        top: -2px;
                                    }
                                </style>
                                <ul style="margin-left: 15px; margin-bottom: 0px; font-size:13px;">
                                    <!-- Alway active for 1st element -->
                                    <li>Model: MPD003</li>
                                    <li>Xuất xứ: USA22222</li>
                                    <li>Công suất: 19 kW</li>
                                    <li>Động cơ: 4 kỳ</li>
                                    <li>Trọng lượng: 29 KG</li>
                                    <li style="color: #404040; font-weight: bold; font-size: 16px">Giá: 1.350.000
                                        VND
                                    </li>
                                </ul>
                            </div>

                            <a class=" btn btn-default" id="click4" data-toggle="modal" data-target="#myModal"
                               style="margin-top: 23px; margin-left: 15px;margin-right: 15px;">
                                Gửi yêu cầu
                            </a>
                            <script>
                                $("#click4").click(function () {
                                    $('#modal-lienhe').modal('show');
                                });
                            </script>
                        </div>
                    </div>

                    <div class="row col-md-12 column" style="margin-top:30px;text-align:left;">
                        <div class="col-md-8 column" style="padding-left: 0px">
                            <h3 style="margin-left:12px;">MÔ TẢ SẢN PHẨM</h3>
                            <hr class="long-grey-thin-line" style="margin-top: 10px; margin-bottom: 10px">
                            <div class="col-md-12 column" style="font-size:13px;">
                                <p>
                                    Includes over 250 glyphs in font format from the Glyphicon Halflings set.
                                    Glyphicons Halflings are normally not available for free, but their creator has
                                    made them available for Bootstrap free of cost. As a thank you, we only ask that
                                    you include a link back to Glyphicons whenever possible.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 column" style="padding-left: 0px">
                            <h3 style="margin-left:19px;">THÔNG TIN LIÊN HỆ</h3>
                            <hr class="long-grey-thin-line" style="margin-top: 10px; margin-bottom: 10px">

                            <p>
                            <ul class="list-unstyled" style="text-align:left;margin-left:19px;font-size:13px;">
                                <li>Địa chỉ:</li>
                                <li>Di động:</li>
                                <li>Email:</li>
                                <li>Facebook:</li>
                            </ul>
                            </p>

                        </div>
                    </div>

                    <!-- END PRODUCT CATEGORIES -->
                </div>

            </div>
        </div>
        <?php
    }


    protected function getBannerPart()
    {
        //HIDE
    }

}