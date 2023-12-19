<?php
/* Smarty version 4.3.1, created on 2023-09-21 23:57:38
  from 'C:\xampp\htdocs\SuiteCRM-7.14\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650cbc52236224_36447398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '871365be8645457a6ed18bf3050e88f4d7b0165b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1694724704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650cbc52236224_36447398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
