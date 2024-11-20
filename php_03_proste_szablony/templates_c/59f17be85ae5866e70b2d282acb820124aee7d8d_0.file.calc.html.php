<?php
/* Smarty version 3.1.48, created on 2024-11-20 22:44:36
  from 'C:\xampp\htdocs\php_03_proste_szablony\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_673e5844ee31d8_04342858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f17be85ae5866e70b2d282acb820124aee7d8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_proste_szablony\\app\\calc.html',
      1 => 1732051853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673e5844ee31d8_04342858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980001038673e5844ecabc4_25515502', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_505892931673e5844ecb8f2_92729782', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_980001038673e5844ecabc4_25515502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_980001038673e5844ecabc4_25515502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
treść stopki<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_505892931673e5844ecb8f2_92729782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_505892931673e5844ecb8f2_92729782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-g"></div>
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<!-- <a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
			<legend><h2 class="content-head is-center">Kalkulator kredytowy</h2></legend>
			<fieldset>
				<label for="id_kwota">Kwota: </label>
				<input id ="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
"/><br />
				<label for="id_odsetki">Oprocentowanie: </label>
				<input id="id_odsetki" type="text" name="odsetki" value="<?php echo $_smarty_tpl->tpl_vars['odsetki']->value;?>
"/><br />
				<label for="id_okres">Okres (miesiące): </label>
				<input id="id_okres" type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['okres']->value;?>
"/><br />
			</fieldset>
			<button type="submit" class="pure-button">Oblicz</button>
		</form>

		<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

			<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
				<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
					<h4>Wystąpiły błędy: </h4>
					<ol class="err">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php }?>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
				<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
					<h4>Informacje: </h4>
					<ol class="inf">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php }?>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
				<h4>Wynik</h4>
				<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

				</p>
			<?php }?>
		</div>
	</div>	
<?php
}
}
/* {/block 'content'} */
}
