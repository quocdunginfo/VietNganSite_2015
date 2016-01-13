<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 08/06/2015
 * Time: 10:36 PM
 * Version: 150607
 */
QdT_Library::loadLayoutClass('root');

class QdT_PageT_BDSDetail extends QdT_Layout_Root
{
    public $bds = null;
    function __construct()
    {
        parent::__construct();

        $bds_id = get_query_var('id', 0);
        $this->bds = QdProduct::GET($bds_id);
        if($this->bds==null){
            static::redirectPageError404();
            return;
        }
    }

    public static function getPageName()
    {
        return 'bds-detail';
    }

    public static function getPageViewClass()
    {
        return 'QdT_PageT_BDSDetail_View';
    }

    public function getPageTitle()
    {
        return str_replace('{prefix}', $this->bds->name, $this->theme_root_setup->seo_title_struct_2);
    }

}