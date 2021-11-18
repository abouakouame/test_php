<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "etudiant");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']);
$genre = mysqli_real_escape_string($link, $_REQUEST['genre']);
 
// Attempt insert query execution
$sql = "INSERT INTO `inscript`( `nom`, `prenom`, `email`, `password`, `telephone`, `genre`) VALUES ('$nom', '$prenom', '$email', '$password', '$telephone', '$genre')";
if(mysqli_query($link, $sql)){
    echo "Enregistrement reussit.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>