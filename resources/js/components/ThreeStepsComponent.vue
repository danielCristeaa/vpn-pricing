<template>
    <div class="container">
        <h1><b>{{title}}</b></h1>
        <p>{{subtitle}}</p>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img src="/assets/step_one.png">
                    <p><b>{{step_one_title}}</b></p>
                    <p class="subtext" v-if="step_one_text">{{step_one_text}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="/assets/step_two.png">
                    <p><b>{{step_two_title}}</b></p>
                    <p class="subtext" v-if="step_two_text">{{step_two_text}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="/assets/step_three.png">
                    <p><b>{{step_three_title}}</b></p>
                    <p class="subtext" v-if="step_three_text">{{step_three_text}}</p>
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
</style>
