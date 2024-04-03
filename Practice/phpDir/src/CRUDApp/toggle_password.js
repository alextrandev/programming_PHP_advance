const togglePassword = () => {
  const input = document.querySelector("#password");
  input.type = input.type == "password" ? "text" : "password";
};

document.querySelector("#show_password").addEventListener("change", togglePassword);
