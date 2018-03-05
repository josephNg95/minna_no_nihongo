function setNumber(x)
{
	var go,g,list,k,km,l,a,c,e,cx,cy,cx1,cy1,cx2,cy2,d,sx,sy,fs=40;
	if (x)
	{
		list=document.querySelectorAll("svg.acjk path[clip-path]");
		km=list.length;
		l=0;
		go=0;
		for (k=0;k<km;k++)
		{
			// several character svg can be in the page, do not set g outside the loop
			g=list[k];
			while (g.tagName!="svg") g=g.parentNode;
			if (g!=go) {l=0;go=g;}
			if (list[k].getAttribute('clip-path').match(/[0-9a]\)/))
			{
				l++;
				a=list[k].getAttribute("d");
				a=a.replace(/([0-9])[-]/g,"$1 -");
				c=a.match(/M[ ]*([0-9.-]+)[ ,]+([0-9.-]+)[^0-9.-]+([0-9.-]+)[ ,]+([0-9.-]+)/);
				if (c&&c.length)
				{
					cx1=parseInt(c[1]);
					cy1=parseInt(c[2]);
					cx2=parseInt(c[3]);
					cy2=parseInt(c[4]);
					d=Math.sqrt((cy2-cy1)*(cy2-cy1)+(cx2-cx1)*(cx2-cx1));
					if (d)
					{
						cx=cx1+(cx2-cx1)*fs/d/2;
						cy=cy1+(cy2-cy1)*fs/d/2;
					}
					else
					{
						cx=cx1;
						cy=cy1;
					}
					if (cx<(fs+(fs>>3))) cx=fs+(fs>>3);
					if (cy>(900-fs-(fs>>3))) cy=900-fs-(fs>>3);
					sx=((k+1)>=10)?0.875:1;
					sy=-1;
					e=document.createElementNS('http://www.w3.org/2000/svg','circle');
					e.setAttribute("cx",cx);
					e.setAttribute("cy",cy);
					e.setAttribute("r",fs);
					e.setAttribute("stroke","#000");
					e.setAttribute("fill","#fff");
					e.setAttribute("stroke-width",Math.max(1,fs>>3));
					g.appendChild(e);
					e=document.createElementNS('http://www.w3.org/2000/svg','text');
					e.setAttribute("x",cx);
					e.setAttribute("y",cy+(fs>>1));
					e.setAttribute("text-anchor","middle");
					e.setAttribute("font-family","arial");
					e.setAttribute("font-weight","normal");
					e.setAttribute("fill","#000");
					e.setAttribute("font-size",(fs>>1)*3);
					//e.setAttribute("transform","matrix("+sx+",0,0,"+sy+","+(cx-sx*cx)+","+(cy-sy*cy)+")");
					e.textContent=l;
					g.appendChild(e);
				}
			}
		}
	}
	else
	{
		list=document.querySelectorAll("svg.acjk circle, svg.acjk text");
		km=list.length;
		if (km) 
			for (k=0;k<km;k++)
			{
				g=list[k].parentNode; // must set g here
				g.removeChild(list[k]);
			}
	}
}
function setGrid(x)
{
	var a,e,list,k,km;
	a=document.getElementById("a");
	list=document.querySelectorAll("#a div.grid");
	km=list?list.length:0;
	if (x)
	{
		if (!km)
		{
			a.className="noBorder";
			for (k=0;k<6;k++)
			{
				e=document.createElement('div');
				e.className="grid grid"+k;
				a.appendChild(e);
			}
		}
	}
	else
	{
		a.className="";
		for (k=0;k<km;k++) a.removeChild(list[k]);
	}
}
function setSection()
{
	var list,k,km;
	list=document.getElementsByClassName("joyoSection");
	km=list.length;
	for (k=0;k<km;k++)
	{
		if (document.getElementById("joyoRadio").checked) list[k].style.display="block";
		else list[k].style.display="none";
	}
	list=document.getElementsByClassName("frequentSection");
	km=list.length;
	for (k=0;k<km;k++)
	{
		if (document.getElementById("frequentRadio").checked) list[k].style.display="block";
		else list[k].style.display="none";
	}
	document.getElementById("data").lang=(document.getElementById("joyoRadio").checked?"ja":"zh-Hans");
}
function switchNumber()
{
	setNumber(document.getElementById("number").checked);
}
function switchGrid()
{
	setGrid(document.getElementById("grid").checked);
}
function switchSection()
{
	ok();
}
function switchSize(fs)
{
	var a,e=document.createElement("style");
	a="#a {width:"+fs+"px;height:"+fs+"px;}";
	a+="svg {width:"+fs+"px;height:"+fs+"px;}";
	a+="svg.error {font-size:"+fs+"px;}";
	a+="#b {width:"+fs+"px;}";
	e.type='text/css';
	if (e.styleSheet) e.styleSheet.cssText=a;
	else e.appendChild(document.createTextNode(a));
	document.getElementsByTagName('head')[0].appendChild(e);
}
function hideSvg()
{
	var list,k,km;
	list=document.querySelectorAll("#a svg");
	km=list.length;
	for (k=0;k<km;k++) list[k].style.visible="none";
}
function ok()
{
	var data,xhr,xhr2,lang,top,height;
	top=document.getElementById('a').offsetTop;
	height=document.getElementById('a').getBoundingClientRect().height;
	hideSvg();
	if (window.innerHeight>(top+height)) window.scrollTo(0,0);
    else window.scrollTo(0,top); 
	data=document.getElementById("data").value.replace(/\s/g,"");
	if (document.getElementById("joyoRadio").checked)
	{
		lang="ja";
		document.getElementById("joyoSection").style.display="block";
		document.getElementById("frequentSection").style.display="none";
	}
	else if (document.getElementById("frequentRadio").checked)
	{
		lang="zh-Hans";
		document.getElementById("joyoSection").style.display="none";
		document.getElementById("frequentSection").style.display="block";
	}
	else {alert("error!");return;}
	xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function()
	{
		if ((xhr.readyState==4)&&(xhr.status==200))
		{
			document.getElementById("a").innerHTML=xhr.responseText;
			setNumber(document.getElementById("number").checked);
			setGrid(document.getElementById("grid").checked);
			setSection();
        }
    };
    xhr.open("POST","getOneFromSvgs.php",true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send("data="+encodeURIComponent(data)+"&lang="+lang);
	xhr2=new XMLHttpRequest();
	xhr2.onreadystatechange=function()
	{
		if ((xhr2.readyState==4)&&(xhr2.status==200))
		{
			document.getElementById("b").innerHTML=xhr2.responseText;
        }
    };
    xhr2.open("POST","getOneFromDico.php",true);
	xhr2.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr2.send("data="+encodeURIComponent(data)+"&lang="+lang);
}
function doIt(c)
{
	document.getElementById("data").value=c;
	ok();
}