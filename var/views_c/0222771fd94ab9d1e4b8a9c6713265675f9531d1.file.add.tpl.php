<?php /* Smarty version Smarty-3.1.7, created on 2015-08-10 10:03:52
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\index\cms\templates\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602955bf5e0c572e96-56348756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0222771fd94ab9d1e4b8a9c6713265675f9531d1' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\index\\cms\\templates\\add.tpl',
      1 => 1439131530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1602955bf5e0c572e96-56348756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55bf5e0c5f360',
  'variables' => 
  array (
    'router' => 0,
    'details' => 0,
    'priority_list' => 0,
    'pl' => 0,
    'topic_list' => 0,
    'tl' => 0,
    'type_list' => 0,
    'gallery_list' => 0,
    'g' => 0,
    'gl' => 0,
    'state_list' => 0,
    'sl' => 0,
    'region_list' => 0,
    'rl' => 0,
    'commune_list' => 0,
    'cl' => 0,
    'city_list' => 0,
    'ptype_list' => 0,
    'ptl' => 0,
    'btype_list' => 0,
    'btl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf5e0c5f360')) {function content_55bf5e0c5f360($_smarty_tpl) {?><div class="ui-widget ui-widget-content ui-corner-all main-content" style="width: 900px;">
    <form id="form-add-page" name="form-add-page" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','index','edit');?>
">
        <div class="header-module">Dodaj projekt</div>
        <div style="text-align: right; margin-bottom: 10px;">
            <button type="button" onclick="document.location.href = '/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','index');?>
';">anuluj</button>
            <button type="submit" class="button-add-page-save">zapisz zmiany</button>
        </div>
        <input type="hidden" id="project_id" name="project_id" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['project_id'];?>
">
        <input type="hidden" id="content_code" name="content_code" value="">
        <input type="hidden" id="_active" name="_active" value="1">
        <div id="page-edit-tabs">
            <ul>
                <li><a href="#tabs-1">Dane podstawowe</a></li>
                <li><a href="#tabs-2">Budżet projektu</a></li>
                <li><a href="#tabs-3">Opis projektu</a></li>
                <li><a href="#tabs-4">Dane dodatkowe</a></li>
            </ul>

            <div id="tabs-1">
                <table width="100%">
                    <tr>
                        <td width="30%">Tytuł projektu</td>
                        <td><input type="text" id="project_title" name="project_title" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Numer projektu</td>
                        <td><input type="text" id="project_number" name="project_number" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Program</td>
                        <td><input type="text" id="project_program" name="project_program" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Priorytet</td>
                        <td>
                            <select id="priority_id" name="priority_id">
                                
                                <?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['priority_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value){
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['pl']->value['priority_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pl']->value['priority_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Dziedzina wsparcia/temat</td>
                        <td>
                            <select id="topic_id" name="topic_id">
                                
                                <?php  $_smarty_tpl->tpl_vars['tl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topic_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tl']->key => $_smarty_tpl->tpl_vars['tl']->value){
$_smarty_tpl->tpl_vars['tl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tl']->value['topic_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tl']->value['topic_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Termin rozpoczęcia</td>
                        <td><input type="text" id="_start" name="_start" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Termin zakończenia</td>
                        <td><input type="text" id="_end" name="_end" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Beneficjent PL</td>
                        <td><input type="text" id="beneficiary" name="beneficiary" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Jednostka realizująca PL</td>
                        <td><input type="text" id="unit_name" name="unit_name" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Partner PL</td>
                        <td><input type="text" id="partner_pl" name="partner_pl" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Partner CZ</td>
                        <td><input type="text" id="partner_cz" name="partner_cz" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Typ projektu</td>
                        <td>
                            <select id="type_id" name="type_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['tl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tl']->key => $_smarty_tpl->tpl_vars['tl']->value){
$_smarty_tpl->tpl_vars['tl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tl']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tl']->value['type_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tabs-2">
                <table width="100%">
                    <tr>
                        <td width="30%">Budżet planowany</td>
                        <td><input type="text" id="budget_full" name="budget_full" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Planowane dofinansowanie</td>
                        <td><input type="text" id="budget_grant" name="budget_grant" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Budżet wykonany</td>
                        <td><input type="text" id="budget_done" name="budget_done" value="" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Dofinansowanie dla projektu z EFRR</td>
                        <td><input type="text" id="budget_efrr" name="budget_efrr" value="" class="input-text" /></td>
                    </tr>
                </table>
            </div>
            <div id="tabs-3">
                <p class="ui-helper-clearfix"><label>Krótki opis projektu</label></p>
                <p><textarea id="project_description" name="project_description" class="input-textarea ckeditor"></textarea></p>
                <p class="ui-helper-clearfix"><label>Krótki opis zrealizowanych działań</label></p>
                <p><textarea id="project_report" name="project_report" class="input-textarea ckeditor"></textarea></p>
                <p class="ui-helper-clearfix"><label>Efekty projektu/produkty projektu – zrealizowane</label></p>
                <p><textarea id="project_effect" name="project_effect" class="input-textarea ckeditor"></textarea></p>
                <p class="ui-helper-clearfix"><label>Strona www projektu</label></p>
                <p><textarea id="project_www" name="project_www" class="input-textarea ckeditor"></textarea></p>
                <p class="ui-helper-clearfix"><label>Koordynator projektu + kontakt</label></p>
                <p><textarea id="project_contact" name="project_contact" class="input-textarea ckeditor"></textarea></p>
                <p class="ui-helper-clearfix"><label>Galeria projektu</label></p>
                <div>
                    <select id="gallery_id" name="gallery_id">
                        <option>-- wybierz z listy -- </option>
                        <?php  $_smarty_tpl->tpl_vars['gl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gl']->key => $_smarty_tpl->tpl_vars['gl']->value){
$_smarty_tpl->tpl_vars['gl']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['gallery_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gl']->value['gallery_name'];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div id="tabs-4">
                <table width="100%">
                    <tr>
                        <td width="30%">Województwo</td>
                        <td>
                            <select id="state_id" name="state_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['sl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['state_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sl']->key => $_smarty_tpl->tpl_vars['sl']->value){
$_smarty_tpl->tpl_vars['sl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['sl']->value['state_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['sl']->value['state_id']=='12'){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sl']->value['state_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Powiat</td>
                        <td>
                            <select id="region_id" name="region_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rl']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rl']->value['region_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Gmina</td>
                        <td>
                            <select id="commune_id" name="commune_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['cl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commune_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cl']->key => $_smarty_tpl->tpl_vars['cl']->value){
$_smarty_tpl->tpl_vars['cl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cl']->value['commune_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cl']->value['commune_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Miejscowość</td>
                        <td>
                            <select id="city_id" name="city_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['cl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cl']->key => $_smarty_tpl->tpl_vars['cl']->value){
$_smarty_tpl->tpl_vars['cl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cl']->value['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cl']->value['city_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rodzaj projektu</td>
                        <td>
                            <select id="ptype_id" name="ptype_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['ptl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ptl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ptype_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ptl']->key => $_smarty_tpl->tpl_vars['ptl']->value){
$_smarty_tpl->tpl_vars['ptl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ptl']->value['ptype_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ptl']->value['ptype_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rodzaj beneficjenta</td>
                        <td>
                            <select id="btype_id" name="btype_id">
                                <option>-- wybierz z listy -- </option>
                                <?php  $_smarty_tpl->tpl_vars['btl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['btype_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btl']->key => $_smarty_tpl->tpl_vars['btl']->value){
$_smarty_tpl->tpl_vars['btl']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['btl']->value['btype_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['btl']->value['btype_name'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div><?php }} ?>