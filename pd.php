<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data</title>
    <style>
 body {
     background-image: url(bg.jpg) ;
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
  }

.welcome-message {
    background-color: antiquewhite;
    opacity: 0.7; 
    border-radius: 34px; 
    margin: 50px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
}

.sidebar {
    width: 300px;
    background-color: antiquewhite;
    margin-left: 80%;
    height: 360px;
    border-radius: 34px ;
    text-align: center;
    opacity: 0.7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
}

nav ul {
    list-style-type: none;
    padding: 0;
    
}

nav ul li {
    padding: 10px;
}

nav ul li a {
    padding: 38px;
    text-decoration: none;
    color: black;
    display: block

}

nav ul li a:hover {
    color: red; 
    width: 100%;
}

.main-content {
    text-align: justify;
    max-width: 75%;
    background-color: antiquewhite;
    opacity: 0.9;
    border-radius: 34px;
    text-align: justify;
    padding: 20px;
    margin-top: -400px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
}

.section {
    display: none; 
    text-align: justify;
    max-width: 75%;
    background-color: antiquewhite;
    opacity: 0.7;
    border-radius: 34px;
    text-align: justify;
    padding: 20px;
}

.btn {
    padding: 20px;
    margin-top: 20px;
    margin-left: 82%;
    width: 200px;
    text-align: center;
    background-color: antiquewhite;
    opacity: 0.8;
    border-radius: 34px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);


}
a {
    text-decoration: none;
    color: black;

}
a:hover {
    color: red; 
}
h1 {
  font-family: georgia;
  color: darkred;
  letter-spacing: 10px;
  font-size: 3em;
}
b {
   color: brown;
}
.pre {
  margin-left: -30px;
  font-family: 'Times New Roman', Times, serif;
  font-size: 18px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-message">
            <h1>MY PERSONAL DATA</h1>
            <p style="color: brown;">Welcome & Explore More About Me</p>
        </div>

        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="#section1">Personal Data</a></li>
                    <li><a href="#section2">Education</a></li>
                    <li><a href="#section3">Professional Experience</a></li>
                </ul>
             </nav>
        </div>
        <div class="btn">
            <a href="homepage.php">Homepage</a>
        </div>

        <div class="main-content">
            <p>
                <i>~ Whenever you seea successful person you only see the public glories, never the private sacrifices to reach them ~</i>
            </p>
          
            <div id="section1" class="section">
                <p>
                    <i><b>Name:</b> </i> Peter<br><br>
                    <i><b>Surname:</b> </i>Kimani<br><br>
                    <i><b>Date of Birth: </b></i>4th Oct, 2004<br><br>
                    <i><b>Place of Birth:</b> </i>Eldama Ravine, Baringo<br><br>
                
                </p>
            </div>

            <div id="section2" class="section">
                <p>
                    <pre class="pre">
                        <b>2022 - 2026</b>              Bachelor in Computer Science in Maasai mara university, Narok, Kenya.
                
                        <b>2018 - 2021</b>              Secondary Studies went to Poror High School, Baringo, Kenya.
                
                        <b>2010 - 2017</b>              Primary Studies went to Alpha Schiels Academy, Baringo, Kenya.
                      </pre>
                </p>
            </div>

            <div id="section3" class="section">
                <p>
                    <pre class="pre">
                        <b>2021 - 2022</b>              Computer Packages Assistant Teacher at Com-ways Information Communication & Technology Institute
                  
                        <b>2022 - 2023</b>              Web Development team on Hotel management at Lexington City Centre
                  
                      </pre>
                </p>
            </div>

        </div>
    </div>

    <script>
        document.querySelectorAll('.sidebar a').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        const sectionId = this.getAttribute('href');
        document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
        document.querySelector(sectionId).style.display = 'block';
    });
});


    </script>
</body>
</html>

  
  