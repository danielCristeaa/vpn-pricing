<template>
    <div class="jumbotron" v-bind:style="{ 'background-image': 'url(' + image + ')' }">
        <div class="container text-left">
            <div class="row">
                <div class="col-12 pt-4">
                    <h1 class="display-4 font-weight-bold">{{title}}</h1>
                    <p class="lead">{{text}}</p>
                    <div class="get-vpn pt-5">
                        <a class="btn btn-lg" href="#" role="button"><b>GET CyberGhost VPN</b></a>
                        <p><u>{{startFreeTrialText}}</u></p>
                    </div>
                </div>
            </div>
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
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    border-radius: 0;
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
