var elixir = require('laravel-elixir');
			 require('laravel-elixir-svg-symbols');

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
    mix.sass('app.scss')
   	   .browserSync({proxy: 'localhost:8000'})
   	   .svgSprite();
       //.version('css/app.css');
});
