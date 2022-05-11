let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

async function getComments() {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const id = urlParams.get('id')

  let json = fetch(`/API/getComments.php?id=${id}`)
    .then((response) => response.json())
    .then((user) => {
      return user;
    });
  json = await json;

  let comments = document.getElementsByClassName("comments-container")[0];

  json.forEach(element => {
    var newDiv = document.createElement("div");
    newDiv.className = "comment";
    newDiv.innerHTML = `<div><img src="${element["picture"]}"></div><div class="comment-post"><div class="time-comment">${element["date"]}</div><div class="about-comment">${element["about"]}</div><div class="text-comment">${element["text"]}</div></div>`;
    console.log(newDiv);

    comments.appendChild(newDiv);
  });
}

getComments();