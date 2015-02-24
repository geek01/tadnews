<?php

include_once XOOPS_ROOT_PATH."/modules/tadnews/block_function.php";

//區塊主函式 (顯示新聞內容)
function tadnews_covered($options){
  global $xoopsDB;

  include_once XOOPS_ROOT_PATH."/modules/tadnews/class/tadnews.php";
  $tadnews=new tadnews();

  $block['jquery_path']=get_jquery();
  $block['bootstrap']=get_bootstrap();
  $block['randStr']=randStr(8);

  $num=$options[0]*$options[1];
  if(empty($num))$num=12;
  $summary_length=intval($options[2]);
  $summary_css=$options[3];
  $show_cover=$block['show_cover'];
  $cover_css='';
  $show_ncsn=isset($options[4])?$options[4]:"";
  $ncsn_arr=explode(',',$show_ncsn);

  $tadnews->set_show_num($num);
  $tadnews->set_view_ncsn($ncsn_arr);
  $tadnews->set_show_mode('list');
  $tadnews->set_news_kind("news");
  $tadnews->set_summary($summary_length,$summary_css);
  $tadnews->set_cover(true,$cover_css);

  $block=$tadnews->get_news('return');
  return $block;
}

//區塊編輯函式
function tadnews_covered_edit($options){

  $options4_1=($options[4]=="1")?"checked":"";
  $options4_0=($options[4]=="0")?"checked":"";
  $options8_1=($options[8]=="list")?"checked":"";
  $options8_0=($options[8]=="table")?"checked":"";
  $chked1_0=($options[9]=="1")?"checked":"";
  $chked1_1=($options[9]=="0")?"checked":"";

  $option=block_news_cate($options[4]);

  $form="{$option['js']}
  <table>
  <tr><th>
  "._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM0."
  </th><td>
  <INPUT type='text' name='options[0]' value='{$options[0]}' size=6>
  </td></tr>
  <tr><th>
  "._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM1."
  </th><td>
  <INPUT type='text' name='options[1]' value='{$options[1]}' size=6>
  </td></tr>
  <tr><th>
  "._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM1."
  </th><td>
  <INPUT type='text' name='options[2]' value='{$options[2]}' size=6>
  </td></tr>
  <tr><th>
  "._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM2."
  </th><td>
  <textarea name='options[3]' style='width:400px;height:40px;font-family:Arial;font-size:13px;'>{$options[3]}</textarea>
  <div>ex: <span style='color:#0066CC;font-size:11px;'>font-size:12p ;color: gray; line-height: 1.5;</span></div>
  </td></tr>
  <tr><th>"._MB_TADNEWS_CATE_NEWS_EDIT_BITEM0."</th><td>{$option['form']}
  <INPUT type='hidden' name='options[4]' id='bb' value='{$options[4]}'></td></tr>

  </table>
  ";
  return $form;
}

?>