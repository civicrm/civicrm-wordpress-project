# civicrm-wordpress-project (experimental)

This project is a template which you can use to prepare a useful CiviCRM
development environment.

## Requirements

 * Shell (bash)
 * Git
 * PHP
 * MySQL (with credentials in ~/.my.cnf)
 * Optional: Apache/Nginx

## Installation: Quickstart (PHP 5.4+ built-in webserver)

```bash
git clone https://github.com/civicrm/civicrm-wordpress-project.git -b master
cd civicrm-wordpress-project/bin
./civi-download --branch 4.4
./civi-wp-startup
```

## Installation: *AMP

```bash
git clone https://github.com/civicrm/civicrm-wordpress-project.git -b master
cd civicrm-wordpress-project/bin/
./civi-download --branch 4.4
./mk-wp-demo-site http://civiwp.localhost civiwp /absolute/path/to/civicrm-wordpress-project/web
```

Now update the Apache/nginx configuration and create a virtual host named
civiwp.localhost with a DocumentRoot (/absolute/path/to/civicrm-wordpress-project/web).
Restart.

## Installation: CLI Tools

The project bundles in several useful command-tools (such as composer,
drush/wp-cli, and civix). It will be handy to add these to your PATH:

```bash
export PATH=/path/to/civicrm-wordpress-project/bin:$PATH
```

(Note: Adjust as needed for your filesystem.) To automatically set this up
again each time you login, add the statement to ~/.bashrc or ~/.profile .

If you have already installed these tools or don't want them, then
simply skip this step.

## Likely Questions

Should I use this to run my real websites?

 * Probably not. It's still likely to change significantly.

How to fork

 * TODO

How to add new WP content

 * Generate content through web UI
 * Run "wp export" and update app/config/civicrm-wordpress.xml
 * Edit app/config/civicrm-wordpress.xml and ensure that all URLs reference
    "http://civicrm-wordpress.ex" instead of your localhost.

How to add a new WP plugin

 * Edit bin/mk-wp-demo-site
 * Add a statement like "$WPCLI plugin install wordpress-importer --activate"

How to modify default users, roles, etc

 * Edit bin/mk-wp-demo-site.sh

How to add a new CiviCRM extension

 * TODO
