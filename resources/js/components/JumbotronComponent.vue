<template>
    <div class="jumbotron pt-2" v-bind:style="{ 'background-image': 'url(' + image + ')' }">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">VPN Insights</a></li>
                <li class="breadcrumb-item" aria-current="page">Features</li>
            </ol>
        </nav>
        <div class="container text-left">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-4 font-weight-bold">{{title}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pt-3">
                    <p class="lead">{{text}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="get-vpn pt-5 pb-5">
                        <a class="btn btn-lg" href="#" role="button"><b>GET CyberGhost VPN</b></a>
                        <div>
                            <a href="#" style="color: white; text-decoration: underline;">{{startFreeTrialText}}</a>
                        </div>
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
    /*height: 500px;*/
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
.breadcrumb {
    background-color: transparent;
    padding: 2px 15px !important;
    font-size: 12px;
}
li a{
    text-decoration: none !important;
    color: white;
}
</style>
