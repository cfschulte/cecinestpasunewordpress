#!/bin/bash
# new_playpen.sh:  Mon Dec 11 10:13:11 CST 2017
# 

now=`date +%Y-%m-%d`
#echo $now
name='playpen_'$now'.php'
echo $name

cp playpen_template.php playpen/$name 
ln -fs playpen/$name  playpen.php