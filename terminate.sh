#!/bin/bash
CHG=`/sbin/apcaccess | /bin/grep BCHARGE | /usr/bin/awk '{ print $3 }' | /usr/bin/awk -F. '{ print $1 }'`
if [ $CHG -le 100 ]
	then /usr/bin/python relay.py off
fi
