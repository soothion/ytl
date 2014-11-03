<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- 标准尾巴开始 -->
  <div class="last_foot">
    <div id="Copyright" class="auto">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d139ef757fe24ed4e77ca472e2ed1e20&sql=SELECT+%2A+FROM+v9_page+where+catid%3D21\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=21 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
        <?php echo $val['content'];?>
        <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
  </div>
  <script src="<?php echo APP_PATH;?>statics/ytl/js/vendor/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="<?php echo APP_PATH;?>statics/ytl/js/DD_roundies_min.js"></script>
  <script type="text/javascript" src="<?php echo APP_PATH;?>statics/ytl/js/jquery.fancybox.js"></script>
  <script type="text/javascript" src="<?php echo APP_PATH;?>statics/ytl/js/main.js"></script>
  <script>
     $(function() {
     $("a.btn-video").fancybox({
       'margin': 0,
       'padding': 0,
       'scrolling': 'no',
       'autoScale': false,
       'centerOnScroll': true,
       'transitionIn': 'none',
       'transitionOut': 'none',
       'overlayColor': '#666666',
       'overlayOpacity': '0.8',
       'width': '650',
       'height': '450',
       'maxWidth': '650',
       'maxHeight': '450',
       'minWidth': '650',
       'minHeight': '450'
     });
   })

   //圆角
   DD_roundies.addRule('.subNavBox', '2px 2px 2px 2px', true);

   //下拉菜单
   $(".MainNav li").hover(function() {
     $(this).find(".subNavBox").stop(false, true).slideDown();
   }, function() {
     $(this).find(".subNavBox").stop(false, true).slideUp(100);
   });

   // $(".MainNav ul li").each(function() {
   //   var href = $(this).find(".subnav").find("dt:first a").attr("href");
   //   var size = $(this).find(".subnav").size();
   //   if (size > 0) {
   //     $(this).find("a:first").attr("href", href);
   //   }
   // });
    </script>
  <!-- 标准尾巴结束位置 -->


  <script type="text/javascript" src="<?php echo APP_PATH;?>statics/ytl/js/jquery.SuperSlide.js"></script>
  <script type="text/javascript" src="<?php echo APP_PATH;?>statics/ytl/js/box-slider-all.jquery.min.js"></script>
  <script>
/*焦点图的JS*/
 function focus_screen() {
   var winH = 474;
   var winW = $(window).innerWidth() > 960 ? $(window).innerWidth() : 960;
   var imgW = 1920;
   var imgH = 474;
   var percent = winW / imgW;
   if ((imgH * percent) < winH) {
     percent = winH / imgH;
   }
   $("#viewport").height(winH);
   $("#viewport").find("img")
     .height(imgH * percent)
     .width(imgW * percent);
   $("#viewport").find(".slide").css({
     top: (winH - (imgH * percent)) * 0.5
   }, {
     left: (winW - imgW * percent) * 0.5
   });
 }
 $(window).resize(function() {
   focus_screen();
 });
 $(function() {
   $(window).resize();
   var $box = $('#box'),
     $effects = $('.effect'),
     $timeIndicator = $('#time-indicator'),
     slideInterval = 5000;

   var switchIndicator = function($c, $n, currIndex, nextIndex) {
     $timeIndicator.stop().css('width', 0);
   };

   var startTimeIndicator = function() {
     $timeIndicator.animate({
       width: '100%'
     }, slideInterval);
   };
   focus_screen();
   $box.boxSlider({
     speed: 1000,
     autoScroll: true,
     timeout: slideInterval,
     next: '#next',
     prev: '#prev',
     pause: '#pause',
     effect: 'fade',
     blindCount: 15,
     onbefore: switchIndicator,
     onafter: startTimeIndicator
   });
   startTimeIndicator();

 });
</script>
</body>
</html>