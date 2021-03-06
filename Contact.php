<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Contact</title>
    <?php require('Include/Link.php'); ?>
</head>

<body class="bg-light">
    <?php require('Include/Header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark "></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Ut, iste quis dolore harum <br> nesciunt odio! Nesciunt
            quibusdam necessitatibus molestias nemo!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded MB-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116289.072047589!2d88.53597559053529!3d24.380137954371648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa96a38d031%3A0x10f93a950ed6f410!2z4Kaw4Ka-4Kac4Ka24Ka-4Ka54KeA!5e0!3m2!1sbn!2sbd!4v1647693989735!5m2!1sbn!2sbd" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/ifLYo2igNUHFXsyz7" target="_blank" class="d-inline-block text-docoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>Aligonj Bathanpara, Paba, Rajshahi.
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +8801780908235" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+8801780908235</a>
                    <br>
                    <a href="tel: +8801780908235" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+8801780908235</a>
                    <h5 class="mt-4">Email</h5>
                    <a href=" mailto: md.nayimislam.eng@gmail.com"> <i class="bi bi-envelope-fill"></i> md.nayimislam.eng@gmail.com</a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="10" style="resize: none"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require('Include/Footer.php'); ?>
</body>

</html>