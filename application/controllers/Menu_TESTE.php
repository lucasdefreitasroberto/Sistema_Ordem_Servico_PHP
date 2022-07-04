<?php
defined('BASEPATH') or exit('Ação Permitida');

class Menu extends CI_Controller
{
	public function index()
	{
		$this->load->view('viewChamou');
	}
}

?>

<!-- 

+++++++++++++++++++++++++++++++++ Manipulando os Controllers+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
Nome do Controle e onde vai ser chamado no caminho ; exemplo se o controle tem nome de {cadastro}
e dentro dele esta apontando para view indexCadastro;
logo a pagina ira ser carregada com as funcionalidades do indexdastro; 

porem para ser chamado a função terá que ter o nome como 'index' qualquer outro nome não será carregado a pagina em html ! 

+++++++++++++++++++++++++++++++++ Manipulando os Routers++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Para Definir o caminho padrão do seu arquivo será necessario modificar o arquivo Routes em > Config > Routes;
$route['default_controller'] = 'Nome do Controlador Padrão';

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

-->
