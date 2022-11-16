# Docker Server Niginx PHP NodeJS

Web server dockerize

## Initialize

> Rename .env.exemple to .env

Use command to initialize web server.

```bash
docker-compose up -d --build
```

## Configuration

In Nginx Proxy Manager, configure host proxies for PHP projects with the following advanced configuration:

```nginx
root                           /var/www/html/app1;

location / {
    index                      index.php index.html index.htm;
    try_files                  $uri /index.php$is_args$args;
}

location ~ \.php$ {
    fastcgi_pass               $server:$port;
    fastcgi_split_path_info    ^(.+\.php)(/.+)$;
    include                    fastcgi_params;
    fastcgi_index              index.php;

    fastcgi_param              SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
    fastcgi_param              DOCUMENT_ROOT $realpath_root;
}
```
