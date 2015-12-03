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

    public $temp_p;
    public $theme_uri;
    public $default_string;
    public $default_img;
    public $show_animation_duration;
    public $show_animation_delay;
    public $button_color;
    public $button_margin_top;
    public $logo_mobile_height;
    public $popup_modal_title;
    public $banner_animation_duration;
    public $banner_array;



    function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];

        $this->theme_root_setup = QdTRootSetup::GET();
        //END Partner
        $this->loadScript();

        //Old version
        $this->temp_p = get_template_directory_uri() . '/';
        $this->theme_uri = get_stylesheet_directory_uri() . '/';
        $this->default_string = '';
        $this->default_url = '#';
        $this->default_img = $this->theme_uri . 'img/favicon.png';
        $this->show_animation_duration = '0.9s';
        $this->show_animation_delay = '0.3s';

        $this->button_color = ot_get_option('button_color', $this->default_string);
        $this->button_margin_top = ot_get_option('button_margin_top', $this->default_string);

        $this->logo_mobile_height = ot_get_option('logo_mobile_height', $this->default_string);
        $this->popup_modal_title = ot_get_option('sec3_item_popup_title', $this->default_string);

        $this->banner_animation_duration = ot_get_option('header_banner_interval', $this->default_string);
        $this->banner_array = array();
        for ($i = 1; $i <= 4; $i++) {
            $ety67_tmp = ot_get_option('header_banner_' . $i, '');
            if ($ety67_tmp != '') {
                array_push($this->banner_array, $ety67_tmp);
            }
        }
        //END Old Version
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
        return ot_get_option('site_title', $this->page->default_string);
    }

    public function getPageDescription()
    {
        return ot_get_option('seo_meta_desc', $this->page->default_string);
    }

    public function getPageKeywords()
    {
        return ot_get_option('seo_meta_keywords', $this->page->default_string);
    }
}
