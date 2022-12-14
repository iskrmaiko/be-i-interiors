<?php
/* Smarty version 4.2.1, created on 2022-12-13 15:49:27
  from '/export/sd07/www/jp/r/e/gmoserver/0/5/sd0042905/ishikuro.be-i.net/smarty/templates/bedroom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_639820777a2c70_10958183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547cb948820d5a466031ced096c5e875c341e5f6' => 
    array (
      0 => '/export/sd07/www/jp/r/e/gmoserver/0/5/sd0042905/ishikuro.be-i.net/smarty/templates/bedroom.tpl',
      1 => 1670900593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_639820777a2c70_10958183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bedrooms']->value, 'bedroom');
$_smarty_tpl->tpl_vars['bedroom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bedroom']->value) {
$_smarty_tpl->tpl_vars['bedroom']->do_else = false;
?>
    <?php ob_start();
echo $_GET['key'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['bedroom']->value['key'] == $_prefixVariable1) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['bedroom']->value['img'];?>
" alt="Sample photo" class="room">
        <div class="desc-box">
        <p><?php echo $_smarty_tpl->tpl_vars['bedroom']->value['description'];?>
</p>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
