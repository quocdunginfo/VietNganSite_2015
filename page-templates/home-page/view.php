<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 24/06/2015
 * Time: 9:25 PM
 * Version: 150607, 151024
 */
QdT_Library::loadLayoutView('root');

class QdT_PageT_HomePage_View extends QdT_Layout_Root_View
{
    public function __construct($page){
        parent::__construct($page);
    }
}