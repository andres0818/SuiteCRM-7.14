<?php
/* Smarty version 4.3.1, created on 2023-09-14 23:31:16
  from 'C:\xampp\htdocs\SuiteCRM-7.14\modules\SugarFeed\Dashlets\SugarFeedDashlet\UserPostForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65037ba42c21f5_31407869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11e5f8dcb0813e231dd1768e2c01079cba2aa88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14\\modules\\SugarFeed\\Dashlets\\SugarFeedDashlet\\UserPostForm.tpl',
      1 => 1694724539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65037ba42c21f5_31407869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-7.14\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-7.14\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<form name='form_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' id='form_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
<div class="dashletNonTable" style='white-space:nowrap;'>
  <table border=0 cellspacing=0 cellpadding=2>
    <tr>
      <td nowrap="nowrap"><span id='more_img_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['more_img']->value;?>
</span><span id='less_img_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style="display:none;"><?php echo $_smarty_tpl->tpl_vars['less_img']->value;?>
</span> <b><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</b>&nbsp;</td>
      <td style="padding-right: 5px;"><input id="text" name="text" type="text" size='25' maxlength='100' value="" title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_POST_TITLE','module'=>'SugarFeed'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 "/></td>
      <td nowrap="nowrap">
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LBL_POST']->value;?>
" class="button" style="vertical-align:top" onclick="SugarFeed.pushUserFeed('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
</td>
    </tr>
</table>
<div id='more_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='display:none;padding-top:5px'>
<table>
<tr>
    <td><?php echo smarty_function_html_options(array('name'=>'link_type','options'=>$_smarty_tpl->tpl_vars['link_types']->value),$_smarty_tpl);?>
</td>
    <td><input type='text' name='link_url' title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_URL_LINK_TITLE','module'=>'SugarFeed'),$_smarty_tpl);?>
"  size='30'/></td>

</tr>
</table>
</div>
</div>

</form>

<form name='SugarFeedReplyForm_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' id='SugarFeedReplyForm_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
<input type='hidden' name='parentFeed' value=''>
<div style='white-space:nowrap; display: none;'>
 <table border=0 cellspacing=0 cellpadding=2>
    <tr>
      <td nowrap="nowrap"><b><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</b>&nbsp;</td>
      <td style="padding-right: 5px;"><input id="text" name="text" type="text" size='25' maxlength='100' value="" /></td>
      <td nowrap="nowrap">
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LBL_POST']->value;?>
" class="button" style="vertical-align:top" onclick="SugarFeed.replyToFeed('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;"></td>
    </tr>
</table>
</div>
</form>

<?php }
}
