<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
  <!-- 标准头结束位置 -->
  <div class="HomeBan">
    <div class="BanList">
      <div id="viewport-shadow">
        <a href="#" id="prev" title="Prev"></a>
        <a href="#" id="next" title="Next"></a>
        <div id="viewport" style="height: 474px;">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b4219b1e406aaeb9d914701a6f0fd7fc&sql=SELECT+pictureurls+FROM+v9_picture_data+WHERE+id%3D%271%27&cache=3600&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT pictureurls FROM v9_picture_data WHERE id=\'1\'',)).'b4219b1e406aaeb9d914701a6f0fd7fc');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT pictureurls FROM v9_picture_data WHERE id='1' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
          <div id="box" style="position: relative; height: 474px; overflow: hidden;" class="">
            <!-- 产品链接Banner图-->
            <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
              <?php
                  $pictureurls=$val['pictureurls'];
                  $pictureurls=string2array($pictureurls);
              ?>
              <?php $n=1;if(is_array($pictureurls)) foreach($pictureurls AS $pic) { ?>
            <div class="slide" style="top: 0px; position: absolute; display: block;">
              <a href="<?php echo $pic['url'];?>" class="btn-video fancybox.iframe" style=" background:url(<?php echo $pic['url'];?>) no-repeat center top;"></a>
            </div>
              <?php $n++;}unset($n); ?>
            <?php $n++;}unset($n); ?>

          </div>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
      </div>
    </div>
  </div>

  <div class="wraper">
    <h4 class="wp clearfix">
      <p class="t">
        <a href="enterprise.html" target="_blank">公司形象</a>
      </p>
    </h4>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9b53bb1fe82a5cf62902d4037da80697&sql=SELECT+pictureurls+FROM+v9_picture_data+WHERE+id%3D%272%27&cache=3600&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT pictureurls FROM v9_picture_data WHERE id=\'2\'',)).'9b53bb1fe82a5cf62902d4037da80697');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT pictureurls FROM v9_picture_data WHERE id='2' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>

    <div class="pic-box clearfix">
      <ul class="exhibition-list">

    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
      <?php
          $pictureurls=$val['pictureurls'];
          $pictureurls=string2array($pictureurls);
          $i=1;
          $num=count($pictureurls);
      ?>
      <?php $n=1;if(is_array($pictureurls)) foreach($pictureurls AS $pic) { ?>
        <li <?php if($num==$i){?>class='last'<?php }?> >
          <div class="exhibition-pic">
            <a href="">
              <img width="235" height="157" src="<?php echo $pic['url'];?>" alt="<?php echo $pic['alt'];?>">
            </a>
          </div>
          <h3>
            <a href="#">展台照片1</a>
          </h3>
        </li>
        <?php $i++?>
      <?php $n++;}unset($n); ?>
    <?php $n++;}unset($n); ?>
        
      </ul>
    </div>

    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>

  <div class="wraper other_do clearfix">
    <div class="ot_all">
      <div class="ot_left fl">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=66bcd5c8facce9fe497f9b6383a6fea2&sql=SELECT+%2A+FROM+v9_page+where+catid%3D23\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=23 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
        <?php echo $val['content'];?>
        <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
      <div class="ot_left fl otherot_p">
        <div class="thephone"></div>
        <h3>联系我们</h3>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7488b4d151ba203c2a8409b54f1c8c1d&sql=SELECT+%2A+FROM+v9_page+where+catid%3D22\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=22 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
        <?php echo $val['content'];?>
        <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
      <div class="ot_left no-border fl">
        <div class="drlogo"></div>
        <h3>最新新闻&活动</h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9fbe1beddcecdca7bed767a4aee5b643&action=lists&status=99&catid=25&num=4&order=listorder+ASC%2C+inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('status'=>'99','catid'=>'25','order'=>'listorder ASC, inputtime DESC','limit'=>'4',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <p><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" <?php echo title_style($r[style]);?>><?php echo str_cut($r[title],60,'');?></a></p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
    </div>
  </div>
<?php include template("content","footer"); ?> 