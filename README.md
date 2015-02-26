#FalconHoster

VERY simple PHP page to upload files

We will use this to serve PHP files in development, since we can't install WAMP on the school computers.

##Usage
1. Clone repo into WAMP folder
2. Make sure WAMP is running
3. Click the WAMP icon, 'put online' or something like that.
4. Open command prompt, type 'ipconfig' - the internal ip address (sorry, can't remember exactly what it will be called atm, but should look like 192.168.__.___	or something) is what you need.
5. Anyone that needs to test that file can upload it to this computer by typing '[internal ip address]/FalconHoster'
6. After uploading file, you can access it from
	'[internal ip address]/FalconHoster/uploads/[filename]'

##Notes
:warning: DO NOT use this on a public server (eg DigitalOcean). It was designed to be horribly insecure. Just run it from someone's PC locally.
