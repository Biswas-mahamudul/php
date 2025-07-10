<?php

$myfile = fopen("first.txt","w") or die ("unable to open file!");
echo fread ($myfile,filesize("myfile.txt"));
fclose ($myfile);






?>