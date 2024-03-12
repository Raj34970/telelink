


<html>
    <div class="header">
        <div class="container" id="header_container">
            <div class="headbar-head">
                <a href="/telelink/" class="href">
                    <div class="logo">
                        <img src="/telelink/assets/logo.png" alt="logo" id="logo">
                        <h2 id="logo_h2">telelink.fr</h2>
                    </div>
                </a>
                <button onclick="menubar()" id="menubar_btn"><img src="/telelink/assets/menu.svg" alt="menu" id="menuBar" style="width: 25px;" /></button>                
            </div>
            <ul id="header_ul">
                <li id="header_li"><img src="/telelink/assets/bulb-svg.svg" alt="solutions" class="svg"><a href="/telelink/php/solutions.php">Solutions</a></li>
                <li id="header_li"><img src="/telelink/assets/delivery-svg.svg" alt="solutions" class="svg"><a href="/telelink/php/supplychain.php">Supply chain</a></li>
                <li id="header_li"><img src="/telelink/assets/person-svg.svg" alt="solutions" class="svg"><a href="/telelink/php/aboutus.php">About us</a></li>
                <li id="header_li"><img src="/telelink/assets/wired-telephone-svg.svg" alt="solutions" class="svg"><a href="/telelink/php/contactForm.php">Contact us</a></li>
                <li id="gate_li"><a href="#"><img src="/telelink/assets/entrance.svg" alt="logo" id="svg"></a></li>
            </ul>
            <img src="" alt="" class="src">
        </div>
    </div>
</html>


<script>
    function menubar() {
        const headerBar = document.getElementById('header_ul');
        const container = document.getElementById("container");

        if(headerBar.style.transform === "translateY(89px)"){
            headerBar.style.transform = "translateY(-274px)";
            headerBar.style.transition = "0.4s ease all";
            container.style.filter = "blur(0px)";
            container.style.transition = "0.4s ease all";
        }
        else{
            headerBar.style.transform = "translateY(89px)";
            headerBar.style.transition = "0.4s ease all";
            container.style.filter = "blur(2px)";
            container.style.transition = "0.4s ease all";
        }
    }
</script>

