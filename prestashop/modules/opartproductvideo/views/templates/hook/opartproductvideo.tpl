<h3 id="#idTabOpartFaq" class="idTabHrefShort page-product-heading">{l s='VIDEO' mod='opartfaq'}</h3>
<div id="idTabOpartProducVideo" class="rte">
{foreach from=$result item=video}
	<div class="block {$video->className}">
		<h2>{$video->publicTitle}</h2>
		{if $video->getVideoInfo()=="youtube"}
			<iframe width="{$video->width}" height="{$video->height}" src="//www.youtube.com/embed/{$video->getYoutubeId()}" frameborder="0" allowfullscreen></iframe>
		{/if}
		{if $video->getVideoInfo()=="dailymotion"}
			<iframe frameborder="0" width="{$video->width}" height="{$video->height}" src="http://www.dailymotion.com/embed/video/{$video->getDailymotionId()}"></iframe>
		{/if}
		{if $video->getVideoInfo()=="vimeo"}
			<iframe src="http://player.vimeo.com/video/{$video->getVimeoId()}" width="{$video->width}" height="{$video->height}" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		{/if}
		<div class="opartProductVideoDesc">{$video->desc}</div>
	</div>
{/foreach}
</div>