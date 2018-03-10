window.onload=function()
		{

			// var oDiv = document.getElementById('head_picture');
			// var oDiv1 = oDiv.getElementsByTagName('div')[0];
			// var aH = oDiv1.getElementsByTagName('h1');
			// var aB = oDiv1.getElementsByTagName('b');
	
			// oDiv1.onmouseover = function(){
				
			// 	aH[0].style.color = "#0088D6";
			// }
			
			// aH[0].onmouseout =function(){
			// 	this.style = this.style;
				
			// }
			//alert('ss');
			//var oDivservers = document.getElementById('our_servers');
			window.onload=function()
        {
            var arr=[
                '有你喜欢的音乐',//JS中的数组
                '有些你不可错过的电影',
                '不会的百度一下',
                '沸点的官网呦',
            ];
            var oDiv=document.getElementById('our_servers');
            var oDivimg=oDiv.getElementsByTagName('img');
            var oTxt=oDiv.getElementsByTagName('p')[0];

            for(var i=0;i<oDivimg.length;i++)
            {
                oDivimg[i].index=i;//JS中动态添加自定义属性
                oDivimg[i].onmouseover=function()
                {
                    for(var i=0;i<oDivimg.length;i++)
                    {
                        oDivimg[i].className='';//先清空属性
                    }
                    this.className='active';//将选中的class变为active
                    oTxt.innerHTML='<p>'+arr[this.index]+'</p>';//拼接符号+
                };
                
            }

            var oDivmenu = document.getElementById('menu');  
            var oDiv1 = oDivmenu.getElementsByTagName('div')[0];
            var oDiv2 = oDivmenu.getElementsByTagName('div')[1];  
            var oDiv3 = oDivmenu.getElementsByTagName('div')[2];
            var oDiv4 = oDivmenu.getElementsByTagName('div')[3];
            var aLi1 = oDiv2.getElementsByTagName('li')[0];
            var aLi2 = oDiv2.getElementsByTagName('li')[1];

            var timer=null;  
            var timer2 = null;
            var timer3 = null;

            oDiv2.onmouseover=oDiv1.onmouseover=function(){  
                oDiv2.style.display='block';  
                clearTimeout(timer);//清除定时器  
            }  
            oDiv2.onmouseout=oDiv1.onmouseout=function(){  
                timer=setTimeout(function(){oDiv2.style.display='none'},500);//开启定时器 
            } 
            /*------------------------------------------------------------------------------*/

            aLi1.onmouseover = function() {
            	oDiv3.style.display = 'block';
            	clearTimeout(timer2);
            }
            oDiv3.onmouseover = function() {
            	oDiv3.style.display = 'block';
            	clearTimeout(timer);
            	aLi1.style.display = 'block';
            	clearTimeout(timer2);
            }
            aLi1.onmouseout = oDiv3.onmouseout = function(){
            	timer2 = setTimeout(function(){oDiv3.style.display = 'none'},0);
            }
            /*------------------------------------------------------------------------------*/

            aLi2.onmouseover = function() {
            	oDiv4.style.display = 'block';
            	clearTimeout(timer3);
            }
            oDiv4.onmouseover = function() {
            	oDiv4.style.display = 'block';
            	clearTimeout(timer);
            	aLi2.style.display = 'block';
            	clearTimeout(timer3);
            }
            aLi2.onmouseout = oDiv4.onmouseout = function(){
            	timer3 = setTimeout(function(){oDiv4.style.display = 'none'},0);

            }
            
        };
		}

// $(function(){
// 	//	alert('ss');
// 	var a = $('#getthis').height();
// 	alert(a);
// })