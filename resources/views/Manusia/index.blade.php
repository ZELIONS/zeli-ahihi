<html>
<head> 
<title> Profile Card Zelion </title>
<style> 
    body {
    margin: 0;
    padding: 0;
    background: #e0ece4;
}
.container {
  display: grid;
  grid-template-columns: 300px;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family:  sans-serif;
}

.card {
  background-color: #222831;
  height: 33rem;
  border-radius:25px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: -2px -1px 24px 2px rgba(0,0,0,0.64);
  color: white;
}

.card-name {
  margin-top: 25px;
  font-size: 1.5em;
  font-weight: 600;
}

.card-image {
  height: 150px;
  width: 150px;
  border-radius: 50%;
  border: 5px solid #272133;
  margin-top: 20px;
  box-shadow: 0 5px 40px #fff;
}

.draw-border {
  box-shadow: inset 0 0 0 4px #58cdd1;
  color: #fff;
    font-family: sans-serif;
    border-radius: 25px;
  transition: 0.5s;
  position: relative;
}
.draw-border:hover {
  color: #111;
    background: #fff;
    transition: 0.5s;
}
.btn {
  background: none;
  border: none;
  cursor: pointer;
  line-height: 1.2;
  font: 600 1.2rem 'Roboto Slab', sans-serif;
  padding: 0.75em 2em;
  letter-spacing: 0.05rem;
  margin: 10px;
  width: 10rem;
}
.social-icons {
  padding: 0;
  list-style: none;
  margin: 1.5em;
}

.social-icons li {
  display: inline-block;
  margin: 0.15em;
  position: relative;
  font-size: 1.2em;
}

.social-icons i {
  color: #111;
    font-size: 20px;
    font-weight: 800;
  position: absolute;
   top: 13px;
    left: 14px;
  transition: all 265ms ease-out;
}

.social-icons a {
  display: inline-block;
}

.social-icons a:before {
  transform: scale(1);
  content: " ";
  width: 45px;
  height: 45px;
  border-radius: 100%;
  display: block;
  background: #fff;
  transition: all 265ms ease-out;
}

.social-icons a:hover:before {
  transform: scale(0);
  transition: all 265ms ease-in;
}

.social-icons a:hover i {
  transform: scale(2);
  color: #fff;
  background:  #fff;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 265ms ease-in;
}

.grid-container {
  display: grid;
    color: #58cdd1;
    font-family: sans-serif;
    font-weight: 600;
  font-size: 1.1em;
    margin-top: -15px;
    text-align: center;
}


</style>
</head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body>
<div class="container">
  <div class="card">
    <img src="" class="card-image">
    <p class="card-name">zelion_sm_</p>
    
      <div class="grid-container">

      <div class="grid-child-followers">
        285K Followers
      </div>

    </div>
    
    <ul class="social-icons">
      <li><a href="https://www.instagram.com/official_zel_/"><i class="fa fa-instagram"></i></a></li>
      <li><a href="tel:+6285261918164"><i class="fa fa-phone"></i></a></li>
      <li><a href="https://web.facebook.com/people/Zelion-Rothschild/100074965612030/"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://wa.me/6285261918164?text=Hi.%20How%20Are%20You%20Today%3F%20"><i class="fa fa-whatsapp"></i></a></li>
    </ul>
    
    <a href="https://www.instagram.com/official_zel_/"> <button class="btn draw-border">Follow</button>
    <a href="mailto:zelion869@gmail.com?subject=Hai%2C%20Selamat%20pagi.%20Bagaimana%20kabarmu%20hari%20ini"> <button class="btn draw-border">Message</button> </a>
    </div>
    </body>
</html>

