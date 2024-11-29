<?php
/* Smarty version 3.1.48, created on 2024-11-29 18:13:21
  from 'C:\xampp\htdocs\php_04_obiektowosc\app\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6749f63174ef07_58806460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4591d15b97822c58a85058ff79bc9fd93d6978c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\calcView.html',
      1 => 1732899630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6749f63174ef07_58806460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11288712846749f63173e3a1_01545001', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16966413086749f63173eda7_51917639', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['config']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_11288712846749f63173e3a1_01545001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11288712846749f63173e3a1_01545001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
treść stopki<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_16966413086749f63173eda7_51917639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16966413086749f63173eda7_51917639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-g"></div>
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<!-- <a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/app/calc.php" method="post">
			<legend><h2 class="content-head is-center">Kalkulator kredytowy</h2></legend>
			<fieldset>
				<label for="id_kwota">Kwota: </label>
				<input id ="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"/><br />
				<label for="id_odsetki">Oprocentowanie: </label>
				<input id="id_odsetki" type="text" name="odsetki" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->odsetki;?>
"/><br />
				<label for="id_okres">Okres (miesiące): </label>
				<input id="id_okres" type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okres;?>
"/><br />
			</fieldset>
			<button type="submit" class="pure-button">Oblicz</button>
		</form>

		<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<h4>Wystąpiły błędy: </h4>
				<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?> 
				<h4>Informacje: </h4>
				<ol class="inf">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
				<h4>Wynik</h4>
				<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

				</p>
			<?php }?>
		</div>
	</div>	
<?php
}
}
/* {/block 'content'} */
}
