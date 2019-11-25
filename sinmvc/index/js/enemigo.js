class Enemy{
	constructor(parametrox,parametroy,parametrolado,parametroalto, cor)
	{
		//console.log("this");
		this.x=parametrox;
		this.y=parametroy;
		this.lado=parametrolado;
		this.altura=parametroalto;
		this.cor = cor;
	}
	desenha(contexto)
	{	
		contexto.beginPath();
		contexto.rect(this.x,this.y,this.lado,this.altura);
		contexto.fillStyle = this.cor;
		contexto.fill();
		contexto.closePath();
	}
	
	moveLeft(width,height,speed)
	{
		this.x-=speed;
		if(this.x<0)
		{
			this.x = width;
			this.y = Math.random()*(height-this.altura);
		}
	}
	
	moveUp(width,height,speed)
	{
		this.y-=speed;
		if(this.y<0)
		{
			this.x = height;
			this.y = Math.random()*(width-this.altura);
		}
	}
	
	moveAngle(width,height,speed)
	{
		this.y-=speed;
		this.x-=speed;
		if(this.y<0 || this.x<0)
		{
			this.x = Math.random()*(width-this.lado);
			this.y = Math.random()*(height-this.altura);
		}
	}
	
}