@extends('frontendtemplate')

@section('content')

  <div class="content">
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


@endsection 