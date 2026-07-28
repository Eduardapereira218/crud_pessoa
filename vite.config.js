import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
 
export default defineConfig({
    plugins: [
        // Configuração padrão do Laravel para o Vite
        // Define quais arquivos serão compilados
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true, // Atualiza o navegador automaticamente ao salvar
        }),
 
        // Adiciona o suporte a arquivos .vue dentro do Vite
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});