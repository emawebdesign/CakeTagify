<?php

App::uses('AppHelper', 'View/Helper');

class CakeTagifyHelper extends AppHelper {

    /**
     * public $helpers = array('CakeTagify.CakeTagify');
     * use $this->CakeTagify->init('Tags', 'tags');
     */
	
	public $helpers = array('Html', 'Form');

    public function init($selector = NULL, $name = NULL) {
        
        echo "\r\n" .$this->Html->css('/CakeTagify/css/tagify.css') ."\r\n";
        echo $this->Html->script('/CakeTagify/js/tagify.min.js') ."\r\n";
        echo $this->Html->script('/CakeTagify/js/tagify.polyfills.min.js') ."\r\n";

        echo $this->Form->input($name,array(
            'label' => "Tags",
            'id' => $selector,
            'placeholder' => 'Tags...',
            'error' => array('attributes' => array('wrap' => 'div','class' => 'alert alert-warning help-block'))
        ));

        ?>
        <script>
            var input = document.querySelector('#<?php echo $selector; ?>');
            new Tagify(input);
        </script>
        <?php

    }

}
