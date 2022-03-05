//This script is only used to remove a div that the hosting provider puts on every page of the blog :)

const elemnet = document.querySelector(".disclaimer");
elemnet.remove();

// closes the message pop up

const close = document.querySelector(".close");
if (close) {
  close.addEventListener("click", () => {
    close.parentNode.remove();
  });
}
