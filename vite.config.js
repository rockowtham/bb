// vite.config.js
import React from 'react';
import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css', 
            'resources/js/app.js',
        ]),
    ],
});
