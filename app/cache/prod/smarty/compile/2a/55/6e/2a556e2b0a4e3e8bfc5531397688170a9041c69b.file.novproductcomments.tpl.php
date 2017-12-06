<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 13:24:40
         compiled from "modules/novproductcomments//novproductcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12365084975a26f278844921-17238677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a556e2b0a4e3e8bfc5531397688170a9041c69b' => 
    array (
      0 => 'modules/novproductcomments//novproductcomments.tpl',
      1 => 1512328484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12365084975a26f278844921-17238677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'novproductcomments_controller_url' => 0,
    'secure_key' => 0,
    'novproductcomments_url_rewriting_activated' => 0,
    'moderation_active' => 0,
    'comments' => 0,
    'comment' => 0,
    'logged' => 0,
    'too_early' => 0,
    'allow_guests' => 0,
    'product' => 0,
    'productcomment_cover_image' => 0,
    'mediumSize' => 0,
    'criterions' => 0,
    'criterion' => 0,
    'id_product_comment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a26f27889aba3_36879335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26f27889aba3_36879335')) {function content_5a26f27889aba3_36879335($_smarty_tpl) {?>

<script type="text/javascript">
var novproductcomments_controller_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novproductcomments_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
';
var confirm_report_message = '<?php echo smartyTranslate(array('s'=>'Are you sure that you want to report this comment?','mod'=>'novproductcomments','js'=>1),$_smarty_tpl);?>
';
var secure_key = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8');?>
';
var novproductcomments_url_rewrite = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novproductcomments_url_rewriting_activated']->value, ENT_QUOTES, 'UTF-8');?>
';
var productcomment_added = '<?php echo smartyTranslate(array('s'=>'Your comment has been added!','mod'=>'novproductcomments','js'=>1),$_smarty_tpl);?>
';
var productcomment_added_moderation = '<?php echo smartyTranslate(array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','mod'=>'novproductcomments','js'=>1),$_smarty_tpl);?>
';
var productcomment_title = '<?php echo smartyTranslate(array('s'=>'New comment','mod'=>'novproductcomments','js'=>1),$_smarty_tpl);?>
';
var productcomment_ok = '<?php echo smartyTranslate(array('s'=>'OK','mod'=>'novproductcomments','js'=>1),$_smarty_tpl);?>
';
var moderation_active = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moderation_active']->value, ENT_QUOTES, 'UTF-8');?>
;
</script>

<div class="tab-pane fade in" id="reviews">
	<div id="product_comments_block_tab">
	<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
			<div class="comment clearfix">
				<div class="comment_author">
					<span><?php echo smartyTranslate(array('s'=>'Grade','mod'=>'novproductcomments'),$_smarty_tpl);?>
&nbsp</span>
					<div class="star_content clearfix">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['grade']<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
								<div class="star"></div>
							<?php } else { ?>
								<div class="star star_on"></div>
							<?php }?>
						<?php endfor; endif; ?>
					</div>
					<div class="comment_author_infos">
						<div class="user-comment"><i class="fa fa-user-o"></i>  <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</div>
						<div class="date-comment"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8'),'full'=>0),$_smarty_tpl);?>
</div>
					</div>
				</div>
				<div class="comment_details">
					<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
					<p><?php echo htmlspecialchars(nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['comment']->value['content'],'html','UTF-8')), ENT_QUOTES, 'UTF-8');?>
</p>
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice']>0) {?>
							<li><?php echo smartyTranslate(array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'novproductcomments'),$_smarty_tpl);?>
</li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
							<?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']) {?>
							<li><?php echo smartyTranslate(array('s'=>'Was this comment useful to you?','mod'=>'novproductcomments'),$_smarty_tpl);?>
<button class="usefulness_btn yes" data-is-usefull="1" data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'yes','mod'=>'novproductcomments'),$_smarty_tpl);?>
</button><button class="usefulness_btn no" data-is-usefull="0" data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'no','mod'=>'novproductcomments'),$_smarty_tpl);?>
</button></li>
							<?php }?>
							<?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?>
							<li><span class="report_btn" data-id-product-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id_product_comment'], ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-exclamation" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Report','mod'=>'novproductcomments'),$_smarty_tpl);?>
</span></li>
							<?php }?>
						<?php }?>
					</ul>
				</div>
			</div>
			<?php }?>
		<?php } ?>
        <?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
		<p class="text-center mt-10">
			<a id="new_comment_tab_btn" class="open-comment-form btn btn-default" data-toggle="modal" data-target="#new_comment_form" href="#"><?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'novproductcomments'),$_smarty_tpl);?>
 !</a>
		</p>
        <?php }?>
	<?php } else { ?>
		<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
		<p class="text-center mt-10">
			<a id="new_comment_tab_btn" class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#"><?php echo smartyTranslate(array('s'=>'Be the first to write your review','mod'=>'novproductcomments'),$_smarty_tpl);?>
 !</a>
		</p>
		<?php } else { ?>
		<p class="text-center mt-10"><?php echo smartyTranslate(array('s'=>'No customer reviews for the moment.','mod'=>'novproductcomments'),$_smarty_tpl);?>
</p>
		<?php }?>
	<?php }?>	
	</div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value) {?>

<div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="modal-header">
    		<h4 class="modal-title text-xs-center"><i class="fa fa-edit"></i> <?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'novproductcomments'),$_smarty_tpl);?>
</h4>
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <i class="material-icons close">close</i>
	        </button>
    	</div>
		<div class="modal-body">
			<form id="id_new_comment_form" action="#">
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value) {?>
				<div class="product row no-gutters">
					<div class="product-image col-4">
						<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productcomment_cover_image']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mediumSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mediumSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value->name,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
					</div>
					<div class="product_desc col-8">
						<p class="product_name"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</p>
						<?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>

					</div>
				</div>
				<?php }?>
				<div class="new_comment_form_content">
					<div id="new_comment_form_error" class="error alert alert-danger">
						<ul></ul>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0) {?>
						<ul id="criterions_list">
						<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
							<li>
								<label><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</label>
								<div class="star_content">
									<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="1" />
									<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="2" />
									<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="3" />
									<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="4" />
									<input class="star" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="5" checked="checked" />
								</div>
								<div class="clearfix"></div>
							</li>
						<?php } ?>
						</ul>
					<?php }?>
					<label for="comment_title"><?php echo smartyTranslate(array('s'=>'Title for your review','mod'=>'novproductcomments'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<input id="comment_title" name="title" type="text" value=""/>

					<label for="content"><?php echo smartyTranslate(array('s'=>'Your review','mod'=>'novproductcomments'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<textarea id="content" name="content"></textarea>

					<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value==true&&!$_smarty_tpl->tpl_vars['logged']->value) {?>
					<label><?php echo smartyTranslate(array('s'=>'Your name','mod'=>'novproductcomments'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
					<input id="commentCustomerName" name="customer_name" type="text" value=""/>
					<?php }?>

					<div id="new_comment_form_footer">
						<input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_comment_form']->value, ENT_QUOTES, 'UTF-8');?>
' />
						<div class="fl"><sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'novproductcomments'),$_smarty_tpl);?>
</div>
						<div class="fr">
							<button id="submitNewMessage" data-dismiss="modal" aria-label="Close" class="btn btn-primary" name="submitMessage" type="submit"><?php echo smartyTranslate(array('s'=>'Send','mod'=>'novproductcomments'),$_smarty_tpl);?>
</button>
						</div>
					</div>
				</div>
			</form><!-- /end new_comment_form_content -->
		</div>
		</div>
	</div>
</div>

<?php }?>
<?php }} ?>
