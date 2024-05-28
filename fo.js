// Fonction pour vérifier si le mot de passe respecte le format requis
function validatePassword() {
    const passwordInput = document.getElementById("password");
    const password = passwordInput.value;
    const passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
    const errorMessage = document.getElementById("password-error");
  
    if (passwordFormat.test(password)) {
      errorMessage.textContent = ""; // Réinitialiser le message d'erreur
    } else {
      errorMessage.textContent = "Le mot de passe doit contenir au moins 8 caractères, une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial (!@#$%^&*).";
    }
  }