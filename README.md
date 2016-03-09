# light-log

A Light and Simple Logger for Light Applications. 

## Installation

```
composer require hyancat/light-log
```

## Usage

```php
// Namespace
use HyanCat\LightLog\Adapters\FileHandler as LogFileHandler;
use HyanCat\LightLog\LightLog as LLog;

// Instance
$llog = new LLog(new LogFileHandler('logs/test.log'));
$llog->app('your_app_name'); // optional

// Write log
$llog->info("it's ok!");

// Or dump an array
$anArray = ['a' => 'b', 'c' => 'd'];
$llog->debug("dump array value", $anArray);

// Or notice, warning, error...

```

Here it will write some logs into file, which looks like this: (copied from test case)

```log
[your_app_name] [INFO] TestLog.php:14 - it's ok! []
[your_app_name] [DEBUG] TestLog.php:17 - dump array value {"a":"b","c":"d"}

```

## LICENSE

```
The MIT License (MIT)

Copyright (c) 2016 HyanCat <hyancat@live.cn>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

```


