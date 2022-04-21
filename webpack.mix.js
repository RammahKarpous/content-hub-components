let mix = require( 'laravel-mix' );

mix
    .sass( 'public/src/main.scss', 'index.css' )
    .browserSync({
        proxy: 'http://localhost:9000',
        files: [
            'src/*.php',
        ],
        watchOptions: {
            usePolling: true,
            interval: 500
        }
    });