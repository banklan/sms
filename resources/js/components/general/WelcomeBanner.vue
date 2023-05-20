<template>
    <div class="banner">
        <div class="banner-content">
            <div class="text-content">
                <div class="text-h2">
                    The most important decision you will ever make in the management of your school
                </div>
                <div class="text-h5 animate__animated animate__bounceInLeft">
                    Switch to SchoolManager, make the day-to-day running of your school a breeze
                </div>
            </div>
            <div class="banner-cta">
                <v-btn rounded x-large dark class="primary">Request A Quote</v-btn>
                <v-btn rounded x-large dark class="secondary">Book a Demo</v-btn>
                <!-- <v-btn outlined rounded x-large color="secondary darken-2">Book a Demo</v-btn> -->
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .animate__animated.animate__bounceInLeft{
        --animate-duration: 2s;
    }
   .banner-content{
        // display: flex;
        // justify-content: space-around;
        // align-items: center;
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        padding: 0 2.5rem;
        .text-content{
            font-family: 'Nunito Sans', sans-serif;
            text-align: center;
            padding: 1.5rem 2.5rem;
            height: 100%;

            .text-h2{
                margin-top: 3.5rem;
                line-height: 1.3 !important;
                color: #fff;
                font-weight: 300;
                margin-bottom: 3rem;
                text-align: left;
            }
            .text-h5{
                color: #FFAE21;
                font-weight: 300;
                line-height: 1.3;
                font-size: 1.9rem !important;
                text-align: left;
            }
        }
        .banner-cta{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            padding: 0 2rem;
        }
    }
</style>
