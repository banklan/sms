<template>
    <div class="steps">
        <div class="cont">
            <div class="section_header subject">4 Easy Steps Toward A Digital School</div>
            <div class="wrap">
                <div class="step_card">
                    <img src="/assets/svg/discover.svg" alt="">
                    <div class="step">
                        <div class="head">Discover</div>
                        <div class="body">
                            Explore how SchoolManager Can turn your school to a banchmark and excellence and value
                        </div>
                    </div>
                </div>
                <div class="step_card">
                    <img src="/assets/svg/customize.svg" alt="">
                    <div class="step">
                        <div class="head">Customize</div>
                        <div class="body">
                            Set up your school on the platform and customize to suit your school needs
                        </div>
                    </div>
                </div>
                <div class="step_card">
                    <img src="/assets/svg/use.svg" alt="">
                    <div class="step">
                        <div class="head">Switch</div>
                        <div class="body">
                            Upload your school existing data using spreadsheets and csv, jpeg or pdf
                        </div>
                    </div>
                </div>
                <div class="step_card">
                    <img src="/assets/svg/grow.svg" alt="">
                    <div class="step">
                        <div class="head">Grow</div>
                        <div class="body">
                            Enjoy the benefits of working on premium digital space and watch your school grow                     </div>
                    </div>
                </div>
            </div>
            <div class="learn_more">
                <v-btn class="mb-4" elevation="16" dark x-large block ripple="12" rounded color="secondary">Learn More</v-btn>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .steps{
        margin: 0 auto;
        height: 100vh;
        width: 100vw;
        background: linear-gradient(135deg, hsl(210, 36%, 90%), hsl(210, 44%, 86%), hsl(210, 44%, 75%));
        padding-bottom: 5rem;
        .cont{
            width: 100%;
            margin: 0 auto;
            padding: 15px 45px 30px;
            .subject{
                margin-top: -2rem;
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
            .wrap{
                width: 100%;
                margin: 0 auto;
                display: grid;
                // padding-right: 1.6rem;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                gap: 2rem;

                .step_card{
                    border: 1px solid #a8bfd6;
                    border-radius: 12px;
                    box-sizing: border-box;
                    min-height: 15rem;
                    overflow: hidden;
                    text-align: center;
                    padding: 1.6rem .8rem;

                    img{
                        height: 9rem;
                    }

                    .step{
                        margin-top: 1.5rem;
                        color: #162a4c;
                        text-align: center;
                        .head{
                            font-size: 1.6rem;
                            font-weight: 400;
                            line-height: 1.7;
                        }
                        .body{
                            font-size: 1.2rem;
                            line-height: 1.6;
                        }
                    }
                }
            }
            .learn_more{
                margin: 0 auto;
                text-align: center;
                width: 20%;
                padding: 4rem 1.5rem 5rem;
            }
        }
    }
</style>
