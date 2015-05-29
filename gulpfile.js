var elixir = require('laravel-elixir');

elixir(function (mix)
{
 mix
  // sass files in assets
     .copy('public/bower_components/bootstrap-sass/assets', 'resources/assets/sass/bootstrap')
  // css files in the public
     .copy('public/bower_components/bootstrap-timepicker/css/bootstrap-timepicker.min.css','public/css/bootstrap-timepicker.min.css')
  // js files
     .copy('public/bower_components/jquery/dist/jquery.js', 'resources/assets/sass/bootstrap/javascripts/jquery.js')
    // .copy('vendor/bower_components/bootstrap-sass/assets/javascripts', 'resources/assets/sass/vendor/bootstrap/javascripts')
  //.copy('vendor/bower_components/bootstrap-timepicker/js/bootstrap-timepicker.min.js','resources/assets/sass/vendor/bootstrap/javascripts/bootstrap-timepicker.min.js')
  // fonts
     //.copy('vendor/bower_components/bootstrap-sass/assets/fonts/*', 'public/css/fonts')
  // ... and so on
 ;

 mix.sass([
  'app.scss' // this is file where I @import all vendor styles and my own styles
 ]);

 mix.scripts([
  'sass/bootstrap/javascripts/jquery.js',

  'sass/bootstrap/javascripts/bootstrap.min.js',
  'sass/bootstrap/javascripts/bootstrap/',
  //'resources/assets/sass/vendor/bootstrap/javascripts/bootstrap-timepicker.min.js',
  //'app.js',
 ], 'public/js/app.js','resources/assets/','./');
 mix.version([
  'public/css/app.css',
  'public/js/app.js'
 ]);
});
