<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2007-11-04
// $Id: modinfo.php,v 1.4 2008/06/25 06:40:09 tad Exp $
// ------------------------------------------------------------------------- //
include_once XOOPS_ROOT_PATH."/modules/tadtools/language/{$xoopsConfig['language']}/modinfo_common.php";

//Version XXX

define('_MI_TADNEWS_ADMIN_HOME',"首頁");
define("_MI_TADNEWS_ADMIN_HOME_DESC","回首頁");

define("_MI_TADNEWS_ADMIN_ABOUT" , "關於");
define("_MI_TADNEWS_ADMIN_ABOUT_DESC" , "關於此模組");



define("_MI_TADNEWS_NAME","本站消息");
define("_MI_TADNEWS_DESC","一個容易使用的新聞模組");
define("_MI_TADNEWS_WEB","Tad 教材網");
define("_MI_TADNEWS_ADMENU1", "文章管理");
define("_MI_TADNEWS_ADMENU2", "發佈文章");
define("_MI_TADNEWS_ADMENU3", "分類管理");
define("_MI_TADNEWS_ADMENU4", "資料轉移");
define("_MI_TADNEWS_ADMENU5", "電子報管理");
define("_MI_TADNEWS_ADMENU6", "模組升級");
define("_MI_TADNEWS_ADMENU7", "自訂頁面");
define("_MI_TADNEWS_ADMENU8", "標籤管理");
define("_MI_TADNEWS_ADMENU9", "自訂頁面分類");
define("_MI_TADNEWS_NEWSPAPER","電子報列表");
define("_MI_TADNEWS_ARCHIVE","分月文章");

define("_MI_TADNEWS_TEMPLATE_DESC1", "模組首頁的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC2", "單一文章頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC3", "RSS頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC4", "發佈頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC5", "分月文章的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC6", "自訂頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC7", "模組首頁的樣板檔(本文或摘要模式)。");
define("_MI_TADNEWS_TEMPLATE_DESC8", "模組首頁的樣板檔(分類新聞模式)。");
define("_MI_TADNEWS_TEMPLATE_DESC9", "電子報的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC10", "後台文章頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC11", "後台自訂頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC12", "後台分類管理的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC13", "後台電子報管理的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC14", "後台標籤頁面的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC15", "後台自訂頁面分類的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC16", "前台自訂頁面分類的樣板檔。");
define("_MI_TADNEWS_TEMPLATE_DESC17", "前台簽收狀況的樣板檔。");

define("_MI_TADNEWS_BNAME1","文章類別");
define("_MI_TADNEWS_BDESC1","顯示所有文章的類別");
define("_MI_TADNEWS_BNAME2","本站最新消息");
define("_MI_TADNEWS_BDESC2","顯示文章內容");
define("_MI_TADNEWS_BNAME3","最新回應");
define("_MI_TADNEWS_BDESC3","列出最新的文章評論");
define("_MI_TADNEWS_BNAME4","訂閱 / 取消電子報");
define("_MI_TADNEWS_BDESC4","讓使者訂閱電子報的區塊");
define("_MI_TADNEWS_BNAME5","電子報一覽");
define("_MI_TADNEWS_BDESC5","秀出最新的電子報");
define("_MI_TADNEWS_BNAME6","分類新聞區塊");
define("_MI_TADNEWS_BDESC6","秀出指定分類最新的新聞");
define("_MI_TADNEWS_BNAME7","自訂頁面");
define("_MI_TADNEWS_BDESC7","秀出指定的自訂頁面分類所有文章標題");
define("_MI_TADNEWS_BNAME8","焦點新聞");
define("_MI_TADNEWS_BDESC8","可以自訂要播放哪些新聞");

define("_MI_TADNEWS_TITLE1","<b>每頁要秀出幾篇文章？</b>");
define("_MI_TADNEWS_DESC1","設定模組頁面出現的文章數");
define("_MI_TADNEWS_TITLE2","<b>設定附檔下載方式</b>");
define("_MI_TADNEWS_DESC2","方法一就是預設方式；方法二下載需要較多記憶體，不適用於太大的檔案（幾十MB那種），但中文一定正常。（預設）");
define("_MI_TADNEWS_DL_METHOD1","方法一：以「編號_原始檔名.副檔名」為下載檔名");
define("_MI_TADNEWS_DL_METHOD2","方法二：讓系統製作附檔");

define("_MI_TADNEWS_SHOW_MODE","<b>設定模組首頁的呈現方式</b>");
define("_MI_TADNEWS_SHOW_MODE_DESC","可自由選擇要秀出文章摘要（原有模式），或者只秀出文章標題（較快，較簡潔）");
define("_MI_TADNEWS_SHOW_MODE_OPT1","秀出摘要或本文");
define("_MI_TADNEWS_SHOW_MODE_OPT2","僅秀出標題列表");
define("_MI_TADNEWS_SHOW_MODE_OPT3","顯示各個分類的新聞標題");

define("_MI_TADNEWS_CATE_SHOW_MODE","<b>設定秀出分類新聞的呈現方式</b>");
define("_MI_TADNEWS_CATE_SHOW_MODE_DESC","點選分類後，新聞要呈現的模式，可自由選擇要秀出文章摘要（原有模式），或者只秀出文章標題（較快，較簡潔）");

