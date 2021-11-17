<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
  <div class="container">
    <a class="navbar-brand" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
      ImmoPlus
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
      <ul class="navbar-nav navbar-nav-hover w-100">

        <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-5 ms-lg-auto">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if (isset($_SESSION['admin'])) {
                echo 'Deconexion';
              }
            elseif (!isset($_SESSION['auth'])) {
              echo 'Connexion';
            } else {
              echo '
                Mon Compte';
            }  ?>
            <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
          </a>
          <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
            <div class="d-none d-lg-block">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0 mt-3">
                <div class="d-inline-block">
                  <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>office</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(153.000000, 2.000000)">
                              <path d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" opacity="0.6"></path>
                              <path d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                Compte
              </h6>
              <?php if (isset($_SESSION['admin'])) {
                echo '
                
                <a href="../controllers/logoutAction.php" class="dropdown-item border-radius-md">
            <span class="ps-3">Se Deconnecter</span>
          </a>';
              }
              elseif (!isset($_SESSION['auth'])) {
                echo '<a href="sign-in.php" class="dropdown-item border-radius-md">
            <span class="ps-3">Se Connecter</span>
          </a>';
              } else {
                echo '
                <a href="about-us.php" class="dropdown-item border-radius-md">
                <span class="ps-3">Profil</span>
              </a>
                <a href="../controllers/logoutAction.php" class="dropdown-item border-radius-md">
            <span class="ps-3">Se Deconnecter</span>
          </a>';
              }  ?>
            </div>
            <div class="d-lg-none">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0 mt-3">
                <div class="d-inline-block">
                  <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>office</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(153.000000, 2.000000)">
                              <path d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" opacity="0.6"></path>
                              <path d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                Compte
              </h6>
              <?php if (isset($_SESSION['admin'])) {
                echo '<a href="../controllers/logoutAction.php" class="dropdown-item border-radius-md">
                <span class="ps-3">Se Deconnecter</span>
                </a>';
              } elseif (!isset($_SESSION['auth'])) {
                echo '<a href="sign-in.php" class="dropdown-item border-radius-md">
                <span class="ps-3">Se Connecter</span>
              </a>';
              } else {
                echo '
                <a href="about-us.php" class="dropdown-item border-radius-md">
                <span class="ps-3">Profil</span>
              </a>
                <a href="../controllers/logoutAction.php" class="dropdown-item border-radius-md">
            <span class="ps-3">Se Deconnecter</span>
          </a>';
              }  ?>
            </div>
          </div>
        </li>
        <li class="nav-item my-auto ms-3 ms-lg-0">
          <?php if (isset($_SESSION['admin'])) {
            echo '<a href="../admin/index.php" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Administration</a>';
          } elseif (!isset($_SESSION['auth'])) {
            echo '<button type="button" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0" data-bs-toggle="modal" data-bs-target="#modal-notification">Passer une Annonces</button>';
          } else {
            echo '<a href="../public/post.php" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Passer une Annonces</a>';
          }  ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- notification modal -->
<div class="col-md-4">
  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Votre attention est requise</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="text-gradient text-danger mt-4">Vous devriez lire ceci !</h4>
            <p>Pour publier une annonce, vous devriez vous connecter d'abord</p>
          </div>
        </div>
        <div class="modal-footer">
          <a href="sign-in.php" type="button" class="btn btn-secondary">Ok, j'ai compris</a>
          <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Fermer</button>
        </div>

      </div>
    </div>
  </div>
</div>