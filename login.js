function login() {
  let data = new FormData();
  data.append('req', 'login');
  data.append('email', document.getElementById("login_email").value);
  data.append('password', document.getElementById("login_password").value);

  let ajax = new XMLHttpRequest();
  ajax.open("POST", "authenticate.php", true);

  ajax.onload = function() {
    console.log(this.response);
    if(ajax.status === 404 || ajax.status === 403) {
      alert("There was an error loading page");
    }else {
      if(this.response == "OK") {
        window.location.href = "index.php";
      }else {
        alert("You entered an incorrect password or email");
      }
    }
  }

  ajax.send(data);
  return false;
}

function logout() {
  let data = new FormData();
  data.append('req', 'logout');

  let ajax = new XMLHttpRequest();
  ajax.open("POST", "authenticate.php", true);

  ajax.onload = function() {
    console.log(this.response);
    if (ajax.status === 404 || ajax.status === 403) {
      alert("Error logging out");
    }else {
      if(this.response == "OK") {
        window.location.href = "login.php";
      }else {
        alert("Logout feature not currently working, try again");
      }
    }
  }

  ajax.send(data);
}