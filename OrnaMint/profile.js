const body = document.body;

const collapseBtn = document.querySelector(".admin-menu .collapse-btn");

const collapsedClass = "collapsed";

collapseBtn.addEventListener("click", function() {

  body.classList.toggle(collapsedClass);

  this.getAttribute("aria-expanded") == "true"

    ? this.setAttribute("aria-expanded", "false")

    : this.setAttribute("aria-expanded", "true");

  this.getAttribute("aria-label") == "collapse menu"

    ? this.setAttribute("aria-label", "expand menu")

    : this.setAttribute("aria-label", "collapse menu");

});
const html = document.documentElement;

const switchLabel = document.querySelector(".switch label");

const switchLabelText = switchLabel.querySelector("span:last-child");

const lightModeClass = "light-mode";

switchInput.addEventListener("input", function () {

  html.classList.toggle(lightModeClass);

  if (html.classList.contains(lightModeClass)) {

    switchLabelText.textContent = "Light";

  } else {

    switchLabelText.textContent = "Dark";

  }

});



if (localStorage.getItem("dark-mode") === "false") {

    html.classList.add(lightModeClass);
  
    switchInput.checked = false;
  
    switchLabelText.textContent = "Light";
  
  }
  
  switchInput.addEventListener("input", function () {
  
    if (html.classList.contains(lightModeClass)) {
  
      localStorage.setItem("dark-mode", "false");
  
    } else {
  
      localStorage.setItem("dark-mode", "true");
  
    }
  
  });


  const hbody = document.body;

  const menuLinks = document.querySelectorAll(".admin-menu a");
  
  const hcollapsedClass = "collapsed";
  
  for (const link of menuLinks) {
  
    link.addEventListener("mouseenter", function () {
  
      if (
  
        hbody.classList.contains(collapsedClass) &&
  
        window.matchMedia("(min-width: 768px)").matches
  
      ) {
  
        const tooltip = this.querySelector("span").textContent;
  
        this.setAttribute("title", tooltip);
  
      } else {
  
        this.removeAttribute("title");
  
      }
  
    });
  
  }
    