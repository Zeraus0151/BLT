class Personaje{
	constructor(parx,pary,parr,pars,pare,cor)
	{
		//console.log("this");
		this.x=parx;
		this.y=pary;
		this.rad=parr;
		this.inicio=pars;
		this.fin=pare;
		this.color=cor;
	}
	dibujo(contexto)
	{	contexto.beginPath();
		contexto.arc(this.x,this.y,this.rad,this.inicio,this.fin);
		contexto.fillStyle = this.color;
		contexto.fill();
		contexto.closePath();
	}
}