# Laravel Upload Files

[![Latest Stable Version](https://poser.pugx.org/hum/mediafile/v)](//packagist.org/packages/hum/mediafile) 
[![Total Downloads](https://poser.pugx.org/hum/mediafile/downloads)](//packagist.org/packages/hum/mediafile) 
[![Latest Unstable Version](https://poser.pugx.org/hum/mediafile/v/unstable)](//packagist.org/packages/hum/mediafile) 
[![License](https://poser.pugx.org/hum/mediafile/license)](//packagist.org/packages/hum/mediafile)

Laravel Upload Files
=======
A simple library for Laravel Upload.by using this you can upload any file or image.even you can use this for single/multiple upload also.

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

$destinationPath = 'your storege path'; // upload path
$files = $_FILES['file'];
$file = new FilesUploads();
$returndata = $file->postImages($files,$destinationPath);
return $returndata;
