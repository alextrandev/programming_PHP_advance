const togglePassword = () => {
  const input = document.querySelector("#password");
  input.type = input.type == "password" ? "text" : "password";
};

const hideText = () => {
  const cells = document.querySelectorAll(".password_td");
  const eyeIcon = document.querySelector("#eye_icon");

  cells.forEach(cell => cell.classList.toggle("hidden"));

  eyeIcon.classList.toggle("fa-eye-slash");
  eyeIcon.classList.toggle("fa-eye");
};

document.querySelector("#show_password").addEventListener("change", togglePassword);
document.querySelector("#eye_icon").addEventListener("click", hideText);
