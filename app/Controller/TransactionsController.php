class TransactionsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('transaction', $this->Transaction->find('all'));
    }
}