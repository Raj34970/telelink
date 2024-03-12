<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'includes/document.php';
    include 'php/header.php';
?>
<body data-spy="scroll" data-target="#navbar" data-offset="0" style="overflow-x: hidden;">
    <div id="container">
        <div class="background">
            <div class="container" id="bodyContainer">
                <div class="left-region">
                    <h1 id="headline">Our service to your business</h1>
                    <p id="index_paragraph">Welcome to our cutting-edge telecommunications hub, 
                        where connectivity meets innovation! At Telelink, 
                        we pride ourselves on delivering seamless and reliable 
                        communication solutions tailored for the modern world. 
                        Whether you're looking for lightning-fast internet, 
                        crystal-clear voice services, or state-of-the-art 
                        video conferencing, we have you covered. Our commitment 
                        to technological excellence ensures that you stay connected 
                        with the world, effortlessly bridging distances and fostering 
                        meaningful connections. Explore our range of services designed 
                        to enhance your digital lifestyle, and experience the future 
                        of communication at your fingertips. Join us on the forefront 
                        of telecommunications, where possibilities are limitless, and 
                        communication knows no bounds. Welcome to the future of 
                        connectivity, welcome to Telelink.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center p-3" id="headingline">Our domain of activities</h1>
            <div class="row m-3">
                <div class="col">
                    <div class="card w-a h-100" id="cardIndex">
                        <img class="card-img-top" src="assets/telecom.jpg" alt="Card image cap">
                        <div class="card-body p-0">
                            <h5 class="card-title p-3 bg-light" style="color: #271975">Telecom</h5>
                            <p class="card-text p-3" id="paragraph">Unlock Connectivity: Immerse yourself in the world of seamless communication 
                                with our Telecom services. From high-speed internet to crystal-clear voice calls, experience 
                                the power of uninterrupted connectivity. Whether you're at home, in the office, or on the go, 
                                our Telecom solutions ensure you stay connected effortlessly. Embrace a new era of communication 
                                with Telelink.</p>
                            <div class="card-button p-3 text-center">
                                <button class="button-blue"><a href="/telelink/php/telecom.php">Discover<img src="/telelink/assets/right-arrow-svg.svg" alt="rightArrow" class="svg"></a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card w-a h-100" id="cardIndex">
                        <img class="card-img-top" src="assets/informatiques.png" alt="Card image cap">
                        <div class="card-body p-0">
                            <h5 class="card-title p-3 bg-light" style="color: #271975">Informatiques</h5>
                            <p class="card-text p-3" id="paragraph">Elevate Your Digital Realm: Dive into the future with our cutting-edge informatiques 
                                solutions. We specialize in harnessing the power of information technology to propel your business forward. 
                                From robust IT infrastructure to customized software solutions, we craft digital ecosystems that empower 
                                your operations. Discover the transformative potential of informatiques services tailored to meet your 
                                unique needs.</p>
                            <div class="card-button p-3 text-center">
                                <button class="button-blue"><a href="/telelink/php/serverInfo.php">Discover<img src="/telelink/assets/right-arrow-svg.svg" alt="rightArrow" class="svg"></a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card w-a h-100" id="cardIndex">
                        <img class="card-img-top" src="assets/consulting.jpg" alt="Card image cap">
                        <div class="card-body p-0">
                            <h5 class="card-title p-3 bg-light" style="color: #271975">Consulting</h5>
                            <p class="card-text p-3" id="paragraph">Navigating Success Together: Embark on a journey of strategic excellence with our consulting services. 
                                Our team of seasoned professionals is dedicated to guiding you through challenges and maximizing opportunities. 
                                Whether you're seeking business expansion, process optimization, or organizational development, our consulting 
                                expertise is your compass. Let's collaborate to turn aspirations into success.</p>
                            <div class="card-button p-3 text-center">
                                <button class="button-blue"><a href="#">Discover<img src="/telelink/assets/right-arrow-svg.svg" alt="rightArrow" class="svg"></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center p-3" id="headingline" style="background: #271975; color: white;">Our global advisors & partners</h1>
        <div class="marques" id="marquesContainer">
            <img src="/telelink/assets/Camtel.jpg" id="brand" />
            <img src="/telelink/assets/huawei.png" id="brand" />
            <img src="/telelink/assets/rakuten.jpg" id="brand" />
            <img src="/telelink/assets/scati.png" id="brand" />
            <img src="/telelink/assets/omniacom.jpg" id="brand" />
            <img src="/telelink/assets/sagemcom.jpg" id="brand" />
            <img src="/telelink/assets/netone.png" id="brand" />
            <img src="/telelink/assets/isat.png" id="brand" />
            <img src="/telelink/assets/camusat.png" id="brand" />
            <img src="/telelink/assets/reverencetelecom.png" id="brand" />
            <img src="/telelink/assets/vodacom.png" id="brand" />
        </div>
        <div class="buttons-box d-flex justify-content-around mb-5 mt-5">
            <button class="button-blue" style="width: 150px;"><a href="/telelink/php/solutions.php">Our Solutions</a></button>
            <button class="button-blue" style="width: 150px;"><a href="/telelink/php/supplychain.php">Supplychain</a></button>
        </div>
    </div>
</body>

<?php include_once 'php/footer.php'; ?>
</html>


<script>
    /*
    const marquesContainer = document.getElementById('marquesContainer');

    function scrollImages() {
        const firstImage = marquesContainer.firstElementChild;
        marquesContainer.appendChild(firstImage);
        firstImage.scrollIntoView({ behavior: 'smooth' });
    }

    const scrollInterval = setInterval(scrollImages, 2000); // Adjust the interval as needed
    */
</script>