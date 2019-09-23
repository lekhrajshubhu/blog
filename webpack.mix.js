const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js("resources/js/app.js", "public/js").sass(
//     "resources/sass/app.scss",
//     "public/css"
// );

mix.styles(
    [
        // "resources/template/vendors/bootstrap/bootstrap.min.css"

        "resources/template/vendors/owl-carousel/owl.theme.default.min.css",

        "resources/template/vendors/owl-carousel/owl.carousel.min.css"

        // "resources/template/css/style.css"
    ],
    "public/assets/css/all.css"
);

mix.scripts(
    [
        "resources/template/vendors/jquery/jquery-3.2.1.min.js",

        "resources/template/vendors/bootstrap/bootstrap.bundle.min.js",

        "resources/template/vendors/owl-carousel/owl.carousel.min.js",

        "resources/template/js/jquery.ajaxchimp.min.js",

        "resources/template/js/mail-script.js",

        "resources/template/js/main.js",

        "resources/assets/js/custom/sidenav.js"
    ],

    "public/assets/js/all.js"
);
