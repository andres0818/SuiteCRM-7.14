<?php
/* Smarty version 4.3.1, created on 2023-09-25 22:42:32
  from 'C:\xampp\htdocs\SuiteCRM-7.14\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6511f0b80ad5e5_71155717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd823db420e5e2702229536b648ede25674d8bf7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-7.14\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1694724646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511f0b80ad5e5_71155717 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
