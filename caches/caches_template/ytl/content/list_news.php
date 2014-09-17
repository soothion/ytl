<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
  <!-- 标准头结束位置 -->


  <div class="wraper clearfix">
    <div class="bread-text fL">
      <span>
        <a href="index.html">首页</a>
      </span> <em>&nbsp;&gt;&nbsp;</em>
      <span>
        <a id="nav-product-link" href="resuit.html"><?php echo $CATEGORYS[$catid]['catname'];?></a>
      </span>
    </div>
  </div>

  <div class="wraper clearfix">
    <div class="content">
      <div class="left-menu fL col-md-3">
        <ul class="sub-menu-list">
          <li class="sub-item active no-border">
            <a href=""><?php echo $CATEGORYS[$catid]['catname'];?></a>
          </li>
        </ul>
      </div>
      <style type="text/css">
.recuit-list li{
  border-bottom: 1px dashed #ddd;
  padding-left: 18px;
  line-height: 37px;
  height: 39px;
  overflow: hidden;
  background: url("<?php echo APP_PATH;?>statics/ytl/img/pro-slide-button.png") no-repeat 0px -105px;
}
.hot a{
  color: red;
}

</style>  

      <div class="right-cont fR col-md-9">
            <div class="postHead clearfix">
              <h1 id="artibodyTitle"><?php echo $CATEGORYS[$catid]['catname'];?></h1>
          </div>
          <ul class="recuit-list">

           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c705dadb2367665c5299f259eac3809f&action=lists&status=99&catid=%24catid&num=15&order=listorder+ASC%2C+inputtime+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC, inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC, inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li class="sub-item <?php if($id==$r[id]) { ?>active<?php } ?>">
                <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?> ><?php echo str_cut($r[title],60,'');?></a>
              </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          </ul>
          <div class="page-box fR">
            <?php echo $pages;?>
          </div>
      </div>
      
    </div>
     </div>




<!-- 标准尾巴开始 -->
  <?php include template("content","footer"); ?> 