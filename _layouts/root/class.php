<?php

/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 25/02/2015
 * Time: 7:06 PM
 * Version: 150607
 */
class QdT_Layout_Root
{
    public $uri = null;
    public $data = array();

    public $theme_root_setup = null;

    function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];

        $this->theme_root_setup = QdTRootSetup::GET();
        //END Partner
        $this->loadScript();
    }

    public function setPageInfoToClient()
    {
        ?>
        <style>

        </style>
        <script>
            var MYAPP = MYAPP || {};
            MYAPP.PageInfo = {};
            MYAPP.TplReplace = function (replace_from, replace_to, tpl) {
                var i = 0;
                var re = tpl;
                for (i = 0; i < replace_from.length; i++) {
                    re = re.replace(replace_from[i], replace_to[i], re);
                }
                return re;
            };
            MYAPP.isValidEmail = function (emailAddress) {
                var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
                return pattern.test(emailAddress);
            };

            MYAPP.RootProgressBar = function (show) {
                if (show) {
                    $('#qd-root-progressing-modal').modal('show');
                } else {
                    $('#qd-root-progressing-modal').modal('hide');
                }
            };
        </script>
    <?php
    }

    public function render()
    {
        $tmp = null;
        $c = '';
        $c = static::getPageViewClass();
        QdT_Library::loadPageView(static::getPageName());
        $tmp = new $c($this);
        $tmp->render();
    }

    public function loadScript()
    {
        QdJqwidgets::loadSinglePluginJS("form2js.js");
        QdJqwidgets::loadSinglePluginJS("js.cookie.js");
    }

    public static function getPageViewClass()
    {
        return "QdT_Layout_Root_View";
    }

    public static function getPageViewMobileClass()
    {
        return "QdT_Layout_Root_ViewMobile";
    }

    public static function getPageName()
    {
        return '';
    }

    public static function redirectPageError404()
    {
        QdT_Library::redirectPageError404();
    }

    public function getPageTitle()
    {
        $obj = str_replace("{prefix}", 'Mua bán, ký gửi đồ hiệu', $this->theme_root_setup->seo_title_struct);
        return $obj;
    }

    public function getPageDescription()
    {
        $obj = str_replace("{prefix}", '', $this->theme_root_setup->seo_description_struct);
        if (trim($obj) == '') {
            return get_bloginfo('description');
        }
        return $obj;
    }

    public function getPageKeywords()
    {
        $obj = str_replace("{prefix}", '', $this->theme_root_setup->seo_keywords_struct);
        if (trim($obj) == '') {
            return '';
        }
        return $obj;
    }
}
