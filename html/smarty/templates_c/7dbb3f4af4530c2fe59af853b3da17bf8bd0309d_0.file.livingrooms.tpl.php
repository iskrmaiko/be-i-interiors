<?php
/* Smarty version 4.2.1, created on 2022-12-13 05:58:15
  from '/var/www/html/smarty/templates/livingrooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63981477827708_70750242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dbb3f4af4530c2fe59af853b3da17bf8bd0309d' => 
    array (
      0 => '/var/www/html/smarty/templates/livingrooms.tpl',
      1 => 1670902079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63981477827708_70750242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<main class="grid2">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['livingrooms']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <a href="/livingroom.php?key=<?php echo $_smarty_tpl->tpl_vars['image']->value['key'];?>
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
