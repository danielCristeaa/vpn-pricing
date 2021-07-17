<template>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="section_two">
                <h1><b>{{section_two_title}}</b></h1>
                <p v-html="section_two_top_text"></p>
                <img v-bind:src="section_two_image_path">
                <p v-html="section_two_bottom_text"></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "HamburgerComponent",
    props: ['section_two_title', 'section_two_top_text', 'section_two_image_path', 'section_two_bottom_text'],
}
</script>

<style scoped>
#section_two{
    text-align: center;
}
.row{
    background-color: #F8F9FA;
}
</style>
