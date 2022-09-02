---
description: All documentation project of alexonbstudio
---

## INFO IMPORTANTE

Please do not download release version get to only here
Just do it:

* git clone https://github.com/alexonbstudio/website-project.git
* custom your work
* then upload your work FTP Client



### Libs compatible
* phpmailer = PHP7.x & PHP8.x = works wel && none reportl
* giggsey/libphonenumber-for-php = PHP7.x & PHP8.x = works well && none report
* symfony/polyfill-mbstring = PHP7.x & PHP8.x = works well && none report
* giggsey/locale = PHP7.x & PHP8.x = works well && none report
* visualappeal/php-ssllabs-api = PHP7.x & PHP8.x = works well && none report
* matthiasmullie/path-converter = PHP7.x & PHP8.x = works well && none report
* matthiasmullie/minify = PHP7.x & PHP8.x = works well && i fix it
* joomla/utilities = PHP7.x = works well && none report
* joomla/string = PHP7.x = works well && none report
* icamys/php-sitemap-generator = PHP7.x & PHP8.x = works well && little have fatal error not fix
* google/recaptcha = PHP7.x = alternative hcaptcha & none can deleted insuported


### Hosting Shared OVH SSH


* cd www
* curl -sS https://getcomposer.org/installer | php OR * php composer.phar self-update

* php composer.phar update
* php composer.phar dump-autoload -o -a

---- Or Cronjobs (new)

* use this: * * * * * https://yourwebsite.tld/cron.php | /path/etc/cron.php
* use this: * * */3 * * cd www && composer update && composer dump-autoload -o -a


## Testing multi-language & frontend

* https://www.browserstack.com/browser-emulator

## Online website exemple

* https://alexonb.studio
* https://vapecoin.club
* https://The-familly.com
* https://www.atelier-carpentier.com/
