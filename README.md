# Laravel Multiple-Image Upload

[![Latest Stable Version](https://poser.pugx.org/hum/mediafile/v)](//packagist.org/packages/hum/mediafile) 
[![Total Downloads](https://poser.pugx.org/hum/mediafile/downloads)](//packagist.org/packages/hum/mediafile) 
[![Latest Unstable Version](https://poser.pugx.org/hum/mediafile/v/unstable)](//packagist.org/packages/hum/mediafile) 
[![License](https://poser.pugx.org/hum/mediafile/license)](//packagist.org/packages/hum/mediafile)

Laravel Multiple-Image Upload
=======
A simple library for Laravel Multiple-Image Upload.

Installation
------------

Use composer to install this package

```bash
composer require hum/mediafile
```

Example
-------
```php
use hum\mediafile\FilesUploads;

$destinationPath = $folderurl . '/public/user_images/'; // upload path
$files = $_FILES['profileimage'];
$file = new FilesUploads();
$returndata = $file->postImages($files,$destinationPath);
return $returndata;
