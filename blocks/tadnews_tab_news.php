<?php
include_once XOOPS_ROOT_PATH . "/modules/tadnews/block_function.php";

//區塊主函式 (顯示頁籤新聞)
function tadnews_tab_news($options)
{
    //$block=list_block_cate_news($options[0],$options[1],$options[2],$options[3],$options[4],$options[5]);
    global $xoTheme;

    $ncsn_arr = explode(',', $options[0]);

    include_once XOOPS_ROOT_PATH . "/modules/tadnews/class/tadnews.php";
    $tadnews = new tadnews();
    $tadnews->set_news_kind("news");
    $tadnews->set_show_mode('cate');
    $tadnews->set_show_num($options[1]);
    $tadnews->set_view_ncsn($ncsn_arr);
    $block = $tadnews->get_cate_news('return');
    if (empty($block['all_news'])) {
        return;
    }

    $xoTheme->addStylesheet('modules/tadtools/css/iconize.css');

    include_once XOOPS_ROOT_PATH . "/modules/tadtools/easy_responsive_tabs.php";
    $randStr         = randStr();
    $responsive_tabs = new easy_responsive_tabs('#tab_news_' . $randStr, $options[2], $options[3], $options[4], $options[5], $options[6]);
    $responsive_tabs->rander();
    $block['tab_news_name'] = 'tab_news_' . $randStr;
    $block['min_height']    = sizeof($ncsn_arr) * 55;

    return $block;
}

//區塊編輯函式
function tadnews_tab_news_edit($options)
{
    $option = block_news_cate($options[0]);

    $form = "
    {$option['js']}
    <table style='width:auto;'>
    <tr>
        <th>1.</th><th>" . _MB_TADNEWS_CATE_NEWS_EDIT_BITEM0 . "</th>
        <td>
            {$option['form']}
            <input type='hidden' name='options[0]' id='bb' value='{$options[0]}'>
        </td>
    </tr>

    <tr>
        <th>2.</th>
        <th>" . _MB_TADNEWS_CATE_NEWS_EDIT_BITEM1 . "</th>
        <td>
            <input type='text' name='options[1]' value='{$options[1]}' size=3>
        </td>
    </tr>

    <tr>
        <th>3.</th>
        <th>" . _MB_TADNEWS_TAB_NEWS_DISPLAY_TYPE . "</th>
        <td>
            <input type='radio' name='options[2]' value='default' " . chk($options[2], 'default', 1) . ">" . _MB_TADNEWS_TAB_NEWS_DEFAULT . "
            <input type='radio' name='options[2]' value='vertical' " . chk($options[2], 'vertical', 0) . ">" . _MB_TADNEWS_TAB_NEWS_VERTICAL . "
            <input type='radio' name='options[2]' value='accordion' " . chk($options[2], 'accordion', 0) . ">" . _MB_TADNEWS_TAB_NEWS_ACCORDION . "
        </td>
    </tr>

    </table>

    <input type='hidden' name='options[3]'  value='#FFFFFF'>
    <input type='hidden' name='options[4]'  value='#E0D9D9'>
    <input type='hidden' name='options[5]'  value='#9C905C'>
    <input type='hidden' name='options[6]'  value='#9C905C'>
  ";

    return $form;
}

//單選回復原始資料函數
if (!function_exists("chk")) {
    function chk($DBV = "", $NEED_V = "", $defaul = "", $return = "checked")
    {
        if ($DBV == $NEED_V) {
            return $return;
        } elseif (empty($DBV) && $defaul == '1') {
            return $return;
        }
        return "";
    }
}
