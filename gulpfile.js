var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');

    mix.styles([
    	'vendor/bootstrap.min.css',
    	'app.css',
    ], null, 'public/css/');

    mix.scripts([
    	'vendor/jquery.min.js',
    	'vendor/bootstrap.min.js',
    	'app.js'
    ], null, 'public/js/');

    mix.version(['public/css/all.css', 'public/js/all.js']);
});
