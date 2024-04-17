import vue from '@vitejs/plugin-vue'
import {fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'

export default defineConfig({
  plugins: [vue()],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))

    },
    extensions: [".ts", ".js", ".vue"]
  },
  build: {
    outDir: './html',
    sourcemap: true
  }
})