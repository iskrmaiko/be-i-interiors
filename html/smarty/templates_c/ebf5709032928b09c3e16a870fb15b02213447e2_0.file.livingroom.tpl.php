<?php
/* Smarty version 4.2.1, created on 2022-12-13 08:49:43
  from '/var/www/html/smarty/templates/livingroom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63983ca7e51f77_26962653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf5709032928b09c3e16a870fb15b02213447e2' => 
    array (
      0 => '/var/www/html/smarty/templates/livingroom.tpl',
      1 => 1670921378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63983ca7e51f77_26962653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['livingrooms']->value, 'livingroom');
$_smarty_tpl->tpl_vars['livingroom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['livingroom']->value) {
$_smarty_tpl->tpl_vars['livingroom']->do_else = false;
?>
    <?php ob_start();
echo $_GET['key'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['livingroom']->value['key'] == $_prefixVariable1) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['livingroom']->value['img'];?>
" alt="Sample photo" class="room">
        <div class="desc-box">
        <p><?php echo $_smarty_tpl->tpl_vars['livingroom']->value['description'];?>
</p>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="text-center p-3" style="background-color: #0D0000; color: #79717A;">
© 2022 Copyright:
<a style="color: #79717A;" href="/">Be-i Interiors</a>
</div>


<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"><?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
