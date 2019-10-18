<?php
	class CabecalhoHTML{

		private $menu;

		public function exibe(){
			echo "<!DOCTYPE html>
				  <html>
				     <head>
						<meta charset='utf-8' />
					 </head>
					 <body>
					 <nav>
					 Listar:<br/>
			";
			foreach($this->menu as $i=>$v){
				echo "| <a href='listar_$i.php'>$v</a>";
			}		
			echo "<br/><br/>";
			echo "Form:<br/>";
			foreach($this->menu as $i=>$v){
				echo " | <a href='form_$i.php'>$v</a>";
			}
			echo "</nav>";
			echo "<hr/>";
		}
		public function add_menu($tabela){
			$this->menu = $tabela;
		}		
	}
?>