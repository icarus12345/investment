<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-14 14:12:32
         compiled from "application\templates\dashboard\cp\seo\editPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2556658f076601e52e5-42410431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a707b010847e2d1b94aa872c98b60b9ebda757a' => 
    array (
      0 => 'application\\templates\\dashboard\\cp\\seo\\editPanel.tpl',
      1 => 1484552883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2556658f076601e52e5-42410431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'seo_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f076603e0988_34944830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f076603e0988_34944830')) {function content_58f076603e0988_34944830($_smarty_tpl) {?>
<input 
    type="hidden" 
    value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value->seo_id)===null||$tmp==='' ? '' : $tmp);?>
" 
    id="SeoEntryId"
    />
<form name="seoForm" id="seoForm" target="integration_asynchronous">
    <?php if ($_smarty_tpl->tpl_vars['seo_key']->value) {?>
    <input type="hidden" name="seo_key" id="seo_key" 
           value="<?php echo (($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['item']->value->seo_key)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['seo_key']->value : $tmp))===null||$tmp==='' ? '' : $tmp);?>
"/>
    <?php } else { ?>
    <div class="pull-bottom control-group">
        <div>Key :(*)</div>
        <input type="text" class="form-control validate[required]" 
               placeholder="Key"
               name="seo_key"
               data-prompt-position="topLeft:0,20"
               value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->seo_key))===null||$tmp==='' ? '' : $tmp);?>
"
               />
    </div>
    <?php }?>
    <div class="pull-bottom control-group">
        <div>Title :(*)</div>
        <input type="text" class="form-control validate[required,minSize[4],maxSize[255]]" 
               placeholder="Title"
               name="seo_social_title"
               data-prompt-position="topLeft:0,20"
               value="<?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->seo_social_title))===null||$tmp==='' ? '' : $tmp);?>
"
               />
    </div>
    <div class="pull-bottom control-group">
        <div>Image :(*)</div>
            <div class="input-append">
                <input type="text" 
                    class="form-control validate[required,maxSize[255]]"
                    data-prompt-position="topLeft:0,20"
                    value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->seo_social_image, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" 
                    name="seo_social_image" 
                    id="seo_social_image"
                    >
                <span class="add-on popovers" 
                      data-container="body" 
                      data-trigger="hover" 
                      data-placement="top" 
                      data-toggle="popover"
                      data-content="<img style='max-width:100px' src='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->seo_social_image, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '/libraries/images/no_image_available.png' : $tmp);?>
'/>" 
                      data-original-title="Image Preview"
                      title="Choose Image"
                    onclick="BrowseServer('#seo_social_image')">
                    <i class="fa fa-image"></i>
                </span>
            </div>
    </div>   
    <div class="control-group pull-bottom">
        <div>
            Desc :
        </div>
        <textarea class="form-control de-desc" 
                  rows="2"
                  name="seo_social_desc"
                  ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->seo_social_desc))===null||$tmp==='' ? '' : $tmp);?>
</textarea>

    </div>
    <div class="control-group pull-bottom">
        <div>
            Keyword :
        </div>
        <textarea class="form-control de-desc" 
                  rows="2"
                  name="seo_social_keyword"
                  ><?php echo (($tmp = @quotes_to_entities($_smarty_tpl->tpl_vars['item']->value->seo_social_keyword))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
    </div>
</form>
<?php }} ?>
