<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\NoticiasModel;

    class Noticias extends Controller {
        public function index() {

            $model = new NoticiasModel();
            $data = [
                'title' => 'Últimas Notícias',
                'noticias' => $model->paginate(1),
                'pager' => $model->pager,
                'session' => \Config\Services::session(),
            ];

            echo view('templates/header',$data);
            echo view('pages/noticias',$data);
            echo view('templates/footer');
        }

        public function item($id = NULL){

            $data['session'] = \Config\Services::session();

            $model = new NoticiasModel();

             $data['noticias'] = $model->getNoticias($id);

              if (!empty($data['noticias]'])){
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possível 
                encontrar a notícia com a id: '. $id);
              }

            $data['title'] = $data['noticias']['titulo'];
            echo view('templates/header',$data);
            echo view('pages/noticia',$data);
            echo view('templates/footer');
        }

        public function inserir(){

            $data['session'] = \Config\Services::session();
            if(!$data['session']->get('logged_in')) {
                return redirect('login');
            }

            helper('form');

            $data['title'] = 'Inserir Notícias';

            echo view('templates/header',$data);
            echo view('pages/noticia_gravar');
            echo view('templates/footer');
        }

        public function editar($id = NULL){

            $model = new NoticiasModel();

             $data = [
                'title' => 'Editar Notícia',
                'noticias' => $model->getNoticias($id),
                'session' => \Config\Services::session(),
             ];

             if(!$data['session']->get('logged_in')) {
                return redirect('login');
            }

              if (!empty($data['noticias]'])){
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possível 
                encontrar a notícia com a id: '. $id);
              }

        
            echo view('templates/header',$data);
            echo view('pages/noticia_gravar',$data);
            echo view('templates/footer');
        }
        
        public function gravar(){

            $data['session'] = \Config\Services::session();
            if(!$data['session']->get('logged_in')) {
                return redirect('login');
            }

            helper('form');
            $model = new NoticiasModel();

            if ($this->validate([
                'titulo' => ['label' => 'Titulo', 'rules' => 'required|min_length[3]|max_length[100]'],
                'autor' => ['label' => 'Autor', 'rules' => 'required|min_length[3]|max_length[100]'],
                'descricao' => ['label' => 'Descrição', 'rules' => 'required|min_length[3]']
            ])) {

            $id = $this->request->getVar('id');
            $titulo = $this->request->getVar('titulo');
            $autor = $this->request->getVar('autor');
            $descricao = $this->request->getVar('descricao');
            $img = $this->request->getFile('img');

                if(!$img->isValid()) {
                    $model->save([
                    'id' => $id,
                    'titulo' => $titulo,
                    'autor' => $autor,
                    'descricao' => $descricao,
                ]);
                return redirect('noticias');
                } else {

                    $validaIMG = $this->validate([
                        #'label' => 'Imagem',
                        'img' => [
                            'uploaded[img]',
                            'mime_in[img,image/jpg,image/jpeg,image/gif,image/png]',
                            'max_size[img,4096],'
                        ],
                    ]);

                    if($validaIMG) {
                        $novoNome = $img->getRandomName();
                        $img->move('img/noticias', $novoNome);

                        $model->save([
                            'id' => $id,
                            'titulo' => $titulo,
                            'autor' => $autor,
                            'descricao' => $descricao,
                            'img' =>  $novoNome,
                        ]);

                        return redirect('noticias');

                    } else {

                        $data['title'] = 'Erro ao Gravar a NotÍcia';
                        echo view('templates/header',$data);
                        echo view('pages/noticia_gravar');
                        echo view('templates/footer');

                    }
                }

                #return redirect('noticias');

            } else {
                $data['title'] = 'Erro ao Gravar a NotÍcia';

                echo view('templates/header',$data);
                echo view('pages/noticia_gravar');
                echo view('templates/footer');
            }
        }

        public function excluir($id = NULL) {

            $data['session'] = \Config\Services::session();
            if(!$data['session']->get('logged_in')) {
                return redirect('login');
            }

            $model = new NoticiasModel();
            $model->delete($id);
            return redirect('noticias');
        }

    }
