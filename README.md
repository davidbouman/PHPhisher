<p align="center"><img src="https://raw.githubusercontent.com/NickTehPro/PHPhisher/master/logo.png" /></p>

## About
PHPhisher is a pack of phising pages with automatic credentials harvesting.

PHPhisher works on any Linux Distribution (You have to install PHP5, mysql).

This is a snapshot version!! That means a lot of bugs are still in there and a huge list of things that doesn't work properly or at all.

## How it works
The tool can be used on a Variety of possible attacks.
Examples:
On a Fake AC in order to aquire Facebook or other type of credentials from the victim.
Can work as a Phising platform for a MITM attack.
## Installation 
Type the following commands:
```
Prepare OS:
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install apache2 php5 mysql-server mysql-client

Cloning & editing the files:
git clone git://github.com/NickTehPro/phphisher PHPhisher 
git checkout Dev
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
After installing everything, edit the configuration file:
```
{
	"page": 0, // The number of the scenario you want to simulate.
	"email": "", //Use an email to send you the harvested credentials. (You need to install postfix for this)
	"page-redirect": "http://google.com/", //The page that your victim is going after the attack completes.
	"dbuser": "root", //Self explanatory 
	"dbpass": "phphisher", //Self explanatory 
	"dbname": "phphisher", //Self explanatory 
	"dbip": "localhost" //Self explanatory 
}

```
## Screenshot (OLD)
<p align="center"><img src="https://raw.githubusercontent.com/NickTehPro/PHPhisher/master/Demo.png" /></p>
## Requirements
* Linux Server with MySQL and Apache(or Nginx). 
* Your imagination on performing an attack that you can use this tool.

## Credits
The PHP pages and the project as a whole are mainly based on this project:
<a href="https://github.com/sophron/wifiphisher">WifiPhisher</a>. 

Zarkopafilis made the logo and helped with testing. Give him love <a href="https://github.com/Zarkopafilis">here</a>. 

## Project Status 
PHPhisher current version: 3.0 Snapshot #1