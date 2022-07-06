# allegedavarice

A quick template to get you started in Laravel using Lando as your dev environment.

This is an improvement on the internal lando recipe, and includes php 8.1, the latest laravel, Node and NPM.

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

In the `.environment/` file, replace:
```
APP_NAME=Laravel
```
with whatever you want to call it.  Then replace:
```
APP_URL=http://alleged_avarice.lndo.site/
```
with whatever you chose for your name in the .lando.yml file following the same pattern.

Then just run

`lando start`

That will get you up and running.  Your new application is in the `./app` folder.

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
