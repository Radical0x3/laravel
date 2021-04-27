const mix = require("laravel-mix");
const SVGSpritemapPlugin = require("svg-spritemap-webpack-plugin");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/js/app.js", "public/js")
  .sass("resources/css/app.scss", "public/css")
  .copyDirectory("resources/images/", "public/images/", false)
  .copy("resources/css/fonts.css", "public/css")
  .copyDirectory("resources/fonts/", "public/fonts/", false)
  .webpackConfig({
    plugins: [
      new SVGSpritemapPlugin("resources/sprites/**/*.svg", {
        output: {
          filename: "images/icons/spritemap.svg",
        },
      }),
    ],
  })
  .browserSync("laravel")
  .disableNotifications();
