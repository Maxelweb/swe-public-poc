#!/bin/sh
java -jar /usr/src/simulator/usdevice1.jar &
java -jar /usr/src/simulator/usgateway1.jar
echo "Gateway started.."
