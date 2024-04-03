window.onload = () => {
  const toast = document.querySelector("#toast");

  if (toast != null) {
    toast.classList.add("show");
    setTimeout(() => toast.classList.remove("show"), 3000);
  }
};
