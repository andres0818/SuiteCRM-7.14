<?php
/* Smarty version 4.3.1, created on 2023-09-25 22:42:31
  from 'C:\xampp\htdocs\SuiteCRM-7.14\include\MVC\View\tpls\displayLoginJS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511f0b77eb959_32596244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e25578fbd45c9ba2f1535ea7e5ecd2ba4eb531c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14\\include\\MVC\\View\\tpls\\displayLoginJS.tpl',
      1 => 1694724679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511f0b77eb959_32596244 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var module_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['MODULE_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">var action_sugar_grp1 = '<?php echo $_smarty_tpl->tpl_vars['ACTION_SUGAR_GRP1']->value;?>
';<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_JQUERY']->value;?>
" z><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1_YUI']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SUGAR_GRP1']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['CALENDAR']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    if ( typeof(SUGAR) == 'undefined' ) {SUGAR = {}};
    if ( typeof(SUGAR.themes) == 'undefined' ) SUGAR.themes = {};

<?php echo '</script'; ?>
>

<?php }
}
