# A privacy standard for WordPress plugins

In this repository you will find the PHP object interface ready for implementation in your WordPress plugin. 

The [GDPR WP](https://www.gdprwp.com/) project is open source and you are welcome to create issues on GitHub as well as collaborate with us via wordpress.SLACK.com - a #privacy channel is under way.

The proposed standard revolves around a PHP [object interface](http://php.net/manual/en/language.oop5.interfaces.php) that plugins can implement in their codebase. By implementing this standardized interface, you can tell the world how your plugin handles personal idenfiable information (PII). 

**How it works**
We have a hook/do_action, in which we send an object. 
This object is available for plugin developers to use, when identifying which Personal Identifiable Data their plugin handles.

The current Object, has a method called : set_field ($args), which in essens is key-value pairs. ('label' and 'value').

The GDPR for WP plugin will in turn present these values on an admin screen

**Our goal**
Implementing the interface will allow privacy tools to be created that can help make WordPress websites GDPR compliant.

Tools that work across WordPress plugins. That's our goal !

Version 1.0 of the Interface is out, and we're following [our roadmap](https://github.com/GDPRWP/standard/wiki/Roadmap)

Demo code will provided shortly and a GDPR for WP plugin is being developed, to combine the interface output from a WordPress websites
active plugins. This will ultimatly provide the needed functionality to website administrators to oversee the GDPR compliance status of a website, as well as handel user requests (data portability and right to be forgotten).


_**Signup to our newsletter on https://www.gdprwp.com/ to stay in the loop.**_
