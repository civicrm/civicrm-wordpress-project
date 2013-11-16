# civicrm-wordpress-project

This project is a template which you can use to prepare a useful CiviCRM
development environment.

## Installation

```bash
git clone https://github.com/civicrm/civicrm-wordpress-project.git -b master
cd civicrm-wordpress-project/bin/
./civi-download --branch 4.4
./mk-wp-demo-site http://civiwp.localhost civiwp <WEBDIR>
```

If you want to run important CLI tools like composer, drush, wp-cli, or
civix, then add the "bin" directory to your path, e.g.

```bash
export PATH=/path/to/civicrm-wordpress-project/bin:$PATH
```

(Note: Adjust as needed for your filesystem.) To automatically set this up
again each time you login, add the statement to ~/.bashrc or ~/.profile .

## Likely Questions

How to fork

 => TODO

How to add new WP content

 => Generate content through web UI
 => Run "wp export" to update app/config/civicrm-wordpress.xml
 => Edit app/config/civicrm-wordpress.xml and ensure that all URLs reference
    "http://civicrm-wordpress.ex" instead of your localhost.

How to add a new WP plugin

 => Edit bin/mk-wp-demo-site
 => Add a statement like "$WPCLI plugin install wordpress-importer --activate"

How to modify default users, roles, etc

 => Edit bin/mk-wp-demo-site.sh

How to add a new CiviCRM extension

 => TODO

What if I already have composer, drush, wp-cli, civix, etc in my PATH?

 => Great! Then you don't need to update the PATH.
