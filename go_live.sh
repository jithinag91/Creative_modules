#!/bin/bash
fq='95.0'
if [ $# -gt 0 ]
then fq=$1
	
fi

arecord -D plughw:1,0 -c1 -d 0 -r 22050 -f S16_LE |./fm_transmitter -f $fq -
