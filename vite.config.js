import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload'
import { resolve, basename } from 'path'

export default defineConfig({
    // plugins: [],
    root: '',
    base: process.env.NODE_ENV === 'development'
        ? `/wp-content/themes/${basename(__dirname)}/`
        : `/wp-content/themes/${basename(__dirname)}/dist/`,
    plugins: [

        liveReload([`${__dirname}+ "/**/*.php`], {}),
    ],
    build: {
        cssCodeSplit: true,
        // cssMinify: 'lightningcss',
        // output dir for production build
        outDir: resolve(__dirname, './dist'),
        emptyOutDir: true,
        // required for load assets
        target: 'es2018',
        sourcemap: 'inline',
        manifest: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname + '/main.js'),
            },
        },
        minify: true,
        write: true
    },
    server: {
        cors: true,
        strictPort: true,
        // port for dev server, you can change it if you want but you need to change the port in the function.php too
        port: 3000,
        https: false,
        // use ssl
        // https: true,
        // hot module replacement port
        hmr: {
            host: 'localhost',
        },
    },
    resolve: {
        alias: {
            //vue: 'vue/dist/vue.esm-bundler.js'
            assets: '/assets',
        },
    }
});