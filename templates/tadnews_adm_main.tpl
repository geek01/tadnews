<!--TadNews Start-->
<link rel="stylesheet" type="text/css" media="screen" href="<{$xoops_url}>/modules/tadtools/css/iconize.css">
  <script language="JavaScript">
    $().ready(function(){
      $("#clickAll").click(function() {
        var x = document.getElementById("clickAll").checked;
        if(x){
          $(".news").each(function() {
            $(this).prop("checked", true);
          });
        }else{
         $(".news").each(function() {
             $(this).prop("checked", false);
         });
        }
        coint_checked();
      });

      $(".news").change(function(event) {
        coint_checked();
      });

    });

    function coint_checked(){
      var $b = $('.news');
      if($b.filter(':checked').length > 0 ){
        $('#batch_tool').show();
      }else{
        $('#batch_tool').hide();
      }
    }

    function check_one(id_name,change){
      if(document.getElementById(id_name).checked && change){
        document.getElementById(id_name).checked = false;
      }else{
        document.getElementById(id_name).checked = true;
      }
    }
  </script>

<div class="container-fluid">

  <{$del_js}>

  <div class="row">
    <div class="col-sm-3">

      <div id="save_msg"></div>

      <div style="max-height: 300px; overflow: auto;">
        <{$ztree_code}>
      </div>


      <{if $ncsn}>
        <div>
          <h3><a href="../index.php?ncsn=<{$cate.ncsn}>"><{$cate.nc_title}></a></h3>
          <ul>
            <li style="line-height:2;"><{$smarty.const._MA_TADNEWS_CATE_COUNTER}><{$smarty.const._TAD_FOR}><{$cate.count}></li>
            <li style="line-height:2;"><{$smarty.const._MA_TADNEWS_CAN_READ_CATE_GROUP_S}><{$smarty.const._TAD_FOR}><{$cate.g_txt}></li>
            <li style="line-height:2;"><{$smarty.const._MA_TADNEWS_CAN_POST_CATE_GROUP_S}><{$smarty.const._TAD_FOR}><{$cate.gp_txt}></li>
          </ul>
        </div>
      <{/if}>

      <div>
        <{if $now_op!="tad_news_cate_form" or $ncsn!=""}>
          <a href="main.php?op=modify_page_cate" class="btn btn-primary btn-block"><{$smarty.const._MA_TADNEWS_ADD_CATE}></a>
        <{/if}>

      </div>

    </div>

    <div class="col-sm-9">

      <{if $ncsn!=""}>
        <div class="row">
          <div class="col-sm-6">
            <h3>
              <img src="<{if $cate.cate_pic}><{$cate_img_url}>/<{$cate.cate_pic}><{else}>../images/no_cover.png<{/if}>" alt="<{$cate.nc_title}>" title="<{$cate.nc_title}>" style="width: 50px;margin: 0px 6px 4px 0px;">
              <a href="../index.php?ncsn=<{$cate.ncsn}>"><{$cate.nc_title}></a>
            </h3>
          </div>
          <div class="col-sm-6 text-right">
            <div style="margin-top: 10px;">
              <{if $now_op!="tad_news_cate_form" and $ncsn}>

                <a href="javascript:delete_tad_news_cate_func(<{$cate.ncsn}>);" class="btn btn-danger <{if $cate.count > 0}>disabled<{/if}>"><{$smarty.const._TADNEWS_DEL}></a>


                <a href="<{$php_self}>?not_news=1&op=change_kind&ncsn=<{$ncsn}>" class="btn btn-success"><{$smarty.const._MA_TADNEWS_CHANGE_TO_PAGE}></a>
                <a href="main.php?op=modify_news_cate&ncsn=<{$ncsn}>" class="btn btn-warning"><{$smarty.const._TAD_EDIT}></a>
              <{/if}>
            </div>
          </div>
        </div>
      <{/if}>

      <{if $now_op=="tad_news_cate_form"}>
        <form action="main.php" method="post" id="myForm" enctype="multipart/form-data" class="form-horizontal" role="form">

          <div class="well card card-body bg-light m-1" style="background-color:#EEFFCC;">

            <div class="form-group row">
              <label class="col-sm-2 control-label col-form-label text-md-right">
                <{$smarty.const._MA_TADNEWS_CATE_TITLE}>
              </label>
              <div class="col-sm-10">
                <input type="text" name="nc_title" id="nc_title" class="form-control" value="<{$nc_title}>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 control-label col-form-label text-md-right">
                <{$smarty.const._MA_TADNEWS_PARENT_CATE}>
              </label>
              <div class="col-sm-4">
                <select name="of_ncsn" size=1 id="of_ncsn" class="form-control">
                  <{$cate_select}>
                </select>
              </div>
              <label class="col-sm-2 control-label col-form-label text-md-right">
                <{$smarty.const._MA_TADNEWS_CATE_PIC}>
              </label>
              <div class="col-sm-4">
                <input type="file" id="cate_pic" name="cate_pic">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 control-label col-form-label text-md-right">
                <{$smarty.const._MA_TADNEWS_CAN_READ_CATE_GROUP}><br>
                <{$smarty.const._MA_TADNEWS_CAN_POST_CATE_GROUP_TXT}>
              </label>
              <div class="col-sm-4">
                <{$enable_group}>
              </div>

              <label class="col-sm-2 control-label col-form-label text-md-right">
                <{$smarty.const._MA_TADNEWS_CAN_POST_CATE_GROUP}><br>
                <{$smarty.const._MA_TADNEWS_CAN_POST_CATE_GROUP_TXT}>
              </label>
              <div class="col-sm-4">
                <{$enable_post_group}>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 control-label col-form-label text-md-right">
                <{$smarty.const._MA_TADNEWS_NO_PERMISSION}><{$smarty.const._TAD_FOR}>
              </label>
              <div class="col-sm-4">
                <div class="form-check-inline radio-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="setup[only_title]" value="1" <{if $only_title!='0'}>checked<{/if}>>
                        <{$smarty.const._MA_TADNEWS_DISPLAY_TITLE}>
                    </label>
                </div>
                <div class="form-check-inline radio-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="setup[only_title]" value="0" <{if $only_title=='1'}>checked<{/if}>>
                        <{$smarty.const._MA_TADNEWS_HIDE_ARTICLE}>
                    </label>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <input type="hidden" name="not_news" value="0">
            <input type="hidden" name="ncsn" value="<{$ncsn}>">
            <input type="hidden" name="op" value="<{$cate_op}>">
            <{$XOOPS_TOKEN}>
            <button type="submit" class="btn btn-info"><{if $ncsn==""}><{$smarty.const._MA_TADNEWS_ADD_CATE}><{else}><{$smarty.const._TAD_SAVE}><{/if}></button>
          </div>
        </form>
      <{elseif $page}>
        <form action="main.php" method="post" class="form-horizontal" role="form">
          <table class="table table-sm table-condensed table-striped table-bordered">
            <tr>
              <th nowrap>
                <label class="checkbox-inline">
                  <input id="clickAll" type="checkbox">
                <{$smarty.const._MA_TADNEWS_NEWS_CATE}>
                </label>
                </th>
              <th nowrap><{$smarty.const._MA_TADNEWS_NEWS_TITLE}></th>
              <{if $show_admin_tool_title}>
                <th nowrap><{$smarty.const._MA_TADNEWS_CAN_READ_NEWS_GROUP}></th>
                <th nowrap><{$smarty.const._MA_TADNEWS_FUNCTION}></th>
              <{/if}>
            </tr>
            <tbody>
              <{foreach item=page from=$page}>
                <tr>
                  <td>
                    <label class="checkbox-inline">
                      <input name="nsn_arr[]" value="<{$page.nsn}>" type="checkbox" class="news">
                      <a href="main.php?ncsn=<{$page.ncsn}>" title="<{$page.cate_name}>"><{$page.cate_name}></a>
                    </label>
                  </td>
                  <td>
                    <{$page.prefix_tag}>
                    <{if $page.need_sign}>
                      <img src="<{$page.need_sign}>" align="absmiddle" alt="<{$page.news_title}>" style="margin:3px;">
                    <{/if}>
                    <{$page.enable_txt}>
                    <{$page.today_pic}>
                    <{$page.post_date}>
                    <a href="<{$xoops_url}>/modules/tadnews/<{$page.link_page}>?nsn=<{$page.nsn}>"><{$page.news_title}></a>
                    <span style="color:gray;font-size: 0.8em;"> (<a href="main.php?show_uid=<{$page.uid}>"><{$page.uid_name}></a> / <{$page.counter}>)</span> <{$page.passwd}>
                  </td>
                  <{if $page.show_admin_tool}>
                    <td><{$page.g_txt}></td>
                    <td>
                      <a href="javascript:delete_tad_news_func(<{$page.nsn}>);" class="btn btn-sm btn-xs btn-danger" id="del<{$page.nsn}>"><{$smarty.const._TADNEWS_DEL}></a>
                      <a href="<{$xoops_url}>/modules/tadnews/post.php?op=tad_news_form&nsn=<{$page.nsn}>" class="btn btn-sm btn-xs btn-warning" id="update<{$page.nsn}>"><{$smarty.const._TADNEWS_EDIT}></a>
                    </td>
                  <{/if}>
                </tr>
              <{/foreach}>
            </tbody>
          </table>
          <{$bar}>

          <div class="well card card-body bg-light m-1" id="batch_tool" style="display: none;">

            <div class="form-group row">
              <label class="col-sm-2 control-label col-form-label text-md-right">
                <input type='radio' name='act' value='del_news'>
                <{$smarty.const._TADNEWS_DEL}>
              </label>

              <label class="col-sm-2 control-label col-form-label text-md-right">
                <input type='radio' name='act' value='move_news' id="move">
                <{$smarty.const._TADNEWS_MOVE_TO}>
              </label>
              <div class="col-sm-4">
                <select name='ncsn' class="form-control" onChange="check_one('move',false)"><{$options}></select>
              </div>

              <div class="col-sm-3">
                <input type='hidden' name='kind' value='news'>
                <input type='hidden' name='op' value='batch'>
                <{$XOOPS_TOKEN}>
                <button type='submit' class='btn btn-primary'><{$smarty.const._TAD_SUBMIT}></button>
              </div>
            </div>

        </form>
      <{else}>
        <div class="alert alert-danger text-center">
          <h3><{$smarty.const._MA_TADNEWS_NO_NEWS}></h3>
        </div>
      <{/if}>
    </div>
  </div>
</div>
