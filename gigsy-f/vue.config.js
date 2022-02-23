const path = require('path');  
module.exports = {
  configureWebpack: {
    resolve: {
      alias: {
        "@c": path.resolve("./", "src/components"),
        "@v": path.resolve("./", "src/views"),
        "@": path.resolve("./", "src"),
      },
    },
  },
};