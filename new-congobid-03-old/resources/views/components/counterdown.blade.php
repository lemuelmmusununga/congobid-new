
<script>
    // ici tu insert la date de fin.
    var countDownDate = new Date("{{ date('m', strtotime($article->enchere->date_debut)) }} {{ date('d', strtotime($article->enchere->date_debut)) }}, {{ date('Y', strtotime($article->enchere->date_debut)) }} {{ date('H', strtotime($article->enchere->heure_debut)) }}:{{ date('m', strtotime($article->enchere->heure_debut)) }}:{{ date('i', strtotime($article->enchere->heure_debut)) }}").getTime();
    
    var x = setInterval(function() {
    
      
      var now = new Date().getTime();
        
      
      var distance = countDownDate - now;
        
     
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // voici le là oùles id sont appelés.
      document.getElementById("days").innerHTML = ((days < 10 && days > 0) ? '0' + days : days) + "J" ;
      document.getElementById("hours").innerHTML =  ((hours < 10 && hours > 0) ? '0' + hours : hours) + ":";
      document.getElementById("minutes").innerHTML =  ((minutes < 10 && minutes > 0) ? '0' + minutes : minutes) + ":";
      document.getElementById("seconds").innerHTML =  ((seconds < 10 && seconds > 0) ? '0' + seconds : seconds);
    
    
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
</script>
    