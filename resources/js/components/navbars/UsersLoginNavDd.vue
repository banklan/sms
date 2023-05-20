<template>
    <div class="dropdown_wrap" @click="openLogin = !openLogin">
        <div class="roll-over" >
            <a href="#">Login</a>
            <svg viewBox="0 0 1030 638" width="10">
                <path d="M1017 68L541 626q-11 12-26 12t-26-12L13 68Q-3 49 6 24.5T39 0h952q24 0 33 24.5t-7 43.5z" fill="#FFF"></path>
            </svg>
        </div>
        <div class="dropdown" v-if="openLogin">
            <div class="menu_item">
                <router-link to="#">School Management</router-link>
            </div>
            <div class="menu_item">
                <router-link to="#">Teacher</router-link>
            </div>
            <div class="menu_item">
                <router-link to="#">Parent</router-link>
            </div>
            <div class="menu_item">
                <router-link to="#">Student</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            openLogin: false,
        }
    },
}
</script>

<style lang="scss" scoped>
    .dropdown_wrap{
        height: 100%;
        .roll-over{
            // background: red;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 15px;
            overflow: hidden;
            cursor: pointer;
            transition: all .4s ease;
            position: relative;
            &:hover{
                background: red;
            }
            a{
                color: #fff;
                text-transform: capitalize;
                text-transform:capitalize;
                font-size: 1.1rem !important;
                font-family: "Nunito Sans", sans-serif;
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                padding-right: 5px;
            }
        }
        .dropdown{
            border: 1px solid #2e1eb9;
            // box-shadow: 15px 15px 15px rgba(#fefefe, 0.1);
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            background: #311de2;
            color: #fff;
            // min-height: 20px;
            height: fit-content;
            position: absolute;
            top: 5.58rem;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            z-index: 1000;
            perspective: 300px;

            .menu_item{
                padding: 16px 80px 16px 12px;
                border-bottom: 1px solid #5245c5;
                transition: all .4s ease;
                display: flex;
                // justify-content: center;
                align-items: center;
                opacity: 0;
                animation: flipNavBar .6s ease forwards;
                transform-origin: top;

                &:nth-child(2){
                        animation-delay: 200ms;
                    }
                    &:nth-child(3){
                        animation-delay: 400ms;
                    }
                    &:nth-child(4){
                        animation-delay: 600ms;
                    }
                    &:nth-child(5){
                        animation-delay: 800ms;
                    }

                    @keyframes flipNavBar{
                        0%{
                            transform: rotateX(90deg);
                        }
                        100%{
                            transform: rotateX(0deg);
                            opacity: 1;
                        }
                    }



                &:hover{
                    background: #4c3cdf;
                }

                a{
                    color: #fff;
                    height: 100%;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    transition: all .4s ease;
                    text-transform:capitalize;
                    font-size: 1.1rem !important;
                    font-family: "Nunito Sans", sans-serif;
                }
            }
            // align-items: ;
        }
    }
</style>
