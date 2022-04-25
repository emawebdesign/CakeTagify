<?php

App::uses('Component', 'Controller');

class CakeTagifyComponent extends Component {

    /**
     * public $components = array('CakeTagify.CakeTagify');
     * use $this->request->data["Page"]["tags"] = $this->CakeTagify->get($this->request->data["Page"]["tags"]);
     */
		
	
	public function get($data = NULL, $separator=",") {
		
      $data = json_decode($data);

      $str = "";

	  if (count($data)>0) {

        foreach($data as $item):

            $str .= $item->value .$separator;

        endforeach;

        $str = substr($str, 0, -1);

        return($str);

      }
	  else return(false);
	  
	}
	
	
}