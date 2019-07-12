	let i=3;
	let time=null;
	time=function(){
	if(i==$(".Lunbotu a").length){
		i=0;
		$(".Lunbotu a").eq($(".Lunbotu a").length-1).fadeOut(1000)
		$(".Lunbotu a").eq(i).fadeIn(1000)
		$(".miaodian li").eq(i).css({
			background:"red"
		}).siblings(".miaodian li").css({
			background:"black"
		})
		i++;
	}else{
		$(".Lunbotu a").eq(i-1).fadeOut(1000)
		$(".Lunbotu a").eq(i).fadeIn(1000)
		$(".miaodian li").eq(i).css({
			background:"red"
		}).siblings(".miaodian li").css({
			background:"black"
		})
		i++;
	}
	}
	setInterval(time,4000)
	$(".left").click(function(){
		clearInterval(time);
		i--;
		if(i<0){
			i=$(".Lunbotu a").length-1;
			$(".Lunbotu a").eq(0).fadeOut(1000)
			$(".Lunbotu a").eq(i).fadeIn(1000)
			$(".miaodian li").eq(i).css({
				background:"red"
			}).siblings(".miaodian li").css({
				background:"black"
			})
		}else{
			$(".Lunbotu a").eq(i+1).fadeOut(1000)
			$(".Lunbotu a").eq(i).fadeIn(1000)
			$(".miaodian li").eq(i).css({
				background:"red"
			}).siblings(".miaodian li").css({
				background:"black",
			})
		}
		time;
	});
	$(".reight").click(function(){
		clearInterval(time);
		i++;
		if(i>$(".Lunbotu a").length-1){
			i=0;
			$(".Lunbotu a").eq($(".Lunbotu a").length-1).fadeOut(1000)
			$(".Lunbotu a").eq(i).fadeIn(1000)
			$(".miaodian li").eq(i).css({
				background:"red"
			}).siblings(".miaodian li").css({
				background:"black"
			})
		}else{
			$(".Lunbotu a").eq(i-1).fadeOut(1000)
			$(".Lunbotu a").eq(i).fadeIn(1000)
			$(".miaodian li").eq(i).css({
				background:"red"
			}).siblings(".miaodian li").css({
				background:"black",
			})	
			
		}
	
		time;
	});
	