<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-10 15:06:54
         compiled from "application\templates\investment\widget\left-subcribe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13162584bb79e6a39e6-07722877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e71da97373f3976246bbd43be8b30a94156b55' => 
    array (
      0 => 'application\\templates\\investment\\widget\\left-subcribe.tpl',
      1 => 1481356450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13162584bb79e6a39e6-07722877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_584bb79e6a7334_16294156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584bb79e6a7334_16294156')) {function content_584bb79e6a7334_16294156($_smarty_tpl) {?>                <div class="box categories">
                    <h4>Subcribe</h4>
                    <ul>
                        <li>
                            <div>
                                <form id="subcribeFrm" name="subcribeFrm" class="validationFrm">
                                    <div class="pull-top pull-bottom">
                                        <div class=" control-group ">
                                            <input type="text" class="form-control validate[required,maxSize[50]]" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="pull-bottom pull-top">
                                        <div class="control-group">
                                            <input type="text" class="form-control validate[required,custom[email]]" placeholder="Email" >
                                        </div>
                                    </div>
                                    <div class=" pull-top">
                                    <button type="submit" class="btn btn-orange btn-block"><span>Submit</span></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div><?php }} ?>
