<template>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="/assets/LOGO.png" height="28" alt="CoolBrand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        What is VPN?
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        VPN Apps
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Servers</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Privacy Hub</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <div id="buttonsSection">
                <button type="button" class="btn" id="discountButton"><b>Buy Now - 79% Discount</b></button>
                <button type="button" class="btn" id="myAccountButton">My Account</button>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
name: "NavbarComponent"
}
</script>

<style scoped>
.navbar{
    background-color: #1d1e2f;
}
.nav-link {
    color: white;
}
#buttonsSection{
    float: right
}
#discountButton{
    background-color: #FFCC00;
}
#myAccountButton{
    background-color: transparent;
    color: white;
    border: 2px white solid;
}
</style>
