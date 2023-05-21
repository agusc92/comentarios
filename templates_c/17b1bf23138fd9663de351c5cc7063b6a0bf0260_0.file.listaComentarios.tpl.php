<?php
/* Smarty version 4.3.1, created on 2023-05-22 01:06:23
  from 'C:\xampp\htdocs\comentarios\vista\templates\listaComentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646aa3ef2875c6_42766175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b1bf23138fd9663de351c5cc7063b6a0bf0260' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comentarios\\vista\\templates\\listaComentarios.tpl',
      1 => 1684710380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646aa3ef2875c6_42766175 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="list-group list-group-flush">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['comentario'];?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
</ul><?php }
}
