<?php
/* Smarty version 5.7.0, created on 2026-01-20 01:37:27
  from 'file:_no_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_696edc57e1da93_80617413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '752c1a88e85a3f7ca3bea0ffa463438311552cbd' => 
    array (
      0 => '_no_data.tpl',
      1 => 1728035724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_696edc57e1da93_80617413 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/dunlex/public_html/content/themes/default/templates';
?><!-- no data -->
<div class="text-center text-muted mb20">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), (int) 0, $_smarty_current_dir);
?>
  <div class="text-md">
    <span class="no-data"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
