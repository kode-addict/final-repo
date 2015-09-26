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

    mix.styles([
    			
    			'../semantic/dist/semantic.css',
    			'style.css'

    		],'public/css/app.css');


    mix.scripts([

    			'jquery.js',
    			'../semantic/dist/semantic.js',
                '../vue/vue.js',
               '../vue/vueresource.js',
    			'custom.js',
                'candidate.js',
                'party.js',
                'compare.js'

    		],'public/js/app.js');


});
