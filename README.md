# README #

Studio TEM's Starter theme for Wordpress custom development

### Install ###

* pull repository to your local enviroment. change theme folder to project's name
* change remote origin to project repository (it will be provided by the project owner). remove this origin repository unless you need to commit changes to the start theme
* create database by importing database.sql file. change "starter.l" URL into your local project URL. then remove database.sql
* cp .env-sample to .env and set up your database connection, set WP_HOME and WP_SITEURL to your localhost URL
* continue with classic Wordpress install
* custom_theme has some default theme settings our company is expecting, and some prepared file structure, feel free to extend it as project needs

### .env and wp-config.php ###

* generate new Salts for config, otherwise wp-config.php should not be changed and commited
* all enviroment specific value and access credentials should be set in .env file
* use constant ENVIROMENT_IS_PRODUCTION for conditions allowing production only functions, like running GTM script only on production enviroment
* it also automatically turn on/off Search engine visibility, so it doesnt need to be changed in database on migrations
* IS_LOCALHOST enables features important for development

### Additional info ###

* .gitignore should be set up properly for Wordpress needs, but feel free to edit it if needed
* remember. because of automatic deployments there can not be any dynamic changes on server
* be sure to check files in custom_theme/inc/ folder, edit them as your project needs
* Starter theme contains most used WP plugins. At the beginning of the project, remove plugins you wont need and update the rest. Consult the new plugins with the project owner
* If the website we are building is also going to be hosted on our AWS, then we need to use S3 for all assets. for this purpose we use Media Cloud plugin. Consult this with the project before you start development
* If the website we are building is also going to be hosted on our AWS, then we need to use plugins compatible with nginx (for example for 301 redirects etc.)
* For multilanguage websites always use WPML plugin
* If you need license for any paid plugin, always ask project owner for the license. Don't use your own.
* Website must be compatible with at least PHP v8.1
* Content editing from WP admin will be only possible via ACF plugin. There will be no parts editable in Gutenberg or any other builder.
* Dont use CSS classes for paragraphs, lists, headings, anchors etc. ACF WYSIWYG editor cant relly on them for styling because clients without HTML knowledge can easily brake things. All content must be very easy to create / edit. Expect that website should be bulletproof for 70 year old clients with 0 IT knowledge.
* Global settings will be held in ACF Theme settings section (as defined in Starter theme)
* All images must have set the correct size defined in add_image_size()
* All comments, categories, tags that are not used must be unregistered
* Meta tags populated via Yoast SEO plugin can’t get duplicated

### For any questions ###

* [Contact email](mailto:feher@studiotem.com)
