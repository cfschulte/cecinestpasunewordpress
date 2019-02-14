#!/bin/bash
# refresh_w.sh:  Mon May 4 08:38:00 CDT 2015
# 


now=`date +%Y-%m-%d`
#echo $now
name='archive'$now'.html'
echo $name
# rm index.php #remove the old symbolic link 
cp template.html ruminations/$name

# unlink index.php from the old and link it to the new archive.

ln -fs ruminations/$name rumination.html