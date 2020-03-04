<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backendtemplate/bootstrap/css/bootstrap.min.css')}}">
  <!-- JS -->
  <script type="text/javascript" src="{{ asset('backendtemplate/bootstrap/js/jquery.min.js')}}"></script>

  <script type="text/javascript" src="{{ asset('backendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backendtemplate/bootstrap/fontawesome/css/all.min.css')}}">
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backendtemplate/bootstrap/style.css')}}">
  <!-- jsCustom -->
  <script type="text/javascript" src="{{ asset('backendtemplate/bootstrap/custom.js')}}"></script>
  <style type="text/css">
    
  </style>
</head>
<body>

  <div id="banner">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <i class="fas fa-school" style="font-size: 30px;color: white;"></i>
        <span style="font-size: 20px;color: white;">P School</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link" href="" style="font-size: 20px;color: white;">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="" style="font-size: 20px;color: white;">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#" style="font-size: 20px;color: white;">Teachers</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="" style="font-size: 20px;color: white;">Contact</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="" style="font-size: 20px;color: white;">login</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" id="navtitle">
      <div class="row justify-content-center text-center">
        <div class="col-10">
          <h1 id="bannertext" style="font-family:dancing;" class="display-4 text-white ">A Place to Learn</h1>
          <hr class="my-5" id="divider">
        </div>  
        <div class="col-8">
          <p class="text-white" style="font-family: molle">
            We promise your child future!
          </p>
          <div class="mt-4">
            <a href="contact.html" id="contactbtn">Contact</a>
          </div>  
        </div>
      </div>
    </div>

  </div>

  <div class="container mt-5">
    <div class="row" id="subcard">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <span class="fa-stack fa-3x" style="color: lightgreen">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-check-square fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3>Attendance Record Just in A Few Clicks</h3>
          <p>Recording and reviewing students’ attendance record is just one of the main features of school management system. The system allows you to create various attendance report per class, student, gender, and many other variables for the whole term.  
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <span class="fa-stack fa-3x" style="color: lightgreen">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3>Better Exam Management</h3>
          <p>Teachers can hold the exams within the platform or outside the platform. If the exams is not in the system, teachers can grade and post the result in the  system. It also provides report generation which calculate all aspects of grading automatically.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12" style="">
        <span class="fa-stack fa-3x" style="color: lightgreen;">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-user-graduate fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3 style="font-family: roboto;">Help Students Admission</h3>
          <p>The students have their personal information and their academic records in the future in one data base. They can access it any time, even after they graduate. Additionally, the system minimizes mistakes due to human error, lost or duplicated documents.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <span class="fa-stack fa-3x" style="color: lightgreen">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3>Effective Communication</h3>
          <p>
           This system have a feature that connects parents, students, teacher, and school admins.The information about recipients is already stored in the system so you don’t need to input it manually.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div id="counter">
    <div class="container">
      <div class="row text-white">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <h1>200</h1>
          <p>Students</p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <h1>50</h1>
          <p>Teacher</p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <h1>100</h1>
          <p>Teacher</p>
        </div>
      </div>
    </div>
  </div>

  <div id="post" class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12 order-lg-1 order-md-2 order-sm-2">
          <img src="images/school.jpeg" class="img-fluid d-block w-100 h-100 mt-5">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1">
          <div class="row pt-5">
            <div class="col-12">
              <h1>PERFECT IS PERFECT </h1>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-3 text-center" style="color: lightgreen;">
              <i class="fas fa-user-circle fa-4x"></i>
            </div>
            <div class="col-9 text-left">
              <h3>Teacher Love School</h3>
              <p>
                Make your classroom more effective by ensuring tailored learning  What is High Student to Teacher Ratios?  High student to teacher ratios to a phenomenon that would be familiar to most educators and parents. 
              </p>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-3 text-center" style="color: lightgreen;">
              <i class="fas fa-users fa-4x"></i>
            </div>
            <div class="col-9 text-left">
              <h3>Students Is Everything</h3>
              <p>
                 Student Information System covers all the SIS features like admission, attendance, timetable, assignment, exams, reporting, etc.
              </p>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-3 text-center" style="color: lightgreen;">
              <i class="fas fa-user-circle fa-4x"></i>
            </div>
            <div class="col-9 text-left">
              <h3>Parents Can Access It</h3>
              <p>
                The school management system connects school and parents directly.This information is available at any time, from the students’ performance to their on-going projects. So, parents and school share the same responsibility in educating their children.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="models">
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center" style="font-size: 60px;"> Our Teacher</h1>
          <p class="text-center">There are many tecahers in our school.Among them, they are our lovely class teacher.</p>
        </div>
      </div>
      <!-- <div class="row mt-5 pt-5"> -->
        <!-- <div class="col-lg-3 col-md-6 col-sm-12 mt-5 order-lg-1 order-md-1 order-sm-1"> -->
          <!-- <div class="card img-fluid"> -->
            <!-- <img class="card-img-top" src="img/gd.jpg" alt="Card image" style="width:100%"> -->
            <!-- <div class="card-img-overlay"> -->
              <!-- <h4 class="card-title px-3 py-1 text-center">G Dragon</h4> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->

  <div class="container" id="contact">
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-12">
          <h1>Contact Information</h1>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5>Address</h5>
              <p>No.222,Yangon</p>
            </div>
          </div>        
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5>Phone</h5>
              <p>+959450042974</p>
            </div>
          </div>        
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5>Email</h5>
              <p>contact@vipmodelagency.com</p>
            </div>
          </div>        
        </div>
      </div>
    </div>
    <div id="contactForm">
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" class="form-control">
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="subjet" placeholder="Subject" class="form-control">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" name="comment">Message</textarea>
              </div>
              <br>
              <div class="mt-1 mb-2">
                <a href="contact.html" class="btn btn-success" id="contactbtncontact">Contact</a>
              </div>
              <br>
            </form>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.997845334723!2d96.19027841418914!3d16.82646298841704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193297684681d%3A0x888c780f8e06fd40!2sYangon%20International%20School!5e0!3m2!1sen!2smm!4v1582959667047!5m2!1sen!2smm" width="200" height="200" frameborder="0" style="border:0;" class="d-block" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div id="footer" class="mt-5">
    <div class="container-fluid" style="background-color: lightgreen;">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>About</h3>
          <p style="font-size: 14px;">
            Established in 1918, the Perfect School at Temple School has a distinguished tradition of preparing business leaders, professionals, and entrepreneurs for successful careers. Today, it is the largest, most comprehensive business school in the greater Yangon region, and among the largest in the world. 
          </p>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Contact Information</h3>
          <ul type="none">
            <li><p>Address</p></li>
            <li><p>Phone</p></li>
            <li><p>Email</p></li>
          </ul>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Quick Link</h3>
          <ul type="none">
            <li><a href="" style="color: black;">HOME</a></li>
            <li><a href="" style="color: black;">ABOUT</a></li>
            <li><a href="" style="color: black;">TEACHER</a></li>
            <li><a href="" style="color: black;">CONTACT</a></li>
          </ul>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Conclusion</h3>
          <p>
            The school management system is important because it streamlines school administration with its feature. If you already use one, make sure that you have obtained the functions mentioned above.However, if you are not satisfied with your current system, you can get a free demo for school management system from Perfect Scho to see how our system works.
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>