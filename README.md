# UUID validation rule
[![Version](https://poser.pugx.org/rap2hpoutre/uuid-rule/version?format=flat)](https://packagist.org/packages/rap2hpoutre/uuid-rule)
[![License](https://poser.pugx.org/rap2hpoutre/uuid-rule/license?format=flat)](https://packagist.org/packages/rap2hpoutre/uuid-rule)
[![Build Status](https://travis-ci.org/rap2hpoutre/uuid-rule.svg?branch=master)](https://travis-ci.org/rap2hpoutre/uuid-rule)
[![Total Downloads](https://poser.pugx.org/rap2hpoutre/uuid-rule/downloads)](https://packagist.org/packages/rap2hpoutre/uuid-rule)
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
