import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: 3000,
        open: false,
        hmr: {
            host: 'localhost',
            clientPort: 3000,
        },
        watch: {
            usePolling: true,
        },
    },
});
