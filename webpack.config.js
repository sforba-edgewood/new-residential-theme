const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const path = require('path');

const mode = 'development';

module.exports = {
    mode,
    watch: true,
    entry: {
      app: ["./scss/global.scss"],
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "[name].css",
      }),
    ],
    module: {
        rules: [
          {
            test: /\.scss$/,
            use: [
              // Creates `style` nodes from JS strings
              MiniCssExtractPlugin.loader,
              // Translates CSS into CommonJS
              "css-loader",
              // Compiles Sass to CSS
              "sass-loader",
            ],
          },
        ],
    },
}