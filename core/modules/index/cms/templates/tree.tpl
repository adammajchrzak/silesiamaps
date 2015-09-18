<div class="ui-widget ui-corner-all main-content" style="width: 900px;">
    <div class="page-add" style="text-align: right; margin-bottom: 10px;"><button onclick="document.location.href = '/{$router->getUrl('cms','index','add')}'" class="button-add-text">dodaj projekt</button></div>
    {foreach item=list name=list from=$project_list}
        <div class="list-row">
            <div class="list-row-element-name">
                &nbsp;&nbsp;{if $list._name != 0}<span style="color: #FF0000;">[{$list._name}]</span>{/if}&nbsp;
                <a href="/{$router->getUrl('cms','index','edit',$list.project_id)}">{$list.project_title|truncate}</a>
                
            </div>
            <span class="edit-set">
                <button class="button-edit" onclick="document.location.href = '/{$router->getUrl('cms','index','edit',$list.project_id)}'">edytuj</button>
                <button class="button-delete" title="delete" value="{$list.project_id}">usuń</button>
            </span>
            <span class="move-set">
                <button class="button-move-down" title="DOWN" value="{$list.project_id}">przesuń w dół</button>
                <button class="button-move-up" title="UP" value="{$list.project_id}">przesuń w górę</button>
            </span>
            <div class="ui-helper-clearfix"></div>
        </div>
    {/foreach}
</div>