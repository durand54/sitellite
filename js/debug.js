document.write ('<div id="sitellite-debug" style="z-index: 99; float: right; width: 250px; height: 400px; border: 1px solid #aaa; background-color: #eee; color: #666; overflow: scroll"><strong>Debug Output</strong><br /></div>');

function debug (msg) {
	e = document.getElementById ('sitellite-debug');
	e.innerHTML += msg + "<br />\n";
	e.scrollTop += 200;
}
