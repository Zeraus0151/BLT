class Fundo{
	constructor(parametrolado,parametroalto)
	{
		//console.log("this");
		this.lado=parametrolado;
		this.altura=parametroalto;
	}
	dd(contexto)
	{
		contexto.beginPath();
		contexto.drawImage(img, 0, 0, this.lado, this.altura);
		contexto.closePath();
	}
}