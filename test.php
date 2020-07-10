<!DOCTYPE html>
<html>
<body>

<h1>The onclick Event</h1>

<p>The onclick event is used to trigger a function when an element is clicked on.</p>

<p>Click the button to trigger a function that will output "Hello World" in a p element with id="demo".</p>

<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<form enctype="multipart/form-data" action="_URL_" method="post">
							<!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
							<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
							Envoyez ce fichier : <input name="userfile" type="file" />
							<input type="submit" value="Envoyer le fichier" />
</form>


<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>

</body>
</html>
