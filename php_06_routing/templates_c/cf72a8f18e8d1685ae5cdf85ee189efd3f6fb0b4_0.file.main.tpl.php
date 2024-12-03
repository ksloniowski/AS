<?php
/* Smarty version 3.1.48, created on 2024-12-03 19:23:28
  from 'C:\xampp\htdocs\php_06_role\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674f4ca0e8ef37_70494343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf72a8f18e8d1685ae5cdf85ee189efd3f6fb0b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_role\\app\\views\\templates\\main.tpl',
      1 => 1733095821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674f4ca0e8ef37_70494343 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css"> -->
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
           <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł" : $tmp);?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122660803674f4ca0e8e0f2_39988539', 'content');
?>

        
            </div>
        
            <div class="footer l-box is-center">
                <p>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1489808358674f4ca0e8e852_78397056', 'footer');
?>

                </p>
            </div>
        
        </div>

    </body>
</html><?php }
/* {block 'content'} */
class Block_122660803674f4ca0e8e0f2_39988539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122660803674f4ca0e8e0f2_39988539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1489808358674f4ca0e8e852_78397056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1489808358674f4ca0e8e852_78397056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
