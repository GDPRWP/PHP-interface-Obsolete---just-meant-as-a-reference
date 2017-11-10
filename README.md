# A privacy standard for WordPress plugins

In this repository you will be able to follow the [GDPR WP](https://www.gdprwp.com/) project and collaborate on the development.

Our current proposed standard revolves around a PHP [object interface](http://php.net/manual/en/language.oop5.interfaces.php) that plugins can implement in their codebase. By implementing this standardized interface, you can tell the world how your plugin works with personal and sensitive data. Implementing the interface will also allow others to build tools that can help make your plugin GDPR compliant. With a standardized implementation, tools can be built that works across all WordPress plugins. That's our goal at least.

A very simple example of an interface could be this (simplified):

```php
interface Privacy
{
    /**
     * Returns an array of userdata given an email address.
     *
     * @var string $email
     * @return array $userdata
     */
    public function exportUser($email);

    /**
     * Completely deletes and/or anonymises a user, including
     * all personal and sensitive information given an email
     * address.
     *
     * @var string $email
     * @return boolean $result
     */
    public function forgetUser($email);

    /**
     * Returns a string containing the privacy policy for the
     * plugin.
     *
     * @return string
     */
    public function policy();
}
```

Note: _This is just an example!_

If a plugin implements this interface, it will be possible to build tools that can ensure GDPR compliance across sites.

_**This is still very early in the idea phase. You can follow our progress at https://www.gdprwp.com/.**_
