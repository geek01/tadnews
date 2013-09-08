<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2007-11-04
// $Id: main.php,v 1.4 2008/06/25 06:40:09 tad Exp $
// ------------------------------------------------------------------------- //
//global.php
include_once "global.php";



define("_MD_TADNEWS_NAME","Index");
define("_MD_TADNEWS_TO_MOD","Back to Module");
define("_MD_TADNEWS_TO_ADMIN","Admin");
define("_MD_TADNEWS_ADD_FIRST","No News! Add a new one right now！");
define("_MD_TADNEWS_NO_NEWS","No News!");
define("_MD_TADNEWS_HIDDEN","No public access for this news so far!");
define("_MD_TADNEWS_OVERDUE","Overdue News!");
define("_MD_TADNEWS_NOT_GROUP","You are NOT authorized to read this news!");
define("_MD_TADNEWS_ALL_CATE","All Categories");
define("_MD_TADNEWS_FILES","Attachments");
define("_MD_TADNEWS_POSTER","Poster");
define("_MD_TADNEWS_FOR",": ");
define("_TAD_NEED_TADTOOLS","Need modules/tadtools. You can download tadtools from <a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad's web</a>.");
define("_MA_TADNEWS_NEWS_PIC","Upload news cover image");
define("_MA_TADNEWS_ORDER_SUCCESS","「%s」subscribed!");
define("_MA_TADNEWS_ORDER_ERROR","Scbscribe to 「%s」 failed!");
define("_TADNEWS_DEL_SUCCESS","Subscription to 「%s」 cancelled!");
define("_TADNEWS_DEL_ERROR","Failed to cancel 「%s」 subscription!");
define("_MA_TADNEWS_NP_TITLE","NO: %s ");
define("_MA_TADNEWS_FILE_DL_NUM","（Downloaded: %s ）");
define("_MA_TADNEWS_ERROR_EMAIL","Illegal Email: %s");

define("_TADNEWS_BLOCK_NEW","Newer news");
define("_TADNEWS_BLOCK_OLD","Older news");
define("_MD_TADNEWS_POST","Post");
define("_MD_TADNEWS_HAVE_READ_NUM","%s users have read");
define("_MD_TADNEWS_UID_NAME","User name");
define("_MD_TADNEWS_SIGN_TIME","Read time");
define("_MD_TADNEWS_SIGN_LOG","\"%s\" read log");

//post.php
define("_MD_TADNEWS_NO_POST_POWER","Please login first for posting news.");
define("_MA_TADNEWS_ADD_NEWS","Edit News");
define("_MA_TADNEWS_NEWS_TITLE","Title");
define("_MA_TADNEWS_PREFIX_TAG","Prefix");
define("_MA_TADNEWS_ALWAYS_TOP","Sticky");
define("_MA_TADNEWS_NEWS_CONTENT","Content");
define("_MA_TADNEWS_START_DATE","Start Date");
define("_MA_TADNEWS_END_DATE","End Date");
define("_MA_TADNEWS_NEWS_PASSWD","Password");
define("_MA_TADNEWS_ADV_SETUP","Advance Settings");
define("_MA_TADNEWS_SAVE_NEWS","Save");
define("_MA_TADNEWS_CAN_READ_NEWS_GROUP","Available Groups");
define("_MA_TADNEWS_DB_ADD_ERROR2","Failed to add data to tad_news");
define("_MA_TADNEWS_DB_SELECT_ERROR2","Failed to get data from tad_news");
define("_MA_TADNEWS_DB_UPDATE_ERROR2","Failed to update data of tad_news");
define("_MA_TADNEWS_DB_DELETE_ERROR2","Failed to delete data from tad_news");
define("_MA_TADNEWS_NEWS_CATE_TEXT","Choose a category.<br>Red means 「Customized Category」");
define("_MA_TADNEWS_NEWS_TITLE_TEXT","Input News Title");
define("_MA_TADNEWS_START_DATE_TEXT","Publish date of news,<br>News will be published on appointed date;<br>Non-select for publishing immediatelly.");
define("_MA_TADNEWS_END_DATE_TEXT","End date of news;<br>Non-select for forever visible.");
define("_MA_TADNEWS_NEWS_PASSWD_TEXT","Passowrd will be required to read this news if you input password here.");
define("_MA_TADNEWS_CAN_READ_NEWS_GROUP_TEXT","Non-select or 'All' means everyone can read this news<br>you can press 'Ctrl' and select the available groups to read too.");
define("_MA_TADNEWS_NEWS_CATE","Category");
define("_MA_TADNEWS_SELECT_NEWS_CATE","Choose a category");
define("_MA_TADNEWS_NEWS_ENABLE","Save as");
define("_MA_TADNEWS_NEWS_ENABLE1_TEXT","'Public' for publishing immediatelly.");
define("_MA_TADNEWS_NEWS_ENABLE0_TEXT","'Draft' for saving as a draft without showing in newslist.");
define("_MA_TADNEWS_NEWS_ENABLE_OK","Public");

define("_MA_TADNEWS_NEWS_FILES","Upload files:");
define("_MA_TADNEWS_NEWS_FILES_LIST","Attachments");
define("_MD_CAT_CANT_FIND_FILE","Can't download the file");
define("_MA_TADNEWS_MON","(Month)");
define("_MA_TADNEWS_1","Mon");
define("_MA_TADNEWS_2","Tue");
define("_MA_TADNEWS_3","Wed");
define("_MA_TADNEWS_4","Thu");
define("_MA_TADNEWS_5","Fri");
define("_MA_TADNEWS_6","Sat");
define("_MA_TADNEWS_7","Sun");
define("_MA_TADNEWS_WEEK","Week");
define("_MA_TADNEWS_TODAY","Today");
define("_MA_TADNEWS_ALL_NO","None");
define("_MA_TADNEWS_NEWS_HAVE_READ","Must read Groups");
define("_MA_NEED_TADTOOLS","Need modules/tadtools. You can download tadtools from <a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad's web</a>.");
define("_MA_TADNEWS_CREAT_NEWS_CATE","Creat a sub-category from left category:");
define("_MA_TADNEWS_CREAT_FIRST_CATE","Creat a sub-category");

