<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 24/06/2015
 * Time: 8:52 PM
 * Version: 150607, 151024
 */
QdT_Library::loadLayoutView('root');

class QdT_PageT_Error404_View extends QdT_Layout_Root_View
{
    protected function getBannerPart()
    {
        //HIDE
    }

    protected function getBreadcrumbsPart()
    {
        //HIDE
    }

    protected function getContentPart()
    {
        ?>
        ERROR 404 - Resource not found
    <?php
    }
}