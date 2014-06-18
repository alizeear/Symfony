Started with Symfony !
=======
I build this tutorial along with my Symfony learning.<br />
I aim to develop a platform with Symfony for share our toolkits and tips between web developers and create a better web!<br />
Your advice are welcome ! arn.alizee [ at ] gmail.com

## Installation on Windows ##

### Update PATH if php is not recognized ###
Update windows PATH in *Control Panel > System and Security > System > Advanced System Settings*<br />
Go to *Environment Variables* and *System variables > PATH*<br />
Add path of your php Wamp directory (C:\wamp\bin\php\php5.4.12 for exemple)<br />
**Restard command prompt**<br />

### Install composer ###
With the command prompt *go to wamp/wwww*<br />
Download and run **Composer-Setup.exe** here : <https://getcomposer.org/Composer-Setup.exe><br />
Check version with wamp\www>php composer.phar –version <br />
Upgrade with wamp\www>php composer.phar self-update

### Install Symfony ###
Update your wamp/bin/php/php#.#.##/php.ini file : <br />
Search ;extension=php_openssl.dll row and *delete the ";" at the beginning of the line*<br />
**Restard wamp**<br />
In the command prompt in your project repository execute :<br />
*php ..\composer.phar create-project symfony/framework-standard-edition dev-master*

### Check config ###
Go to <http://localhost/your-project-name/dev-master/web/config.php> and if your are recommandations, **follow them**.<br />

**Next => Create your first Bundle ! <https://github.com/alizeear/Symfony/blob/master/Your%20first%20Bundle.md>**

## Installation on Linux ##
Soon...
