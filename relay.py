#!/usr/bin/python
import RPi.GPIO as GPIO
import ConfigParser
import sys
import Adafruit_DHT

config = ConfigParser.RawConfigParser()
config.read("config.conf")
pin = config.getint("relay_pins","relay1")

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(pin,GPIO.OUT)

#print "%s" % sys.argv[1]

if sys.argv[1] == "on":
	GPIO.output(pin,GPIO.HIGH)

if sys.argv[1] == "off":
	GPIO.output(pin,GPIO.LOW)

#hum, temp = Adafruit_DHT.read_retry(11, 4)
