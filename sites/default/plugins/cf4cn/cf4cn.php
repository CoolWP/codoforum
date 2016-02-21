<?php
/**
 * @Author: suifengtec
 * @Date:   2016-02-20 22:37:42
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2016-02-21 01:54:14
 */
defined('IN_CODOF') or die();
function cf4cn_add_head_js(){


  /*  add_js(PLUGIN_PATH . 'cf4cn/assets/js/cf4cn.js', array('name' => 'cf4cn.js', 'type' => 'defer'));*/
    add_css(PLUGIN_PATH . 'cf4cn/assets/css/cf4cn.css', array('name' => 'cf4cn.css'));

}
CODOF\Hook::add('before_site_head', "cf4cn_add_head_js");
