<?php
// app/Controller/NameComponent.php
class NameComponent extends Component{
	
	public function name($comp){
				
//		return $comp . "さん、いらっしゃい";
		return $comp->Auth->user('username') . "さん、いらっしゃい";		
	}
}