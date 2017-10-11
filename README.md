# UUID validation rule
## What?
Add a UUID validation to your Laravel 5.5+ Validation Rules
## Install
Install with composer:

```bash
composer require rap2hpoutre/uuid-rule
```
## Usage
In your controllers, add the validation with your other rules:

```php 
$request->validate([
    'email' => 'required|string|email'
    'uuid' => ['required', new \Rap2hpoutre\UuidRule\UuidRule],
]);
```