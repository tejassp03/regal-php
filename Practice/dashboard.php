<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link href="../css/dashboard.css" rel="stylesheet" />
    <link href="../css/config.css" rel="stylesheet" />
    <title>Regal Test</title>
  </head>
  <style>
    .menu {
      padding: 20px;
      background-color: #618cfb;
      margin: 5px;
      border-radius: 10px;
    }
    .menu-label {
      color: white !important;
      font-weight: 600;
      font-size: 18px;
    }
    .menu-list a {
      color: white;
    }
  </style>
  <body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a
          class="navbar-item"
          style="
            font-size: 27px;
            font-weight: 600;
            letter-spacing: 2px;
            user-select: none;
          "
          >REGAL</a
        >
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navbarBasicExample"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item"> Reasoning </a>
          <a class="navbar-item is-20"> English </a>
          <a class="navbar-item"> Group Discussion </a>
          <a class="navbar-item"> Aptitude </a>
          <a class="navbar-item"> Logical </a>
        </div>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons mr-3">
            <div>
            <div class="dropdown">
  <div class="dropdown-trigger">
    <button class="button is-rounded " id="toggle-dropdown" aria-haspopup="true" onclick={toggle()} aria-controls="dropdown-menu3">
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
      <a href="#" class="dropdown-item">
        Modifiers
      </a>
      <a href="#" class="dropdown-item">
        Grid
      </a>
      <a href="#" class="dropdown-item">
        Form
      </a>
      <a href="#" class="dropdown-item">
        Elements
      </a>
      <a href="#" class="dropdown-item">
        Components
      </a>
      <a href="#" class="dropdown-item">
        Layout
      </a>
      <hr class="dropdown-divider">
      <a href="#" class="dropdown-item">
        Logout
      </a>
    </div>
  </div>
</div>
            </div>
            
          </div>
        </div>
      </div>
    </nav>

    <div class="containermenu" style="display: flex">
      <aside class="menu">
        <p class="menu-label">General</p>
        <ul class="menu-list">
          <li><a>Dashboard</a></li>
          <li><a>Customers</a></li>
        </ul>
        <p class="menu-label">Administration</p>
        <ul class="menu-list">
          <li><a>Team Settings</a></li>
          <li>
            <a class="is-active">Manage Your Team</a>
            <ul>
              <li><a>Members</a></li>
              <li><a>Plugins</a></li>
              <li><a>Add a member</a></li>
            </ul>
          </li>
          <li><a>Invitations</a></li>
          <li><a>Cloud Storage Environment Settings</a></li>
          <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">Transactions</p>
        <ul class="menu-list">
          <li><a>Payments</a></li>
          <li><a>Transfers</a></li>
          <li><a>Balance</a></li>
        </ul>
      </aside>

      <div style="margin: auto; width: 75%; margin-top: 0px">
        <h2 class="title is-20 m-5">Verbal Reasoning</h2>
        <div class="box p-2">
          <button class="button is-medium is-fullwidth items">
            <span class="material-icons"> menu_book </span>&nbsp; Logical
            Sequence of Words
          </button>
          <hr />
          <!-- <right><p style="font-size:16px;font-weight:bold;position: absolute;right:;">Theory + MCQs</p></right> -->
          <button class="button is-medium is-fullwidth items">
            <span class="material-icons"> menu_book </span>&nbsp; Syllogism
          </button>
          <hr />
          <button class="button is-medium is-fullwidth items">
            <span class="material-icons"> menu_book </span>&nbsp; Blood Relation
            Test
          </button>
          <hr />
          <button class="button is-medium is-fullwidth items">
            <span class="material-icons"> menu_book </span>&nbsp; Series
            Completion
          </button>
          <hr />
          <button class="button is-medium is-fullwidth items">
            <span class="material-icons"> menu_book </span>&nbsp; Cube and
            Cuboid
          </button>
          <hr />
          <button class="button is-medium is-fullwidth items">
            <span class="material-icons"> menu_book </span>&nbsp; Direction
            Sense Test
          </button>
        </div>
      </div>
    </div>
  </body>
  <script>

let isopen = false;
var toggledd = document.getElementById("toggle-dropdown");
console.log("I got it:",isopen)
function toggle() 
{

if(isopen === false){
  toggledd.parentElement.parentElement.classList.add("is-active");
  isopen=true
  console.log("I got it:",isopen)
}
  else if(isopen === true)
{
  toggledd.parentElement.parentElement.classList.remove('is-active');
  isopen=false
  console.log("I got it:",isopen)
}
}
</script>
</html>
