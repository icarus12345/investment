<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-17 10:15:21
         compiled from "application\templates\eye\widget\01_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1814458f433493205a4-01757230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb266eb86e230097be6ebfc32740d8fe7822ff20' => 
    array (
      0 => 'application\\templates\\eye\\widget\\01_slider.tpl',
      1 => 1488157394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1814458f433493205a4-01757230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sliders' => 0,
    'foo' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f43349462c63_00705088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f43349462c63_00705088')) {function content_58f43349462c63_00705088($_smarty_tpl) {?>        <div id="owl-home" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                <li data-target="#owl-home" data-slide-to="0" class="<?php if ($_smarty_tpl->tpl_vars['foo']->value->_id==$_smarty_tpl->tpl_vars['sliders']->value[0]->_id) {?>active<?php }?>">0<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</li>
                <?php } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                <div class="item cover <?php if ($_smarty_tpl->tpl_vars['foo']->value->_id==$_smarty_tpl->tpl_vars['sliders']->value[0]->_id) {?>active<?php }?>" style="background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['image'], ENT_QUOTES, 'UTF-8', true);?>
')">
                    <div class="home-content">
                        <div class="tit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <p class="lab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['desc'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value->_data['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><span>Read more</span></a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- <a class="left carousel-control" href="#owl-home" role="button" data-slide="prev"></a> -->
            <!-- <a class="right carousel-control" href="#owl-home" role="button" data-slide="next"></a> -->
        </div><?php }} ?>
