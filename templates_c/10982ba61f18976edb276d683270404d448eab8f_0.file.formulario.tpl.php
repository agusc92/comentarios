<?php
/* Smarty version 4.3.1, created on 2023-05-22 02:33:51
  from 'C:\xampp\htdocs\comentarios\vista\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646ab86f0083c8_71528185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10982ba61f18976edb276d683270404d448eab8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\comentarios\\vista\\templates\\formulario.tpl',
      1 => 1684715442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646ab86f0083c8_71528185 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Escriba su comentario</label>
        <textarea class="form-control" aria-placeholder="escriba su comentario aqui"></textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Comentar</button>
</form><?php }
}
