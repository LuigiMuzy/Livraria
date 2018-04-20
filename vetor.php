<?php
function limitarTexto($texto, $limite){
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
}



// rand para as imagens no index... CULINARIA
// criando a linha do  SELECT para imagem Culinaria
include_once('connection/conexao.php');

$rand_culinaria = rand(1,6);

	$sqlcul =  "SELECT nome_livro,imagem,descricao,descricao_en,descricao_es FROM cadastro_livro WHERE cod_livro = $rand_culinaria";
	$dadoscul = mysqli_query($conexao, $sqlcul);
    $culinaria = mysqli_fetch_array($dadoscul);




// rand para as imagens no index... DIDATICO
// criando a linha do  SELECT para imagem didatico
$rand_didatico = rand(7,12);



	$sqldid =  "SELECT nome_livro,imagem,descricao,descricao_en,descricao_es FROM cadastro_livro WHERE cod_livro = '$rand_didatico'";
	
	$dadosdid =mysqli_query($conexao, $sqldid);

    $didatico = mysqli_fetch_array($dadosdid);

// rand para as imagens no index... INFANTIL
// criando a linha do  SELECT para imagem infantil
$rand_infantil = rand(13,17);



	$sqlinf =  "SELECT nome_livro,imagem,descricao,descricao_en,descricao_es FROM cadastro_livro WHERE cod_livro = '$rand_infantil'";
	
	$dadosinf =mysqli_query($conexao, $sqlinf);

    $infantil = mysqli_fetch_array($dadosinf);
        

// rand para as imagens no index... RILIGIOSO
// criando a linha do  SELECT para imagem RELIGIOSO
$rand_religioso = rand(18,23);



	$sqlrel =  "SELECT nome_livro,imagem,descricao,descricao_en,descricao_es FROM cadastro_livro WHERE cod_livro = '$rand_religioso'";
	
	$dadosrel =mysqli_query($conexao, $sqlrel);

    $religioso = mysqli_fetch_array($dadosrel);
        



// rand para as imagens no index... ROMANCE
$rand_romance = rand(24,28);

// criando a linha do  SELECT para imagem romance


	$sqlrom =  "SELECT nome_livro,imagem,descricao,descricao_en,descricao_es FROM cadastro_livro WHERE cod_livro = '$rand_romance'";
	
	$dadosrom =mysqli_query($conexao, $sqlrom);

    $romance = mysqli_fetch_array($dadosrom);



// rand para as imagens no index... TECNOLOGICO

// criando a linha do  SELECT para imagem tecnologico
$rand_tecnologico = rand(29,33);


	$sqltec =  "SELECT nome_livro,imagem,descricao,descricao_en,descricao_es FROM cadastro_livro WHERE cod_livro = '$rand_tecnologico'";
	
	$dadostec =mysqli_query($conexao, $sqltec);

    $tecnologico = mysqli_fetch_array($dadostec);



