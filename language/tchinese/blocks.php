<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� tad �s�@
// �s�@����G2007-11-04
// $Id: blocks.php,v 1.4 2008/06/25 06:40:09 tad Exp $
// ------------------------------------------------------------------------- //
//global
include_once "global.php";



define("_MB_TADNEWS_EXPAND_ALL","�����i�}");
define("_MB_TADNEWS_CONTACT_ALL","�������X");

define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM0","�峹��");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM1","�@��C��X�h�s�D");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM6","���D�r��");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM6_DESC","�]�]0�A�N������X�{���D�C�^");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM3","�K�n�r��");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM3_DESC","�]�]0�A�N�����q�X�K�n�C�^");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM4","�K�n��r�˦�");
define("_MB_TADNEWS_CONTENT_BLOCK_EDIT_BITEM5","�ʭ��ϼ˦�");

define("_MB_TADNEWS_RE_EDIT_BITEM0","�C�X�^����");
define("_MB_TADNEWS_RE_EDIT_BITEM1","�q�X�^�����e����");

define("_MB_TADNEWS_CATE_NEWS_EDIT_BITEM0","��ܭn�q�X�����O");
define("_MB_TADNEWS_CATE_NEWS_EDIT_BITEM1","�C�X�峹��");
define("_MB_TADNEWS_CATE_NEWS_EDIT_BITEM2","�O�_�q�X�����Y�ϡH");
define("_MB_TADNEWS_CATE_NEWS_EDIT_BITEM3","�O�_�q�X���j�u�H");

define("_MB_TADNEWS_NP_EDIT_BITEM0","�q�X�q�l����");
define("_MB_TADNEWS_FOCUS_EDIT_BITEM0","�п�ܭn�q�X���s�D");
define("_MB_TADNEWS_YES","�O");
define("_MB_TADNEWS_NO","�_");

define("_MB_TADNEWS_NEWS_TITLE","�峹���D");
define("_MB_TADNEWS_START_DATE","�o�G�ɶ�");
define("_MB_TADNEWS_POSTER","�o�G��");
define("_MB_TADNEWS_NEWS_CATE","���ݤ���");
define("_MB_TADNEWS_COUNTER","�H��");
define("_MB_TADNEWS_LESS","�K�n���");
define("_MB_TADNEWS_SHOW_TABLE","����G�i�榡");
define("_MB_TADNEWS_SHOW_LIST","�峹���D���C��");
define("_MB_TADNEWS_SHOW_ALL","����");

define("_MB_TADNEWS_SUBMIT","�e�X");
define("_MB_TADNEWS_TITLE","�q�l���G");
define("_MB_TADNEWS_NO_NEWSPAPER","�|���إ߹q�l���A�L�k���ѭq�\�C");
define("_MB_TADNEWS_EMAIL","Email �G");
define("_MB_TADNEWS_ORDER","�q�\ ");
define("_MB_TADNEWS_CANCEL","����");
define("_MB_TADNEWS_ORDER_COUNT","�ثe�q�\�H�ơG %s �H");

define("_MB_TADNEWS_NP_TITLE","�� %s ��");



define("_MB_TADNEWS_PAGE_EDIT_BITEM0","��ܭn�q�X���@�Ӥ������Ҧ��峹");
define("_MB_TADNEWS_PAGE_EDIT_BITEM1","���D���׭���");

//tadnews 1.3.1
define("_MB_TADNEWS_MY_PAGE","�п�ܤ峹");
define("_MB_TADNEWS_NO_CATE","������");
define("_MB_TADNEWS_NO_TITLE","�L���D");

//tadnews 2.0
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM0","�C�X�峹��");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM1","�K�n�r��");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM1_DESC","�]�]0�A�N�����q�X�K�n�C�^");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM2","�K�nCSS�]�w");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM3","���D�r��");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM3_DESC","�]�]0�A�N������X�{���D�C�^");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM4","�O�_�q�X�峹�Y�ϡH");
define("_MB_TADNEWS_LIST_CONTENT_BLOCK_EDIT_BITEM5","�Y��CSS�]�w");

define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM0","�C�X�峹��");
define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM1","�q�X�������s");
define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM2","�Ĥ@��");
define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM3","�ĤG��");
define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM4","�ĤT��");
define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM5","�ĥ|��");
define("_MB_TADNEWS_TABLE_CONTENT_BLOCK_EDIT_BITEM6","�Ĥ���");
define("_MB_TADNEWS_TABLE_CONTENT_SHOW_CELL_1","�o�G�ɶ�");
define("_MB_TADNEWS_TABLE_CONTENT_SHOW_CELL_2","�峹���D");
define("_MB_TADNEWS_TABLE_CONTENT_SHOW_CELL_3","�o�G��");
define("_MB_TADNEWS_TABLE_CONTENT_SHOW_CELL_4","���ݤ���");
define("_MB_TADNEWS_TABLE_CONTENT_SHOW_CELL_5","�H��");

define("_MB_TADNEWS_START_FROM","���L�̷s���X�g�峹�H");
define("_MB_TADNEWS_HIDE","�����");


define("_MB_TADNEWS_SLIDERNEWS_BLOCK_EDIT_BITEM0","��ܰϼe��");
define("_MB_TADNEWS_SLIDERNEWS_BLOCK_EDIT_BITEM1","��ܰϰ���");
define("_MB_TADNEWS_SLIDERNEWS_BLOCK_EDIT_BITEM2","�C�X�峹��");
define("_MB_TADNEWS_SLIDERNEWS_BLOCK_EDIT_BITEM3","�峹�K�n�r��");
define("_MB_TADNEWS_SLIDERNEWS_BLOCK_EDIT_BITEM4","�ϥΪ��ưʹϤ�~��");

define("_MB_TADNEWS_FOCUS_EDIT_BITEM1","��ܥ���κK�n�H");
define("_MB_TADNEWS_FOCUS_FULL","����");
define("_MB_TADNEWS_FOCUS_SUMMARY","�K�n");
?>