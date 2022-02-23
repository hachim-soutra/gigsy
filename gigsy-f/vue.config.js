const path = require('path');  
module.exports = {
  configureWebpack: {
    resolve: {
      alias: {
        "@c": path.resolve(__dirname, "src/components"),
        "@v": path.resolve(__dirname, "src/views"),
        "@assets": path.resolve(__dirname, "src/assets"),
        "@": path.resolve(__dirname, "src"),
      },
      extensions: ['.js', '.vue', '.json']
    },
  },
};