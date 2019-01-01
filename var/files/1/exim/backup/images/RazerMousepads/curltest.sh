
#!/bin/bash  

content=$(curl --user api:krybAhq1PGa88IWmwPYUP3ISK2yrbieW \
     --data-binary @1.png -i https://api.tinify.com/shrink)
# result=$( echo jq -r  '.output.url' <<< "${content}" ) 
# username=$( echo jq -r  '.input' <<< "${content}" ) 
# echo ${username}

# curl --user api:krybAhq1PGa88IWmwPYUP3ISK2yrbieW \
#       --data-binary @1.png -i https://api.tinify.com/shrink | 
#   python -c 'import  json,sys; 
#              result=json.load(sys.stdin); 
#              print(result["'input'"] + ", " + result["'output'"])';