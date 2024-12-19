<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("layouts.include.header.header_link")
</head>
<body>
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- content here -->
                </div>
                <div class="col-lg-6">
                    <form action="" method="post" role="form" class="php-email-form">
                        @csrf
                        <h2 style="text-align: center;">Register</h2>
                        <div class="row">
                            <div class="form-group mt-3" for="username">
                                <label class="form-lable mb-1" for="">User Name</label>
                                <input type="text" name="username" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3" for="useremail">
                                <label class="form-lable mb-1" for="">Email</label>
                                <input type="email" class="form-control" name="useremail" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-lable mb-1" for="user_contact">Contact</label>
                                <input type="number" class="form-control" name="user_contact" id="user_contact"
                                    placeholder="Your Contact" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <!-- content here -->
                </div>
            </div>

        </div>
    </section>
</body>
@include('layouts.include.footer.footer')
@include("layouts.include.footer.footer_script")

</html>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->