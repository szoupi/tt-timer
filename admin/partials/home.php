<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Tt_Timer
 * @subpackage Tt_Timer/admin/partials
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<br>
<br>


<div class="container">

  <!-- ----------------------------------------------------------------------------------- -->
  <!-- TIMER ----------------------------------------------------------------------------------- -->
  <div class="container">
    <br>
    <div style="float:right;"><span id="currentTime"></span> </div>
    <div>Έναρξη πρακτικής δοκιμασίας: <br><strong>Τετάρτη 27 Οκτωβρίου 2021</strong> στις <strong>17:30</strong></div>

    <p id="done"></p>

      <p>
        Έναρξη σε: <br>
        <strong><span id="days">0</span></strong> Ημέρες
        <strong><span id="hours">0</span></strong> ώρες 
        <strong><span id="minutes">0</span></strong> λεπτά και 
        <strong><span id="seconds">0</span></strong> δευτερόλεπτα
      </p>
    </ul>
  </div>


  <script>
      // TIMER
      const end = new Date("2021-10-27 17:30:00").getTime(); // set the end date
      const dayEl = document.getElementById('days');
      const hoursEl = document.getElementById('hours');
      const minutesEl = document.getElementById('minutes');
      const secondsEl = document.getElementById('seconds');
      const currentTimeEl = document.getElementById('currentTime');

      const seconds = 1000;
      const minutes = seconds * 60;
      const hours = minutes * 60;
      const days = hours * 24;


          

      const x = setInterval(function () {
          let now = new Date().getTime();
          const difference = end - now;

          if (difference < 0) {
            clearInterval(x);
            document.getElementById("done").innerHTML = "Τέλος Χρόνου!";
            document.getElementById("btn-upload-cv").innerHTML = "Τέλος Χρόνου!";
            document.getElementById("btn-upload-cv").disabled = true;
            
            return;
          }
            
          dayEl.innerText = Math.floor(difference / days);
          hoursEl.innerText = Math.floor( (difference % days) / hours );
          minutesEl.innerText = Math.floor( (difference % hours) / minutes );
          secondsEl.innerText = Math.floor( (difference % minutes) / seconds );
          
          // DIPSLAY CURRENT TIME
          var today = new Date();
          var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
          // if minute is < 10 it will be displayed as e.g. '10:03' and not '10:3'
          if(today.getMinutes() < 10){
            var time = today.getHours() + ':0' + today.getMinutes();
          }
          var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
          var dateTime = date+' '+time;  
          currentTimeEl.innerText = dateTime;
            
      }, seconds);
  </script>
  <!-- ----------------------------------------------------------------------------------- -->
  <!-- END TIMER ----------------------------------------------------------------------------------- -->

  
  <br>
  <br>
  <hr>  <div class="row">
    <div class="col-md-6">
      <h2>Άσκηση 1</h2>
      
      <p><a target="_blank" href="https://forms.aead.gr/?p=258">Οδηγίες</a></p>
      <p><a target="_blank" href="https://forms.aead.gr/?p=256">Επιτελικό Κράτος (N. 4622/2019)</a></p>
      <a href="admin.php?page=tt-timer%2Faskisi1.php">Άσκηση</a>      
    </div>
  </div>

  <br>
  <br>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <h2>Άσκηση 2</h2>
      
      <p><a target="_blank" href="https://forms.aead.gr/?p=265">Οδηγίες</a></p>
      <p><a href="admin.php?page=tt-timer%2Faskisi2.php">Άσκηση</a></p>
    </div>
  </div>


  <br>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <h2>Γενικες Οδηγίες</h2>
      
      <p><a target="_blank" href="https://forms.aead.gr/?p=263">Γενικές Οδηγίες</a></p>
      <p><a target="_blank" href="https://forms.aead.gr/wp-content/uploads/ead_manual_exetaseis_ipopsifion_epitheoriton.pdf">Οδηγός Πρακτικής Δοκιμασίας στο Σύστημα Υποβολής Αιτήσεων της Ε.Α.Δ_ΔΗΔ_18102021</a></p>
    </div>
  </div>

</div>


