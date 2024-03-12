
<?php require_once '../includes/document.php';
    include_once 'header.php';   ?>

<html>
    <h1 class="text-center pt-4 pb-4" style="background: #624dd1; color: white; position: sticky; top: 90px;">Our Telecom services</h1>
    <div class="container d-flex mb-4 h-75" id="tel">
        <div class="image m-auto"><img src="/telelink/assets/img_telecom.jpg" alt="tower" style="width: 500px;"></div>
        <div class="text-area m-auto">
            <p class="align-center m-3">Telecom tower hosting plays a pivotal role in establishing and 
                maintaining the backbone of a robust and efficient communication 
                network. These towers serve as critical infrastructure for 
                hosting various telecommunications equipment, including 
                antennas and transceivers, enabling the seamless transmission 
                of voice, data, and multimedia signals. By strategically 
                locating these towers, service providers can extend their 
                network coverage, ensuring connectivity even in remote or 
                underserved areas. Telecom tower hosting not only enhances 
                the reach of communication services but also facilitates 
                the deployment of advanced technologies such as 4G and 5G, 
                fostering faster and more reliable connections. The interconnected 
                network of these towers forms the backbone of telecommunications, 
                enabling the widespread dissemination of information and contributing 
                significantly to the development of smart cities and interconnected societies.</p>
        </div>
    </div>
    <div class="container d-flex mb-4 h-75" id="data">
        <div class="text-area m-auto">
            <p class="align-center m-3">The Data centers play a crucial role in supporting and 
                enhancing the functionality of telecom towers. These centers serve as centralized 
                hubs for processing, storing, and managing the vast amounts of data generated 
                and transmitted through the telecommunication network. By leveraging data centers, 
                telecom operators can efficiently handle the complex tasks of routing calls, 
                managing network traffic, and ensuring the secure and reliable transfer of 
                information. Moreover, data centers host the infrastructure necessary 
                for services like cloud computing and edge computing, which are increasingly 
                integral to modern telecommunications. The proximity of data centers to telecom 
                towers minimizes latency, ensuring swift data processing and real-time communication. 
                This symbiotic relationship between data centers and telecom towers is essential 
                for maintaining the integrity and efficiency of the overall telecommunications 
                infrastructure, allowing for the seamless functioning of networks and the 
                provision of advanced services to end-users.</p>
        </div>
        <div class="image m-auto"><img src="/telelink/assets/datacenter_img.jpg" alt="tower"></div>
    </div>
</html>

<script>
       document.addEventListener('DOMContentLoaded', function() {
            var telContainer = document.getElementById('tel');
            var dataContainer = document.getElementById('data');
            var lastScrollPos = window.scrollY;

            function handleScroll() {
                var currentScrollPos = window.scrollY;

                if (currentScrollPos > lastScrollPos) {
                    telContainer.classList.add('hidden');
                    dataContainer.classList.remove('hidden');
                } else {
                    telContainer.classList.remove('hidden');
                    dataContainer.classList.add('hidden');
                }

                lastScrollPos = currentScrollPos;
            }

            window.addEventListener('scroll', handleScroll);
        });
    </script>