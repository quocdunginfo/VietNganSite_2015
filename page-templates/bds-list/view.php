<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 24/06/2015
 * Time: 9:25 PM
 * Version: 150607, 151024
 */
QdT_Library::loadLayoutView('root');

class QdT_PageT_BDSList_View extends QdT_Layout_Root_View
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
                        <h3>NHÀ BÁN - CƠ HỘI ĐẦU TƯ</h3>
                    </div>
                </div>

                <div style="clear: both;"></div>
                <div class="col-md-12">
                    <div class="col-md-9" style="padding:0px;margin:0px;">
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12  wow fadeInUp animated"
                             style="margin-top:15px;margin:0px;padding-left:0px;">
                            <div class="thumbnail" style="margin-bottom:5px;">
                                <img src="http://placehold.it/320x213" alt="">
                            </div>
                            <div class="caption" style="font-size:13px;">
                                <a href="./product_detail.html">First Product</a>

                                <p>5.000.000 VND</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12  wow fadeInUp animated"
                             style="margin-top:15px;margin:0px;padding-left:0px;">
                            <div class="thumbnail" style="margin-bottom:5px;">
                                <img src="http://placehold.it/320x213" alt="">
                            </div>
                            <div class="caption" style="font-size:13px;">
                                <a href="./product_detail.html">First Product</a>

                                <p>5.000.000 VND</p>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12  wow fadeInUp animated"
                             style="margin-top:15px;margin:0px;padding-left:0px;">
                            <div class="thumbnail" style="margin-bottom:5px;">
                                <img src="http://placehold.it/320x213" alt="">
                            </div>
                            <div class="caption" style="font-size:13px;">
                                <a href="./product_detail.html">First Product</a>

                                <p>5.000.000 VND</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12  wow fadeInUp animated"
                             style="margin-top:15px;margin:0px;padding-left:0px;">
                            <div class="thumbnail" style="margin-bottom:5px;">
                                <img src="http://placehold.it/320x213" alt="">
                            </div>
                            <div class="caption" style="font-size:13px;">
                                <a href="./product_detail.html">First Product</a>

                                <p>5.000.000 VND</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 column ow fadeInUp animated"
                         style="padding:0px;margin:0px;padding-left:5px;">
                        <div class="col-md-12"
                             style="overflow: hidden;overflow-y: scroll;list-style: none;padding-left: 0px;text-align:left;">
                            <h5 style="margin-top:5px;font-size:13px">TÌM THEO MỨC GIÁ</h5>
                            <ul class="list-unstyled" style="font-size:13px;">
                                <li><a href=#>0 - 10.000.000 VND</a></li>
                                <li><a href=#>10.000.000 - 20.000.000 VND</a></li>
                                <li><a href=#>20.000.000 - 50.000.000 VND</a></li>
                            </ul>
                        </div>
                        <br/><br/>

                        <div class="col-md-12"
                             style="overflow: hidden;overflow-y: scroll;list-style: none;padding-left: 0px;text-align:left;">
                            <h5 style="font-size:13px">TÌM THEO QUẬN tỉnh</h5>
                            <ul class="list-unstyled" style="font-size:13px;">
                                <li><a href=#>Hà Nội</a></li>
                                <li><a href=#>Tp.HCM</a></li>
                                <li><a href=#>Đà Nẵng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row clearfix qd-row">
            <div style="background-color: #ffffff;" class="qd-opacity qd-opacity-paper"></div>
            <div class="col-md-12 column">
                <div style="height:30px;"></div>
            </div>


        </div>
        <?php
    }

    protected function getBannerPart()
    {
        //HIDE
    }


}