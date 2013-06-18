govtrack-php
============
VERY simple api wrapper for govtrack.us.

API Reference
-------------
http://www.govtrack.us/developers/api

Example
-------
```php
$gt = new GovTrack();
print_r($gt->get('role', array('current' => 'true')));
```