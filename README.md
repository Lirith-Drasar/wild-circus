# The French Copywriter - Starter Kit - Symfony 4.4.\*

This starter kit is here to easily install The French Copywriter's repository.

## Getting Started for Projects

### Prerequisites

1. Check php is installed
2. Check symfony is installed
3. Check composer is installed
4. Check yarn & node are installed

### Install

1. Clone this project with git clone `git clone https://github.com/Lirith-Drasar/wild-circus.gitt`
2. Move to the repository with `cd wild-circus/`
3. Run `composer install`
4. Run `composer require encore`
5. Run `yarn install`
6. Copy `.env` file and modify it in `.env.local`
7. Replace user, password and db_name in the line `DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name`in`.env.local` 

### Working

1. Run `php bin/console server:run` to launch your local php web server
2. Run `yarn run dev --watch` to launch your local server for assets
3. Run `mysql.server start` to launch mysql database
4. Go on `https://localhost:8000/` to visit the website

### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

## Load DDB

Run `mysqldump -u user -p wild-circus<wild-circus.sql`  for save information in DDB. 




Link Wireframe  https://wireframepro.mockflow.com/view/ 

Database in public/images