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
        <a id="nav-sub-product-link" data-gid="728" ><?php echo $title;?></a>
      </span>
    </div>
  </div>

  <div class="wraper clearfix">
    <div class="content">
      <div class="left-menu fL col-md-3">
         <ul class="sub-menu-list">

          <li class="sub-item active">
            <a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a>
          </li>

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