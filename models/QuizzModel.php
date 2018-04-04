<?php

class QuizzModel extends CI_Model {
    public $ValidationRules=array(
        array('field'=>'idfiche','label'=>'n° de fiche','rules'=>'integer')
    );

    function __construct() {
        parent::__construct();
    }

    function get_quizz($id) {
        return $this->db->get_where('quizz',array('id'=>$id))->row_array();
    }

    function get_all_quizz() {
        return $this->db->get('quizz')->result_array();
    }

    function add_quizz($params) {
        $this->db->insert('quizz',$params);
        return $this->db->insert_id();
    }

    function update_quizz($id,$params) {
        $this->db->where('id',$id);
        $this->db->update('quizz',$params);
    }

    function delete_quizz($id) {
        $this->db->delete('quizz',array('id'=>$id));
    }

}