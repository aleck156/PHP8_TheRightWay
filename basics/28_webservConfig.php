<?php

declare(strict_types=1);

/*
apache config
    /usr/local/apacke2/conf
    //var/logs/httpd

modules - extensions of apache functionality
directives
sections

you need to explicitly allow access to certain directories

include directive
    import directives from other files
    httpd-vhosts.conf

virtual hosts
run multiple sites on the same machine
    all you need is DocumentRoot and ServerName section 
    DocumentRoot points to the file on your drive
    ServerName is the alias at which apache will redirect to that file
add entry to hosts file, so that it redirects a certain ip address to that ServerName

htaccess
    distributed configuration files
    allow to make changes on per-directory basis
    they're read on every request
    changes are effective immediately, all it takes is just to reload a page
don't use it unless you really need it
    only when you don't have access to root server
    impact servers performance
    anything put in here can be also put in server configuration file
disable htaccess completely to save time on loading pages
    AllowOverride None in httpd.conf at a global directive
even rewriting URL's is the most common use-case, yet still it's ineffective

REWATCH THIS VIDEO ONCE AGAIN, YOU DIDN'T LEARN IT!

*/