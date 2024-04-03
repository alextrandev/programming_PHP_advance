window.onload = () => {
  const toast = document.querySelector("#toast");
  toast.classList.add("show");

  setTimeout(() => toast.classList.remove("show"), 3000);
};
