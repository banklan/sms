<template>
    <nav>
        <v-app-bar flat fixed elevation="pgScrollPosition > 9 ? 12 : 0" dark class="white--text" height="90" :class="pgScrollPosition > 90 ? 'primary' : 'transparent'">
        <!-- <v-app-bar flat fixed dark class="white--text transparent" height="90"> -->
            <span class="hidden-md-and-up">
                <v-app-bar-nav-icon class="white--text hidden-md-and-up" @click="navDrawer = true"></v-app-bar-nav-icon>
            </span>
            <v-toolbar-title class="ml-5 white--text">
                <router-link to="/" style="cursor:pointer" exact>
                    <span class="secondary--text">
                        SchoolManager
                    </span>
                </router-link>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down align-center">
                <UsersLoginNavDd />

                <v-btn class="white--text" text v-for="menu in menus" :key="menu.title">
                    <router-link class="white--text" :to="menu.path">{{ menu.title }}</router-link>
                </v-btn>
            </v-toolbar-items>
        </v-app-bar>
    </nav>
</template>

<script>
export default {
    data(){
        return{
            menus: [
                {title: 'Home', path: '/'},
                {title: "About Us", path: "/about-us"},
                {title: "Schools", path: "/schools"},
                {title: "Blog", path: "/blog"},
                {title: "Contact Us", path: "/contact-us"},
            ],
            authMenus: [
                {title: 'Home', path: '/'},
                {title: 'Staff Home', path: '/user/dashboard'},
            ],
            navDrawer: false,
            bg: ''
        }
    },
    computed: {
        // api(){
        //     return this.$store.getters.api
        // },
        // userIsLoggedIn(){
        //     return this.$store.getters.userIsLoggedIn
        // },
        // adminIsLoggedIn(){
        //     return this.$store.getters.adminIsLoggedIn
        // },
        // adminHeaders(){
        //     let headers = {
        //         headers: {
        //             "Authorization": `Bearer ${this.authAdmin.token}`
        //         }
        //     }
        //     return headers
        // },
        // authAdmin(){
        //     return this.$store.getters.authAdmin
        // },
        // authUser(){
        //     return this.$store.getters.authUser
        // },
        // authHeaders(){
        //     let headers = {
        //         headers: {
        //             "Authorization": `Bearer ${this.authUser.token}`
        //         }
        //     }
        //     return headers
        // },
        pgScrollPosition(){
            return this.$store.getters.pgScrollPosition
        }
    },
    methods: {
        // openLogin(){
        //     alert('open!')
        // }
        // adminLogout(){
        //     if(this.adminIsLoggedIn){
        //         axios.post(this.api + `/auth-admin/logout`, {}, this.adminHeaders).then(() =>{
        //         this.$store.commit('logOutAdmin')
        //             this.$router.push('/')
        //         })
        //     }
        // },
        // userLogout(){
        //     if(this.userIsLoggedIn){
        //         axios.post(this.api + `/auth/logout`, {}, this.authHeaders).then(() =>{
        //             this.$store.commit('logOutAuthUser')
        //             this.$router.push('/')
        //         })
        //     }
        // }
    },
    mounted() {

    },
}
</script>

<style lang="scss" scoped>
    nav{
        margin-bottom: 8rem !important;

        // #app > div > nav > header
        & > header{
            // height: 5rem !important;

            div.v-toolbar__content{
                height: 100% !important;
                display: flex !important;
                align-items: center !important;
                padding: 8px 16px !important;

                .v-btn a{
                    text-transform:capitalize;
                    font-size: 1.1rem !important;
                    font-family: "Nunito Sans", sans-serif;
                }
            }
        }
    }
    // a{
    //     color: #fff !important;
    //     text-decoration: none;
    //     text-transform:capitalize;
    // }
    // a.router-link-exact-active{
    //     color: #c1e6ff !important;
    // }

    // .v-list a.v-list-item:hover .v-list-item__title{
    //     margin-left: 3px !important;
    // }

    // .v-list a.v-list-item    .v-list-item__title{
    //     transition: all 400ms ease;
    // }

    // .v-list-item--active{
    //     background: #c1e6ff !important;
    //     .v-list-item__title{
    //         color: #fff !important;
    //     }
    // }
    .raise{
        box-shadow: 0 15px 15px rgba(0, 0, 0, .9) !important;
    }

</style>
