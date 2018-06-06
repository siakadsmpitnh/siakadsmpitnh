<?php
class Login_model extends CI_Model
{
    public $tabel='user';

    function __construct()
    {
        parent::__construct();
    }
    
    public function load_form_rules()
    {
        $form_rules = array(
                            array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required'
                            ),
                            array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required'
                            ),
        );
        return $form_rules;
    }

    public function validasi()
    {
        $form = $this->load_form_rules();
        $this->form_validation->set_rules($form);

        if ($this->form_validation->run()){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    // cek status user, login atau tidak?
    public function cek_user()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $query = $this->db->query("SELECT * FROM ref_user 
            where username='$username' AND password='$password' ");
        if ($query->num_rows() == 1){
            $data = array(  
                'username' => $username,
                'nama_Guru'=> $query->row()->nama_Guru,
                'level'=> $query->row()->level,
                'Id_Guru'=> $query->row()->Id_Guru, 
                'login' => TRUE
            );
            $this->session->set_userdata($data);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('username' => '', 'login' => FALSE));
        $this->session->sess_destroy();
    }
}
?>	