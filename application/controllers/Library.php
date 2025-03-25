<?php
class Library extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->helper('url');
    
    }

    public function index(){

        $data['books'] = $this->Book_model->get_books();
        $this->load->view('Library_view' , $data);
    }
public function add() {
    $this->Book_model->add_book(array(
        'Title' => $this->input->post('Title'),
        'Author' => $this->input->post('Author'),
        'Published_year' => $this->input->post('Published_year')
    ));
    redirect('Library');
}

public function delete($id) {
    $this->Book_model->delete_book($id);
    redirect('Library');
}
    }

?>
