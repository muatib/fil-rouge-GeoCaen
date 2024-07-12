export default defineConfig({
    build : {
      // génère manifest.json dans outDir
      manifest : true,
      rollupOptions : {
        // écrase l'entrée .html par défaut
        input : '/path/to/main.js'
      }
    }
  })