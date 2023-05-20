<template>
    <div class="wrap">
        <div class="stakeholders">
            <div class="stakeholders_title">
                A platform developed with every stakeholder in the life of a student in mind
            </div>
            <div class="cont">
                <div class="card_wrap">
                    <!-- <img src="/assets/svg/educator.svg" alt=""> -->
                    <div class="title">School Admin</div>
                    <div class="body">We all know how daunting the job of a school administrator can be. With SchoolManager, we made their lives easier! Manage students data, run reports, communicate with all stakeholders all from one place</div>
                    <div class="cta">
                        <v-btn dark rounded color="secondary">School Admin Portal</v-btn>
                    </div>
                </div>
                <div class="card_wrap">
                    <div class="title">Teachers</div>
                    <div class="body">Teachers can now focus on what they do best while allowing SchoolManager take care of other time consuming tasks like attendance, class management etc which has been automated and integrated into the platform</div>
                    <div class="cta">
                        <v-btn dark rounded color="secondary">Teachers Portal</v-btn>
                    </div>
                </div>
                <div class="card_wrap">
                    <div class="title">Parents</div>
                    <div class="body">For students to thrive, parents and guardians have to engage closely with them and interact more with the school. SchoolManager makes it seamless and effortless to help them track the progress of their wards.</div>
                    <div class="cta">
                        <v-btn dark rounded color="secondary">Parents portal More</v-btn>
                    </div>
                </div>
                <div class="card_wrap">
                    <div class="title">Student</div>
                    <div class="body">With SchoolManager, we have provided the tools to enable students reach their potentials. They can access assignments, time tables, curriculum, see their scores and so much more.  </div>
                    <div class="cta">
                        <v-btn dark rounded color="secondary darken-1" raised>Students Portal</v-btn>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .wrap{
        width: 100vw;
        height: 100vh;
        margin: 0 auto;

        .stakeholders{
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, hsl(194, 63%, 23%), hsl(194, 63%, 10%));
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            box-sizing: border-box;
            overflow: hidden;
            padding: 20px 60px;
            margin: 0 auto;

            .stakeholders_title{
                color: #fff;
                font-size: 2.2rem;
                font-weight: 300;
                line-height: 28px;
                text-align: center;
                // margin-bottom: rem;
            }

            .cont{
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 1.5rem;
                box-sizing: border-box;

                .card_wrap{
                    height: 20rem;
                    overflow: hidden;
                    cursor: pointer;
                    border-radius: 6px;
                    color: #fff;
                    background: #154D5E;
                    border: 1px solid #154D5E;
                    padding: 15px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                    align-items: center;
                    text-align: center;
                    transition: all .4s ease;

                    &:hover{
                        box-shadow: 0 5px 5px 5px rgba(0, 0, 0, .25);

                        background: hsl(194, 63%, 18%);
                        border: 1px solid #113d4b;
                        .v-btn{
                            background: hsl(38, 100%, 36%) !important;
                        }
                    }
                    .title{
                        font-size: 1.2rem;
                        color: #FFAE21;
                        text-align: center;
                        margin-bottom: 1rem;
                    }
                    .body{
                        font-size: 1rem;
                        color: #fff;
                        text-align: justify;
                        line-height: 1.6;
                        margin-bottom: 1rem;
                    }
                    .cta{
                        margin: 1rem .6rem;

                        .v-btn{
                            transition: all .4s ease;
                        }
                    }

                    img{
                        height: 15rem;
                    }
                }
            }
        }
    }
</style>
