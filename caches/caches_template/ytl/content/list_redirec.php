<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f15ee168aa9e582757be40be155ab15&action=lists&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC%2C+inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC, inputtime DESC','limit'=>'25',));}?>

<?php
    $data=array_shift($data);
    $url=$data[url];
    header('Location:'.$url);
?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>