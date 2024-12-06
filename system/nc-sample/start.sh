#!/bin/bash

while :
do
    # 맨 마지막 challenge는 계정명
    su -c "exec socat TCP-LISTEN:7101,reuseaddr,fork EXEC:'/challenge/free_shell.py,stderr'" - challenge;
done