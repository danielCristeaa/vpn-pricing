<template>
    <div class="jumbotron" v-bind:style="{ 'background-image': 'url(' + image + ')' }">
        <h1 class="display-4"><b>{{title}}</b></h1>
        <p class="lead">{{text}}</p>
        <div class="get-vpn">
            <a class="btn btn-lg" href="#" role="button"><b>GET CyberGhost VPN</b></a>
            <p><u>{{startFreeTrialText}}</u></p>
        </div>
    </div>
</template>

<script>
export default {
    name: "JumbotronComponent",
    props: ['image', 'title', 'text', 'startFreeTrialText'],
}
</script>

<style scoped>
.jumbotron {
    height: 500px;
    color: white;
}
.btn{
    background-color: #FFCC00;
}
.get-vpn {
    float: left;
    display: block;
    text-align: center;
}
</style>
