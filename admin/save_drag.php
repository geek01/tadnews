<?php
use XoopsModules\Tadtools\Utility;

/*-----------引入檔案區--------------*/
require_once dirname(dirname(dirname(__DIR__))) . '/include/cp_header.php';
// 關閉除錯訊息
header('HTTP/1.1 200 OK');
$xoopsLogger->activated = false;
$of_ncsn = (int) $_POST['of_ncsn'];
$ncsn = (int) $_POST['ncsn'];

if (chk_cate_path($ncsn, $of_ncsn)) {
    die('不可移至自己的子目錄下');
}

$sql = 'UPDATE `' . $xoopsDB->prefix('tad_news_cate') . '` SET `of_ncsn`=? WHERE `ncsn`=?';
Utility::query($sql, 'ii', [$of_ncsn, $ncsn]) or die('Reset Fail! (' . date('Y-m-d H:i:s') . ')');

echo _MA_TREETABLE_MOVE_OK . ' (' . date('Y-m-d H:i:s') . ')';

//檢查目的地編號是否在其子目錄下
function chk_cate_path($ncsn, $to_ncsn)
{
    global $xoopsDB;
    //抓出子目錄的編號
    $sql = 'SELECT `ncsn` FROM `' . $xoopsDB->prefix('tad_news_cate') . '` WHERE `of_ncsn` = ?';
    $result = Utility::query($sql, 'i', [$ncsn]) or Utility::web_error($sql, __FILE__, __LINE__);

    while (list($sub_ncsn) = $xoopsDB->fetchRow($result)) {
        if (chk_cate_path($sub_ncsn, $to_ncsn)) {
            return true;
        }

        if ($sub_ncsn == $to_ncsn) {
            return true;
        }
    }

    return false;
}
