const path = require("path");
module.exports = {
  configureWebpack: {
    resolve: {
      alias: {
        "@s": path.resolve(__dirname, "src/services"),
        "@c": path.resolve(__dirname, "src/common"),
        "@l": path.resolve(__dirname, "src/layouts"),
        "@v": path.resolve(__dirname, "src/views"),
        "@assets": path.resolve(__dirname, "src/assets"),
        "@": path.resolve(__dirname, "src"),
      },
      extensions: [".js", ".vue", ".json"],
    },
  },
};
