<div class="ui-widget ui-widget-content ui-corner-all main-content">
    <form id="form-edit-page" name="form-edit-page" method="post" action="">
        <div class="header-module">Edytuj projekt</div>
        <div style="text-align: right; margin-bottom: 10px;">
            <button type="button" onclick="document.location.href = '/{$router->getUrl('cms','index')}';">anuluj</button>
            <button type="submit" class="button-edit-page-save">zapisz zmiany</button>
        </div>
        <input type="hidden" id="project_id" name="project_id" value="{$details.project_id}">
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
                        <td><input type="text" id="project_title" name="project_title" value="{$details.project_title}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Numer projektu</td>
                        <td><input type="text" id="project_number" name="project_number" value="{$details.project_number}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Program</td>
                        <td><input type="text" id="project_program" name="project_program" value="{$details.project_program}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Priorytet</td>
                        <td>
                            <select id="priority_id" name="priority_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$priority_list item=pl}
                                    <option value="{$pl.priority_id}"{if $details.priority_id == $pl.priority_id} selected{/if}>{$pl.priority_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Dziedzina wsparcia/temat</td>
                        <td>
                            <select id="topic_id" name="topic_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$topic_list item=tl}
                                    <option value="{$tl.topic_id}"{if $details.topic_id == $tl.topic_id} selected{/if}>{$tl.topic_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Termin rozpoczęcia</td>
                        <td><input type="text" id="_start" name="_start" value="{$details._start}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Termin zakończenia</td>
                        <td><input type="text" id="_end" name="_end" value="{$details._end}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Beneficjent PL</td>
                        <td><input type="text" id="beneficiary" name="beneficiary" value="{$details.beneficiary}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Jednostka realizująca PL</td>
                        <td><input type="text" id="unit_name" name="unit_name" value="{$details.unit_name}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Partner PL</td>
                        <td><input type="text" id="partner_pl" name="partner_pl" value="{$details.partner_pl}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Partner CZ</td>
                        <td><input type="text" id="partner_cz" name="partner_cz" value="{$details.partner_cz}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Typ projektu</td>
                        <td>
                            <select id="type_id" name="type_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$type_list item=tl}
                                    <option value="{$tl.type_id}"{if $details.type_id == $tl.type_id} selected{/if}>{$tl.type_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tabs-2">
                <table width="100%">
                    <tr>
                        <td width="30%">Budżet planowany</td>
                        <td><input type="text" id="budget_full" name="budget_full" value="{$details.budget_full}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Planowane dofinansowanie</td>
                        <td><input type="text" id="budget_grant" name="budget_grant" value="{$details.budget_grant}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Budżet wykonany</td>
                        <td><input type="text" id="budget_done" name="budget_done" value="{$details.budget_done}" class="input-text" /></td>
                    </tr>
                    <tr>
                        <td>Dofinansowanie dla projektu z EFRR</td>
                        <td><input type="text" id="budget_efrr" name="budget_efrr" value="{$details.budget_efrr}" class="input-text" /></td>
                    </tr>
                </table>
            </div>
            <div id="tabs-3">
                <p class="ui-helper-clearfix"><label>Krótki opis projektu</label></p>
                <p><textarea id="project_description" name="project_description" class="input-textarea ckeditor">{$details.project_description}</textarea></p>
                <p class="ui-helper-clearfix"><label>Krótki opis zrealizowanych działań</label></p>
                <p><textarea id="project_report" name="project_report" class="input-textarea ckeditor">{$details.project_report}</textarea></p>
                <p class="ui-helper-clearfix"><label>Efekty projektu/produkty projektu – zrealizowane</label></p>
                <p><textarea id="project_effect" name="project_effect" class="input-textarea ckeditor">{$details.project_effect}</textarea></p>
                <p class="ui-helper-clearfix"><label>Strona www projektu</label></p>
                <p><textarea id="project_www" name="project_www" class="input-textarea ckeditor">{$details.project_www}</textarea></p>
                <p class="ui-helper-clearfix"><label>Koordynator projektu + kontakt</label></p>
                <p><textarea id="project_coordinator" name="project_coordinator" class="input-textarea ckeditor">{$details.project_coordinator}</textarea></p>
                <p class="ui-helper-clearfix"><label>Galeria projektu</label></p>
                <div>
                    <select id="gallery_id" name="gallery_id">
                        <option>-- wybierz z listy -- </option>
                        {foreach from=$gallery_list item=gl}
                            <option value="{$gl.gallery_id}"{if $details.gallery_id == $gl.gallery_id} selected{/if}>{$gl.gallery_name}</option>
                        {/foreach}
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
                                {foreach from=$state_list item=sl}
                                    <option value="{$sl.state_id}"{if $details.state_id == $sl.state_id} selected{/if}>{$sl.state_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Powiat</td>
                        <td>
                            <select id="region_id" name="region_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$region_list item=rl}
                                    <option value="{$rl.region_id}"{if $details.region_id == $rl.region_id} selected{/if}>{$rl.region_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Gmina</td>
                        <td>
                            <select id="commune_id" name="commune_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$commune_list item=cl}
                                    <option value="{$cl.commune_id}"{if $details.commune_id == $cl.commune_id} selected{/if}>{$cl.commune_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Miejscowość</td>
                        <td>
                            <select id="city_id" name="city_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$city_list item=cl}
                                    <option value="{$cl.city_id}"{if $details.city_id == $cl.city_id} selected{/if}>{$cl.city_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rodzaj projektu</td>
                        <td>
                            <select id="ptype_id" name="ptype_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$ptype_list item=ptl}
                                    <option value="{$ptl.ptype_id}"{if $details.ptype_id == $ptl.ptype_id} selected{/if}>{$ptl.ptype_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rodzaj beneficjenta</td>
                        <td>
                            <select id="btype_id" name="btype_id">
                                <option>-- wybierz z listy -- </option>
                                {foreach from=$btype_list item=btl}
                                    <option value="{$btl.btype_id}"{if $details.btype_id == $btl.btype_id} selected{/if}>{$btl.btype_name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>