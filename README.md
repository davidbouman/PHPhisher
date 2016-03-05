<p align="center"><img src="https://raw.githubusercontent.com/NickTehPro/PHPhisher/master/logo.png" /></p>

## About
PHPhisher is a pack of phising pages with automatic credentials harvesting.

PHPhisher works on any Linux Distribution (You have to install PHP5 and postfix).

## How it works
After a successful MITM Attack, you have to redirect all the traffic of your victim to your webserver's (apache, nginx etc) IP or Domain.

<p align="center"><img width="70%" src="https://fak3r.com/2015/owasp-man_in_the_middle.jpg" /><br /><i>Performing MiTM attack</i></p>

## Installation 
Type the following commands:
```
Prepare OS:
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install apache2 php5 postfix 

Cloning & editing the files:
git clone git://github.com/NickTehPro/phphisher PHPhisher 
mv PHPhisher/ /var/www/ 

Apache Setup:

cd ~
cd /etc/apache2/sites-enabled/
nano 000* //Change the location from /var/www/html/ to /var/www/PHPhisher/
service apache2 reload

Permissions:
chmod 777 /var/www/config.json
DONE!
```
After installing everything, run the wizard.
## Screenshot
<p align="center"><img src="https://raw.githubusercontent.com/NickTehPro/PHPhisher/master/Demo.png" /></p>
## Requirements
* Linux Server with Postfix and Apache (or Nginx). 
* A computer that will act as the attacker (arp and dns spoof).

## Credits
The PHP pages are based on this project: <a
href="https://github.com/sophron/wifiphisher">WifiPhisher</a>. 
Zarkopafilis made the logo and helped with testing.

##Disclaimer
ONLY FOR EDUCATIONAL PURPOSES ONLY! I am not responsible for a possible thermonuclear war because you used this tool to stole your girlfriend's credentials. 

## Project Status 
PHPhisher current version is **2.0.2**. !!Still under development!!