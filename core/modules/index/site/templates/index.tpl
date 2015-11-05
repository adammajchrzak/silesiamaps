<div id="page-index-content">
    <div id="page-content-left">
        <div id="mapContainer"></div>
        <div id="mapDetails">
            <div id="up"><< powrót</div>
            <div id="mapDetailsContent"></div>
        </div>
    </div>
    <div id="page-content-right">
        <div id="page-content-right-header">
            <h3>WYSZUKIWARKA</h3>
            ZREALIZOWANYCH PROJEKTÓW
        </div>
        <form method="get" action="/">

            <div>
                <input type="text" id="title" name="title" value="{$selected['title']}" placeholder="Tytuł projektu" />
            </div>

            <div class="styled-select">
                <select id="stateId" name="stateId">
                    <option value="">Województwo</option>
                    {foreach $stateList as $state}
                        <option value="{$state.state_id}"{if $selected.stateId === $state.state_id} selected{/if}>{$state.state_name}</option>
                    {/foreach}   
                </select>
            </div>

            <div class="styled-select">
                <select id="regionId" name="regionId">
                    <option value="">Powiat</option>
                    {foreach $regionList as $region}
                        <option value="{$region.region_id}"{if $selected.regionId === $region.region_id} selected{/if}>{$region.region_name}</option>
                    {/foreach}   
                </select>
            </div>    

            <div class="styled-select">
                <select id="communeId" name="communeId">
                    <option value="">Gmina</option>
                    {foreach $communeList as $commune}
                        <option value="{$commune.commune_id}"{if $selected.communeId === $commune.commune_id} selected{/if}>{$commune.commune_name}</option>
                    {/foreach}   
                </select>
            </div>

            <div class="styled-select">
                <select id="cityId" name=cityId>
                    <option value="">Miejscowość</option>
                    {foreach $cityList as $city}
                        <option value="{$city.city_id}"{if $selected.cityId === $city.city_id} selected{/if}>{$city.city_name}</option>
                    {/foreach}   
                </select>
            </div>    

            <div class="styled-select">
                <select id="bTypeId" name="bTypeId">
                    <option value="">Rodzaj beneficjenta</option>
                    {foreach $btList as $bt}
                        <option value="{$bt.btype_id}"{if $selected.bTypeId === $bt.btype_id} selected{/if}>{$bt.btype_name}</option>
                    {/foreach}   
                </select>
            </div>    

            <div class="styled-select">
                <select id="pTypeId" name="pTypeId">
                    <option value="">Rodzaj projektu</option>
                    {foreach $ptList as $pt}
                        <option value="{$pt.ptype_id}"{if $selected.pTypeId === $pt.ptype_id} selected{/if}>{$pt.ptype_name}</option>
                    {/foreach}   
                </select>
            </div> 
            <button type="submit">WYSZUKAJ</button>
        </form>
    </div>
    <div style="clear: both;"></div>
    {if (sizeof($projectList) > 0) }
    <h2>WYNIKI WYSZUKIWANIA</h2>        
    <table id="projectList" cellspacing="0">
        <tr>
            <th>Tytuł projektu</th>
            <th>Województwo</th>
            <th>Powiat</th>
            <th>Gmina</th>
            <th>Miejscowość</th>
            <th>Rodzaj beneficjenta</th>
            <th>Rodzaj projektu</th>
        </tr>

        {foreach $projectList as $item}
            <tr>
                <td><a href="/index/{$item.project_id}">{$item.project_title}</a></td>
                <td>{$item.state_name}</td>
                <td>{$item.region_name}</td>
                <td>{$item.commune_name}</td>
                <td>{$item.city_name}</td>
                <td>{$item.btype_name}</td>
                <td>{$item.ptype_name}</td>
            </tr>
        {/foreach}    
    </table>
    {/if}
</div>
{literal}
<script>
$(function() {{/literal}
	{if $selected.stateId != '' && $selected.stateId != '0'}
    {literal}
    $('#mapContainer').hide();
    $('#page-content-left').css({
       'background-size': '25% 25%',
       'background-position': 'left bottom'
    });
    $('#mapDetails').show();
    {/literal}
        {else}
    {literal}
    setTimeout(function(){
        $('#page-content-left').css({
           'background-size': '25% 25%',
           'background-position': 'left bottom'
        });
        $('#mapContainer').show({
            duration: 2000,
        });
    }, 3000);
    {/literal}        
    {/if}{literal}
});	
</script>
{/literal}