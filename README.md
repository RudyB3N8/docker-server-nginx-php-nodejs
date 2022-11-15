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
root /var/www/html/app1;

location / {
    index index.php index.html index.htm;
}

location ~ \.php$ {
    try_files $uri =404;
    fastcgi_split_path_info ^(.+\.php)(/.+)$;
    fastcgi_pass $server:$port;
    fastcgi_index index.php;
    include fastcgi_params;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    fastcgi_param PATH_INFO $fastcgi_path_info;
}
```
