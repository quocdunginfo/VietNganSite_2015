<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 08/06/2015
 * Time: 10:36 PM
 * Version: 150607
 */
QdT_Library::loadLayoutClass('root');

class QdT_PageT_BDSList extends QdT_Layout_Root
{
    function __construct()
    {
        parent::__construct();

    }

    public static function getPageName()
    {
        return 'bds-list';
    }

    public static function getPageViewClass()
    {
        return 'QdT_PageT_BDSList_View';
    }

    public function getPageTitle()
    {
        return str_replace('{prefix}', 'Tìm kiếm', $this->theme_root_setup->seo_title_struct_2);
    }

}