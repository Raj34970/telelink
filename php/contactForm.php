
<?php require_once '../includes/document.php';
    include_once 'header.php';   ?>
<html>
    <body>
        <div id="container">
            <div class="container pb-3 p-0" style="background: radial-gradient(#e1e9ff, white); margin: 30px; margin-inline: auto;" >
                <h2 class="min-headers mt-0">Reach us out</h2>
                <div class="card p-4 m-auto w-50 mb-5" id="contactCard">
                    <form class="m-0">
                        <h1 class="heading-h1 h-75 mb-5 p-3" style="background: #f3f3f3;">
                            <img src="/telelink/assets/send-svg.svg" alt="send" class="svg" style="width: 45px;">Contact us
                        </h1>
                        <div class="row mb-3" id="inputArea">
                            <div class="col">
                                <label for="exampleFormControlInput1">First name</label>
                                <input name="fname" type="text" class="form-control" placeholder="Alex" require>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Last name</label>
                                <input name="lname" type="text" class="form-control" placeholder="Henderson" require>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="alex@123web.com" require>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="mb-3">Your message</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <p class="text-muted">Write all your queries and we'll try to answer it within 48hrs..</p>
                        </div>
                        <button class="button-blue w-50 m-auto mt-5 d-flex justify-content-center" type="submit" name="submit">Send message</button>
                        <p class="text-muted d-flex justify-content-center mt-3"><strong>This message will be sent directly to the admins</strong></p>
                    </form>
                </div>
            </div> 
            <div class="buttons-box d-flex justify-content-around mb-5 mt-5">
                <button class="button-blue" style="width: 150px;"><a href="/telelink/php/solutions.php">Our Solutions</a></button>
                <button class="button-blue" style="width: 150px;"><a href="/telelink/php/supplychain.php">Supplychain</a></button>
            </div>
        </div>
    </body>
</html>

<?php include_once 'footer.php'; ?>