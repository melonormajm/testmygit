<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 13:24:40
         compiled from "/srv/www/php/tienda-pasa/modules/novadvancedsearch/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9547857035a26f278740ad7-94019277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1f2277e86e461684f1c807b7d0df3cc2ffd006' => 
    array (
      0 => '/srv/www/php/tienda-pasa/modules/novadvancedsearch/category-tree-branch.tpl',
      1 => 1512328484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9547857035a26f278740ad7-94019277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'child' => 0,
    'id_category' => 0,
    'lever' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a26f27874f5b3_82479571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26f27874f5b3_82479571')) {function content_5a26f27874f5b3_82479571($_smarty_tpl) {?>


	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			<li class="dropdown-item" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['id_category']->value)&&$_smarty_tpl->tpl_vars['id_category']->value==$_smarty_tpl->tpl_vars['child']->value['id']) {?>selected<?php }?>>
				<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['lever']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['lever']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
					--
				<?php }} ?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8');?>

				<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'lever'=>$_smarty_tpl->tpl_vars['lever']->value+1), 0);?>

			</li>
		<?php } ?>
	<?php }?>
<?php }} ?>
