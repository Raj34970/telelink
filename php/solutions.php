<?php require_once '../includes/document.php';
    include_once 'header.php';   ?>

<html>
    <body>
        <div id="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="/telelink/assets/img_telecom_crsl.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="/telelink/assets/informatiques_crsl.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="/telelink/assets/solarpannel_crsl.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span> 
                </a>
            </div>
            <h1 class="heading-h1"><img src="/telelink/assets/bulb2-svg.svg" alt="light-bulb" class="svg">Our Solutions...</h1>
            <div class="container mt-5">
                <div class="row mt-3">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;" id="card">
                            <img class="card-img-top" src="/telelink/assets/cctv.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">CCTV</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button class="button-blue">Discover<img src="/telelink/assets/right-arrow-svg.svg" alt="rightArrow" class="svg"></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;" id="card">
                            <img class="card-img-top" src="/telelink/assets/telecom.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Telecom</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button class="button-blue"><a href="/telelink/php/telecom.php" class="href">Discover<img src="/telelink/assets/right-arrow-svg.svg" alt="rightArrow" class="svg"></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;" id="card">
                            <img class="card-img-top" src="/telelink/assets/informatiques.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Servers</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button class="button-blue">Discover<img src="/telelink/assets/right-arrow-svg.svg" alt="rightArrow" class="svg"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-5 mb-3">Us as your IT business consultant</h3>
                <p id="paragraph">Welcome to our cutting-edge IT consultancy firm, where innovation meets expertise to propel your business 
                    to new heights. With a team of seasoned professionals at the forefront of technological advancements, 
                    we pride ourselves on delivering tailored solutions that seamlessly integrate with your unique business 
                    requirements. From strategic IT planning to meticulous execution, our consultancy services encompass a 
                    wide spectrum, including software development, cybersecurity, cloud computing, and digital transformation. 
                    At the heart of our approach is a commitment to driving efficiency, fostering agility, and ensuring 
                    sustainable growth for our clients. Embrace the future with confidence as our dedicated team navigates 
                    the digital landscape, providing unparalleled guidance and solutions to optimize your IT infrastructure 
                    and propel your business towards unparalleled success.</p>
                
                <div class="info-div mb-5">
                    <h2 class="min-headers">Service Survellance explained</h2>
                    <div class="box-area d-flex justify-space-between" id="boxArea">
                        <div class="img-area"><img src="/telelink/assets/cctv-svg.svg" alt="Card image cap" class="w-50"></div>
                        <div class="info-area">
                            <h4 class="cont-h4">Some of the utilities of CCTV Survellance are:</h4>
                            <ul class="cont-ul">
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/cctv-svg.svg" alt="network" class="svg-li">Camera Placement:</h5>Strategically position CCTV cameras for optimal coverage.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/network-svg.svg" alt="network" class="svg-li">LAN Connectivity:</h5> Connect cameras to the local area network using Ethernet cables.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/servers-svg.svg" alt="network" class="svg-li">Self-Hosted NVR:</h5> Set up a dedicated server or computer with self-hosted Network Video Recorder (NVR) software.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/gears-svg.svg" alt="network" class="svg-li">Configuration:</h5> Install and configure NVR software to recognize and record footage from connected cameras.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/access-svg.svg" alt="network" class="svg-li">Remote Access:</h5> Enable port forwarding on the router for external access to the self-hosted NVR.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/security-svg.svg" alt="network" class="svg-li">Security Measures:</h5> Implement strong passwords, encryption, and regular software updates for NVR security.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/vpn-svg.svg" alt="network" class="svg-li">VPN Setup:</h5> Utilize a Virtual Private Network (VPN) for an additional layer of security when accessing the system remotely.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="info-div mb-5">
                    <h2 class="min-headers">Our telecom operations explained</h2>
                    <div class="box-area d-flex justify-space-between" id="boxArea">
                        <div class="info-area">
                            <h4 class="cont-h4">What can we offer as telecom service provider are:</h4>
                            <ul class="cont-ul">
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/network-svg.svg" alt="network" class="svg-li">Network Infrastructure:</h5>Establish a robust telecom network infrastructure with reliable connectivity.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/wired-telephone-svg.svg" alt="network" class="svg-li">Telecom Equipment: </h5>Install necessary telecom equipment such as routers, switches, and servers.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/servers-svg.svg" alt="network" class="svg-li">VoIP Integration:</h5>Integrate Voice over Internet Protocol (VoIP) for efficient voice communication.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/gears-svg.svg" alt="network" class="svg-li">Mobile Connectivity:</h5>Ensure seamless integration of mobile devices with the telecom system.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/vpn-svg.svg" alt="network" class="svg-li">Remote Access:</h5>Configure the telecom system for remote access, allowing users to connect from outside locations.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/security-svg.svg" alt="network" class="svg-li">Security Measures:</h5>Implement encryption, firewalls, and access controls to protect against unauthorized access.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/access-svg.svg" alt="network" class="svg-li">Scalability:</h5>Design the telecom system to be scalable, accommodating future growth and technological advancements.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/servers-svg.svg" alt="network" class="svg-li">Redundancy:</h5>Implement redundancy measures to ensure continuous communication in case of network failures.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/health-svg.svg" alt="network" class="svg-li">Quality of Service (QoS):</h5>Optimize QoS settings for prioritized and reliable communication services.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/monitoring-svg.svg" alt="network" class="svg-li">Monitoring and Maintenance:</h5>Regularly monitor and maintain the telecom infrastructure to address issues promptly and ensure optimal performance.</li>
                            </ul>
                        </div>
                        <div class="img-area justify-content-end"><img src="/telelink/assets/wired-telephone-svg.svg" alt="Card image cap" class="w-50"></div>
                    </div>
                </div>

                <div class="info-div mb-5">
                    <h2 class="min-headers">Our servers operations explained</h2>
                    <div class="box-area d-flex justify-space-between" id="boxArea">
                        <div class="img-area"><img src="/telelink/assets/servers2-svg.svg" alt="Card image cap" class="w-50"></div>
                        <div class="info-area">
                            <h4 class="cont-h4">The services we render regarding server management:</h4>
                            <ul class="cont-ul">
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/network-svg.svg" alt="network" class="svg-li">Server Hardware:</h5>Deploy enterprise-grade server hardware capable of handling the datacenter's workload.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/location-svg.svg" alt="network" class="svg-li">Datacenter Location:</h5>Select an optimal location for the datacenter, considering factors like power supply, cooling, and security.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/servers-svg.svg" alt="network" class="svg-li">Redundancy: </h5>Implement redundant systems for power, cooling, and network connectivity to ensure high availability.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/vm-svg.svg" alt="network" class="svg-li">Virtualization:</h5>Utilize virtualization technologies for efficient resource utilization and flexible server management.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/gears-svg.svg" alt="network" class="svg-li">Network Configuration: </h5>Set up a high-speed and redundant network infrastructure for seamless data transfer.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/security-svg.svg" alt="network" class="svg-li">Security Measures: </h5>Implement robust security protocols, including firewalls, intrusion detection systems, and access controls.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/backup-svg.svg" alt="network" class="svg-li">Backup and Recovery: </h5> Establish regular backup procedures and a comprehensive recovery plan to prevent data loss.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/health-svg.svg" alt="network" class="svg-li">Monitoring Tools: </h5>Utilize monitoring tools for real-time tracking of server performance, resource utilization, and potential issues.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/monitoring-svg.svg" alt="network" class="svg-li">Scalability:</h5> Design the datacenter infrastructure to scale horizontally or vertically to accommodate growing demands.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/monitoring-svg.svg" alt="network" class="svg-li">Compliance: </h5> Ensure compliance with industry standards and regulations related to data security and privacy.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/support-svg.svg" alt="network" class="svg-li">24/7 Support: </h5> Provide continuous support and maintenance to address issues promptly and minimize downtime.</li>
                                <li class="cont-li"><h5 class="mb-0" style="color: #271975;"><img src="/telelink/assets/energy-svg.svg" alt="network" class="svg-li">Energy Efficiency:</h5> Implement energy-efficient practices and technologies to reduce operational costs and environmental impact.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="buttons-box d-flex justify-content-around mb-5 mt-5">
                    <button class="button-blue" style="width: 150px;"><a href="/telelink/php/supplychain.php">Supply Chain</a></button>
                </div>
            </div>
        </div>
    </body>
    <?php include_once 'footer.php'; ?>
</html>