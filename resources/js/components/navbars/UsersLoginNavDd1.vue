<template>
    <div class="menu-item" @mouseover="isOpen = true" @mouseout="isOpen = false" >
        <div class="dropdown-btn">
            <v-btn class="white--text" text>
                <router-link class="white--text" to="#">Login</router-link>
            </v-btn>
            <svg viewBox="0 0 1030 638" width="10">
                <path d="M1017 68L541 626q-11 12-26 12t-26-12L13 68Q-3 49 6 24.5T39 0h952q24 0 33 24.5t-7 43.5z" fill="#FFF"></path>
            </svg>
        </div>
        <transition name="fade" apear>
            <div class="sub-menu" v-if="isOpen">
                <div class="sub-menu__card">
                    <div class="menu_wrap">
                        <div class="menu-item">
                            <router-link to="/management/login">School Management</router-link>
                        </div>
                        <div class="menu-item">
                            <router-link to="/management/login">School Management</router-link>
                        </div>
                        <div class="menu-item">
                            <router-link to="/management/login">School Management</router-link>
                        </div>
                        <div class="menu-item">
                            <router-link to="/management/login">School Management</router-link>
                        </div>
                        <div class="menu-item">
                            <router-link to="/management/login">School Management</router-link>
                        </div>
                    </div>
                </div>

                <!-- <div class="menu-item">
                    <router-link to="/management/login">School Management</router-link>
                </div>
                <div class="menu-item">
                    <router-link to="/teachers/login">Teacher</router-link>
                </div>
                <div class="menu-item">
                    <router-link to="/parents/login">Parents</router-link>
                </div>
                <div class="menu-item">
                    <router-link to="/students/login">Student</router-link>
                </div> -->
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    data() {
        return{
            isOpen: false,

        }
    },
}
</script>


<style lang="scss" scoped>
.menu-item{
    // height: 100%;
    .dropdown-btn{
        // height: 100%;
        position:relative;
        display: block;
        height: 100%;
    }
    .sub-menu{
        position: absolute;
        top: 4rem;
        // top: 4.2rem !important;
        // min-height: 15rem;
        min-width: 15rem;
        overflow: hidden;
        box-sizing: border-box;
        background: #fff;
    }
}
</style>
