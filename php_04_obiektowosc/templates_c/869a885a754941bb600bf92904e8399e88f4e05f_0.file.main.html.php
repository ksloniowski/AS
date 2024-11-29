<?php
/* Smarty version 3.1.48, created on 2024-11-29 18:12:38
  from 'C:\xampp\htdocs\php_04_obiektowosc\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6749f60622e711_48263644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869a885a754941bb600bf92904e8399e88f4e05f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\templates\\main.html',
      1 => 1732900135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6749f60622e711_48263644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł" : $tmp);?>
</title>

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/css/style.css">
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

    </head>
    <body>
        
        <div id="app_top" class="header">
           <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->
           <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł" : $tmp);?>
</a>
                <ul>
                    <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
                    <li><a href="#app_content">Idź do formularza</a></li>
                </ul>
            </div>
        </div>

        <div class="splash-container">
            <div class="splash">
                <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
                <p class="splash-subhead">
                     <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

                </p>
                <p>
                    <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
                </p>
            </div>
        </div>

        <div class="content-wrapper">

            <div id="app_content" class="content">
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19314618166749f60622d907_82465545', 'content');
?>

        
            </div>
        
            <div class="footer l-box is-center">
                <p>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11779748016749f60622e012_78127651', 'footer');
?>

                </p>
            </div>
        
        </div>

    </body>
</html><?php }
/* {block 'content'} */
class Block_19314618166749f60622d907_82465545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19314618166749f60622d907_82465545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_11779748016749f60622e012_78127651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11779748016749f60622e012_78127651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
