<?php
/* Smarty version 3.1.31-dev/46, created on 2016-11-24 13:26:48
  from "H:\p3t\phpappfolder\public_php\m2m-sms\includes\main\layouts\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/46',
  'unifunc' => 'content_5836ea984b6fe3_19426101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ca3a72887acb1085938a31fa37d9c982718552' => 
    array (
      0 => 'H:\\p3t\\phpappfolder\\public_php\\m2m-sms\\includes\\main\\layouts\\index.tpl',
      1 => 1479992802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5836ea984b6fe3_19426101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308935836ea984b3163_12747508', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_308935836ea984b3163_12747508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_308935836ea984b3163_12747508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h3>Welcome to M2M Connect SMS -> PHP Processing</h3>
	<p>
		To start create an account, <a href="">here</a>.
	</p>
<?php
}
}
/* {/block "content"} */
}
