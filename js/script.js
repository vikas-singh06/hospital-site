var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

window.addEventListener('scroll', function () {
  let header = document.querySelector('nav');

  header.classList.toggle('stick-top', this.window.scrollY>200)
})

// document.addEventListener("DOMContentLoaded", function () {
//   // Check if the current URL is valid (e.g., it exists in your site)
//   const validURLs = ["/","/index", "/about", "/contact"]; // Add your valid URLs here
//   const currentURL = window.location.pathname;
//   const isValidURL = validURLs.includes(currentURL);

//   // If the URL is not valid, redirect to the 404 page
//   if (!isValidURL) {
//       window.location.href = "404.php";
//   }
// });
