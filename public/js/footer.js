function adjustFooter() {
  var windowHeight = window.innerHeight;
  var bodyHeight = document.body.clientHeight;

  if (bodyHeight < windowHeight) {
      // 少ないページ数の場合、footerを固定
      document.querySelector('footer').style.position = 'fixed';
      document.querySelector('footer').style.bottom = '0';
  } else {
      // 多いページ数の場合、footerをずらす
      document.querySelector('footer').style.position = 'relative';
  }
}

// ページ読み込み時に実行
window.onload = function () {
  adjustFooter();
};

// ウィンドウのリサイズ時にも実行
window.onresize = function () {
  adjustFooter();
};