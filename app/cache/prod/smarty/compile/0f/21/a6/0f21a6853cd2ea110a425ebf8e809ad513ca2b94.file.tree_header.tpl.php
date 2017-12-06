<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 13:23:12
         compiled from "/srv/www/php/tienda-pasa/admin837srxmaf/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20472010285a26f220e196b8-24834424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f21a6853cd2ea110a425ebf8e809ad513ca2b94' => 
    array (
      0 => '/srv/www/php/tienda-pasa/admin837srxmaf/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1512328484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20472010285a26f220e196b8-24834424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a26f220e1edd1_22886043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26f220e1edd1_22886043')) {function content_5a26f220e1edd1_22886043($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
