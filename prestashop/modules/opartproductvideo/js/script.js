function opartProductVideShowTab(anchorName) {
	$('*[id^="idTab"]').addClass('block_hidden_only_for_screen');
	$('div#idTabOpartProducVideo').removeClass('block_hidden_only_for_screen');
	
	$('ul#more_info_tabs a[href^="#idTab"]').removeClass('selected');
	$('a[href="#idTabOpartProducVideo"]').addClass('selected');
	
	var new_position = $('#'+anchorName).offset();
	window.location.hash = anchorName;
	window.scrollTo(new_position.left,new_position.top);
    return false;
}
$(document).ready(function() {
	var hash=window.location.hash;
	if(hash.length>1) {
		hash=hash.substr(1,hash.length);
		if($('#'+hash).length!=0)
			opartProductVideShowTab(hash);
	}
});