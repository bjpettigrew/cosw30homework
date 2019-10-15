<!doctype html>
<html>
  <head>
    <title>Trainer</title>
    <meta charset="utf-8">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Russo+One|Teko&display=swap" rel="styleshee');
      body {
        background-image: url('https://res.cloudinary.com/bayleigh/image/upload/v1571105780/pacesetter/cement-concrete-sidewalk-stone-660x495_dgrgcz.jpg');
        padding: 5% 15%;
      }
      #container1 {
        background: #383838;
        margin-top: 20% 30%;
        padding: 5%;
        border-style: ridge;
      }
      #form_box {
        background: white;
        margin-top: 20% 20%;
        padding: 3%;
        text-align: center;
        border-style: ridge;
        }
      img {
        border-style: ridge;
        border-color: #b0b0b0;
        border-width: .75em;
      }
      h1 {
       font-family: 'Russo One', sans-serif;
      }
      h2 {
        font-family: 'Teko', serif;
      }
      form {
        text-align:left;
        padding: 2% 20%;
      }
      p {
        font-family: 'Teko', serif;
        font-size: 1.5em;
        font-weight: bold;
      }
      #submit {
        font-family: 'Teko', serif;
        font-size: 1.25em;
        font-weight: bold;
        color: #383838;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        padding: 0 45%;
      }
      footer {
        color: #000;
      }

    </style>
  </head>

  <body>
    <div id="container1">
       <div id="form_box">
         <img src="https://res.cloudinary.com/bayleigh/image/upload/v1571104735/pacesetter/marathon_tqjtsd.jpg" alt="marathon runners" width="45%">

         <h1>PACE CALCULATOR</h1>
         <h2>Fill In The Form Below To Calculate Pace To Meet Goal Time</h2>
         <form action="process_pace.php" method="post">
           <label for="goaltime"><p>Input goal time in hours and minutes:</label>&nbsp &nbsp
           <input type = "number" name="hours" min="0" step="1" placeholder="hours"> &nbsp &nbsp
           <input type="number" name="mins" min"0" step="1" placeholder="minutes">

           <p>
           <label for="race_type">Type of race:</label>&nbsp &nbsp
         <select name="miles" id="miles">
           <option disabled selected value><p>--Choose type of race--</option>
           <option value="26.2">Marathon</options>
           <option value="13.1">Half-Marathon</options>
           <option value="9.3">15k</options>
           <option value="6.2">10k</options>
           <option value="3.1">5k</options>
      </select></p>



        <input type="submit" name="submit" id="submit">


         </form>
      </div>
    </div>
  </body>

  <footer>
    <p>Bayleigh Pettigrew COSW30 &copy2019</p>
  </footer>






</html>