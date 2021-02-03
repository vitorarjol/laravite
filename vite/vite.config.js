import vue from "@vitejs/plugin-vue";
const { resolve } = require("path");

export default {
    plugins: [vue()],
    build: {
        emptyOutDir: true,
        assetsDir: "",
        // root: '../resources/',
        outDir: "../public/assets",
        manifest: true,
        rollupOptions: {
            input: {
                "my-custom-script": "../resources/js/app.js",
                "my-custom-style": "../resources/css/app.css",
            },
        },
    },
};
