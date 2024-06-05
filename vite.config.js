import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});


// export default defineConfig({
//       plugins: [vue()],
//       build: {
//         outDir: 'public/build',
//         manifest: true,
//         rollupOptions: {
//           input: 'src/main.js'  // Ana giriş dosyanızı burada belirtin
//         }
//       },
//       optimizeDeps: {
//         include: ['vue']  // Optimize edilecek bağımlılıkları burada belirtin
//       }
//   });

  