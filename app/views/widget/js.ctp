<?php header("content-type: application/x-javascript");?>
function load(theme){
    document.write('<iframe height="248px" scrolling="no" frameborder="0" src="<?php echo $html->url('/widget/',true)?>' + theme + '"></iframe>');
}