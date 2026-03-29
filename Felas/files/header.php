<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Felass</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tables</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="reset" class="btn btn-outline-dark shadow-none me-lg-3 m3-3" data-bs-toggle="modal" data-bs-target="#loginModal">      
        Login 
        </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 m3-3" data-bs-toggle="modal" data-bs-target="#registerModal">      
        Register
        </button>
        </div>
      </div>
  </nav>

  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
              <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
              <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
              <a href="#" class="text-secondary text-decoration-none">Don't have an account?</a>
              <a href="#" class="text-secondary text-decoration-none">Forgot password</a>
            </div>
          </div>
          </div>
        </div>
      </form>
      </div>


    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h5>
              <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
            Note: PLease provide correct Details !!
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3 ">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>
                <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none">
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
              </div>
              <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
               <textarea class="form-control shadow-none " rows="1"></textarea>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
                <input type="number" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control shadow-none">
              </div>
              <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
              </div>
            </div>
          </div>
          </div>
      </div>