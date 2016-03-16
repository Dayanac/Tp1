<?php
   class UsuariosController extends AppController{
		public $helpers = array('Form');
		public $components = array ('Flash');     
		
		public function index(){
			
		}
   
		public function index_login(){
			
			
		}
	
		public function historico(){
			
			
		}
		
		public function editar($id = null){
		  if (empty($this->request->data)){
			$usuarios = $this->Usuario->findById($id);
			
			$this->set('usuarios', $usuarios);
			$this->request->data = $this->Usuario->findById($id);
		  }
		  else{
			if ($this->Usuario->save($this->request->data)){
				$this->Flash->set('Usuario atualizado com sucesso!!');
				$this->redirect(array('action' => 'index'));
			}
		}
	 }
			
		
		public function cadastrar(){
			if (empty($this->request->data)){
				$usuarios = $this->Usuario->find('list',array('fields' => array('id','nome')));
				$this->set('usuarios', $usuarios);
			}
		else{
			if ($this->Usuario->save($this->request->data)){
				$this->Flash->set('Usuario cadastrado com sucesso!!');
				$this->redirect(array('action' => 'index_login'));
			}
		}			
		}
		public function validar(){
			$usuario = $this->Usuario->findAllByLoginAndSenha($this->data['Usuario']['login'], 
			$this->data['Usuario']['senha'] );
			
			if(!empty($usuario)){
				return $usuario;
			} else {
				return false;
			}
			
		}
		public function login(){
			if(!empty($this->data['Usuario']['login'])){
				//Validar o login
				$usuario = $this->validar();
				
				if($usuario != false) {
					$this->Flash->set('Acesso realizado com sucesso!!');
					$this->Session->write('Usuario',$usuario);
					$this->redirect(array('action' => 'index'));
					exit();
				} else{
					$this->Flash->set('Usuario e/ou senha invalidos!!');
					$this->redirect(array('action' => 'index_login'));
					exit();
				}
			}
			else {
				$this->redirect(array('action' => 'index_login'));
				exit();
			}
		}
		
		public function logout(){
			$this->Session->destroy();
			$this->Flash->set('Atividades encerradas com sucesso!!');
			$this->redirect('/');
			exit();
		}
		
		
    }

?>