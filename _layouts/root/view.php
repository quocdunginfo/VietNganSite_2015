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
        $temp_p = get_template_directory_uri() . '/';
        ?>

        <?php wp_footer(); ?>
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

    private function getSearchBoxPart($id=1, $istop=true){
        ?>

        <?php
    }

    protected function getFooterPart()
    {

        ?>

    <?php
    }
}