<?php
/* Smarty version 3.1.29, created on 2016-07-12 10:55:16
  from "C:\xampp\htdocs\pm\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5784b074a2fef6_29473981',
  'file_dependency' => 
  array (
    '53cffda71e66a2674e0d68e198e73ccd9eaae999' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pm\\templates\\index.tpl',
      1 => 1468313715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5784b074a2fef6_29473981 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zeiterfassung</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="IE=10">
        <meta charset='utf-8' />
        
        
        
        <link href="/bin/custom/css/main.css" type="text/css">
        
        
        <?php echo '<script'; ?>
 src="/bin/custom/js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
        
    </head>

    <body>
        <div class="container" id="frame">
            <!-- Header -->       
            <div class="row container">
                <div class="page-header">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>

            <!-- Navigation -->
            <div class="row container">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <!-- Inhalt -->
            <div class="row container" id="inhalt">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>

            <!-- Footer -->
            <div class="row container" id="footer">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </body><?php }
}