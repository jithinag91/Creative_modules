#!/bin/bash
fq='95.0'
if [ $# -gt 0 ]
then fq=$1
fi
COMM='/home/pi/public_html/FM_Transmitter_RPi3-master'
echo $COMM
song_location="${COMM}/m.mp3"
echo 'run'
# sox -t <sourcefiletype>  source_file -t <targetfiletype> -r <bitrate> -c <compressionrate> -| minus pipe for outputing on stdout
sox -t mp3 $song_location -t wav -r 22050 -c 1 -|${COMM}/fm_transmitter  -f $fq - && echo 'runsuccess' || echo "error fm_transmitter"
#${COMM}/fm_transmitter  -f $fq -r $param && echo 'runsuccess' || echo "error fm_transmitter"
