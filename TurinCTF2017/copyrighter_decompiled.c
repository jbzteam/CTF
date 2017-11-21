int __cdecl __noreturn main(int argc, const char **argv, const char **envp)
{
  puts("################");
  puts("Copyrighter v0.1");
  puts("################\n");
  puts("Add your copyright:");
  add_copyright();
}

void __noreturn add_copyright()
{
  char s; // [esp+Ch] [ebp-20Ch]
  unsigned int v1; // [esp+20Ch] [ebp-Ch]

  v1 = __readgsdword(0x14u);
  fgets(&s, 512, stdin);
  printf(&s);
  exit(1);
}

void __noreturn read_config()
{
  _IO_FILE *fp; // [esp+8h] [ebp-10h]
  int c; // [esp+Ch] [ebp-Ch]

  fp = fopen("/home/level3/config", "r");
  if ( fp )
  {
    while ( 1 )
    {
      c = _IO_getc(fp);
      if ( c == -1 )
        break;
      putchar(c);
    }
    fclose(fp);
  }
  _exit(1);
}