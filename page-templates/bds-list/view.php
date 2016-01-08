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
    private $list_obj = array();
    private $struct_lv_1 = false;
    private $locations = array();
    private $price_from = false;
    private $price_to = false;
    private $key_word = false;
    public function __construct($page)
    {
        parent::__construct($page);

        $loc_id = get_query_var('loc-id', false);
        $loc_slug_id = get_query_var('loc-slug-id', false);
        $this->struct_lv_1 = get_query_var('struct-id', false);
        $this->price_from = get_query_var('price-from', false);
        $this->price_to = get_query_var('price-to', false);
        $this->key_word= get_query_var('key-word', false);

        if ($loc_id !== false && QdProductCat::GET($loc_id) == null) {
            $this->page->redirectPageError404();
            return;
        }
        $pcat = new QdProductCat();
        if ($loc_slug_id !== false) {
            $pcat->SETRANGE('slug_id', $loc_slug_id);
            $tmp = $pcat->FINDFIRST();
            if($tmp==null) {
                $this->page->redirectPageError404();
                return;
            }else{
                $loc_id = $tmp->id;
            }
        }

        $tmp = new QdProduct();
        $tmp->SETRANGE('active', true);
        if ($loc_id != '') {
            $tmp->SETRANGE('product_cat_id', $loc_id);
        }
        if ($this->struct_lv_1 !== false) {
            $tmp->SETRANGE('struct_lv_1', $this->struct_lv_1);
        }
        if ($this->price_from !== false) {
            $tmp->SETRANGE('price', $this->price_from, QdProduct::$OP_GREATER_THAN_OR_EQUAL);
        }
        if ($this->price_to !== false && $this->price_to > 0) {
            $tmp->SETRANGE('price', $this->price_to, QdProduct::$OP_LESS_THAN_OR_EQUAL);
        }
        if($this->key_word !== false){
            $tmp->REMOVEFILTER();
            $tmp->SETRANGE('name', $this->key_word, QdProduct::$OP_CONTAINS);
            $tmp->SETRANGE('description', $this->key_word, QdProduct::$OP_CONTAINS);
            $tmp->SETRANGE('id', $this->key_word, QdProduct::$OP_CONTAINS);
            $tmp->SETRANGE('phaply', $this->key_word, QdProduct::$OP_CONTAINS);
            $tmp->SETRANGE('thongtinlh', $this->key_word, QdProduct::$OP_CONTAINS);
            $tmp->SETFILTERRELATION('OR');
        }
        $this->list_obj = $tmp->GETLIST();

        $tmp = new QdProductCat();
        $tmp->SETRANGE('active', true);
        $this->locations = $tmp->GETLIST();
    }

    protected function getContentPart()
    {
        $grid_title = $this->struct_lv_1 == QdProductCat::$LV1_BAN ? 'NHÀ BÁN - CƠ HỘI ĐẦU TƯ' : 'NHÀ CHO THUÊ - CƠ HỘI ĐẦU TƯ';
        ?>
        <div class="row clearfix qd-row">
            <div style="background-color: #ffffff;" class="qd-opacity qd-opacity-paper"></div>
            <div class="col-md-12 column" style="text-align: left">
                <div style="height:50px;"></div>
            </div>
            <div class="col-md-12 column" style="text-align: center">
                <div class="col-md-12 column" style="text-align: left">
                    <div class="page-header" style="border-bottom: 0px;margin-bottom:5px;">
                        <h3><?= $grid_title ?></h3>
                    </div>
                </div>

                <div style="clear: both;"></div>
                <div class="col-md-12">
                    <div class="col-md-9" style="padding:0px;margin:0px;">
                        <?php foreach ($this->list_obj as $item): ?>
                            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12  wow fadeInUp animated"
                                 style="margin-top:15px;margin:0px;padding-left:0px;">
                                <div class="thumbnail" style="margin-bottom:5px;">
                                    <img src="<?= $item->getMediaURL('avatar', 'medium') ?>" alt="">
                                </div>
                                <div class="caption" style="font-size:13px;">
                                    <a href="<?= $item->getPermalink() ?>">
                                        <?= $item->name ?>
                                    </a>

                                    <p><?=QdT_Library::num_as_group_vn($item->price, ' VND')?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="col-md-3 column ow fadeInUp animated"
                         style="padding:0px;margin:0px;padding-left:5px;">
                        <div class="col-md-12"
                             style="overflow: hidden;overflow-y: scroll;list-style: none;padding-left: 0px;text-align:left;">
                            <h5 style="margin-top:5px;font-size:13px">TÌM THEO MỨC GIÁ</h5>
                            <ul class="list-unstyled" style="font-size:13px;">
                                <?php
                                $pr = array(
                                    array(
                                        0, 10000000
                                    ),
                                    array(
                                        10000000, 20000000
                                    ),
                                    array(
                                        20000000, 50000000
                                    ),
                                    array(
                                        50000000, -1
                                    ),
                                );
                                $cp = $this->page->bds_list_uri;
                                foreach ($pr as $item):
                                    $cp = add_query_arg(array('price-from' => $item[0], 'price-to' => $item[1]), $cp);
                                    $caption = '';
                                    if($item[1]==-1){
                                        $caption = 'Trên '.QdT_Library::num_as_group_vn($item[0], ' VND');
                                    }else if($item[0]==0){
                                        $caption = 'Dưới '.QdT_Library::num_as_group_vn($item[1], ' VND');
                                    }else{
                                        $caption = QdT_Library::num_as_group_vn($item[0]) . ' - '. QdT_Library::num_as_group_vn($item[1], ' VND');
                                    }
                                    ?>
                                    <li><a href="<?=$cp?>"><?=$caption?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <br/><br/>

                        <div class="col-md-12"
                             style="overflow: hidden;overflow-y: scroll;list-style: none;padding-left: 0px;text-align:left;">
                            <h5 style="font-size:13px">TÌM THEO QUẬN tỉnh</h5>
                            <ul class="list-unstyled" style="font-size:13px;">
                                <?php foreach ($this->locations as $item):
                                    $link = '';
                                    if ($this->struct_lv_1 != false) {
                                        $link = $item->getPermalink(array('struct-id' => $this->struct_lv_1));
                                    }
                                    ?>
                                    <li>
                                        <a href="<?= $link ?>">
                                            <?= $item->name ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
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