<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Banner -->
<section class="page-banner bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Our Blog</h1>
        <p class="lead">
            Digital Marketing Tips, SEO Insights & Business Growth Strategies
        </p>
    </div>
</section>

<!-- Blog Section -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <!-- Blog Posts -->
            <div class="col-lg-8">

                <!-- Search -->
                <div class="mb-4">

                    <form>

                        <div class="input-group">

                            <input type="text"
                                   class="form-control"
                                   placeholder="Search articles...">

                            <button class="btn btn-primary">

                                <i class="bi bi-search"></i>

                            </button>

                        </div>

                    </form>

                </div>

                <div class="row g-4">

                    <!-- Blog 1 -->

                    <div class="col-md-6">

                        <div class="card shadow-sm border-0 h-100">

                            <img src="assets/images/blog/blog1.jpg"
                                 class="card-img-top"
                                 alt="Blog">

                            <div class="card-body">

                                <small class="text-muted">
                                    SEO • July 2026
                                </small>

                                <h4 class="mt-2">

                                    Why Every Business Needs a Professional Website

                                </h4>

                                <p>

                                    Learn how a modern website builds trust,
                                    generates leads and improves conversions.

                                </p>

                                <a href="blog-details.php"
                                   class="btn btn-outline-primary">

                                    Read More

                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Blog 2 -->

                    <div class="col-md-6">

                        <div class="card shadow-sm border-0 h-100">

                            <img src="assets/images/blog/blog2.jpg"
                                 class="card-img-top"
                                 alt="Blog">

                            <div class="card-body">

                                <small class="text-muted">

                                    Social Media

                                </small>

                                <h4 class="mt-2">

                                    10 Instagram Marketing Tips for 2026

                                </h4>

                                <p>

                                    Practical strategies to increase engagement
                                    and attract quality followers.

                                </p>

                                <a href="blog-details.php"
                                   class="btn btn-outline-primary">

                                    Read More

                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Blog 3 -->

                    <div class="col-md-6">

                        <div class="card shadow-sm border-0 h-100">

                            <img src="assets/images/blog/blog3.jpg"
                                 class="card-img-top"
                                 alt="Blog">

                            <div class="card-body">

                                <small class="text-muted">

                                    Google Ads

                                </small>

                                <h4 class="mt-2">

                                    Beginner's Guide to Google Ads

                                </h4>

                                <p>

                                    Understand campaign setup, keywords,
                                    bidding and optimisation.

                                </p>

                                <a href="blog-details.php"
                                   class="btn btn-outline-primary">

                                    Read More

                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Blog 4 -->

                    <div class="col-md-6">

                        <div class="card shadow-sm border-0 h-100">

                            <img src="assets/images/blog/blog4.jpg"
                                 class="card-img-top"
                                 alt="Blog">

                            <div class="card-body">

                                <small class="text-muted">

                                    Branding

                                </small>

                                <h4 class="mt-2">

                                    Branding Tips for Small Businesses

                                </h4>

                                <p>

                                    Build a memorable brand identity that
                                    customers remember.

                                </p>

                                <a href="blog-details.php"
                                   class="btn btn-outline-primary">

                                    Read More

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Pagination -->

                <nav class="mt-5">

                    <ul class="pagination justify-content-center">

                        <li class="page-item active">

                            <a class="page-link" href="#">1</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">2</a>

                        </li>

                        <li class="page-item">

                            <a class="page-link" href="#">3</a>

                        </li>

                    </ul>

                </nav>

            </div>

            <!-- Sidebar -->

            <div class="col-lg-4">

                <!-- Categories -->

                <div class="card shadow-sm mb-4">

                    <div class="card-body">

                        <h4>Categories</h4>

                        <ul class="list-group list-group-flush mt-3">

                            <li class="list-group-item">SEO</li>

                            <li class="list-group-item">Website Development</li>

                            <li class="list-group-item">Social Media</li>

                            <li class="list-group-item">Branding</li>

                            <li class="list-group-item">Google Ads</li>

                            <li class="list-group-item">Meta Ads</li>

                        </ul>

                    </div>

                </div>

                <!-- Recent Posts -->

                <div class="card shadow-sm mb-4">

                    <div class="card-body">

                        <h4>Recent Posts</h4>

                        <ul class="list-unstyled mt-3">

                            <li class="mb-3">

                                <a href="blog-details.php">

                                    Website Trends in 2026

                                </a>

                            </li>

                            <li class="mb-3">

                                <a href="blog-details.php">

                                    Improve Your SEO Ranking

                                </a>

                            </li>

                            <li class="mb-3">

                                <a href="blog-details.php">

                                    Facebook Ads Tips

                                </a>

                            </li>

                            <li>

                                <a href="blog-details.php">

                                    Digital Branding Guide

                                </a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!-- Tags -->

                <div class="card shadow-sm">

                    <div class="card-body">

                        <h4>Popular Tags</h4>

                        <div class="mt-3">

                            <span class="badge bg-primary m-1">SEO</span>

                            <span class="badge bg-success m-1">Google Ads</span>

                            <span class="badge bg-warning text-dark m-1">Marketing</span>

                            <span class="badge bg-danger m-1">Branding</span>

                            <span class="badge bg-info m-1">Website</span>

                            <span class="badge bg-dark m-1">Social Media</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Newsletter -->

<section class="py-5 bg-primary text-white">

    <div class="container text-center">

        <h2>Subscribe to Our Newsletter</h2>

        <p>Get the latest digital marketing tips delivered to your inbox.</p>

        <form class="row justify-content-center mt-4">

            <div class="col-md-6">

                <input type="email"
                       class="form-control form-control-lg"
                       placeholder="Enter your email">

            </div>

            <div class="col-md-2">

                <button class="btn btn-light btn-lg w-100">

                    Subscribe

                </button>

            </div>

        </form>

    </div>

</section>

<?php
include 'includes/footer.php';
?>