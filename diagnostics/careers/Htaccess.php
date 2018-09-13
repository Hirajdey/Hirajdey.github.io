ErrorDocument 404 /404page.php

RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} -f
RewriteCond %{REQUEST_FILENAME} -d
RewriteCond %{REQUEST_FILENAME} \.(gif|jpe?g|png|js|css|swf|ico|txt|pdf|xml)$ [NC]
RewriteRule ^ - [L]

RewriteRule ^([a-zA-Z0-9-]+)/?$ $1.php [L]

# browser requests PHP
RewriteCond %{THE_REQUEST} ^[A-Z]{3,9}\ /([^\ ]+)\.php
#RewriteRule ^/?(.*)\.php$ /$1 [L,R=301]
RewriteRule ^(.*)\.php$ /$1 [R=301,L]

# rewrite www.domain-name.com → domain-name.com
RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
RewriteRule ^ http://%1%{REQUEST_URI} [R=301,L]