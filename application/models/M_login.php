<?php
class M_login extends CI_Model
{
    public $tabel='guru';

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
        $level    = $this->input->post('level');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $query = $this->db->query("SELECT * FROM guru 
            where  password='$password' AND username='$username' AND level='$level'");
        if ($query->num_rows() == 1){
            $data = array(  
                'username' => $username,
                'Nama_Guru'=> $query->row()->Nama_Guru,
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