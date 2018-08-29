## Prepare

### nginx

### php

### redis

### php-redis

### nodejs

- https://nodejs.org/en/download/package-manager/#debian-and-ubuntu-based-linux-distributions

```
$ curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
$ sudo apt-get install -y nodejs
```

### yarn

- [Nightly Builds](https://yarnpkg.com/en/docs/nightly)

```
 $ curl -o- -L https://yarnpkg.com/install.sh | bash -s -- --nightly
 $ . ~/.bashrc
```

## init

```
$ yarn init
$ yarn global add jest
$ yarn add babel-core babel-jest babel-preset-env regenerator-runtime --dev

$ yarn add gap-front-base
$ yarn add gap-front-scss
$ yarn add gap-node-front-server --dev
```

## layout

```
<?php
$vcode = $this->config->get('vcode');
?>

<?php echo $this->insert('html/meta', ['localeKey', $localeKey]); ?>
<link rel="stylesheet" href="<?php echo $this->staticUrl("css/{$source}/wec-open-web.css?v=" . $vcode); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


<script type="text/javascript">
window.PageConfig=<?php echo json_encode($pageConfig); ?>;
</script>
<script src="<?php echo $this->staticUrl("js/$source/wec-open-web.js?v=" . $vcode); ?>"></script>
```


### bin/front-server
```
#!/usr/bin/env node

'use strict';

const path = require('path');
const fs = require('fs');
const currentDir = __dirname; // eslint-disable-line

const baseDir = path.resolve(currentDir, '../');
const setting = JSON.parse(fs.readFileSync(
    path.resolve(baseDir, 'setting/setting.local.json'),
    'utf8'
));
const staticHost = setting.site.static.host;

require('gap-node-front-server')({
    baseDir: path.resolve(currentDir, '../'),
    port: 8787,
    scss: {
        publicPath: 'css/dev',
        inputDir: 'front/scss',
        outputDir: 'site/static/css/dev',
        includePaths: [
            'node_modules/foundation-sites/scss',
            'node_modules/gap-front-scss/scss'
        ]
    },
    js: {
        staticHost: staticHost,
        publicPath: 'js/dev',
        contextDir: 'front/js',
        modules: [
            'node_modules'
        ],
        entry: {
            'wec-open-web': './wec-open-web.js'
        },
    }
});
```

### nginx
```
server {
    listen  80;
    server_name open.wec.mercury;

    index   index.html index.php;
    root    /var/space/wec-open-web/site/public;

    access_log  /var/space/wec-open-web/log/access.log.gz combined gzip;
    error_log /var/space/wec-open-web/log/error.log;

    client_max_body_size 20M;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php(/|$) {
        try_files $uri = 404;

        fastcgi_split_path_info ^(.+\.php)(/.*)$;

        include fastcgi.conf;

        fastcgi_connect_timeout 60;
        fastcgi_send_timeout 180;
        fastcgi_read_timeout 180;
        fastcgi_buffer_size 128k;
        fastcgi_buffers 4 256k;
        fastcgi_busy_buffers_size 256k;
        fastcgi_temp_file_write_size 256k;

        fastcgi_index   index.php;
        fastcgi_pass    php:9000;

        add_header Access-Control-Allow-Origin $http_origin;
        add_header Access-Control-Allow-Credentials true;

        location ~ /\.ht {
            deny all;
        }
    }
}

server {
    listen  80;
    server_name open.wec.mercury;

    index   index.html index.php;
    root    /var/space/wec-open-web/site/public;

    access_log  /var/space/wec-open-web/log/access.log.gz combined gzip;
    error_log /var/space/wec-open-web/log/error.log;

    client_max_body_size 20M;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php(/|$) {
        try_files $uri = 404;

        fastcgi_split_path_info ^(.+\.php)(/.*)$;

        include fastcgi.conf;

        fastcgi_connect_timeout 60;
        fastcgi_send_timeout 180;
        fastcgi_read_timeout 180;
        fastcgi_buffer_size 128k;
        fastcgi_buffers 4 256k;
        fastcgi_busy_buffers_size 256k;
        fastcgi_temp_file_write_size 256k;

        fastcgi_index   index.php;
        fastcgi_pass    php:9000;

        add_header Access-Control-Allow-Origin $http_origin;
        add_header Access-Control-Allow-Credentials true;

        location ~ /\.ht {
            deny all;
        }
    }
}
```
