const path = require("path");
module.exports = {
  configureWebpack: {
    resolve: {
      alias: {
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
