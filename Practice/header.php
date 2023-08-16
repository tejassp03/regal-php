<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" style="
            font-size: 27px;
            font-weight: 600;
            letter-spacing: 2px;
            user-select: none;
          ">REGAL</a>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <!-- <div class="navbar-start">
        <a class="navbar-item"> Reasoning </a>
        <a class="navbar-item is-20"> English </a>
        <a class="navbar-item"> Group Discussion </a>
        <a class="navbar-item"> Aptitude </a>
        <a class="navbar-item"> Logical </a>
      </div> -->
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons mr-3">
          <div>
            <div class="dropdown">
              <div class="dropdown-trigger">
                <button class="button is-rounded " id="toggle-dropdown" aria-haspopup="true" onclick={toggle()}
                  aria-controls="dropdown-menu3">
                  <div class="image avatar is-32x32">
                    <img class="is-rounded" src="https://www.w3schools.com/howto/img_avatar.png" alt="user"> </img>
                  </div>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    View Profile
                  </a>
                  
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item" style="font-weight:bold;display: flex; align-items:center;">
                    
                      <span class="material-icons">
                        logout
                        
                    </span> 
                    &nbsp;<h2 style="font-weight: bold;">Logout</h2>
                    
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>