$vetIdioma = array(
		1 => array(limitarTexto($didatico['descricao'], $limite = 300)
,limitarTexto($didatico['descricao_en'], $limite = 300),limitarTexto($didatico['descricao_es'], $limite = 300)),
		2 => array("Leia mais","Read more","Lea mas"),
		3 => array("Livros Didáticos","Textbook","Libro Didáctico"),
		4 => array("Livros Infantis","Children's book","Libro Infantíl"),
		5 => array("Livros Tecnológicos","Technology Book","Libro de Tecnología"),
		6 => array("Livros Culinários","Culinary Book","Libro Culinario"),
		7 => array("Livros Religiosos","Religious Book","Libro Religioso"),
		8 => array("Livros Românticos","Romantic Book","Libro Romántico"),
		9 => array("Contatos","Contacts","Contactos"),

		10=> array(limitarTexto($romance['descricao'], $limite = 300),limitarTexto($romance['descricao_en'], $limite = 300),limitarTexto($romance['descricao_es'], $limite = 300)),

		11=> array(limitarTexto($infantil['descricao'], $limite = 300),limitarTexto($infantil['descricao_en'], $limite = 300),limitarTexto($infantil['descricao_es'], $limite = 300)),

		12=> array(limitarTexto($tecnologico['descricao'], $limite = 300),limitarTexto($tecnologico['descricao_en'], $limite = 300),limitarTexto($tecnologico['descricao_es'], $limite = 300)),

		13=>array(limitarTexto($religioso['descricao'],$limite=300),limitarTexto($religioso['descricao_en'],$limite=300),limitarTexto($religioso['descricao_es'],$limite=300)),
		
		14=>array(limitarTexto($culinaria['descricao'],$limite=300),limitarTexto($culinaria['descricao_en'],$limite=300),limitarTexto($culinaria['descricao_es'],$limite=300)),

		15=>array("<h2>Desenvolvedores</h2>","<h2>Developers</h2>","<h2>Desenvolvedores</h2>"),


		16=>array("<h2>&nbsp;Cleonice Lima</h2>","<h2>&nbsp;Cleonice Lima</h2>","<h2>&nbsp;Cleonice Lima</h2>"),
		17=>array("<h2>&nbsp;João Teobaldo</h2>","<h2>&nbsp;João Teobaldo</h2>","<h2>&nbsp;João Teobaldo</h2>"),
		18=>array("<h2>&nbsp;Luigi Fracalanza</h2>","<h2>&nbsp;Luigi Fracalanza</h2>","<h2>&nbsp;Luigi Fracalanza</h2>"),


		
		19=>array("<p class='text-center'>Estudante do 4º semestre do curso de Tecnologia em Sistemas para Internet na Faculdade FATEC de São Roque.</p>
	<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contato: +55(11)99999-9999</p>",
	"<p class='text-center'>Student of the 4th semester of the Technology in Internet Systems course at FATEC Faculty of São Roque.</p>
	<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contact: +55(11)99999-9999</p>",
	"<p class='text-center'>Estudiante del 4º semestre del curso de Tecnología en Sistemas para Internet en la Facultad FATEC de São Roque.</p>
	<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contacto: +55 (11) 99999-9999</p>"),
		20=>array("<p class='text-center'>Estudante do 4º semestre do curso de Tecnologia em Sistemas para Internet na Faculdade FATEC de São Roque.</p>
		<p>&nbsp;&nbsp;E-mail: teobaldojoao8@gmail.com</p><p>&nbsp;&nbsp;Contato: +55(11)99999-9999</p>",
		"<p class='text-center'>Student of the 4th semester of the Technology in Internet Systems course at FATEC Faculty of São Roque.</p>
		<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contact: +55(11)99999-9999</p>",
		"<p class='text-center'>Estudiante del 4º semestre del curso de Tecnología en Sistemas para Internet en la Facultad FATEC de São Roque.</p>
		<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contacto: +55 (11) 99999-9999</p>"),
		21=>array("<p class='text-center'>Estudante do 4º semestre do curso de Tecnologia em Sistemas para Internet na Faculdade FATEC de São Roque.</p>
		<p>&nbsp;&nbsp;E-mail: luigifracalanza@gmail.com</p><p>&nbsp;&nbsp;Contato: +55(11)99999-9999</p> ",
		"<p class='text-center'>Student of the 4th semester of the Technology in Internet Systems course at FATEC Faculty of São Roque.</p>
		<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contact: +55(11)99999-9999</p>",
		"<p class='text-center'>Estudiante del 4º semestre del curso de Tecnología en Sistemas para Internet en la Facultad FATEC de São Roque.</p>
		<p>&nbsp;&nbsp;E-mail: cleosolima@gmail.com</p><p>&nbsp;&nbsp;Contacto: +55 (11) 99999-9999</p>"),

		
		);
 

 

$vetorgambiarra = array(1 => array("Didático","Textbook","Libro Didáctico"),
		2 => array("Infantil","Children's book","Libro Infantíl"),
		3 => array("Tecnológico","Technology Book","Libro Tecnólogico"),
		4 => array("Culinário","Culinary Book","Libro Culinario"),
		5 => array("Religioso","Religious Book","Libro Religioso"),
		6 => array("Romântico","Romantic Book","Libro Romántico"),

		);






//	$vetIdioma = array(
//		1 => array("A Coleção Tempo assegura a função do livro didático como estímulo ao aprendizado dos alunos e também como um recurso prático e eficiente ao professor. Como ser atrativo sem deixar de lado o rigor conceitual de cada disciplina? Como oferecer os conteúdos na medida certa e de acordo com o tempo do aluno e do professor.","The Tempo Collection ensures the role of the textbook as a stimulus to student learning and also as a practical and efficient resource to the teacher.","La Colección Tiempo asegura la función del libro didáctico como estímulo al aprendizaje de los alumnos y también como un recurso práctico y eficiente al profesor."),
//		2 => array("Leia mais","Read more","Lea mas"),
//		3 => array("Livros Didático","Textbook","Libro Didáctico"),
//		4 => array("Livros Infantil","Children's book","Libro Infantíl"),
//		5 => array("Livros Tecnológicos","Technology Book","Libro de Tecnología"),
//		6 => array("Livros Culinário","Culinary Book","Libro Culinario"),
//		7 => array("Livros Religioso","Religious Book","Libro Religioso"),
//		8 => array("Livros Romanticos","Romantic Book","Libro Romántico"),
//		9 => array("Contatos","Contacts","Contactos"),
//
//		10=> array("Charlie tem uma irmãzinha, a Lola. Às vezes, ele precisa cuidar do jantar dela. Isso não é nada mole, porque ela é muito enjoada para comer. Até que um dia ele arruma um jeito criativo de resolver o problema.","Charlie has a little sister, Lola. Sometimes he needs to take care of her dinner. This is not too soft, because she is too sick to eat. Until one day he finds a creative way to solve the problem .","Charlie tiene una hermanita, Lola. A veces, tiene que cuidar su cena. Esto no es nada blando, porque es muy mareado para comer. Hasta que un día él arregla una manera creativa de resolver el problema."),
//
//		11=> array("Alan Christoffersen é um jovem publicitário bem-sucedido, comanda sua própria empresa, ao lado do sócio, e é loucamente apaixonado por sua esposa, McKale. Sua vida parece perfeita até que ocorre um terrível acidente enquanto ela montava à cavalo. ","Alan Christoffersen is a successful young advertising man, runs his own company alongside the partner, and is madly in love with his wife, McKale. Her life seems perfect until a terrible accident occurs while she rides her horse.","Alan Christoffersen es un joven publicitario exitoso, comanda su propia empresa, al lado del socio, y es locamente apasionado por su esposa, McKale. Su vida parece perfecta hasta que se produce un terrible accidente mientras monta a caballo."),
//
//		12=> array("Nesta obra o autor focaliza a importante relação entre inovações na infra-estrutura econômica da sociedade,geradas sobretudo pela descoberta e adoção de novas tecnologias,e as respostas que demandam em termos de organização da estratégia e discurso externos.","In this work, the author focuses on the important relationship between innovations in the economic infrastructure of society, generated mainly by the discovery and adoption of new technologies, and the answers they require in terms of the organization of external strategy and discourse.","En esta obra el autor enfoca la importante relación entre innovaciones en la infraestructura económica de la sociedad, generadas sobre todo por el descubrimiento y adopción de nuevas tecnologías, y las respuestas que demandan en términos de organización de la estrategia y discurso externos."),
//
//		13=>array("25 Livros que Todo Cristão Deveria Ler é um guia confiável para os clássicos da espiritualidade e uma leitura essencial para todos os cristãos, exatamente porque seus autores conheceram a Deus íntima e profundamente, e seus escritos pretendem nos levar à mesma experiência que eles tiveram.","25 Books That Every Christian Should Read is a trustworthy guide to the classics of spirituality and an essential reading for all Christians, precisely because their authors knew God intimately and deeply, and their writings are intended to bring us to the same experience they had.","25 Libros que todo cristiano debería leer es una guía confiable para los clásicos de la espiritualidad y una lectura esencial para todos los cristianos, precisamente porque sus autores han conocido a Dios íntima y profundamente, y sus escritos pretenden llevarnos a la misma experiencia que ellos tuvieron."),
//		
//		14=>array("Livros de culinária divertidos, cheios de receitas saborosas e fáceis de fazer para os mais pequenos da casa. Com ilustrações atrativas que expõem com muita clareza o que é preciso para cada uma das receitas e como se fazem. Sem esquecer um pouco de história sobre um dos ingredientes ou da própria receita.","Fun cooking books filled with tasty, easy-to-make recipes for the little ones in the house. With attractive illustrations that expose very clearly what is needed for each of the recipes and how they are made. Without forgetting a bit of history about one of the ingredients or the recipe itself.","Libros de cocina divertidos, llenos de recetas sabrosas y fáciles de hacer para los más pequeños de la casa. Con ilustraciones atractivas que exponen con mucha claridad lo que se necesita para cada una de las recetas y cómo se hacen. Sin olvidar un poco de historia sobre uno de los ingredientes o de la propia receta."),	
//
//
//	);

?>