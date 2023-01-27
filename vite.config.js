import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

//Vue install process
//{//npm install vue@next vue-loader@next 
//npm i @vitejs/plugin-vue
//import vue from '@vitejs/plugin-vue'}

import vue from '@vitejs/plugin-vue'
export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});