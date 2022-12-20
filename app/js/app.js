$(document).ready(function() {
  // benefits acordeon
  $(function() {
  	$(".benefits__item").on("mouseenter", function(e) {
  		e.preventDefault();
  		var $this = $(this);
  		if (!$this.hasClass("active")) {
  			$(".benefits__item").removeClass("active");
  		}
  		$this.addClass("active");
  	});
  });

  // project popup
  $(function() {
  	$(".project__btn").on("click", function(e) {
  		e.preventDefault();
  		var $this = $(this).parent().parent();
  		if (!$this.hasClass("active")) {
  			$(this).removeClass("active");
  		}
  		$this.toggleClass("active");
  	});
  });

  // project popup close
  $(function() {
  	$(".popup__nav-close").on("click", function(e) {
  		e.preventDefault();
  		var $this = $(this).parent().parent().parent().parent();
  		if (!$this.hasClass("active")) {
  			$(this).removeClass("active");
  		}
  		$this.toggleClass("active");
  	});
  });

  //faq acordeon
  $(function() {
  	$(".faq__item").on("click", function(e) {
  		e.preventDefault();
  		var $this = $(this);
  		if (!$this.hasClass("active")) {
  			$(".faq__item").removeClass("active");
  		}
  		$this.toggleClass("active");
  	});
  });

  const progress = document.querySelector("#progress");
  const prev = document.querySelector("#prev");
  const next = document.querySelector("#next");
  const circles = document.querySelectorAll(".circle");
  const qItems = document.querySelectorAll(".quiz__form-item");
  const qItemActive = document.querySelectorAll(".quiz__form-item-active");

  const update = () => {
      circles.forEach((circle, i) => {
          i < currActive
              ? circle.classList.add("active")
              : circle.classList.remove("active");
      });

      // const actives = document.querySelectorAll(".active");
      // const width = ((actives.length - 1) / (circles.length - 1)) * 100;
      // progress.style.width = `${width}%`;

      if (currActive === 1) {
          prev.disabled = true;
      } else if (currActive === circles.length) {
          next.disabled = true;
      } else {
          prev.disabled = false;
          next.disabled = false;
      }
  };

  const updateSlide = () => {
      qItems.forEach((qItem, i) => {
          i < currActive
              ? qItem.classList.add("quiz__form-item-active")
              : qItem.classList.remove("quiz__form-item-active");
      });

      $(".quiz__form-item").css({display: 'none'});
      $(".quiz__form-item-active:last").css({display: 'block'});
      // console.log(qItemActive.length);
  };

  let currActive = 1;

  next.addEventListener("click", () => {
      currActive++;

      if (currActive > circles.length) {
          currActive = circles.length;
      }
      update();
      updateSlide();
  });
  prev.addEventListener("click", () => {
      currActive--;

      if (currActive < 1) {
          currActive = 1;
      }
      update();
      updateSlide();
  });


  var countDownDate = new Date().getTime() + 444800000;


  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    // var distance = countDownDate - now;
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    // document.querySelectorAll("#timer").innerHTML = hours + ":" + minutes + ":" + seconds;

    for (var i = 0; i < document.querySelectorAll("#timer").length; i++) {
      document.querySelectorAll("#timer")[i].innerHTML = days + "д " + hours + "ч " + minutes + "м ";
    }

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = "EXPIRED";
    }
  }, 1000);
});


$(window).scroll(function() {
  var theta = ($(window).scrollTop() - 2500) / 3;
  $('.projects__bg').css({ transform: 'translateX(' + theta + 'px)' });
});
