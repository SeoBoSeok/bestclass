$(function(){

$(window).on('load',function(){
	$('#brand #bg_wrap .bg').addClass('on');
});

//TweenLite.to("#brand .txt_wrap .text", 0.01,{y:'0',duration:1})
TweenLite.fromTo("#brand .txt_wrap.txt1 .slogan .p1 span", 0.8,{y:'1.2em',duration:1},{y:'0',duration:1},0.1)
TweenLite.fromTo("#brand .txt_wrap.txt1 .slogan .p2 span", 0.8,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.5},0.1)
TweenLite.fromTo("#brand .txt_wrap.txt1 .detail .p1 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.7},0.1)
TweenLite.fromTo("#brand .txt_wrap.txt1 .detail .p2 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.8},0.1)


//TweenLite.fromTo("#brand .txt_wrap .detail .txt1 .p2", 0.7,{margin:'2em 0 0 0',autoAlpha:'0',duration:1},{margin:'0em 0 0 0',autoAlpha:'1',duration:1},0.7)

//TweenLite.fromTo("#brand .txt_wrap .slogan .wrap", 0.01,{margin:'1.3em 0 0 0',duration:1},{margin:'0em 0 0 0',duration:1})
//TweenLite.fromTo("#brand .txt_wrap .detail .txt1 .p1", 0.7,{margin:'1em 0 0 0',autoAlpha:'0',duration:1},{margin:'0em 0 0 0',autoAlpha:'1',duration:1},0.1)
//TweenLite.fromTo("#brand .txt_wrap .detail .txt1 .p2", 0.7,{margin:'2em 0 0 0',autoAlpha:'0',duration:1},{margin:'0em 0 0 0',autoAlpha:'1',duration:1},0.7)

function ani1(){
	/********** t1 *******/
	let ttl = gsap.timeline({
		scrollTrigger: {
			trigger: "#section1",
			start: "top top",
			pin: false,
			pinSpacing : false,
			end: "+=100%",
			scrub: false,
			ease:  'Power4.easeOut',
			invalidateOnRefresh: true
		},
	});
	let tl = gsap.timeline({
		scrollTrigger: {
			trigger: "#section1",
			start: "top top",
			pin: true,
			pinSpacing : false,
			anticipatePin : .5,
			end: "+=190%",
			scrub: 1,
			ease:  'Power4.easeOut',
			stagger: 0.5,
			invalidateOnRefresh: true
		},
	});
	let bg = gsap.timeline({
		scrollTrigger: {
			trigger: "#section1",
			start: "bottom bottom",
			end: "+=100%",
			scrub: 1,
			pin: false,
			pinSpacing : false,
			ease:  'Power4.easeIn',
			stagger: 0.5,
			invalidateOnRefresh: true
		},
	});
	let txt = gsap.timeline({
		scrollTrigger: {
			trigger: "#section1",
			start: "top top",
			end: "+=100%",
			scrub: false,
			pin: false,
			pinSpacing : false,
			ease:  'ease',
//			stagger: 0.5,
			invalidateOnRefresh: true
		},
	});
	tl.fromTo("#bg_wrap .bg2", 3,{yPercent: 100, y: 0}, {yPercent: 0},0)
	.fromTo("#bg_wrap .bg2 img", 3,{yPercent: -100, y: 0,xPercent:-50}, {yPercent: 0},0)
	.add(txt)
	.fromTo("#brand .txt_wrap.txt1", 1,{autoAlpha:'1',duration:1},{autoAlpha:'0',duration:1},0.5)
	.fromTo("#brand .txt_wrap.txt2 .slogan .p1 span", 1,{y:'1.2em',duration:1},{y:'0',duration:1},1)
	.fromTo("#brand .txt_wrap.txt2 .detail .p1 span", 1,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.5},1)
	.fromTo("#brand .txt_wrap.txt2 .detail .p2 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.7},1)
	.fromTo("#brand .txt_wrap.txt2 .detail .p3 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.8},1)
/*
	.fromTo("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-0em',duration:10},{top:'-1.3em',duration:10},2)
	.to('#brand .txt_wrap .detail .txt2',0.1,{autoAlpha:'1'},3)
	.fromTo("#brand .txt_wrap .detail .txt2 .p1", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10})
	.fromTo("#brand .txt_wrap .detail .txt2 .p2", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10})
*/
	return tl;
}
function ani2(){
	/********** t2 *******/
	let tl = gsap.timeline({
		scrollTrigger: {
			trigger: "#section2",
			start: "top top",
			pin: true,
			pinSpacing : false,
			anticipatePin : .5,
			end: "+=190%",
			scrub: 1,
			ease:  'Power4.easeIn',
			stagger: 0.5,
			invalidateOnRefresh: true,
		},
	 });
	let bg = gsap.timeline({
		scrollTrigger: {
			trigger: "#section2",
			start: "top bottom",
			anticipatePin : 1,
			end: "+=100%",
			scrub: 1,
			ease:  'Power4.easeIn',
			stagger: 0.5,
			invalidateOnRefresh: true,
		},
	 });
	let txt = gsap.timeline({
		scrollTrigger: {
			trigger: "#section2",
			start: "top top",
			end: "+=100",
			scrub: false,
			pin: false,
			pinSpacing : false,
			ease:  'ease',
			invalidateOnRefresh: true
		},
//		onStart:function(){ //재실행시 텍스트 숨김처리
//			txt.to('#brand .txt_wrap .detail .txt2',0.1,{opacity:'0'})
//			txt.to("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-2.6em',duration:10},2)
//		},
	});

//	tl.to('#brand .txt_wrap .detail .txt2',1,{autoAlpha:'0'},2)
	tl.fromTo("#bg_wrap .bg3", 3,{yPercent: 100, y: 0}, {yPercent: 0},0)
	.fromTo("#bg_wrap .bg3 img", 3,{yPercent: -100, y: 0,xPercent:-50}, {yPercent: 0},0)
	.add(txt)
	.fromTo("#brand .txt_wrap.txt2", 1,{autoAlpha:'1',duration:1},{autoAlpha:'0',duration:1},0.5)
	.fromTo("#brand .txt_wrap.txt3 .slogan .p1 span", 1,{y:'1.2em',duration:1},{y:'0',duration:1},1)
	.fromTo("#brand .txt_wrap.txt3 .slogan .p2 span", 1,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.5},1)
	.fromTo("#brand .txt_wrap.txt3 .detail .p1 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.7},1)
	.fromTo("#brand .txt_wrap.txt3 .detail .p2 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.8},1)
	.fromTo("#brand .txt_wrap.txt3 .detail .p3 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.9},1)


	return tl;
}
function ani3(){
	/********** t2 *******/
	let tl = gsap.timeline({
		scrollTrigger: {
			trigger: "#section3",
			start: "top top",
			pin: true,
			pinSpacing : false,
			anticipatePin : .5,
			end: "+=190%",
			scrub: 1,
			ease:  'Power4.easeIn',
			stagger: 0.5,
			invalidateOnRefresh: true,
		},
	 });
	let bg = gsap.timeline({
		scrollTrigger: {
			trigger: "#section3",
			start: "top bottom",
			anticipatePin : 1,
			end: "+=100%",
			scrub: 1,
			ease:  'Power4.easeIn',
			stagger: 0.5,
			invalidateOnRefresh: true,
		},
	 });
	let txt = gsap.timeline({
		scrollTrigger: {
			trigger: "#section3",
			start: "top top",
			end: "+=100",
			scrub: false,
			pin: false,
			pinSpacing : false,
			ease:  'ease',
			invalidateOnRefresh: true
		},
//		onStart:function(){ //재실행시 텍스트 숨김처리
//			txt.to('#brand .txt_wrap .detail .txt2',0.1,{opacity:'0'})
//			txt.to("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-2.6em',duration:10},2)
//		},
	});

//	tl.to('#brand .txt_wrap .detail .txt2',1,{autoAlpha:'0'},2)
	tl.fromTo("#bg_wrap .bg4", 3,{yPercent: 100, y: 0}, {yPercent: 0},0)
	.fromTo("#bg_wrap .bg4 video", 3,{yPercent: -100, y: 0,xPercent:-50}, {yPercent: 0},0)
//	.add(txt)
	.fromTo("#brand .txt_wrap.txt3", 1,{autoAlpha:'1',duration:1},{autoAlpha:'0',duration:1},0.5)
	.fromTo("#brand .txt_wrap.txt4 .slogan .p1 span", 1,{y:'1.2em',duration:1},{y:'0',duration:1},1)
	.fromTo("#brand .txt_wrap.txt4 .slogan .p2 span", 1,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.5},1)
	.fromTo("#brand .txt_wrap.txt4 .detail .p1 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.7},1)
	//.fromTo("#brand .txt_wrap.txt4 .detail .p2 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.8},1)
	//.fromTo("#brand .txt_wrap.txt4 .detail .p3 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:0.9},1)
	//.fromTo("#brand .txt_wrap.txt4 .detail .p4 span", 0.6,{y:'1.2em',duration:1},{y:'0',duration:1,delay:1},1)


	return tl;
}

$('#section7').waypoint(function() {
	$('#section7 h2').addClass('animated fadeInUp');
	$('#section7 li').addClass('animated fadeInUp');
}, {
	offset: '70%'
});


$('#section8').waypoint(function() {
	$('#section8 .txt_wrap .logo').addClass('animated fadeInUp');
	$('#section8 .txt_wrap .txt').addClass('animated delay-3s fadeInUp');
	$('#section8 .txt_wrap .btn_wrap').addClass('animated delay-6s fadeInUp');
}, {
	offset: '70%'
});


var master = gsap.timeline();

ScrollTrigger.create({
	fastScrollEnd: '100'
});

master.add(ani1())
  .add(ani2())
  .add(ani3())


}); //jquery