<?php
/* Smarty version 4.2.1, created on 2022-12-13 15:43:56
  from '/export/sd07/www/jp/r/e/gmoserver/0/5/sd0042905/ishikuro.be-i.net/smarty/templates/bedrooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63981f2cccb030_24825738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3ed484b5d69fe049b7a41cbc2256805b72ce6c' => 
    array (
      0 => '/export/sd07/www/jp/r/e/gmoserver/0/5/sd0042905/ishikuro.be-i.net/smarty/templates/bedrooms.tpl',
      1 => 1670901738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63981f2cccb030_24825738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<main class="grid">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bedrooms']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <a href="/bedroom.php?key=<?php echo $_smarty_tpl->tpl_vars['image']->value['key'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['img'];?>
" alt="Sample photo"></a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>      
</main>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
