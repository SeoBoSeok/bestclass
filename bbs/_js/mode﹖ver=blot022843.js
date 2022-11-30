/*
다크모드 설정은 localStorage에 dark/light로 값을 저장하고
document.documentElement 즉 <html>에 color-theme이라는 이름으로 설정값을 저장하여
mode.css에서 아래와 같은 형식으로 웹페이지의 전체적인 색상을 조정한다
html[color-theme='dark'] body {background:#1E2126;}

dom 전에 localStorage 값을 받아와서 mode.css를 먼저 읽게 한 다음에 html을 출력한다
(dom생성 후에는 이미 렌더링된 후라 디폴트인 흰색 배경색을 한번 출력하기 때문에 깜빡임이 있다)
*/


// 로컬 스토리지에 저장된 컬러 모드
const isUserColorTheme = localStorage.getItem('color-theme');

if( isUserColorTheme === 'dark')
	document.documentElement.setAttribute('color-theme', 'dark');
else if( isUserColorTheme === 'light')
	document.documentElement.setAttribute('color-theme', 'light');
else
	document.documentElement.setAttribute('color-theme', 'light');
