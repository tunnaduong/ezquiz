function start() {
  setTimeout(showBlock, 700);
  const element = document.querySelector('.board');
  const element2 = document.querySelector('#scene2');
  element.classList.add('animate__animated', 'animate__flipOutY');
  element2.classList.add('animate__animated', 'animate__jackInTheBox');
  function showBlock() {
    document.getElementById("scene1").style.display = "none";
    document.getElementById("scene2").style.display = "block";
  }
}
function languageStart() {
  setTimeout(showBlock2, 700);
  const element3 = document.querySelector('#scene2');
  const element4 = document.querySelector('#scene_language');
  element3.classList.add('animate__animated', 'animate__flipOutY');
  element4.classList.add('animate__animated', 'animate__jackInTheBox');
  function showBlock2() {
    document.getElementById("scene2").style.display = "none";
    document.getElementById("scene_language").style.display = "block";
  }
}