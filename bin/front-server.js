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
            'main': './main.js'
        },
    }
});
