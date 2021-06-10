// ヘッダーナビ部分の動き
//////////////////////////////////////
const headerElement = document.getElementById("header");

document.addEventListener("scroll", function () {
  if (document.getElementById("firstView").getBoundingClientRect().bottom < 0) {
    headerElement.classList.add("active");
  } else {
    headerElement.classList.remove("active");
  }
});

///////////////////////////////////////////
// ファーストビューの部分
///////////////////////////////////////////

const animationTargetElements = document.querySelectorAll(".textAnimation");
// console.log(animationTargetElements);

for (let i = 0; i < animationTargetElements.length; i++) {
  const targetElement = animationTargetElements[i];
  //   console.log(targetElement);
  texts = targetElement.textContent;
  // console.log(texts);
  textsArray = [];

  // 一回消す
  targetElement.textContent = "";

  // 文字列を配列に入れる split
  // texts.split("");
  // console.log(texts.split(""));
  for (let j = 0; j < texts.split("").length; j++) {
    const t = texts.split("")[j];
    if (t === " ") {
      textsArray.push(" ");
    } else {
      textsArray.push(
        '<span style="animation-delay:' + j * 0.1 + 's;">' + t + "</span>"
      );
    }
  }
  // console.log(textsArray);

  for (let k = 0; k < textsArray.length; k++) {
    targetElement.innerHTML += textsArray[k];
  }
}

///////////////////////////////////////////

// スクロールエフェクト部分
//////////////////////////////////////////

const targetElement = document.querySelectorAll(".animationTarget");
// console.log(targetElement);

document.addEventListener("scroll", function () {
  for (let i = 0; i < targetElement.length; i++) {
    const getElementDistance =
      targetElement[i].getBoundingClientRect().top +
      targetElement[i].clientHeight * 0.5;
    console.log(getElementDistance);
    if (window.innerHeight > getElementDistance) {
      targetElement[i].classList.add("show");
    }
  }
});

///////////////////////////////
//ページトップへ
////////////////////////////////

$("#pagetop").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0,
    },
    500
  );
  return false;
});
