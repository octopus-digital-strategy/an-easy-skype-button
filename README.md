#An Easy Skype Button

##Description

Attention: This plugin requires PHP 5.3 or higher

This plugin registers the shortcode **easy-skype-button** to be used with WordPress
 
Developed with love in Cancun by Octopus [Agencia de Marketing Digital](http://octopus.mx)

Get a free SEO report at [Posicionamiento Web Cancun](http://octopus.mx/posicionamiento-seo/)

##Installation

1. Download the plugin from [github](https://github.com/octopus-digital-strategy/an-easy-skype-button/releases/tag/0.2) Current version is 0.2
2. Activate it
3. Go to Settings / Skype Settings
4. Add your skype account
5. Use the shortcode **easy-skype-button** or the function **anEasySkypeButton** to render your button

####Settings Page

![alt text](https://raw.githubusercontent.com/octopus-digital-strategy/an-easy-skype-button/master/resources/images/configure-account.png "Settings Page")

##Usage Samples


###From your WordPress editor

![alt text](https://raw.githubusercontent.com/octopus-digital-strategy/an-easy-skype-button/master/resources/images/shortcode-demo.png "WordPress Editor Shortcode" )

###From your php code

```php

function yourFunction()
{

    // Do something here
    
    // Render the button. Plugin needs to be activated

    anEasySkypeButton();

}

```

Both options will generate the same result a clickable skype button

![alt text](https://raw.githubusercontent.com/octopus-digital-strategy/an-easy-skype-button/master/resources/images/demo-button.png "Skype button demo")


##Change Log


###Features

* Use Skype scripts to create the button
* Settings Page to specify default account

###Version 0.2.1

* Added assets folder
* Added readme.txt file

###Version 0.2

* Documentation Update
* Tag for release
* Added WPExpress files to the local repository

###Version 0.1

* Tag to 0.1
* Added the courtesy function anEasySkypeButton to the init file
* Added the skype-button mustache template
* Added the SettingsPage class
* Added the Shortcodes class