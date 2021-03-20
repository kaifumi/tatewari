
// 左メニューの選択色変化
const navs = document.getElementsByClassName('nav-link');
var url = location.href;
if (url.match(/home/)) {
    navs[1].classList.add("active");
} else if (url.match(/task/)) {
    navs[2].classList.add("active");
}

