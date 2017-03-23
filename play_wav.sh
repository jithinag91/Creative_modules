#!/bin/bash
fq='95.0'
if [ $# -gt 0 ]
then fq=$1
	file_location=$2
fi

./fm_transmitter -f $fq -r $file_location  && echo 'runsuccess' || echo "error fm_transmitter"
