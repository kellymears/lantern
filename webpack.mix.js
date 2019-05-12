const mix = require('laravel-mix')
require('laravel-mix-react-css-modules')
require('laravel-mix-wp-blocks')

// Public path helper
const publicPath = path => `${mix.config.publicPath}/${path}`;

// Source path helper
const src = path => `resources/assets/${path}`;

// Public Path
mix.setPublicPath('./storage/theme/assets');

// Browsersync
mix.browserSync({
  proxy: 'http://sage10-tachyons.valet',
  files: [
    '(app|config|resources)/**/*.php',
    publicPath`(styles|scripts)/**/*.(css|js)`,
  ],
});

// Scripts
mix.js(src`scripts/editor.js`, publicPath`scripts`)
mix.block(src`scripts/blocks.js`, publicPath`scripts`)
  .reactCSSModules()

// Styles
mix.css(src`styles/app.css`, publicPath`styles`)

// Assets
mix.copyDirectory(src`images`, publicPath`images`)
  .copyDirectory(src`fonts`, publicPath`fonts`);

// Options
mix.options({
  processCssUrls: false,
});

// Source maps when not in production.
if (!mix.inProduction()) {
  mix.sourceMaps();
}
