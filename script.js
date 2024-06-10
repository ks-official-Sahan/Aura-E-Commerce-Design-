var signUpBox = document.getElementById("signUp");
var signInBox = document.getElementById("signIn");
var adminSignInBox = document.getElementById("adminSignIn");

function showSignUp() {
  // alert("Show Sign Up");

  var navigator = document.getElementById("navigator");
  navigator.classList.toggle("d-none");
  signUpBox.classList.toggle("d-none");
}

function signUp2Welcome() {
  // alert("Sign Up to Welcome");

  var navigator = document.getElementById("navigator");
  navigator.classList.toggle("d-none");
  signUpBox.classList.toggle("d-none");
}

function showPasswordUp() {
  // alert("Show Password");

  var password = document.getElementById("password");
  var show = document.getElementById("show");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  }
}

function signUp() {
  // alert("Sign Up");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function changeView() {
  // alert("Change View");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function showSignIn() {
  // alert("Show Sign In");

  var navigator = document.getElementById("navigator");
  navigator.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function signIn2Welcome() {
  // alert("Sign In to Welcome");

  var navigator = document.getElementById("navigator");
  navigator.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function showPasswordIn() {
  // alert("Show Password");

  var password = document.getElementById("passwordIn");
  var show = document.getElementById("showIn");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
}

function signIn() {
  // alert("Sign In");

  window.location = "home.php";
}

function showAdminSignIn() {
  // alert("Show Admin Sign In");

  var navigator = document.getElementById("navigator");
  navigator.classList.toggle("d-none");
  adminSignInBox.classList.toggle("d-none");
}

function back2WelcomeAdmin() {
  // alert("Back to Welcome");

  var navigator = document.getElementById("navigator");
  navigator.classList.toggle("d-none");
  adminSignInBox.classList.toggle("d-none");
}

function showAdminPassword() {
  // alert("Show Password");

  var password = document.getElementById("passwordAdmin");
  var show = document.getElementById("showAdmin");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
}

function sendVerificationAdmin() {
  // alert ("Send Verification Admin");

  alert("Verification Code Send Successfully");
}

function adminSignIn() {
  // alert("Admin Sign In");

  window.location = "adminPanel.php";
}

function visitAsGuest() {
  // alert("Visit as a Guest");

  window.location = "home.php";
}

var bootstrapUserModal;

function forgotUserPassword() {
  // alert("Forgot User Password");

  var userModal = document.getElementById("forgotPasswordUserModal");
  bootstrapUserModal = new bootstrap.Modal(userModal);
  bootstrapUserModal.show();
}

function showPasswordUN() {
  // alert("Show New Password User")

  var password = document.getElementById("unpi");
  var show = document.getElementById("unpb");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
}

function showPasswordUR() {
  // alert("Show Re-Type Password User")

  var password = document.getElementById("urnpi");
  var show = document.getElementById("urnpb");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
}

function resetUserPassword() {
  // alert("Reset User Password");

  bootstrapUserModal.hide();
}

var bootstrapAdminModal;

function forgotAdminPassword() {
  // alert("Forgot Admin Password");

  var adminModal = document.getElementById("forgotPasswordAdminModal");
  bootstrapAdminModal = new bootstrap.Modal(adminModal);
  bootstrapAdminModal.show();
}

function showPasswordAN() {
  // alert("Show New Password Admin")

  var password = document.getElementById("anpi");
  var show = document.getElementById("anpb");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
}

function showPasswordAR() {
  // alert("Show Re-Type Password Admin")

  var password = document.getElementById("arnpi");
  var show = document.getElementById("arnpb");

  if (password.type == "password") {
    password.type = "text";
    show.innerHTML = "<i class='bi bi-eye-fill'></i>";
  } else {
    password.type = "password";
    show.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
  }
}

function resetAdminPassword() {
  // alert("Reset Admin Password");

  bootstrapAdminModal.hide();
}

var containBox = document.getElementById("containBox");
var x = -100;
var animId;
function intro() {
  // alert("Intro");
  animId = setInterval(animation, 1);
  containBox.style.marginTop = x + "vh";
}
function animation() {
  // alert("Animation");
  x += 0.3;
  containBox.style.marginTop = x + "vh";
  if (x > 0) {
    clearInterval(animId);
    containBox.style.marginTop = "0vh";
  }
}

function viewProfile() {
  // alert("View Profile");

  window.location = "userProfile.php";
}

function changeProfileImage() {
  alert("Change Profile Image");
}

function updateProfile() {
  alert("Update Profile");
}

function signOut() {
  // alert("Sign Out");

  window.location = "index.php";
}

function basicSearch(x) {
  // alert("Basic Search");
  // alert(x);

  var resulBody1 = document.getElementById("result-body-1");
  var resulBody2 = document.getElementById("result-body-2");

  resulBody1.classList.toggle("d-none");
  resulBody2.classList.toggle("d-none");
}

function advancedSearch(x) {
  // alert("Advanced Search");
  // alert(x);

  var resulBody1 = document.getElementById("result-body-1");
  var resulBody2 = document.getElementById("result-body-2");

  resulBody1.classList.toggle("d-none");
  resulBody2.classList.toggle("d-none");
}

function viewProduct(x) {
  // alert("View Product");
  // alert(x);

  window.location = "singleProductView.php";
}

function buyNow(x) {
  // alert("Buy Now");
  // alert(x);

  alert("Purchased Successfully");
  window.location = "invoice.php";
}

function addToCart(x) {
  alert("Add To Cart");
  alert(x);
}

function addTowatchList(id) {
  alert("Add To Watch List");
  alert(id);
}

function removeFromWatchList(id) {
  alert("Remove From watchList");
  alert(id);

  window.location.reload();
}

function removeFromCart(id) {
  alert("Remove From Cart");
  alert(id);

  window.location.reload();
}

function sort1(x) {
  alert("Sort 01");
  alert(x);

  window.location.reload();
}

function clearSort1() {
  // alert("Clear Sort 01");

  document.getElementById("search").value = "";
  document.getElementById("h").checked = false;
  document.getElementById("l").checked = false;
  document.getElementById("n").checked = false;
  document.getElementById("o").checked = false;
  document.getElementById("b").checked = false;
  document.getElementById("u").checked = false;
}

function addProduct() {
  // alert("Add Product");

  window.location = "addProduct.php";
}

function saveProduct() {
  alert("Product Save");

  window.location = "myProducts.php";
}

function changeProductImages() {
  alert("Upload Product Images");
}

function updateProduct() {
  // alert("Update Product");

  window.location = "updateProduct.php";
}

function productUpdate() {
  // alert("Product Update");

  window.location = "myProducts.php";
}

function deleteProduct() {
  // alert("Delete Product");

  var confirmation = confirm("Are you sure, You want to delete this Product?");

  if (confirmation) {
    alert("Product Delete Success !!");
    window.location.reload();
  }
}

function watchListSearch(x) {
  // alert("watchList Search");
  // alert(x);

  var empty = document.getElementById("emptyView");
  var have = document.getElementById("haveProduct");

  empty.classList.toggle("d-none");
  have.classList.toggle("d-none");
}

function cartSearch(x) {
  // alert("Cart Search");
  // alert(x);

  var empty = document.getElementById("emptyCart");
  var haveProduct = document.getElementById("haveProduct");
  var haveSummary = document.getElementById("haveSummary");

  empty.classList.toggle("d-none");
  haveProduct.classList.toggle("d-none");
  haveSummary.classList.toggle("d-none");
}

function payOut() {
  // alert("Pay Out");

  alert ("Purchased Successfully");
  window.location = "invoice.php";
}

function print() {
  alert("Print");
}

function exportPDF() {
  alert("Export as PDF");
}

function feedback() {
  alert("Feedback");
}

function deleteHistory() {
  alert("Delete History");
}

function deleteAllHistory() {
  alert("Delete All History");
}

function panelSearch() {
  alert("Panel Search")

  window.location.reload();
}

function manageProduct(x) {
  alert("Manage Product");
  // alert(x);

  // window.location = "manageProductView.php";
}

function listAllProducts() {
  // alert("List All Products");

  var newP = document.getElementById("newProducts");
  var allP = document.getElementById("allProducts");

  newP.classList.toggle("d-none");
  allP.classList.toggle("d-none");
}

function listAllUsers() {
  // alert("List All Users");

  var newU = document.getElementById("newUsers");
  var allU = document.getElementById("allUsers");
  
  newU.classList.toggle("d-none");
  allU.classList.toggle("d-none");
}