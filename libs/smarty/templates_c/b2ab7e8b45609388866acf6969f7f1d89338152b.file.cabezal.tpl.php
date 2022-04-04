<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 22:44:11
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9412551095db77b5d9-70471152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ab7e8b45609388866acf6969f7f1d89338152b' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1427150650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9412551095db77b5d9-70471152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551095db77e7a3_73710936',
  'variables' => 
  array (
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551095db77e7a3_73710936')) {function content_551095db77e7a3_73710936($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="index.php">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value=''>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav><?php }} ?>
