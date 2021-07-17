<template>
    <div class="row">
        <div class="col-md-2 offset-md-2">
            <img v-bind:src="section_three_image_path">
        </div>
        <div class="col-md-5 offset-md-1">
            <h3><b>{{section_three_title}}</b></h3>
            <div id="separator"></div>
            <p v-html="section_three_text"></p>
        </div>
    </div>
</template>

<script>
export default {
    name: "ImageRightTextLeftComponent",
    props: ['section_three_image_path', 'section_three_title', 'section_three_text']
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
