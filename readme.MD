# allegedavarice

A quick template to get you started in Wordpress using Lando as your dev environment.

This is an improvement on the internal lando recipe, and includes php 8.1, and the latest Wordpress.

## Prerequisites

Make sure you have the following installed on your local system.
- Docker
- Lando

### To use:

Clone this repo to a convenient directory

In the `.lando.yml` file, replace:
```
name: alleged_avarice
```
with whatever you want to name your app.

In the `.environment/env` file, replace:
```
APP_NAME=Wordpress
```
with whatever you want to call it.

In the `.environment/wp-config.php` file, replace the block of authentication keys and salts with a new block. You can generate these by visiting `https://api.wordpress.org/secret-key/1.1/salt/`

Then just run

`lando start`

That will get you up and running.

You should be good to go.  if you want to install additional stuff with composer, you can modify the composer.json file in the environment folder, and do a `lando rebuild; lando composer update`


## Tooling

```
lando npm ...
lando composer ...
lando artisan ...
```

## Post setup

After you are up and running, in the .lando.yml file, you'll probably want to comment out some lines like so:
```
services:
  appserver:
    composer_version: 2-latest
#    build_as_root:
#      - curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
#      - apt-get install -y nodejs
#    build:
#      - composer create-project --prefer-dist laravel/laravel app
#    run:
#      - cp -r /app/.environment/env /app/app/.env
```

That will prevent you from accidentally overwriting your work if you should need to rebuild the containers.

No waranty expressed or implied.  Use at your own risk
