<?php /* Smarty version Smarty-3.1.21-dev, created on 2022-04-19 23:44:13
         compiled from "vistas\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1083366842625f4579231611-82949049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd98b4871f0f472aa79bb19fc672838458146442f' => 
    array (
      0 => 'vistas\\home.tpl',
      1 => 1650411852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083366842625f4579231611-82949049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_625f4579258604_18797507',
  'variables' => 
  array (
    'grupos' => 0,
    'grupo' => 0,
    'pais' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625f4579258604_18797507')) {function content_625f4579258604_18797507($_smarty_tpl) {?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Mundial 2022
    </title>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php echo '<script'; ?>
 src="scripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    <?php echo '</script'; ?>
>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container" >
        <ul class="nav nav-tabs" style="display: flex; flex-direction: row; justify-content: space-around; list-style-type: none;">
        <?php  $_smarty_tpl->tpl_vars['grupo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grupo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grupo']->key => $_smarty_tpl->tpl_vars['grupo']->value) {
$_smarty_tpl->tpl_vars['grupo']->_loop = true;
?>
            <li class="active nav-item"><a class="nav-link" data-toggle="tab" href="#B" onclick="mostrar('<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['grupo']->value->getNombre_grupo(), 'UTF-8');?>
')"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['grupo']->value->getNombre_grupo(), 'UTF-8');?>
</a></li>
            
        <?php } ?> 
        </ul>
    </div>
    <?php  $_smarty_tpl->tpl_vars['grupo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grupo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grupo']->key => $_smarty_tpl->tpl_vars['grupo']->value) {
$_smarty_tpl->tpl_vars['grupo']->_loop = true;
?>
    <div class="container" id="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['grupo']->value->getNombre_grupo(), 'UTF-8');?>
">
        <h1 style="color: rgb(32, 160, 0); text-align: center;">
            GRUPO <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['grupo']->value->getNombre_grupo(), 'UTF-8');?>

        </h1>
        <table id="tableA" class="table table-hover">
            <thead>
                <tr>
                    <th>Equipo:</th>
                    <th>Puntos</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['pais'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pais']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupo']->value->getPaises(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pais']->key => $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['pais']->value->getNombre();?>
</td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <?php } ?> 
</body>

</html><?php }} ?>
