<template>
    <div class=" pricing-section container pt-5 pb-5">
        <div class="title text-center">
            <h1><b>Choose the plan that works for you</b></h1>
        </div>
        <div class="row justify-content-center">
            <a href="#" class="custom-tooltip" data-toggle="tooltip" data-placement="bottom" rel="tooltip">
                <div class="col-md-auto">
                    <div class="card text-center regular-card">
                        <div class="card-body">
                            <p class="card-text"><b>1 Month</b></p>
                            <div>
                                <span class="price-number">{{one_month_price}}</span>
                                <span class="price-currency">&nbsp;€</span>
                                /mo
                            </div>
                            <div>
                                <small class="card-text">Billed {{one_month_price}} € every month</small>
                            </div>
                            <div>
                                <a href="#" class="btn regular-button">Get 1 month plan</a>
                            </div>
                            <div>
                                <small class="card-text">14-day money back guarantee</small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-md-auto">
                <div class="card text-center special-card">
                    <div class="card-body">
                        <span class="badge">Save 80%</span>
                        <p class="card-text"><b>3 Years</b></p>
                        <div>
                            <span class="price-number">{{ three_years_price }}</span>
                            <span class="price-currency">&nbsp;€</span>
                            /mo
                        </div>
                        <div>
                            <small class="card-text">Billed {{ threeYearsTotalPRice }} € every 3 years</small>
                        </div>
                        <div>
                            <a href="#" class="btn special-button">Get 3 years plan</a>
                        </div>
                        <div>
                            <small class="card-text">45-day money back guarantee</small>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="custom-tooltip" data-toggle="tooltip" data-placement="bottom" rel="tooltip">
                <div class="col-md-auto">
                    <div class="card text-center regular-card">
                        <div class="card-body">
                            <p class="card-text"><b>1 Year</b></p>
                            <div>
                                <span class="price-number">{{ one_year_price }}</span>
                                <span class="price-currency">&nbsp;€</span>
                                /mo
                            </div>
                            <div>
                                <small class="card-text">Billed {{ oneYearTotalPrice }} € every year</small>
                            </div>
                            <div>
                                <a href="#" class="btn regular-button">Get 1 year plan</a>
                            </div>
                            <div>
                                <small class="card-text">45-day money back guarantee</small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-5">
                <small>*All amounts shown are in Euros</small>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PricingComponent",
    props: ['one_month_price', 'one_year_price', 'three_years_price'],
    data() {
        return {
            oneYearTotalPrice: 0,
            threeYearsTotalPRice: 0
        }
    },
    mounted() {
        this.oneYearTotalPrice = Math.round(this.one_year_price * 12)
        this.threeYearsTotalPRice = Math.round(this.three_years_price * 12 * 3)

        $(document).ready(function(){
            $('[rel=tooltip]').tooltip({
                html: true,
                placement: 'bottom',
                template : '<div class="tooltip"><div class="arrow"></div><div class="tooltip-head"><p><i class="fa fa-info-circle"></i> IMPORTANT!</p></div><div class="tooltip-inner"></div></div>',
                title: 'The <b>3 YEARS</b> plan includes <b>the biggest savings</b> and <b>is fully refundable for 45 days.</b>',
            });
        });
    }
}

</script>

<style>
.pricing-section{
    min-height: 70vh;
}
.price-number{
    font-size: 32px;
    font-weight: 800;
}
.price-currency{
    font-size: 18px;
    font-weight: 900;
    vertical-align: top;
}
.regular-button{
    color: black;
    background-color: transparent;
    border: 2px black solid;
    font-weight: bold !important;
}
.special-button{
    background-color: #4ba920!important;
    color: white;
    font-weight: bold !important;
}
@media only screen and (min-width: 768px) {
    .special-card{
        height: 250px;
        width: 18rem;
    }
    .regular-card {
        margin-top: 20px;
        width: 18rem;
    }
}

.badge {
    font-weight: 800;
    font-size: 14px;
    background-color: #ecf6e8;
    color: #4ba920;
    min-width: 40%;
    min-height: 12%;
    text-align: center;
    border-radius: 100px;
    line-height: 1.5em;
    margin-bottom: 1em;
}

.tooltip-head{
    font-weight: bold;
    font-style: normal !important;
    color: #EC5049;
    background: #FDEDEC;
    padding: 10px 10px 5px;
    border-radius: 4px 4px 0 0;
    text-align: center;
    margin-bottom: -2px;
    width: 18rem;
}
.tooltip-head .glyphicon{
    font-size: 12px;
    vertical-align: bottom;
}
.tooltip-inner{
    color: #EC5049;
    background: #FDEDEC;
    width: 18rem;
    max-width: none;
    padding: 0;
}
.arrow {
    display: none !important;
}
a.custom-tooltip, a.custom-tooltip:hover, a.custom-tooltip:focus, a.custom-tooltip:active {
    text-decoration: none;
    color: inherit;
}
</style>
