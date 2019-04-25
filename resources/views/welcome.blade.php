@extends('layout.main')

@section('tittle')
Index
@endsection


@section('body')
<div class="header"
style="background-color: red;
  padding: 10px;
  text-align: center;">
  <h1>Library Management System</h1>
</div>

<div class="topnav" style="  overflow: hidden;
  background-color: #333;">
  <a href="./" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Home</a>



<a href="./registation" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Registation</a>

<a href="./bookdetails" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Book Details</a>

<a href="./mlogin" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Member Login</a>

<a href="./llogin" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Libraran Login</a>



</div>



<div class="mySlides w3-display-container w3-center">
    <img src="img/20.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/21.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center" style="padding:25px">
    <img src="img/22.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/23.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/24.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          
    </div>
  </div>
<p>A library is a collection of sources of information and similar resources, made accessible to a defined community for reference or borrowing.[1] It provides physical or digital access to material, and may be a physical building or room, or a virtual space, or both.[2] A library's collection can include books, periodicals, newspapers, manuscripts, films, maps, prints, documents, microform, CDs, cassettes, videotapes, DVDs, Blu-ray Discs, e-books, audiobooks, databases, and other formats. Libraries range in size from a few shelves of books to several million items. In Latin and Greek, the idea of a bookcase is represented by Bibliotheca and Bibliothēkē (Greek: βιβλιοθήκη): derivatives of these mean library in many modern languages, e.g. French bibliothèque.

The first libraries consisted of archives of the earliest form of writing—the clay tablets in cuneiform script discovered in Sumer, some dating back to 2600 BC. Private or personal libraries made up of written books appeared in classical Greece in the 5th century BC. In the 6th century, at the very close of the Classical period, the great libraries of the Mediterranean world remained those of Constantinople and Alexandria.

A library is organized for use and maintained by a public body, an institution, a corporation, or a private individual. Public and institutional collections and services may be intended for use by people who choose not to—or cannot afford to—purchase an extensive collection themselves, who need material no individual can reasonably be expected to have, or who require professional assistance with their research. In addition to providing materials, libraries also provide the services of librarians who are experts at finding and organizing information and at interpreting information needs. Libraries often provide quiet areas for studying, and they also often offer common areas to facilitate group study and collaboration. Libraries often provide public facilities for access to their electronic resources and the Internet.

Modern libraries are increasingly being redefined as places to get unrestricted access to information in many formats and from many sources. They are extending services beyond the physical walls of a building, by providing material accessible by electronic means, and by providing the assistance of librarians in navigating and analyzing very large amounts of information with a variety of digital resources. Libraries are increasingly becoming community hubs where programs are delivered and people engage in lifelong learning. As community centers, libraries are also becoming increasingly important in helping communities mobilize and organize for their rights. The relationship between librarianship and human rights works to ensure that the rights of cultural minorities, immigrants, the homeless, the disabled, LGBTQ community , as well as other marginalized groups are not infringed upon as protected in the Universal Declaration of Human Rights.</p>
  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@endsection