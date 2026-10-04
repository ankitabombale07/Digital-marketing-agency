<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Banner -->
<section class="page-banner bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Contact Us</h1>
        <p class="lead">
            We'd love to hear from you. Let's discuss your project.
        </p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body">

                        <i class="bi bi-geo-alt-fill display-4 text-primary"></i>

                        <h4 class="mt-3">Office Address</h4>

                        <p>
                            Pune, Maharashtra<br>
                            India
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body">

                        <i class="bi bi-envelope-fill display-4 text-primary"></i>

                        <h4 class="mt-3">Email</h4>

                        <p>

                            info@digigrowth.com

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow h-100 text-center">

                    <div class="card-body">

                        <i class="bi bi-telephone-fill display-4 text-primary"></i>

                        <h4 class="mt-3">Phone</h4>

                        <p>

                            +91 98765 43210

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Contact Form -->

<section class="pb-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-7">

                <div class="card shadow border-0">

                    <div class="card-body p-5">

                        <h2 class="mb-4">

                            Send Us a Message

                        </h2>

                        <form id="contactForm"
                            action="includes/contact-process.php"
                            method="POST">
                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Full Name
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        required>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="form-label">

                                        Phone Number

                                    </label>

                                    <input
                                        type="tel"
                                        name="phone"
                                        class="form-control"
                                        required>

                                </div>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">

                                    Email Address

                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">

                                    Select Service

                                </label>

                                <select
                                    class="form-select"
                                    name="service">

                                    <option>Website Development</option>

                                    <option>Graphic Design</option>

                                    <option>Branding</option>

                                    <option>Social Media Marketing</option>

                                    <option>Performance Marketing</option>

                                </select>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">

                                    Your Message

                                </label>

                                <textarea
                                    class="form-control"
                                    rows="6"
                                    name="message"
                                    required></textarea>

                            </div>

                            <button
                                class="btn btn-primary btn-lg">

                                Send Enquiry

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h3 class="mb-4">

                            Business Hours

                        </h3>

                        <table class="table">

                            <tr>
                                <td>Monday</td>
                                <td>9 AM - 7 PM</td>
                            </tr>

                            <tr>
                                <td>Tuesday</td>
                                <td>9 AM - 7 PM</td>
                            </tr>

                            <tr>
                                <td>Wednesday</td>
                                <td>9 AM - 7 PM</td>
                            </tr>

                            <tr>
                                <td>Thursday</td>
                                <td>9 AM - 7 PM</td>
                            </tr>

                            <tr>
                                <td>Friday</td>
                                <td>9 AM - 7 PM</td>
                            </tr>

                            <tr>
                                <td>Saturday</td>
                                <td>10 AM - 5 PM</td>
                            </tr>

                            <tr>
                                <td>Sunday</td>
                                <td>Closed</td>
                            </tr>

                        </table>

                        <!-- <hr>

                        <h4>

                            Follow Us

                        </h4>

                        <div class="mt-3">

                            <a href="#" class="btn btn-outline-primary me-2">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" class="btn btn-outline-danger me-2">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="#" class="btn btn-outline-info me-2">
                                <i class="bi bi-linkedin"></i>
                            </a>

                            <a href="#" class="btn btn-outline-dark">
                                <i class="bi bi-twitter-x"></i>
                            </a>

                        </div> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Google Map -->

<section>

    <iframe
        src="https://www.google.com/maps/embed?pb="
        width="100%"
        height="450"
        style="border:0;"
        loading="lazy">
    </iframe>

</section>

<!-- FAQ -->

<section class="py-5 bg-light">

    <div class="container">

        <h2 class="text-center mb-5">

            Frequently Asked Questions

        </h2>

        <div class="accordion" id="contactFaq">

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button
                        class="accordion-button"
                        data-bs-toggle="collapse"
                        data-bs-target="#q1">

                        How soon will you contact me?

                    </button>

                </h2>

                <div
                    id="q1"
                    class="accordion-collapse collapse show">

                    <div class="accordion-body">

                        Usually within 24 business hours.

                    </div>

                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button
                        class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#q2">

                        Do you offer free consultation?

                    </button>

                </h2>

                <div
                    id="q2"
                    class="accordion-collapse collapse">

                    <div class="accordion-body">

                        Yes. Every new client receives a free consultation.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="py-5 bg-primary text-white text-center">

    <div class="container">

        <h2>

            Ready to Grow Your Business?

        </h2>

        <p>

            Let's create something amazing together.

        </p>

        <a
            href="tel:+919876543210"
            class="btn btn-light btn-lg">

            Call Now

        </a>

    </div>

</section>

<?php
include 'includes/footer.php';
?>