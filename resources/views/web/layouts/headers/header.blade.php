<div class="container-fluid py-2 bg-light1">
    <div class="row justify-content-end align-items-center">
        <div class="col-lg-4 text-lg-end text-center">

                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-phone font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href="" target="_blank">
                <i class="fa fa-message font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-bell font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-user font-16"></i>
                </a>

        </div>
    </div>
    <div class="row align-items-center pt-2">
        <div class="col-lg-3 col-sm-3">
            <h2 class="font-24 fw-bold text-purple">Grade -</h2>
        </div>
        <div class="col-lg-6 col-sm-6 text-center">
            <p class="font-17 fw-bolder text-purple">Hello, <span class="fst-italic">< Nadishan Chathuranga ></span>
            </p>
            <h1 class="font-36 fw-bold text-uppercase text-purple">WELCOME TO GURU NIWASA LMS
            </h1>
        </div>
        <div class="col-lg-3 col-sm-3">
            <div class="row  justify-content-end float-lg-end">
               
                 <div class="col-12 pe-lg-5 pt-lg-0 pt-3">
                    <div class="form-check form-switch cus-switch  ps-lg-5 ms-lg-3 ps-sm-0">
                        <div class="row align-items-end">

                            <div class="col-3">   <label class="form-check-label font-14 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">BASIC</label>
                            </div>

                            <div class="col-lg-4 col-sm-5  col-3">   <input class="form-check-input font-14  w-100 pt-3 pb-2 text-uppercase text-purple ms-0" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                            <div class="col-3">   <label class="form-check-label font-14 fw-bolder text-uppercase text-purple" for="flexSwitchCheckDefault">ADVANCED</label>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('flexSwitchCheckDefault').addEventListener('change', function () {
      const toggleDiv = document.getElementById('advaceMenuList');
      const toggleDiv1 = document.getElementById('basicMenuList');
      if (this.checked) {
        toggleDiv.classList.remove('d-none');
        toggleDiv.classList.add('d-block');
        toggleDiv1.classList.add('d-none');
      } else {
        toggleDiv.classList.remove('d-block');
        toggleDiv.classList.add('d-none');
        toggleDiv1.classList.remove('d-none');
      }
    });
  </script>