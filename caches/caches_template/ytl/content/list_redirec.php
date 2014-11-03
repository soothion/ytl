<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b56ef15ddeeb505479909912630b33bb&action=lists&catid=%24catid&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>

<?php
    $data=array_shift($data);
    $url=$data[url];
    header('Location:'.$url);
?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>