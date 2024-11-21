import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import path from 'path';

// Função para pegar todos os arquivos .js e .css de uma pasta
function getAllFilesFromFolder(folderPath, extensions) {
    return fs.readdirSync(folderPath)
        .filter(file => extensions.includes(path.extname(file)))
        .map(file => `${folderPath}/${file}`);
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                 'resources/js/app.js',
                 ...getAllFilesFromFolder('resources/js/keycloack', ['.js']),
                 ...getAllFilesFromFolder('resources/js/pages/home/navbar/', ['.js'])
                ],
            refresh: true,
        }),
    ],
});
