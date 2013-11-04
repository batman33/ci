<?php 
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
echo "\t<title>{$this->title}</title>\n";
foreach ($this->styles as $url)
    echo "\t" . link_tag("styles/$url.css"). "\n";