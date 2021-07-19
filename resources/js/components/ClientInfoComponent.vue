<template>
    <div id="clientInfo">
        Language: {{language}} Browser: {{browser}} Location: {{location}}
    </div>
</template>

<script>
export default {
    name: "ClientInfoComponent",
    data() {
        return {
            browser: null,
            language: null,
            location: null
        }
    },
    mounted() {
        //when mounted, the component will display the language, browser version and location of the user
        this.getBrowserLocale()
        this.getBrowserVersion()
        this.getLocation()
    },
    methods: {
        getBrowserLocale() {
            this.language = navigator.languages[0]
        },
        getBrowserVersion() {
            var ua=navigator.userAgent,tem,M=ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if(/trident/i.test(M[1])){
                tem=/\brv[ :]+(\d+)/g.exec(ua) || [];
                return {name:'IE',version:(tem[1]||'')};
            }
            if(M[1]==='Chrome'){
                tem=ua.match(/\bOPR|Edge\/(\d+)/)
                if(tem!=null)   {return {name:'Opera', version:tem[1]};}
            }
            M=M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
            if((tem=ua.match(/version\/(\d+)/i))!=null) {M.splice(1,1,tem[1]);}

            this.browser = M[0]+" "+M[1]
        },
        getLocation() { //calls the method determineLocation from MainController
            const self = this
            axios
                .get('/determineLocation')
                .then(response => {
                    if( response.data.status == "success"){
                        self.location = response.data.country
                    }
                })
        }
    }
}
</script>

<style scoped>
#clientInfo{
    background-color: #E7E7E7;
    font-size: 12px;
    color: #656679;
}
</style>