define("_MI_TADNEWS_PREFIX_TAG","<b>設定標題的標籤</b>");
define("_MI_TADNEWS_PREFIX_TAG_DESC","可用來替標題加上標籤，以凸顯該文性質。（選項請用「;」隔開）");
define("_MI_TADNEWS_PREFIX_TAG_VAL","<font color='red'>[緊急]</font>;<font color='blue'>[公告]</font>;<font color='#CC33CC'>[調查]</font>;<font color='#00CC33'>[好消息]</font>");

define("_MI_TADNEWS_SHOW_BB","<b>是否顯示出「BB Code」的連結</b>");
define("_MI_TADNEWS_SHOW_BB_DESC","一般為「否」。早期的 news 模組內容會用 BB Code 來設定文字外觀，例如顏色、大小等。若是您的新聞是早期從 news 轉移過來的，而且有用大量的 BB Code，那麼可選「是」。");


define("_MI_TADNEWS_CATE_PIC_WIDTH","<b>分類圖片寬度</b>");
define("_MI_TADNEWS_CATE_PIC_WIDTH_DESC","上傳分類圖檔時，將以此寬度為縮圖寬度依據。");

define("_MI_TADNEWS_PIC_WIDTH","<b>新聞圖片附檔寬度</b>");
define("_MI_TADNEWS_PIC_WIDTH_DESC","新聞圖片附檔寬度，以px為單位");

define("_MI_TADNEWS_THUMB_WIDTH","<b>新聞圖片附檔縮圖寬度</b>");
define("_MI_TADNEWS_THUMB_WIDTH_DESC","新聞圖片附檔縮圖寬度，以px為單位");


//tadnew 1.4
define("_MI_TADNEWS_BNAME9","自選文章");
define("_MI_TADNEWS_BDESC9","可以自己選定文章");
define("_MI_TADNEWS_USE_NEWSPAPER","前台選單秀出「電子報」項目");
define("_MI_TADNEWS_USE_NEWSPAPER_DESC","若否，「電子報」項目不會出現在前台主選單及頁面選單上");
define("_MI_TADNEWS_USE_USE_ARCHIVE","前台選單秀出「分月文章」項目");
define("_MI_TADNEWS_USE_USE_ARCHIVE_DESC","若否，「分月文章」項目不會出現在前台主選單及頁面選單上");
define("_MI_TADNEWS_SHOW_SUBMENU","是否顯示子選單");
define("_MI_TADNEWS_SHOW_SUBMENU_DESC","是否顯示子選單以及功能表");

//tadnews 2.0
define("_MI_TADNEWS_DOWNLOAD_AFTER_READ","簽收後始能下載檔案");
define("_MI_TADNEWS_DOWNLOAD_AFTER_READ_DESC","若該新聞是需要簽收的，必須簽收後才能下載附檔。");
define("_MI_TADNEWS_CREAT_CATE_GROUP","可直接開設分類的群組");
define("_MI_TADNEWS_CREAT_CATE_GROUP_DESC","設定可以發文直接開設分類的群組");
//define("_MI_TADNEWS_USE_KCFINDER","是否使用KCFinder檔案管理員？");
//define("_MI_TADNEWS_USE_KCFINDER_DESC","進階的FCK編輯器外掛，需要PHP5以上才支援。");
define("_MI_TADNEWS_BNAME10","條列式新聞");
define("_MI_TADNEWS_BDESC10","文章標題條列式");
define("_MI_TADNEWS_BNAME11","表格式新聞");
define("_MI_TADNEWS_BDESC11","表格佈告欄式");
define("_MI_TADNEWS_SUMMARY_LENGTHS","摘要長度");
define("_MI_TADNEWS_SUMMARY_LENGTHS_DESC","選用條列式呈現新聞時，要秀出的摘要字數");

define("_MI_TADNEWS_BNAME12","QR Code");
define("_MI_TADNEWS_BDESC12","產生連到手持裝置頁面的QR Code條碼");

define("_MI_TADNEWS_BNAME13","滑動新聞");
define("_MI_TADNEWS_BDESC13","以文章封面圖為底的滑動新聞");
define("_MI_TADNEWS_BNAME14","自動縮放的滑動新聞");
define("_MI_TADNEWS_BDESC14","以文章封面圖為底的滑動新聞（可視裝置自動縮放）");


//define("_MI_TADNEWS_USE_EMBED","是否開啟嵌入語法");
//define("_MI_TADNEWS_USE_EMBED_DESC","若選是，將會出現嵌入語法的設定按鈕及頁面");

define("_MI_COVER_PIC_CSS","內文封面圖的CSS預設值");
define("_MI_COVER_PIC_CSS_DESC","將封面圖插入內文時的外觀CSS預設值");


define("_MI_TADNEWS_EDITOR","請選擇欲使用的編輯器");
define("_MI_TADNEWS_EDITOR_DESC","elRTE 可用於手機等行動裝置，CKEditor則不行");
?>