<template>
    <div class="row">
        <div class="col-md-5 offset-md-1">
            <h3><b>{{title}}</b></h3>
            <div id="separator"></div>
            <p v-html="text"></p>
        </div>
        <div class="col-md-2 offset-md-2 align-self-center">
            <img v-bind:src="image_path">
        </div>
    </div>
</template>

<script>
export default {
    name: "ImageRightTextLeftComponent",
    props: ['image_path', 'title', 'text']
}
</script>

<style scoped>
#separator {
    width: 80px;
    height: 4px;
    background-color: #FFCC00;
    margin-bottom: 10px;
}
</style>
