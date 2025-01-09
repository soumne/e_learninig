<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>registration</title>

    <link rel="stylesheet" type="text/css" href="Assets/css/all.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="Assets/css/bootstrap.min.css"
    />
    <link type="text/css" href="Assets/css/registration.css">
    <style>
      /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"); */
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(15, 76, 92); /* Deep teal background */
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fdfdf4; /* Light cream for a soft contrast */
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.container header {
  font-size: 1.6rem;
  color: #0f4c5c; /* Dark teal for header */
  font-weight: 600;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #0f4c5c;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #505a6b; /* Subtle gray-blue for input text */
  margin-top: 8px;
  border: 1px solid #dcdcdc;
  border-radius: 8px;
  padding: 0 15px;
  background: #f9f9f9; /* Light background for inputs */
}
.input-box input:focus {
  border-color: #ff0080; /* Vibrant magenta border on focus */
  box-shadow: 0 0 5px rgba(255, 0, 128, 0.2);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #0f4c5c;
  font-size: 1rem;
  font-weight: 500;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: #ff0080; /* Magenta for checkboxes/radio buttons */
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #505a6b;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #505a6b;
  font-size: 1rem;
  background: transparent;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 500;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: linear-gradient(135deg, #0f4c5c, #ff0080); /* Teal to magenta gradient */
}
.form button:hover {
  background: linear-gradient(135deg, #0d3948, #d6006b); /* Darker hover gradient */
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}

    </style>
  
  </head>
  <body>
    

    <section class="container">
      <header>Registration Form</header>
      <form action="registration_action.php" class="form" method="post">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" required />
        </div>
        
 
        <div class="input-box">
          <div class="column">
            <input type="password" placeholder="Password" name="upass" required />
            <input type="password" placeholder="Re-enter Password" name="urepass" required />
          </div>
        </div>
        
        <button>Submit</button>
        <div class="signup-link">
                 Not a member? <a href="registration.php">Signup now</a>
              </div>
        </div>
      </form>
    </section>

    


    <script
      type="text/javascript"
      src="Assets/js/code.jquery.com_jquery-3.7.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="Assets/bootstrap/js/bootstrap.bundle.min.js"
    ></script>
  </body>
</html>
