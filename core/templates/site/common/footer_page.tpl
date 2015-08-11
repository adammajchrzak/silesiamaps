<div id="footer-page">
	<div class="footer-logos">
		<ul>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('33','pl'),'33')}" class="footer-er-link-01"><div class="footer-er-logo-01"></div></a><a href="/{$router->getUrl('pl','index',$router->getItemCode('33','pl'),'33')}" class="footer-er-link-01">Euroregion<br/>Beskidy</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('42','pl'),'42')}" class="footer-er-link-02"><div class="footer-er-logo-02"></div></a><a href="/{$router->getUrl('pl','index',$router->getItemCode('42','pl'),'42')}" class="footer-er-link-02">Euroregion<br/>Glacensis</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('87','pl'),'87')}" class="footer-er-link-03"><div class="footer-er-logo-03"></div></a><a href="/{$router->getUrl('pl','index',$router->getItemCode('87','pl'),'87')}" class="footer-er-link-03">Euroregion<br/>Nysa</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('57','pl'),'57')}" class="footer-er-link-04"><div class="footer-er-logo-04"></div></a><a href="/{$router->getUrl('pl','index',$router->getItemCode('57','pl'),'57')}" class="footer-er-link-04">Euroregion<br/>Pradziad</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('18','pl'),'18')}" class="footer-er-link-05{if $main_menu == '05'} selected{/if}"><div class="footer-er-logo-05"></div></a><a href="/{$router->getUrl('pl','index',$router->getItemCode('18','pl'),'18')}" class="footer-er-link-05">Euroregion<br/>Silesia</a></li>
			<li style="margin-right: 0px !important;"><a href="/{$router->getUrl('pl','index',$router->getItemCode('72','pl'),'72')}" class="footer-er-link-06"><div class="footer-er-logo-06"></div></a><a href="/{$router->getUrl('pl','index',$router->getItemCode('72','pl'),'72')}" class="footer-er-link-06">Euroregion<br/>Śląsk Cieszyński</a></li>
		</ul>
	</div> 
	<div class="footer-green">
		<div id="footer-bottom">
			<div id="footer-copyright">Copyright &copy; EUREGIO PL-CZ</div>
			<div id="footer-design">{if $config->current_locale == 'pl' || $config->current_locale == 'cz'}{$locale.site.index.footer.project}{else}Projekt i realizacja{/if}: netiz.pl</div>
		</div>
	</div>
</div>