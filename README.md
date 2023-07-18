# databus-client

```php
 $request = Articles::New()
    ->limit(10)
    ->vendor('')
    ->run()

$data = $request->response();
var_dump($data);
```

