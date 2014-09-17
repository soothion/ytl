<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
  <!-- 标准头结束位置 -->
  <div class="wraper clearfix">
    <div class="bread-text fL">
      <span>
        <a href="index.html">首页</a>
      </span> <em>&nbsp;&gt;&nbsp;</em>
      <span>
        <a id="nav-product-link" href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a>
      </span> <em>&nbsp;&gt;&nbsp;</em>
      <span>
        <a id="nav-sub-product-link" data-gid="728"><?php echo $title;?></a>
      </span>
    </div>
  </div>

  <div class="wraper clearfix">
    <div class="content">
      <div class="left-menu fL col-md-3">
         <ul class="sub-menu-list">


        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=47f3ba92a9056824780685c411bad88e&action=lists&status=99&catid=%24catid&num=10&order=listorder+ASC%2C+inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC, inputtime DESC','limit'=>'10',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li class="sub-item <?php if($id==$r[id]) { ?>active<?php } ?>">
            <a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],60,'');?></a>
          </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>
      </div>
      <div class="right-cont fR col-md-9">
            <div class="postHead clearfix">
              <h1 id="artibodyTitle"><?php echo $title;?></h1>
          </div>
          <div class="postcon">
          <?php echo $content;?>
          </div>
          </div>
      </div>
    </div>




<!-- 标准尾巴开始 -->
  <?php include template("content","footer"); ?> 