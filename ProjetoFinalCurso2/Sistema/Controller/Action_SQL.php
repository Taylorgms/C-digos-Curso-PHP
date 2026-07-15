<?php
    require_once "../Conexao/Conexao.php";

    Class Action_SQL{

       
        //FILMES
      

        public function selecionarFilmes(){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT * FROM filmes ORDER BY id DESC");
            $stmt->execute();

            return $stmt;
        }

        public function selecionarFilmeId($id){

            if(isset($id) && $id != NULL && trim($id) != ""){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("SELECT * FROM filmes WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                return $stmt;

            }else{
                echo "<script> alert('Filme inexistente ou invalido');
                window.location.href='../View/home.php'; </script>";
                exit;
            }
        }

        public function inserirFilme($titulo, $ano, $genero, $classificacao_indicativa, $diretor, $sinopse, $pessoa_alugante, $status){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("INSERT INTO filmes (titulo, ano, genero, classificacao_indicativa, diretor, sinopse, pessoa_alugante, status)
            VALUES (:titulo, :ano, :genero, :classificacao_indicativa, :diretor, :sinopse, :pessoa_alugante, :status)");

            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":ano", $ano);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":classificacao_indicativa", $classificacao_indicativa);
            $stmt->bindParam(":diretor", $diretor);
            $stmt->bindParam(":sinopse", $sinopse);
            $stmt->bindParam(":pessoa_alugante", $pessoa_alugante);
            $stmt->bindParam(":status", $status);
            $resultado = $stmt->execute();

            if($resultado != TRUE){
                echo "<script> alert('Erro ao cadastrar o filme'); window.location.href='../View/cadastrar_filme.php'; </script>";
                exit;
            }else{
                echo "<script> alert('Filme cadastrado com sucesso'); window.location.href='../View/home.php'; </script>";
                exit;
            }
        }

        public function editarFilme($id, $titulo, $ano, $genero, $classificacao_indicativa, $diretor, $sinopse, $pessoa_alugante, $status){

            if(isset($id) && $id != NULL && trim($id) != ""){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("UPDATE filmes SET titulo = :titulo, ano = :ano, genero = :genero, classificacao_indicativa = :classificacao_indicativa,
                diretor = :diretor, sinopse = :sinopse, pessoa_alugante = :pessoa_alugante, status = :status
                WHERE id = :id");

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":titulo", $titulo);
                $stmt->bindParam(":ano", $ano);
                $stmt->bindParam(":genero", $genero);
                $stmt->bindParam(":classificacao_indicativa", $classificacao_indicativa);
                $stmt->bindParam(":diretor", $diretor);
                $stmt->bindParam(":sinopse", $sinopse);
                $stmt->bindParam(":pessoa_alugante", $pessoa_alugante);
                $stmt->bindParam(":status", $status);

                $resultado = $stmt->execute();

                if($resultado != TRUE){
                    echo "<script> alert('Erro ao editar o filme'); window.location.href='../View/home.php'; </script>";
                    exit;
                }else{
                    echo "<script> alert('Filme editado com sucesso'); window.location.href='../View/home.php'; </script>";
                    exit;
                }

            }else{
                echo "<script> alert('Erro: filme invalido'); window.location.href='../View/home.php'; </script>";
                exit;
            }
        }

        public function deletarFilme($id){
            if(isset($id) && $id != NULL && trim($id) != ""){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()
                ->prepare("DELETE FROM filmes WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $resultado = $stmt->execute();

                if($resultado != TRUE){
                    echo "<script> alert('Erro ao deletar o filme'); window.location.href='../View/home.php'; </script>";
                    exit;
                }else{
                    echo "<script> alert('Filme deletado com sucesso'); window.location.href='../View/home.php'; </script>";
                    exit;
                }

            }else{
                echo "<script> alert('Erro: filme invalido'); window.location.href='../View/home.php'; </script>";
                exit;
            }
        }

     
        //Usuarios


        public function selecionarUsuarioPorEmail($email){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            return $stmt;
        }

        public function inserirUsuario($nome, $senha, $email, $telefone){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("INSERT INTO usuarios (nome, senha, email, telefone) VALUES (:nome, :senha, :email, :telefone)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":senha", $senha);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telefone", $telefone);

            $resultado = $stmt->execute();

            if($resultado != TRUE){
                echo "<script> alert('Erro ao cadastrar o usuario'); window.location.href='../View/cadastrar_usuario.php'; </script>";
                exit;
            }
        }
    }

?>