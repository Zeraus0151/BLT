var c = document.getElementById("canvas");
var img = document.getElementById("scream");
var audio = document.getElementById("a");
var width = document.getElementById("canvas").width;
var height = document.getElementById("canvas").height;
var score=0;
var muertes=0;
var ctxa = c.getContext("2d");
var tema = new Audio();
var sonidocomer = new Audio();

		//orientado a objeto
		/*	
		ctxa.beginPath();
		ctxa.rect(35, 35, 30, 30);
		ctxa.fillStyle = "blue";
		ctxa.fill();
		ctxa.closePath();
		

		ctxa.beginPath();
		ctxa.arc(50,50, 15, 0, 2 * Math.PI);
		ctxa.fillStyle = "black";
		ctxa.fill();
		ctxa.closePath();
		*/
		var key=0;
window.addEventListener('keydown',function(e){
	key = e.which;
	//console.log(key);
	//w=87d=68s=83a=65
	//alert(key);
});
window.addEventListener('keyup',function(e){
	key = 0;
	//w=87d=68s=83a=65
	//alert(key);
});
var comida = new Personaje(Math.random()*(width-50),Math.random()*(height-50), 20, 0, 2 * Math.PI,"red");

var fundo = new Fundo(1280,720);

var enemigo = new Enemy(Math.random()*(width-50),100,50,50, "green");

var enemigo2 = new Enemy(200,Math.random()*(height-50),50,50, "blue");

var enemigo3 = new Enemy(200,Math.random()*(height-50),50,50, "purple");

var smile = new Smile(220,200, 20, 0, 2 * Math.PI,"yellow");

function dibbujo(){
	fundo.dd(ctxa);
	comida.dibujo(ctxa);
	enemigo.desenha(ctxa);
	enemigo.moveLeft(width,height,2);
	enemigo2.desenha(ctxa);
	enemigo2.moveUp(width,height,2);
	enemigo3.desenha(ctxa);
	enemigo3.moveAngle(width,height,2);
	smile.dibujo(ctxa);
	smile.movimiento(key);
	/*
	smile.x++;smile.y++;
	smile2.x++;smile2.y++;
	smile3.x++;smile3.y++;
	smile4.x++;smile4.y++;
	smile5.x++;smile5.y++;*/
	requestAnimationFrame(dibbujo);
	printScore();
	printMuertes();
	colidecc(smile,comida);
	colidesmen(smile,comida,enemigo);
	colidesmen(smile,comida,enemigo2);
	colidesmen(smile,comida,enemigo3);
}
function colidecc(smile,comida)
{
	var x1=smile.x;
	var y1=smile.y;
	var r1=smile.rad;
	var y2=comida.y;
	var x2=comida.x;
	var r2=comida.rad;
	if((x1-x2)**2+(y1-y2)**2<=(r1+r2)**2)
	{
			//dibbujo();
			sonidocomer.play();
			var randomx=Math.random()*(1260);
			var randomy=Math.random()*(700);
			console.log(randomy);
			console.log(randomx);
			comida.y=randomy;
			comida.x=randomx;
			score=score+1;
			return true;
	}else{
		return false;
	}
}
function colidesmen(smile,comida,enemigo)
{
	var x1=smile.x;
	var y1=smile.y;
	var r1=smile.rad;
	
	var y2=comida.y;
	var x2=comida.x;
	
	var y=enemigo.y+enemigo.altura/2;
	var x=enemigo.x+enemigo.lado/2;
	var r=((enemigo.lado>enemigo.altura)?enemigo.lado:enemigo.altura)/2;
	//if((x1-x)**2+(y1-y)**2<=(r1/2+(alto-30)/2+(lado-30)/2)**2)
	
	if((x1-x)**2+(y1-y)**2<=(r1+r)**2)	
	{
		//console.log(alto);
		muertes=muertes+1;
		var randomx=Math.random()*(1260);
		var randomy=Math.random()*(700);
		comida.y=randomy;
		comida.x=randomx;
		var randomx=Math.random()*(1260);
		var randomy=Math.random()*(700);
		smile.y=randomy;
		smile.x=randomx;
		return true;
	}else{
		return false;
	}
}
function printScore(){
	//var msg="Puntos: "+score;
	let msg="Puntos: "+score;
	ctxa.fillStyle="white";
	ctxa.font="28px sans-serif";
	let texto=width/2 - ctxa.measureText(msg).width/2;
	ctxa.fillText(msg, texto,height);
}
function printMuertes(){
	//var msg="Puntos: "+score;
	let msg="Muertes: "+muertes;
	ctxa.fillStyle="white";
	ctxa.font="28px sans-serif";
	let texto=width - ctxa.measureText(msg).width;
	ctxa.fillText(msg, texto,height);
}
dibbujo();

function playaudio(){
	tema.src = 'sounds/theme.mp3';
	tema.oncanplaythrough=function(){
		tema.volume = .2;
		tema.loop = true;
	};
	sonidocomer.src = 'sounds/jump.mp3';
	sonidocomer.oncanplaythrough=function(){
		sonidocomer.volume = 1;
	};
	tema.load();
	sonidocomer.load();
}
playaudio();
/*
function isLoad(){
	let msg="Clique para comenzar!!";
	ctxa.font="32px sans-serif";
	let xtext = c.width()/2 - ctxa.measureText(msg).width;
	ctxa.fillText(msg,xtext,height/2);
	c.unbind('click');
}

isLoad(); */

