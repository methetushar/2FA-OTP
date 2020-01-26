import Vue from "vue";
import VueRouter from "vue-router";
import Login from "./components/LoginComponent";
import Register from "./components/RegisterComponent";
Vue.use(VueRouter);
const routes = [
    {
        path: "/",
        component: Login,
    },
    {
        path: "/signup",
        component: Register,
    }
]



export default new VueRouter({
    routes
})