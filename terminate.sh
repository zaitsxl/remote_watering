#!/bin/bash
CHG=`/sbin/apcaccess | /bin/grep BCHARGE | /usr/bin/awk '{ print $3 }' | /usr/bin/awk -F. '{ print $1 }'`
if [ $CHG -le 50 ]
	then /usr/bin/python relay.py off
fi

ping 192.168.1.1 -c 1 > /dev/null
if [ ! -z "$?" ]
	then /sbin/reboot
fi
