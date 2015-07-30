<?php
class TestController extends Controller {
    public $uses = array('ArrayTest');

    function index() {
        $nowrap_code = <<<NOWRAP
\$this->ArrayTest->find('all', array(
    'order' => 'sort',
));
NOWRAP;
        $this->set('nowrap_code',$nowrap_code);
        $this->set('nowrap', $this->ArrayTest->find('all', array(
            'order' => 'sort',
        )));
        $wrap_code = <<<NOWRAP
\$this->ArrayTest->find('all', array(
    'order' => array('sort'),
));
NOWRAP;
        $this->set('wrap_code',$wrap_code);
        $this->set('wrap', $this->ArrayTest->find('all', array(
            'order' => array('sort'),
        )));
    }
}
