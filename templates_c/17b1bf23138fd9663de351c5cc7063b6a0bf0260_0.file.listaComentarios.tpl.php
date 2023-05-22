<?php
/* Smarty version 4.3.1, created on 2023-05-22 02:36:52
  from 'C:\xampp\htdocs\comentarios\vista\templates\listaComentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646ab9244d2b56_47636182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b1bf23138fd9663de351c5cc7063b6a0bf0260' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comentarios\\vista\\templates\\listaComentarios.tpl',
      1 => 1684715708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646ab9244d2b56_47636182 (Smarty_Internal_Template $_smarty_tpl) {
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
  
</ul>
<div class="separador"></div><?php }
}
