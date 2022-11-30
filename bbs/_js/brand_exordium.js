$(function(){

$(window).on('load',function(){
	$('#brand #bg_wrap .bg').addClass('on');
});


TweenLite.fromTo("#brand .txt_wrap .slogan .wrap", 0.01,{margin:'1.3em 0 0 0',duration:1},{margin:'0em 0 0 0',duration:1})
TweenLite.fromTo("#brand .txt_wrap .detail .txt1 .p1", 0.7,{margin:'1em 0 0 0',autoAlpha:'0',duration:1},{margin:'0em 0 0 0',autoAlpha:'1',duration:1},0.1)
TweenLite.fromTo("#brand .txt_wrap .detail .txt1 .p2", 0.7,{margin:'2em 0 0 0',autoAlpha:'0',duration:1},{margin:'0em 0 0 0',autoAlpha:'1',duration:1},0.7)

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
	tl.to('#brand .txt_wrap .detail .txt1',1,{autoAlpha:'0'},2)
	.fromTo("#bg_wrap .bg2", 3,{yPercent: 100, y: 0}, {yPercent: 0},0)
	.fromTo("#bg_wrap .bg2 img", 3,{yPercent: -100, y: 0,xPercent:-50}, {yPercent: 0},0)
	.add(txt)
	.fromTo("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-0em',duration:10},{top:'-1.3em',duration:10},2)
	.to('#brand .txt_wrap .detail .txt2',0.1,{autoAlpha:'1'},3)
	.fromTo("#brand .txt_wrap .detail .txt2 .p1", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10})
	.fromTo("#brand .txt_wrap .detail .txt2 .p2", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10})
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
				/*
		onUpdate:function(){ //재실행시 텍스트 숨김처리
			txt.to('#brand .txt_wrap .detail .txt2',0.1,{opacity:'0'})
			txt.to("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-2.6em',duration:10},2)
		},
		*/
//		onStart:function(){ //재실행시 텍스트 숨김처리
//			txt.to('#brand .txt_wrap .detail .txt2',0.1,{opacity:'0'})
//			txt.to("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-2.6em',duration:10},2)
//		},
	});

	tl.to('#brand .txt_wrap .detail .txt2',1,{autoAlpha:'0'},2)
	.fromTo("#bg_wrap .bg3", 3,{yPercent: 100, y: 0}, {yPercent: 0},0)
	.fromTo("#bg_wrap .bg3 img", 3,{yPercent: -100, y: 0,xPercent:-50}, {yPercent: 0},0)
	.add(txt)
	.to("#brand .txt_wrap .slogan .wrap", 0.01,{top:'-2.6em',duration:10},2)
	.to('#brand .txt_wrap .detail .txt3',0.1,{autoAlpha:'1'},3)
	.fromTo("#brand .txt_wrap .detail .txt3 .p1", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10},3)
	.fromTo("#brand .txt_wrap .detail .txt3 .p2", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10},4)
	.fromTo("#brand .txt_wrap .detail .txt3 .p3", 2,{margin:'1em 0 0 0',autoAlpha:'0',duration:10},{margin:'0em 0 0 0',autoAlpha:'1',duration:10},5)
	return tl;
}

$('#section4').waypoint(function() {
	$('#brand .txt_wrap .detail .txt2').css( "opacity","0");
	$('#section4 .txt_wrap .logo').addClass('animated fadeInUp');
	$('#section4 .txt_wrap .btn_wrap').addClass('animated delay-3s fadeInUp');
}, {
	offset: '70%'
});


var master = gsap.timeline();

ScrollTrigger.create({
	fastScrollEnd: '100'
});

master.add(ani1())
  .add(ani2())


}); //jquery