<template>
    <div class="row">
        <div class="col-md-5 offset-md-2">
            <h3><b>{{section_four_title}}</b></h3>
            <div id="separator"></div>
            <p v-html="section_four_text"></p>
        </div>
        <div class="col-md-2 offset-md-1 align-self-center">
            <img v-bind:src="section_four_image_path">
        </div>
    </div>
</template>

<script>
export default {
    name: "ImageLeftTextRightComponent",
    props: ['section_four_image_path', 'section_four_title', 'section_four_text']
}
</script>

<style scoped>
#separator {
    width: 80px;
    height: 4px;
    background-color: #FFCC00;
    margin-bottom: 10px;
}
.row{
    background-color: #F8F9FA;
}

</style>
