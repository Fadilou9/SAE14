<body>
    var images = ["https://img.freepik.com/photos-gratuite/organisation-journee-education-table-espace-copie_23-2148721266.jpg?w=826&t=st=1674120483~exp=1674121083~hmac=a5212861225dc6c67409e5ecc4a5e2dce22232354b1bb4f04adf6bf9d2b24bf4", "https://img.freepik.com/photos-gratuite/livre-fond-carton-vert_1150-3837.jpg?w=740&t=st=1674295403~exp=1674296003~hmac=bdf73cc80314dbcb426e5c00e752edb1335819e9532a69f3b6fc4fb8864c0359"];
  var i = 0;

  function changeBackground() {
    document.body.style.backgroundImage = "url(" + images[i] + ")";
    i = (i + 1) % images.length;
  }

  setInterval(changeBackground, 3000);
</body>