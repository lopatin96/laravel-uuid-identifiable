# Install
### Trait
Add **HasUuidIdentifiable** trait to your models

```php

use Atin\LaravelUuidIdentifiable\Traits\HasUuidIdentifiable;

class User extends Authenticatable
{
    use HasUuidIdentifiable, …
```