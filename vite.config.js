import vue from "@vitejs/plugin-vue";

export default {
    plugins: [vue()],
    build: {
        manifest: true,
        rollupOptions: {
            input: {
                "my-custom-script": "./resources/js/app.js",
                "my-custom-style": "./resources/css/app.css",
            },
            output: {
                dir: "./public",
            },
        },
    },
};
