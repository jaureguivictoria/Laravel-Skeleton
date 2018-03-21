# Laravel-Skeleton
Welcome! Use this Laravel skeleton to quickly start any new project. All you get is the [Laravel Mix](https://laravel.com/docs/5.6/mix) with [Bootstrap](https://getbootstrap.com) and [Vue JavaScript Framework](https://vuejs.org/).

### Requirements
* Laravel 5.6
* PHP 7.1.3 or upper

## Demo
Visit the demo site at [https://laravel-skeleton.herokuapp.com](https://laravel-skeleton.herokuapp.com).

## Getting started
### Clone repository

**SSH** ```git@github.com:jaureguivictoria/Laravel-Skeleton.git```

**HTTPS** ```https://github.com/jaureguivictoria/Laravel-Skeleton.git```

### Set up Laravel Mix
In [webpack.mix.js](https://github.com/jaureguivictoria/Laravel-Skeleton/blob/master/webpack.mix.js) you will place all the settings you want.

For starters, I am only putting one js and one sass:
```php
    mix.js('resources/assets/js/app.js', 'public/js');
    mix.sass('resources/assets/sass/app.scss', 'public/css');
```
### Customize the styles with SASS
Go to [resources/assets/sass/app.scss](https://github.com/jaureguivictoria/Laravel-Skeleton/blob/master/resources/assets/sass/app.scss) and fill in any customizations you want.

### Customize the JavaScript
Go to [resources/assets/js/app.js](https://github.com/jaureguivictoria/Laravel-Skeleton/blob/master/resources/assets/js/app.js) and define all the components you need.

### Compile the assets
Run all Laravel Mix tasks:

```npm run dev```

Run all Laravel Mix tasks and minify output:

```npm run production```

## Issue tracking

Found a bug? Have an idea for an improvement? Feel free to [add an issue](https://github.com/jaureguivictoria/Laravel-Skeleton/issues).


