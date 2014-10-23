{if $MENU != ''}
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">{l s="Categories" mod="blocktopmenu"}</div>
		<ul class="sf-menu clearfix menu-content">
			{$MENU}
			{if $MENU_SEARCH}
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							

							<!-- Block search module TOP -->
							<div id="search_block_top" class="col-sm-4 clearfix">
								<form id="searchbox" method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" >
									<input type="hidden" name="controller" value="search" />
									<input type="hidden" name="orderby" value="position" />
									<input type="hidden" name="orderway" value="desc" />
									<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{l s='Search' mod='blocksearch'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
									<button type="submit" name="submit_search" class="btn btn-default button-search">
										<span>{l s='Search' mod='blocksearch'}</span>
									</button>
								</form>
							</div>
							<!-- /Block search module TOP -->

						</p>
					</form>
				</li>
			{/if}
		</ul>
	</div>
	<!--/ Menu -->
{/if}