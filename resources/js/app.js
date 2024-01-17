require("./bootstrap");

import { createApp } from "vue";
import Login from "../components/Auth/Login.vue";
import Pay from "../components/Payments/Index.vue";
import Dashboard from "../components/Dashboard.vue";
const app = createApp({
    components: {
        Login,
        Pay,
        Dashboard,
    },
});

app.mount("#app");
