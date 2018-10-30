#!/bin/bash 
CWD="$(pwd)" #save starting directory
totalResult=""
ls -1 | while read dir
do
    [[ ! -d "$dir" ]] && continue
    echo "Changed to directory" $dir
    bash /Users/a.trofimenko/.bitnami/stackman/machines/xampp/volumes/root/htdocs/cscartRep/tools/curltest.sh $dir
    cd "$CWD" #Change back to old directory
done