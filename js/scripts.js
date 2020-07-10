jQuery(document).ready(function ($) {
    $("#contextual-help-link").click(function () {
        $("#contextual-help-wrap").css("cssText", "display: block !important;");
    });
    $("#show-settings-link").click(function () {
        $("#screen-options-wrap").css("cssText", "display: block !important;");
    });

    $('.mobile-toggler').click(function(){
        $('.menu-container').toggleClass('show-top-menu');

    });
    
    $('.menu-item a').click(function(){
        $('.menu-container').toggleClass('show-top-menu');
    });

    $(document).ready(function(){
        function countdownTimer() {
            let getEventDate = document.getElementById('event-date').innerHTML;
            const difference = +new Date(getEventDate) - +new Date();
            let remaining = "Time's up!";
        
            if (difference > 0) {
              const parts = {
                days: Math.floor(difference / (1000 * 60 * 60 * 24)),
                hours: Math.floor((difference / (1000 * 60 * 60)) % 24),
                minutes: Math.floor((difference / 1000 / 60) % 60),
                seconds: Math.floor((difference / 1000) % 60)
              };
        
              remaining = Object.keys(parts)
                .map(part => {
                  if (!parts[part]) return;
                  return `<div class="countdown-item">${parts[part]} <span class="countdown-title">${part}</span></div>`;
                })
                .join(" ");
            }
        
            document.getElementById("countdown").innerHTML = remaining;
          }
        
          countdownTimer();
          setInterval(countdownTimer, 1000);
    })

});