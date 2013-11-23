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

The final command will print out URLs and credentials for accessing the
instance of CiviCRM/WordPress.

## Installation: Apache/nginx

Alternatively, if you have a proper web server, you can use it:

```bash
git clone https://github.com/civicrm/civicrm-wordpress-project.git -b master
cd civicrm-wordpress-project/bin/
./civi-download --branch 4.4
./mk-wp-demo-site http://civiwp.localhost civiwp /absolute/path/to/civicrm-wordpress-project/web
```

(Note: The last command should be adjusted to your local system. It takes the form: "mk-wp-demo-site [demo-site-url] [demo-db-name] [web-root]"

Now update the Apache/nginx configuration and create a matching virtual host (e.g.
named "civiwp.localhost" with a DocumentRoot "/absolute/path/to/civicrm-wordpress-project/web").
Restart Apache/nginx.

## Installation: CLI Tools

The project bundles in several useful command-line tools (such as composer,
drush/wp-cli, and civix). It will be handy to add these to your PATH:

```bash
export PATH=/path/to/civicrm-wordpress-project/bin:$PATH
```

(Note: Adjust as needed for your filesystem.) To automatically set this up
again each time you login, add the statement to ~/.bashrc or ~/.profile .

If you have already installed these tools or don't want them, then
simply skip this step.

## Likely Questions

#### Should I use this to run my real websites?

 * Probably not. It's still likely to change significantly.

#### How to fork

 * TODO

#### How to upgrade to newer WP

 * Edit "bin/civi-download", changing the statement with "$WPCLI core download --version=XXX"
 * Destroy and recreate the demo site
   * Delete the "web" directory
   * Re-run "civi-download"
   * Re-run "mk-wp-demo-site" or "civi-wp-startup"

#### How to add new WP content

 * Generate content through web UI
 * Run "wp export" and update app/config/civicrm-wordpress.xml
 * Edit app/config/civicrm-wordpress.xml and ensure that all URLs reference
    "http://civicrm-wordpress.ex" instead of your localhost.

#### How to add a new WP plugin

 * Edit bin/mk-wp-demo-site
 * Add a statement like "$WPCLI plugin install my-plugin-name --activate"

#### How to modify default users, roles, etc

 * Edit bin/mk-wp-demo-site.sh

#### How to add a new CiviCRM extension

 * TODO
