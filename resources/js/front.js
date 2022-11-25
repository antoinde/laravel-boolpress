require("./bootstrap");

window.Vue = require("vue");
import router from './router';

window.axios = require('axios');

import App from "./views/App";
const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router,
});