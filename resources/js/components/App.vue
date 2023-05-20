<template>
    <v-app>
        <template v-if="$route.path == '/'">
            <WelcomeNavbar />
            <transition mode="out-in" enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut">
                <router-view></router-view>
            </transition>
            <Footer />
        </template>
    </v-app>
</template>

<script>
// import Navbar from './includes/Navbar'
import WelcomeNavbar from './navbars/WelcomeNavbar'
// import AdminAuthNavbar from './includes/AdminAuthNavbar'
// import UserAuthNavbar from './includes/UserAuthNavbar'

export default {
    components: {
        WelcomeNavbar,
    },
    computed:{
        pgScrollPosition(){
            // return this.$store.getters.pgScrollPosition
        },
        adminIsLoggedIn(){
            // return this.$store.getters.adminIsLoggedIn
        },
        userIsLoggedIn(){
            // return this.$store.getters.userIsLoggedIn
        },
    },
    methods: {
        handleScroll(){
            if(this.$route.path == '/'){
                this.$store.commit('checkPgScrollHeight')
            }
        }
    },
    mounted() {
        window.addEventListener('scroll', this.handleScroll)
    },
    destroyed() {
        window.removeEventListener('scroll')
    },
}
</script>

