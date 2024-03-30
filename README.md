# Laravel Cross Database Subqueries

## Why do I need it?
### To use the following Eloquent methods cross databases:
* has
* whereHas
* doesntHave 
* whereDoesntHave
* withCount (except with prefixes)

## Installation

On `composer.json` add the following:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Dibbyo456/laravel-cross-database-subqueries"
    }
],
"require": {
    "hoyvoy/laravel-cross-database-subqueries": "dev-main"
},
```

# Usage
In your `Models` extends from: `Hoyvoy\CrossDatabase\Eloquent\Model`

# Supported PHP Versions
* \>=8.1

# Supported Databases
* MySQL
* MariaDB
* PostgreSQL
* SQL Server

# Issues & Contributing
If you find an issue please report it or contribute by submitting a pull request.
