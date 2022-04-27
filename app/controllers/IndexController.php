<?php
	namespace app\controllers;

	use mf\Controller\Action;
	use mf\model\Container;

	use app\models\Produto;
	use app\models\Info;

	class IndexController extends Action {
		public function index() {
			$produto = Container::getModel('Produto');
			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;
			$this->render('index', 'layout1');
		}

		public function sobreNos() {
			$info = Container::getModel('Info');
			$informacoes = $info->getInfo();

			$this->view->dados = $informacoes;
			$this->render('sobre_nos', 'layout1');
		}
	}
?>