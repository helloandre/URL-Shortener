==============================
URL Shortener v1.0

By Andre Bluehs

URL Shortener is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

URL Shortner is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with URL Shortener.  If not, see <http://www.gnu.org/licenses/>.
==============================

## About
  URL Shortener is a simple script setup to allow you to run your very own url shortening service.

 You need 3 things to be able to use this script:
	 - Apache with mod_rewrite enabled or similar server/rewriting setup.
	 - php
	 - mysql
	 
## Installation
 -- Default
	0) open a mysql prompt
		user@server$ mysql -u root -p
	1) open mysql and create a database named `uploads`
		mysql> CREATE DATABASE `uploads`;
	2) give permissions to uploads_user with uploads_pass
		mysql> GRANT ALL PRIVILEGES ON `uploads`.* TO 'uploads_user'@localhost IDENTIFIED BY 'uploads_pass'; 
	3) allow the privileges to take affect
		mysql> FLUSH PRIVILEGES;
	4) change the $site_url in config.php to whatever your domain is. if you don't change this, it will not work properly. 
		
 -- NON Default
	If you chose to change the names of the database, user, or password, you must reflect those changes in /config.php
	
 -- Statsitics
	If you want to include any kind of google analytics, or your own statistics that require loading javascript, see the comments in /index.php for instructions
 
