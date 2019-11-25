class Smile{
	constructor(parx,pary,parr,pars,pare,cor,movimiento)
	{
		//console.log("this");
		this.x=parx;
		this.y=pary;
		this.rad=parr;
		this.inicio=pars;
		this.fin=pare;
		this.color=cor;
		this.key=movimiento;
	}
	dibujo(contexto)
	{
		contexto.beginPath();
		contexto.arc(this.x,this.y,this.rad,this.inicio,this.fin);
		contexto.fillStyle = this.color;
		contexto.fill();
		contexto.closePath();
		/*
		contexto.beginPath();
		contexto.arc(190,170, 15, 0, 2 * Math.PI);
		contexto.fillStyle = "white";
		contexto.fill();
		contexto.closePath();
		
		contexto.beginPath();
		contexto.arc(190,170, 15, 0, 2 * Math.PI);
		contexto.fillStyle = "white";
		contexto.fill();
		contexto.closePath();
		
		contexto.beginPath();
		contexto.arc(250,170, 15, 0, 2 * Math.PI);
		contexto.fillStyle = "white";
		contexto.fill();
		contexto.closePath();
		
		contexto.beginPath();
		contexto.arc(243,174, 7, 0, 2 * Math.PI);
		contexto.fillStyle = "black";
		contexto.fill();
		contexto.closePath();
		
		contexto.beginPath();
		contexto.arc(183,174, 7, 0, 2 * Math.PI);
		contexto.fillStyle = "black";
		contexto.fill();
		contexto.closePath();*/
	}
	movimiento(key){
		//console.log(key);
			if(key==87 && smile.y>20)
			{
				smile.y=smile.y-5;
			}
			if(key==83 && smile.y<700)
			{
				smile.y=smile.y+5;
			}
			if(key==65 && smile.x>20)
			{
				smile.x=smile.x-5;
			}
			if(key==68 && smile.x<1260)
			{
				smile.x=smile.x+5;
			}
	}
}
