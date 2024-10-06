import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js' , 'resources/css/admin/admin.scss', 'resources/js/admin/admin.js'],
            refresh: true,
        }),
    ],
});