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
          <i class="fas fa-gem fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3>Attendance Record Just in A Few Clicks</h3>
          <p>
            Recording and reviewing students’ attendance record is just one of the main features of school management system. The system allows you to create various attendance report per class, student, gender, and many other variables for the whole term.

Moreover, this system is equipped with SMS feature that can notify parents if their children is absent. It will make the students think twice to skip a class.

Using pen and paper for attendance record is so last season!
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <span class="fa-stack fa-3x" style="color: lightgreen">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-star fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3>Better Exam Management</h3>
          <p>
            One of the many features that makes this system important is how it can help manage exam. We know that there are schools who prefer essay exam format to multiple choice. Whatever it is, school management system must be able to accommodate this requirement.

Teachers can hold the exams within the platform or outside the platform. If the exams is not in the system, teachers can grade and post the result in the  system. It also provides report generation which calculate all aspects of grading automatically.

The system stores everything in one data base which can be viewed by the parents as well.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12" style="">
        <span class="fa-stack fa-3x" style="color: lightgreen;">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3 style="font-family: roboto;">Help Students Admission</h3>
          <p>
            School management is important because it also helps the school to manage the students admission by managing the prospective students data and reduce the use of paper.

The students have their personal information and their academic records in the future in one data base. They can access it any time, even after they graduate. Additionally, the system minimizes mistakes due to human error, lost or duplicated documents.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <span class="fa-stack fa-3x" style="color: lightgreen">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-search fa-stack-1x fa-inverse"></i>
        </span>
        <div class="mt-3">
          <h3>Effective Communication</h3>
          <p>
           This system have a feature that connects parents, students, teacher, and school admins. Blasting SMS, emails, or specific notification regarding the activities in the school is not a burden. The information about recipients is already stored in the system so you don’t need to input it manually.
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
          <img src="img/lisa2.jpg" class="img-fluid d-block w-100">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1">
          <div class="row pt-5">
            <div class="col-12">
              <h1>PERFECT IS PERFECT </h1>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-3 text-center" style="color: lightgreen;">
              <i class="far fa-gem fa-4x"></i>
            </div>
            <div class="col-9 text-left">
              <h3>Teacher Love School</h3>
              <p>
                Make your classroom more effective by ensuring tailored learning  What is High Student to Teacher Ratios?  High student to teacher ratios to a phenomenon that would be familiar to most educators and parents. It basically means that there are far more students than ideal to every teacher in a school or classroom.
              </p>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-3 text-center" style="color: lightgreen;">
              <i class="fas fa-icons fa-4x"></i>
            </div>
            <div class="col-9 text-left">
              <h3>Heading 3</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-3 text-center" style="color: lightgreen;">
              <i class="far fa-images fa-4x"></i>
            </div>
            <div class="col-9 text-left">
              <h3>Heading 3</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
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
          <h1 class="text-center" style="font-size: 60px;"> Popular Models</h1>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod sed do eiusmod</p>
        </div>
      </div>
      <div class="row mt-5 pt-5">
        <div class="col-lg-3 col-md-6 col-sm-12 mt-5 order-lg-1 order-md-1 order-sm-1">
          <div class="card img-fluid">
            <img class="card-img-top" src="img/gd.jpg" alt="Card image" style="width:100%">
            <div class="card-img-overlay">
              <h4 class="card-title px-3 py-1 text-center">G Dragon</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
            <form>
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
                <textarea class="form-control" rows="5" name="comment"></textarea>
              </div>
              <br>
              <div class="mt-1 mb-2">
                <a href="contact.html" class="btn btn-success" id="contactbtncontact">Contact</a>
              </div>
              <br>
            </form>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1581.643037195637!2d126.9085471!3d37.5483233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c992bb3f6a887%3A0x6058954f87325221!2sYG%20Entertainment!5e0!3m2!1sen!2smm!4v1580374850635!5m2!1sen!2smm" width="100%" height="" frameborder="0" style="border:0;" allowfullscreen="" class="d-block"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div id="footer" class="mt-5">
    <div class="container-fluid" style="background-color: lightgreen;">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>About Me</h3>
          <p style="font-size: 14px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.  
          </p>
        </div>
        <div style="font-size: 14px;" class="col-lg-3 col-md-6 col-sm-12 p-5 text-dark">
          <h3>Popular Links</h3>
          <ul type="none">
            <li><p>Top Models</p></li>
            <li><p>Male Models</p></li>
            <li><p>Female Models</p></li>
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
          <h3>Have a question</h3>
          <p>
            Feel free to contact on our website and dail to our hot line.
          </p>
        </div>
      </div>
    </div>
  </div>

          

</body>
</html>