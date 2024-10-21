const themeCheckbox = document.getElementById("themeCheckbox");

function themeChange() {
  const checked = themeCheckbox.checked;
  localStorage.setItem("theme", checked ? "true" : "false");
}

function setTheme() {
  const theme = localStorage.getItem("theme") === "true";
  themeCheckbox.checked = theme;
}

setTheme();
