#!/bin/bash
fq='95.0'
if [ $# -gt 0 ]
then fq=$1
	file_location=$2
fi

sox -t mp3 $file_location -t wav -r 22050 stereo -c 1 -|./fm_transmitter -f $fq - && echo 'runsuccess' || echo "error fm_transmitter"
