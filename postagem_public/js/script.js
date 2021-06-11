
$(document).ready( ()=>{ // carregar depois que tudo tiver carregado



	//loading()

	
// fazer a requisição para api e recuperando os dados
function carregarPostagem (){
	let url = 'https://jsonplaceholder.typicode.com/posts'
	let xmlHttp = new XMLHttpRequest()
	xmlHttp.open('GET',url)
	xmlHttp.onreadystatechange = () =>{
		if(xmlHttp.readyState == 4  && xmlHttp.status == 200){

			let dadosJsonText = xmlHttp.responseText
			let dadosJson = JSON.parse(dadosJsonText)

			$postagem = new Postagem()
			console.log(dadosJson[1])
			for(let x in dadosJson){

			}//fim
			
			
		
		
		}//fim
	}//fim

	
	xmlHttp.send()
} //fim








} // fim $(document).ready
)
// captura o valor do element para adicionar no titulo de cada postagem
let idpost;
function pegarID(idPost='0'){
	let id = $("#post"+idPost).html();
	id = id.replace('Postagem Nº','');

	idpost = id;
}

// deletar post
function remover(){
				
        location.href = 'listagem.php?acao=remover&id='+idpost;

   }

   // pega os dados e enviar para o modal  antes de salvar
function pegar(id,titulo){
	$(document).ready( ()=>{

	let texto = $("#id"+id).html()
	
 	$("#idPostagem").html(id)
 	$("#idTitulo").html(titulo)
 	$("#idTexto").html(texto)

})
}

    function recuperarValor(){
    	
  /*
    utilizando esse metodo devido assss (\) que contem no body
  */
  

  let id =$("#idPostagem").html();
  let titulo = $("#idTitulo").html();
  let texto =$("#idTexto").html();
  /// enviar os dados via post para pagina controller
  $.ajax({
    type: 'POST',
    url: 'postagem_Controller.php',
    data: {id: id,titulo: titulo, texto: texto},
    success: dados=> {loading(dados)},
    error: erro => {console.log(erro)}
  })


	// quando der o erro que $.ajax não é uma  função e porque tem um jquery do bootstrap  confliantdo 
}
//loading gif
	function loading (dados){
		 	removerSucesso() // remove o sucesso

		if(!document.getElementById('load')){
			let imgLoading = document.createElement('img')
		imgLoading.id ='load'
		imgLoading.src = 'img/loading.gif'
	
		imgLoading.className = 'rounded mx-auto d-block'
		document.getElementById('loadingModal').appendChild(imgLoading)

			console.log(dados)
		}
		
		// lop de 10 por 500s
		var i = 0;
 var loop = setInterval(function(){ 
 	

 			if(i==4){
		//document.getElementById('load').hidden='false'
		document.getElementById('load').remove()
			let mensagem =$("#mensagem").html('Salvo com sucesso');

  	
 			}
   if(i == 10){
   	 $("#mensagem").html('....');
      clearInterval(loop);
     
   }
   i++;

 }, 400); // tempo em mileseg...



function removerSucesso(){// remover texto
 				
 				$("#mensagem").html('   ');
 			
}
 

	
		
	



  
	}


