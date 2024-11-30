<?php
/* Smarty version 3.1.48, created on 2024-11-30 01:05:14
  from 'C:\xampp\htdocs\php_05_namespaces\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674a56ba2df807_10959990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6c1555b04d7aced66f2229f72a97fcb22d74e7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_namespaces\\app\\views\\CalcView.tpl',
      1 => 1732925113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674a56ba2df807_10959990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1184984948674a56ba2c7ec4_16549601', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1691370112674a56ba2c8a96_11902115', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1184984948674a56ba2c7ec4_16549601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1184984948674a56ba2c7ec4_16549601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
treść stopki<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1691370112674a56ba2c8a96_11902115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1691370112674a56ba2c8a96_11902115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-g"></div>
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<!-- <a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
calcCredit" method="post">
			<legend><h2 class="content-head is-center">Kalkulator kredytowy</h2></legend>
			<fieldset>
				<label for="id_kwota">Kwota: </label>
				<input id ="id_kwota" placeholder="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"/><br />
				<label for="id_odsetki">Oprocentowanie: </label>
				<input id="id_odsetki" placeholder="odsetki" type="text" name="odsetki" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->odsetki;?>
"/><br />
				<label for="id_okres">Okres (miesiące): </label>
				<input id="id_okres" placeholder="okres" type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okres;?>
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
 zł
				</p>
			<?php }?>
		</div>
	</div>	
<?php
}
}
/* {/block 'content'} */
}
