<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
  <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
  <meta name="description" content="<?php echo $SEO['description'];?>">
  <link rel="stylesheet" href="<?php echo APP_PATH;?>statics/ytl/css/normalize.css">
  <link href="<?php echo APP_PATH;?>statics/ytl/css/common.css" rel="stylesheet" type="text/css">
  <link href="<?php echo APP_PATH;?>statics/ytl/css/home.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="<?php echo APP_PATH;?>statics/ytl/css/list.css">
  <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/ytl/css/jquery.fancybox.css">
</head>
<body>
  <div id="Header">
    <div class="top-wrap">
      <div class="Top">
        <a href="javascript:;" onclick="setHomepage('<?php echo siteurl($siteid);?>');">设为首页</a><span>丨</span>
        <a href="<?php echo siteurl($siteid);?>" onclick="addFavorite(this.href, '盈泰来珠宝官网');return false;">收藏本站</a>
        <span>丨</span>
        <span>联系电话:      
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c87b058ecb5c1741dccaebf4df497867&sql=SELECT+%2A+FROM+v9_page+where+catid%3D26\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=26 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
          <?php echo $val['content'];?>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </span>
      </div>
    </div>
    <div id="Toper">

      <div class="logo">
        <a href="<?php echo siteurl($siteid);?>">
          <img src="<?php echo APP_PATH;?>statics/ytl/img/logo.png"></a>
      </div>

  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b71d68b93971623f0187aaf955710fb4&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC%2C+inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC, inputtime DESC','limit'=>'25',));}?>
      <div class="MainNav">
        <ul>
          <li <?php if(!isset($_GET['catid'])){?>class='onnav'<?php }?> >
            <a class="nav" href="<?php echo siteurl($siteid);?>">首页</a>
          </li>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li <?php if($r[catid]==$catid) { ?>class="onnav"<?php } ?>>
            <em>|</em><a class="nav" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a> 
            <?php if($r[child]) { ?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8697e89ea2c428ea008d965b7bed200f&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC%2C+inputtime+DESC&return=subcat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$subcat = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC, inputtime DESC','limit'=>'25',));}?>
             <div class="subNavBox" style="display: none;">
              <dl class="subnav">
                <?php $n=1;if(is_array($subcat)) foreach($subcat AS $v) { ?>
                <dt>
                  <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                </dt>
                <?php $n++;}unset($n); ?>
              </dl>
              <div class="clear"></div>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php } else { ?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=368e47b694655edbef0ce5ae0e8476c0&action=position&posid=10&catid=%24r%5Bcatid%5D&num=10&order=listorder+ASC&return=subcon\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$subcon = $content_tag->position(array('posid'=>'10','catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'10',));}?>
              <?php if($subcon) { ?>
              <div class="subNavBox" style="display: none;">
                <dl class="subnav">
                  <?php $n=1;if(is_array($subcon)) foreach($subcon AS $r) { ?>
                  <dt>
                    <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
                  </dt>
                  <?php $n++;}unset($n); ?>
                </dl>
                <div class="clear"></div>
              </div>
              <?php } ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
            <?php } ?>
          </li>
      <?php $n++;}unset($n); ?>
          <div class="clear"></div>
        </ul>
      </div>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

      <div class="clear"></div>
    </div>
  </div>