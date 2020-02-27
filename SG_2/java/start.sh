#!/bin/sh
java -jar /usr/src/simulator/sgdevice2.jar &
java -jar /usr/src/simulator/sggateway2.jar
echo "Gateway started.."
