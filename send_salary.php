<?php
session_start();
include "dbconnection.php";

if(isset($_POST['submit']))
{
    $user_name = $_POST['user_name'];
    $name = $_POST['name'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $salary = $_POST['salary'];
    $medium = $_POST['medium'];
    
    $sql = "INSERT INTO salary (username, emp_name, month,year, medium, amount) VALUES ('$user_name', '$name', '$month','$year', '$medium', '$salary')";
    $result = mysqli_query($db, $sql);
    
    if($result)
    {
        echo "<script>alert('Salary sent successfully.')</script>";
    }
    else
    {
        echo "<script>alert('Failed to send salary.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Salary to Employee</title>
    <!-- bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- font awesome -->

    <script
      src="https://kit.fontawesome.com/5b05054594.js"
      crossorigin="anonymous"
    ></script>
</head>
    
<body>
    <header>
        
    </header>

    <main>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid container">
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarScroll"
                aria-controls="navbarScroll"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div>
                <a href="admin.php" class="btn" role="button">Human Resource Management System</a>
                </div>
                <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarScroll"
                >
                <ul
                    class="navbar-nav me-2 my-2 my-lg-0 navbar-nav-scroll"
                    style="--bs-scroll-height: 100px"
                >
                    <!-- Profile button -->

                    <li class="nav-item nav-text">
                    <a href="admin.php" class="btn" role="button">Profile</a>
                    </li>
                    
                    <!-- Logout button -->

                    <li class="nav-item">
                    <a href="logout.php" class="btn btn-warning" role="button"
                        >Log Out</a
                    >
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <!-- Form -->
        <section style="height: 800px;" class="container bg-info d-flex justify-content-center align-items-center rounded-3 " id="subscribe">
            
            <div>
            <br>
            <h1>Send Salary</h1> <br>
                <form method="POST">
                    
                    <!-- <div class="mb-3">
                        
                        <label class="form-label">Username </label>
                        <input type="type" class="form-control" name="username" required="">
                        
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control"  required="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Employee Name</label>
                        <input type="text" name="name" class="form-control"  required="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Month</label>
                        <input type="text" name="month" class="form-control"  required="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year</label>
                        <input type="text" name="year" class="form-control"  required="">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Medium</label>
                        <input type="text" name="medium" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Salary</label>
                        <input type="text" name="salary" class="form-control" required="">
                    </div>
        
                    <br> 
                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    <br>
                </form>
            </div>
        </section>
        <!-- <form method="POST">
            <input type="text" name="name" placeholder="Employee Name" required><br><br>
            <input type="text" name="month" placeholder="Month" required><br><br>
            <input type="text" name="salary" placeholder="Salary" required><br><br>
            <input type="text" name="medium" placeholder="Medium" required><br><br>
            
            <input type="submit" name="submit" value="Send">
        </form> -->
    </main>
    <br>
    <br>
    <!-- Footer -->
    <footer>
      <section class="bg-dark">
        <div class="container my-5">
          <div class="row gx-5 gy-5">
            <!-- About me -->

            <div class="col-lg-4">
              <!-- <div class="p-3 rounded-3 shadow-lg text-center h mb-5">
                Experience
              </div> -->
              <h3 class="fw-bold text-white">About Us</h3>
              <p class="text-white">
                Sunrise company is a leading IT company in Bangladesh with over 150+ clients from different countries accross the world. 
              </p>
            </div>

            <!-- Links -->

            <div class="col-lg-4">
              <h3 class="text-white">What makes us unique</h3>
              <ul class="p-0">
                <!-- home -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#home">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class="flink text-white">Multinational team</a>
                  </div>
                </li>

                <!-- About Me -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#aboutme">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class=" text-white">Interdisciplinary skillset</a>
                  </div>
                </li>

                <!-- Experience -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#ex">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a  class="flink text-white">Equal opportunity employer</a>
                  </div>
                </li>

                <!-- Projects -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#project">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a class="flink text-white">Rapid solution development</a>
                  </div>
                </li>

                <!-- Skill -->

                <li class="py-2 d-flex">
                  <div>
                    <a href="#skill">
                      <i class="fas fa-arrow-right text-white"></i>
                    </a>
                  </div>
                  <div class="text-white ps-3">
                    <a href="#skill" class="flink text-white">Customer and user centered</a>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Conatacts and Info -->

            <div class="col-lg-4">
              <h3 class="text-white">Contacts and Info</h3>
              <ul class="p-0">
                <!-- House -->

                <li class="py-2 d-flex">
                  <div>
                    <i class="fas fa-map-marker-alt text-white"></i>
                  </div>
                  <div class="text-white ps-3">
                    House - 12, Block - C, Road - 01 Gulshan-01, Dhaka
                  </div>
                </li>

                <!-- phone -->

                <li class="py-2 d-flex">
                  <div>
                    <i class="fas fa-phone-alt text-white"></i>
                  </div>
                  <div class="text-white ps-3">987******</div>
                </li>

                <!-- gmail -->

                <li class="py-2 d-flex">
                  <div>
                    <i class="fas fa-envelope text-white"></i>
                  </div>
                  <div class="text-white ps-3">sunrise*****@gmail.com</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- social Links -->

        <div class="container mt-5 pb-5">
          <ul class="d-flex justify-content-center align-items-center m-0 p-0">
            
            <li class="py-2 pe-4 d-flex">
              <a
                target="_blank"
                href=""
              >
                <i class="fab fa-linkedin text-white fa-2x"></i>
              </a>
            </li>
            <li class="py-2 pe-4 d-flex">
              <a target="_blank" href="">
                <i class="fab fa-behance-square text-white fa-2x"></i>
              </a>
            </li>
            <li class="py-2 pe-4 d-flex">
              <a
                target="_blank"
                href=""
              >
                <i class="fab fa-facebook-square text-white fa-2x"></i>
              </a>
            </li>
            <li class="py-2 pe-4 d-flex">
              <a target="_blank" href="">
                <i class="fab fa-twitter-square text-white fa-2x"></i>
              </a>
            </li>
          </ul>
          <br />
          <p class="text-white text-center">
            © Copyright 2023 Sunrise Company | All rights Reserved
          </p>
        </div>
      </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>