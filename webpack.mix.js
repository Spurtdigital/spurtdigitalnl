// webpack.mix.js
const mix = require("laravel-mix");
const webpack = require("webpack");
const path = require("path");
require("laravel-mix-purgecss");

const isProduction = mix.inProduction();

// 🔧 Algemene instellingen
mix.setPublicPath("dist");

// 🌐 Webpack config: aliases + jQuery injectie
mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            "window.jQuery": "jquery"
        })
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "assets/js"),
            "~": path.resolve(__dirname, "assets/scss")
        },
        extensions: [".js", ".json"]
    },
    performance: {
        hints: false // voorkom build-warnings over bundle-grootte
    }
});

// 🎯 JS + SCSS bundelen
mix.js("assets/js/app.js", "js")
    .sass("assets/scss/app.scss", "css")
    .extract(["jquery"]) // splitst vendor-bundles
    .copy("assets/images/ajax-loader.gif", "dist/css/ajax-loader.gif")
    .copyDirectory("assets/images", "dist/images")
    .options({
        processCssUrls: false,
        postCss: [require("autoprefixer")]
    });

// 🧹 CSS opschonen in productie
if (isProduction) {
    mix.purgeCss({
        content: [path.join(__dirname, "./**/*.php"), path.join(__dirname, "./assets/js/**/*.js")],
        safelist: [
            /^btn-/,
            /^href/,
            /^is-/,
            /^fancybox-/,
            /^gform_/,
            /^ginput_/,
            /^lock/,
            /^block/,
            /^wpadminbar/,
            /^slick-/
        ]
    });

    mix.version();
} else {
    mix.sourceMaps();
    mix.browserSync({
        proxy: "https://creators.test",
        files: ["dist/css/*.css", "dist/js/*.js", "**/*.php"],
        open: false,
        notify: false
    });
}
