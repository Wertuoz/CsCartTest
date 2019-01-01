#!/bin/bash                                                                                                                                                                                                                        
CWD="$(pwd)" #save starting directory
totalResult=""
ls -1 | while read dir
do
    [[ ! -d "$dir" ]] && continue
    cd "$dir"
    echo "Changed to directory" $dir
    result=""
    for file in *; do
    	if [ "$file" != "names.txt" ]; then
    		result="$result""$dir""/""$file""///"
    	fi
	    # echo "$pwd" "$f"
    done
    result=${result%???};
	echo $result | tee names.txt
    cd "$CWD" #Change back to old directory
done