<?php
/**
 * Created by JetBrains PhpStorm.
 * User: denisvillegas
 * Date: 22/09/13
 * Time: 18:44
 * To change this template use File | Settings | File Templates.
 */

class InscricoesController extends AppController {
    public $uses = array('Inscricao');

    public function inscrever() {
        $isPost = $this->request->is('post');

        //Se é um POST e recebemos dados do formulário
        if ($isPost && !empty($this->request->data)) {
            //Tenta salvar os dados da inscrição
            if ($this->Inscricao->save($this->request->data)) {
                //Registro inserido com sucesso!
            }
        }
    }

    public function view() {


    }

}