//archive.php
define("_MD_TADNEWS_ARCHIVE","Archive");
define("_MD_TADNEWS_YEAR","Year");
define("_MD_TADNEWS_MONTH","Month");


define("_MD_TADNEWS_NEWSPAPER","Newspaper List");
define("_MD_TADNEWS_NEWSPAPER_LIST","==== Select Newspaper ====");
define("_MA_TADNEWS_NP_DATE","Date");
define("_MA_TADNEWS_NP_NUMBER","Numbers");

define("_MD_TADNEWS_ALWAYS_TOP","Sticky");
define("_MD_TADNEWS_TODAY_NEWS","Today");



define("_MB_TADNEWS_TIME_TAB","post time");
define("_MB_TADNEWS_PRIVILEGE_TAB","privilege");
define("_MB_TADNEWS_NEWSPIC_TAB","cover image");
define("_MB_TADNEWS_FILES_TAB","files");
define("_MB_TADNEWS_ENABLE_NEWSPIC","display in artical?");
define("_MB_TADNEWS_ENABLE_NEWSPIC_NO","NO");
define("_MB_TADNEWS_ENABLE_NEWSPIC_YES","YES");
define("_MB_TADNEWS_NEWSPIC_SIZE","size");
define("_MB_TADNEWS_NEWSPIC_WIDTH","width and height");
define("_MB_TADNEWS_NEWSPIC_BORDER","border");
define("_MB_TADNEWS_NEWSPIC_BORDER_WIDTH","width:");
define("_MB_TADNEWS_NEWSPIC_BORDER_STYTLE","style:");
define("_MB_TADNEWS_NEWSPIC_SOLID","solid");
define("_MB_TADNEWS_NEWSPIC_DASHED","dashed");
define("_MB_TADNEWS_NEWSPIC_DOUBLE","double");
define("_MB_TADNEWS_NEWSPIC_DOTTED","dotted");
define("_MB_TADNEWS_NEWSPIC_GROOVE","groove");
define("_MB_TADNEWS_NEWSPIC_RIDGE","ridge");
define("_MB_TADNEWS_NEWSPIC_INSET","inset");
define("_MB_TADNEWS_NEWSPIC_OUTSET","outset");
define("_MB_TADNEWS_NEWSPIC_NONE","none");
define("_MB_TADNEWS_NEWSPIC_BORDER_COLOR","color:");
define("_MB_TADNEWS_NEWSPIC_FLOAT","float");
define("_MB_TADNEWS_NEWSPIC_FLOAT_LEFT","left");
define("_MB_TADNEWS_NEWSPIC_FLOAT_RIGHT","right");
define("_MB_TADNEWS_NEWSPIC_FLOAT_NONE","none");
define("_MB_TADNEWS_NEWSPIC_MARGIN","margin:");
define("_MB_TADNEWS_NEWSPIC","image repeat:");
define("_MB_TADNEWS_NEWSPIC_NO_REPEAT","no-repeat");
define("_MB_TADNEWS_NEWSPIC_REPEAT","repeat");
define("_MB_TADNEWS_NEWSPIC_X_REPEAT","x-repeat");
define("_MB_TADNEWS_NEWSPIC_Y_REPEAT","y-repeat");
define("_MB_TADNEWS_NEWSPIC_SHOW",", position:");
define("_MB_TADNEWS_NEWSPIC_LEFT_TOP","left top");
define("_MB_TADNEWS_NEWSPIC_LEFT_CENTER","left center");
define("_MB_TADNEWS_NEWSPIC_LEFT_BOTTOM","left bottom");
define("_MB_TADNEWS_NEWSPIC_RIGHT_TOP","right top");
define("_MB_TADNEWS_NEWSPIC_RIGHT_CENTER","right center");
define("_MB_TADNEWS_NEWSPIC_RIGHT_BOTTOM","right bottom");
define("_MB_TADNEWS_NEWSPIC_CENTER_TOP","center top");
define("_MB_TADNEWS_NEWSPIC_CENTER_CENTER","center center");
define("_MB_TADNEWS_NEWSPIC_CENTER_BOTTOM","center bottom");
define("_MB_TADNEWS_NEWSPIC_AND",", image-size");
define("_MB_TADNEWS_NEWSPIC_NO_RESIZE","no resize");
define("_MB_TADNEWS_NEWSPIC_CONTAIN","contain");
define("_MB_TADNEWS_NEWSPIC_COVER","cover");
define("_MB_TADNEWS_NEWSPIC_DEMO","<p>Each article could have a cover picture, this picture can be used for some block. Each block can set its size and appearance. If you want to use cover picture in the artical, then you can use this interface to make setting.</p><p>You can upload any size image for cover picture , we recommend that  cover picture size is large than  slide news block width.  The  slide news block size  is 670x250. Therefore, we recommend that cover picture is large than  670x250.</p>");

//define("_MD_TADNEWS_EMBED","embed");

define("_MB_TADNEWS_TABLE_CONTENT_WIDTH","Width");
define("_MB_TADNEWS_MORE","Read More");
define("_MB_TADNEWS_DEL_FILE","Select files to delete:");
?>
