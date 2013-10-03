<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2007-11-04
// $Id: tadnews_content_block.php,v 1.4 2008/06/25 06:36:39 tad Exp $
// ------------------------------------------------------------------------- //


include_once XOOPS_ROOT_PATH."/modules/tadnews/block_function.php";


//區塊主函式 (顯示新聞內容)
function tadnews_content_block_show($options){
	global $xoopsDB,$xoopsModule,$xoopsUser,$xoopsOption;

	$ncsn_arr=explode(',',$options[7]);

  include_once XOOPS_ROOT_PATH."/modules/tadnews/class/tadnews.php";

	$tadnews=new tadnews();

	$tadnews->set_show_num($options[0]);
	$tadnews->set_view_ncsn($ncsn_arr);
	$tadnews->set_show_mode('summary');
	$tadnews->set_news_kind("news");
	$tadnews->set_summary($options[1],$options[2]);
	$tadnews->set_title_length($options[3]);
	$tadnews->set_cover($options[4],$options[5]);
	$tadnews->set_skip_news($options[6]);
  $tadnews->set_use_star_rating(true);
	$block=$tadnews->get_news('return');

  $block['bootstrap']=get_bootstrap();
  $block['width']=$options[8];

  $span=intval(substr($options[8],4));
  $col_num=12/$span;
  $block['col_num']=$col_num;

	return $block;
}

//區塊編輯函式
function tadnews_content_block_edit($options){

  $select1=($options[8]=="span12")?"selected":"";
  $select2=($options[8]=="span6")?"selected":"";
  $select3=($options[8]=="span4")?"selected":"";
  $select4=($options[8]=="span3")?"selected":"";
  $select6=($options[8]=="span2")?"selected":"";


  $options4_1=($options[4]=="1")?"checked":"";
  $options4_0=($options[4]=="0")?"checked":"";

  $block_news_cate=block_news_cate($options[7]);

	$form="{$block_news_cate['js']}
	<table>
	<tr><th>
	"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM0."
	</th><td>
	<INPUT type='text' name='options[0]' value='{$options[0]}' size=6>
  </td></tr>
	<tr><th>
	"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM1."
	</th><td>
	<INPUT type='text' name='options[1]' value='{$options[1]}' size=6>"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM1_DESC."
  </td></tr>
	<tr><th>
	"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM2."
	</th><td>
	<textarea name='options[2]' style='width:400px;height:40px;font-family:Arial;font-size:13px;'>{$options[2]}</textarea>
	<div>ex: <span style='color:#0066CC;font-size:11px;'>color:gray;font-size:11px;margin-top:3px;line-height:150%;</span></div>
  </td></tr>
	<tr><th>
	"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM3."
	</th><td>
	<INPUT type='text' name='options[3]' value='{$options[3]}' size=6>"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM3_DESC."
  </td></tr>
	<tr><th>
	"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM4."
	</th><td>
	<INPUT type='radio' name='options[4]' value='1' $options4_1>"._YES."
	<INPUT type='radio' name='options[4]' value='0' $options4_0>"._NO."
  </td></tr>
	<tr><th>
	"._MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM5."
	</th><td>
	<textarea name='options[5]' style='width:400px;height:40px;font-family:Arial;font-size:13px;'>{$options[5]}</textarea>
	<div>ex: <span style='color:#0066CC;font-size:11px;'>width:60px;height:30px;float:left;border:1px solid #9999CC;margin:0px 4px 4px 0px;</span></div>
  </td></tr>
	<tr><th>
	"._MB_TADNEWS_START_FROM."
	</th><td>
	<INPUT type='text' name='options[6]' value='{$options[6]}' size=6>
  </td></tr>
	<tr><th>"._MB_TADNEWS_CATE_NEWS_EDIT_BITEM0."</th><td>{$block_news_cate['form']}
	<INPUT type='hidden' name='options[7]' id='bb' value='{$options[7]}'></td></tr>

	<tr><th>
	"._MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM1."
	</th><td>
	<select name='options[8]'>
	<option value='span12' $select1>1</option>
	<option value='span6' $select2>2</option>
	<option value='span4' $select3>3</option>
	<option value='span3' $select4>4</option>
	<option value='span2' $select6>6</option>
	</select>
  </td></tr>
	</table>
	";
	return $form;
}

?>