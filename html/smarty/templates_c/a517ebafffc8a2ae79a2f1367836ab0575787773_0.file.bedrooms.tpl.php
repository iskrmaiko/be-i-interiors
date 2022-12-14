<?php
/* Smarty version 4.2.1, created on 2022-12-13 05:58:10
  from '/var/www/html/smarty/templates/bedrooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63981472548b11_86903949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a517ebafffc8a2ae79a2f1367836ab0575787773' => 
    array (
      0 => '/var/www/html/smarty/templates/bedrooms.tpl',
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
function content_63981472548b11_86903949 (Smarty_Internal_Template $_smarty_tpl) {
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
