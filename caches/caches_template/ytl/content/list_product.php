<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
  <!-- 标准头结束位置 -->


     

  <div class="wraper clearfix">
    <div class="bread-text fL">
      <span>
        <a href="index.html">首页</a>
      </span> <em>&nbsp;&gt;&nbsp;</em>
      <span>
        <a id="nav-product-link" href="">产品系列</a>
      </span> <em>&nbsp;&gt;&nbsp;</em>
      <span>
        <a id="nav-sub-product-link" data-gid="728" href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a>
      </span>
    </div>
  </div>

  <div class="wraper clearfix">
    <div class="content">
      <div class="left-menu fL col-md-3">
        <ul class="sub-menu-list">
          <?php $parentid = $CATEGORYS[$catid]['parentid']?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20610d1974a931dac9e75b2263171842&action=category&catid=%24parentid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <li class="sub-item <?php if($catid==$r[catid]) { ?>active<?php } ?>">
              <a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a>
            </li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
      </div>
      <style type="text/css">
      .productlist{}
.productlist li{ list-style:none; line-height:30px; text-align:center; width:158px; padding-bottom:20px; float:left; margin-right:20px;}
/*.productlist li { width:161px; height:153px;border:1px solid #e2e2e2;display:block;}*/
.productlist li  img{width:156px; height:168px;border:1px solid #e2e2e2;display:block;}
.productlist li.ptop { width:350px;}
/*.productlist li.ptop a.img{ width:330px; height:357px;}*/
.productlist li.ptop img{width:357px; height:388px;}
.productlist li a.img img
.padding-r11{padding-right: 11px !important;}
</style>  
      <div class="right-cont fR col-md-9">
            <div class="postHead clearfix">
              <h1 id="artibodyTitle"><?php echo $CATEGORYS[$catid]['catname'];?></h1>
          </div>
          <ul class="productlist">


           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c705dadb2367665c5299f259eac3809f&action=lists&status=99&catid=%24catid&num=15&order=listorder+ASC%2C+inputtime+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC, inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC, inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
           <?php $i=1?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li class="<?php if($i==1) { ?>ptop<?php } ?> <?php if(in_array($i,array(3,5,9,13,17,21))){ ?>no-margin-r<?php }?>">
                <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"></a>
                <a href="{$r[url]"><span><?php echo $r['title'];?></span></a>
            </li>
            <?php $i++?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <div class="clear"></div>
          </ul>
          <div class="page-box fR">
            <?php echo $pages;?>
          </div>
      </div>
      
    </div>
     </div>




<!-- 标准尾巴开始 -->
   </div>
<?php include template("content","footer"); ?> 