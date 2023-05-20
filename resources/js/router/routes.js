import Landing from '../components/Landing.vue'
import AdminLogin from '../components/admin/Login.vue'
// import Register from '../components/Register.vue'


export default [
    // { path: '*', name: 'NotFound', component: NotFound },
    { path: '/', name: 'Landing', component: Landing },
    { path: '/admin-login', name: 'AdminLogin', component: AdminLogin },
    // { path: '/register', name: 'Register', component: Register },
]
