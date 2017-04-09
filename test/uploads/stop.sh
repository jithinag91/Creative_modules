#!/bin/bash

#kill `ps -e|grep fm_transmitter|cut -d ' ' -f2`
#kill `ps -e|grep fm_transmitter|cut -d ' ' -f1`
kill `pidof fm_transmitter`
