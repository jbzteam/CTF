from PIL import Image
import subprocess
from time import sleep
import os
from textwrap import wrap
import base64
import struct

# "Virtual Printer" solution, INS'hAck 2018
# WTFPL 2018 JBZ Team
# For this to work you'll need the png-transparent.png file from here https://github.com/mathiasbynens/small/blob/master/png-transparent.png

# rm the junk left from previous run, if any
if os.path.exists("data.png"):
    os.remove("data.png")
if os.path.exists("blue_channel.bmp"):
    os.remove("blue_channel.bmp")

# print the blank page
subprocess.call('curl -s -X POST -H "User-Agent: curl/7.55.1" --form "f=@png-transparent.png" https://virtual-printer.ctf.insecurity-insa.fr/print > data.png', shell=True)
sleep(2)

# crop the page at the first matrix, but only the blue channel
subprocess.call('convert data.png -channel B -separate -crop 1121x141+50+50 +repage blue_channel.bmp', shell=True)
sleep(1)

# decode the matrix using only the columns
flag_img = Image.open("blue_channel.bmp")
w,h = flag_img.size
msg=''
for x in range(0, w-1, 20):
    for y in range(0, h, 20):
        r,g,b = flag_img.getpixel((x,y))
        if r == 255:
              msg += '0'
          else:
              msg+='1'


msg = wrap(msg, 8)
finalmsg = ""
for k in msg:
    finalmsg = finalmsg + (chr(int(k, 2)))

# ip: xxxx
# d; xxx
# S/N: xxxxxxxxx

fm = finalmsg[23:-1]
serialbsf = base64.b64encode(fm)

print "This should get you the flag:"
print 'curl -X POST -H "User-Agent: curl/7.55.1" -d "sn=' + serialbsf + '" https://virtual-printer.ctf.insecurity-insa.fr/serial-number'