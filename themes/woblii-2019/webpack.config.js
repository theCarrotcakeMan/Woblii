const VueLoaderPlugin = require('vue-loader/lib/plugin');
const path = require('path');

module.exports = {
    entry: './src/app.js',
    output: {
        filename: 'js/bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    mode: "development",
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            }
        ]
    },
    plugins: [
        // make sure to include the plugin!
        new VueLoaderPlugin()
    ]
};
