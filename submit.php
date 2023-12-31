
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>FindJob</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>


<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand mr-5" href="index.html">
                        <img src="images/search-icon.png" alt="">
                        <span>Find</span><span style="font-weight: 100;">Job</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <!-- home  -->
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.html">Home </a>
                                </li>
                                <!-- jobs..... -->
                                <li class="nav-item">
                                    <a class="nav-link" href="job.html"> Job Search </a>
                                </li>
                                <!-- companies -->
                                <li class="nav-item">
                                    <a class="nav-link" href="company.html">Companies</a>
                                </li>
                                <!-- servies -->
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html"> Service </a>
                                </li>
                                <!-- about.. -->
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About </a>
                                </li>
                            </ul>
                            <div class="btn-box">
                                <a href="" class="btn-1">
                                    Sign In
                                </a>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <div class="overlay">
            <p>Post a Job</span></p>
            <h2 style=" color: #1D5D9B;">Search Your Expert Candidates</h2>

        </div>
    </div>
    <br><br>

    <?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_postings";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $jobTitle = $_POST["job_title"];
    $company = $_POST["company"];
    $salaryRange = $_POST["salary_range"];
    $jobType = $_POST["job_type"];
    $location = $_POST["location"];
    $description = $_POST["description"];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO jobs (job_title, company, salary_range, job_type, location, description)
            VALUES ('$jobTitle', '$company', '$salaryRange', '$jobType', '$location', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry is submitted successfully saved.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
    <!-- JOb post section section start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <form action="submit.php" method="post">
                        <div class="row form-group">
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="job_title">Job Title*</label>
                            <input
                              type="text"
                              id="job_title"
                              name="job_title"
                              class="form-control"
                              placeholder="eg. Professional UI/UX Designer"
                            />
                          </div>
                        </div>
                        <!-- <label for="job_title">Job Title:</label>
                        <input type="text" id="job_title" name="job_title" required /><br /> -->
                  
                        <div class="row form-group mb-3">
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="company">Company</label>
                            <input
                              type="text"
                              id="company"
                              name="company"
                              class="form-control"
                              placeholder="eg. Facebook, Inc."
                            />
                          </div>
                        </div>
                        <!-- <label for="company">Company:</label>
                        <input type="text" id="company" name="company" required/><br /> -->
                  
                        <div class="row form-group mb-3">
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="company">Salary</label>
                            <input
                              type="text"
                              id="salary_range"
                              name="salary_range"
                              required
                              class="form-control"
                              placeholder="eg. 30000"
                            />
                          </div>
                        </div>
                        <!-- <label for="salary_range">Salary Range:</label>
                        <input type="text" id="salary_range" name="salary_range" required /><br /> -->
                  
                        <div class="row form-group">
                          <div class="col-md-12">
                            <h3>Job Type</h3>
                          </div>
                  
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-1">
                              <input
                                type="radio"
                                id="job_type"
                                name="job_type"
                                value="full time"
                                name="job-type"
                              />
                              Full Time
                            </label>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-2">
                              <input
                                type="radio"
                                id="job_type"
                                name="job_type"
                                value="part time"
                                name="job-type"
                              />
                              Part Time
                            </label>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-3">
                              <input
                                type="radio"
                                id="job_type"
                                name="job_type"
                                value="Freelance"
                                name="job-type"
                              />
                              Freelance
                            </label>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-4">
                              <input
                                type="radio"
                                id="job_type"
                                name="job_type"
                                value="Internship"
                                name="job-type"
                              />
                              Internship
                            </label>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-4">
                              <input
                                type="radio"
                                id="job_type"
                                name="job_type"
                                value="Termporary"
                                name="job-type"
                              />
                              Termporary
                            </label>
                          </div>
                        </div>
                        <!-- <label for="job_type">Job Type:</label>
                        <select id="job_type" name="job_type" required>
                          <option value="full_time">Full Time</option>
                          <option value="part_time">Part Time</option>
                          <option value="contract">Contract</option>
                          <option value="internship">Internship</option></select
                        ><br /> -->
                  
                        <div class="row form-group mb-4">
                          <div class="col-md-12">
                            <h3>Location</h3>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <input
                              type="text"
                              class="form-control"
                              id="location"
                              name="location"
                              placeholder="New Delhi, India"
                            />
                          </div>
                        </div>
                        <!-- <label for="location">Location:</label>
                        <input type="text" id="location" name="location" required /><br /> -->
                  
                        <!-- <div class="row form-group">
                          <div class="col-md-12">
                            <h3>Job Description</h3>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <textarea
                              name=""
                              class="form-control"
                              id="description"
                              name="description"
                              cols="30"
                              rows="5"
                            ></textarea>
                          </div>
                        </div>
                         -->
                        <div class="row form-group">
                          <div class="col-md-12">
                            <h3>Job Description</h3>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0">
                            <textarea
                              id="description"
                              name="description"
                              class="form-control"
                              rows="4"
                              cols="50"
                              required
                            ></textarea>
                          </div>
                        </div>
                  
                        <!-- <label for="description">Description:</label><br />
                        <textarea
                          id="description"
                          name="description"
                          rows="4"
                          cols="50"
                          required
                        ></textarea
                        ><br /> -->
                  
                        <button type="submit">Submit</button>
                      </form>
                </div>
                <!-- side section -->
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-light">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia
                            architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                        <div class="btn-box">
                            <a href="#" class="btn-1  py-2 px-4" type="submit" value="Post">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="p-4 mb-3 bg-light">
                        <h3 class="h5 text-black mb-3">Contact Info</h3>
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">Una, Himachal Pradesh</p>
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+91 232 3235 324</a></p>
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">aayush@gmail.com</a></p>
                    </div>
                    <br>
                    <!-- map -->
                    <div class=" mb-3 bg-light">
                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                            <script>(function () {
                                    var setting = { "query": "Una, Himachal Pradesh, India", "width": 400, "height": 300, "satellite": false, "zoom": 13, "placeId": "ChIJXfnPvFPQGjkRDjnX53z96Us", "cid": "0x4be9fd7ce7d7390e", "coords": [31.4684649, 76.2708152], "lang": "en", "queryString": "Una, Himachal Pradesh, India", "centerCoord": [31.4684649, 76.2708152], "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "957808" };
                                    var d = document;
                                    var s = d.createElement('script');
                                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=957808';
                                    s.async = true;
                                    s.onload = function (e) {
                                        window.OneMap.initMap(setting)
                                    };
                                    var to = d.getElementsByTagName('script')[0];
                                    to.parentNode.insertBefore(s, to);
                                })();</script><a href="https://1map.com/map-embed">1 Map</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- login section end-->





    <!-- footer section -->
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #1c1b2d">
        <!-- Left -->
        <div class="me-5">
            <span style="color: white;">Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="text-white me-4">
                <i class="bi bi-facebook"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </a>

            <a href="" class="text-white me-4">
                <i class="bi bi-twitter"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
            </a>

            <a href="" class="text-white me-4">
                <i class="bi bi-instagram"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>

            <a href="" class="text-white me-4">
                <i class="bi bi-linkedin"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
            </a>

        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <br>
    <!-- footer2 -->
    <div class="container">
        <footer class="py-2">
            <div class="row">
                <div class="col-2">
                    <h4>Company</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Services</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jobs Search</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h4>Popular Jobs</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">UX/UI Designer</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Software Engineer</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Web Developer</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Data Analytics</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Software Tester</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <h4>Contact Us</h4>
                    <ul class="nav flex-column">
                        <p> <span style="margin-right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-geo-alt-fill " viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg> Una ,Himachal Pradesh</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                          </svg></i> aayushrajan07@gmail.com</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg> + 91 98056 79737</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg> + 91 98160 46337</p>
                    </ul>
                </div>



                <div class="col-4">
                    <form>
                        <h4>Subscribe to our newsletter</h4>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">

                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address"
                                required>
                            <div class="btn-box">
                                <a href="">
                                    Subscribe
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2023 Company, Inc. All rights reserved to FindJob.</p>
                <ul class="list-unstyled d-flex">
                    <li> Devloped by: Aayush Rajan</li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>



    <script>
        $(document).ready(function () {
            $("form").submit(function (event) {
                console.log('ajax');
                var formData = {
                    fullname: $("#fullname").val(),
                    company: $("#company").val(),
                    salary1: $("#salary1").val(),
                    salary2: $("#salary2").val(),
                    place: $("#place").val(),
                    description: $("#description").val(),
                };

                console.log(email);
                console.log(password);
                $.ajax({
                    type: "POST",
                    url: "post.php",
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function (data) {

                    document.getElementById("login1").reset();


                    console.log(data);
                });

                event.preventDefault();
            });
        });
    </script>


</body>

</html>