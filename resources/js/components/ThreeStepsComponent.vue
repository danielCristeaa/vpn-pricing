<template>
    <div class="container pv-md">
        <h1 class="title">{{title}}</h1>
        <p>{{subtitle}}</p>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img src="/assets/step_one.png">
                    <p class="font-weight-bold" v-html="step_one_title"></p>
                    <p class="subtext" v-if="step_one_text" v-html="step_one_text"></p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="/assets/step_two.png">
                    <p class="font-weight-bold" v-html="step_two_title"></p>
                    <p class="subtext" v-if="step_two_text" v-html="step_two_text"></p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="/assets/step_three.png">
                    <p class="font-weight-bold" v-html="step_three_title"></p>
                    <p class="subtext" v-if="step_three_text" v-html="step_three_text"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ThreeStepsComponent",
    props: ['title', 'subtitle', 'step_one_title', 'step_one_text', 'step_two_title', 'step_two_text', 'step_three_title', 'step_three_text'],
}
</script>

<style scoped>
.container{
    text-align: center;
}
.title {
    font-weight: bold;
}
</style>
