# PHP String to Array

Using library you can pass arrays as a strings. This will be usefull in API's and other sort of platforms. Currently this is only build for php.

## String to Array

Convert a string to a php array.

```
<?php

$stringArray = "transaction_id:1|token:7FdOhDGseBjxovTUyv56oXKOw8QIAA"; 

print_r(stringToArray($stringArray));
```

## Array to String

Convert a php array a string.

```
<?php

$array = [
    "transaction_id" => 1, 
    "token" => "7FdOhDGseBjxovTUyv56oXKOw8QIAA"
];

print_r(ArrayToString($array));
```