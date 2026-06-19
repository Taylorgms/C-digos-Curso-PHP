<?php 
        require "../Conexao/Conexao.php";

    Class Action_SQL{

        
        public function selecionar(){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT * FROM livros");
            $stmt->execute();

                $resultado = $stmt;

                    if(empty($resultado != TRUE)){
                echo "<script> alert('Erro ao selecionar as informações');
                window.location.href='../../logar.php'; </script>";
                exit;
                }
            return $stmt;
        }


        public function selecionar_id($id){

            if(isset($id)&& $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()
                ->prepare("SELECT FROM livros WHERE id = :id");
                $stmt->BindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(empty($resultado != TRUE)){
                    echo "<script> alert('Erro ao selecionar as informações');
                    window.location.href='../View/home.php'; </script>";
                    exit;
                }
            
                return $stmt;

            }else{
                echo "<script> alert('id inexistente ou invalido');
                window.location.href='../View/home.php'; </script>";
                exit;
            }
        }


        public function inserir($nome, $descricao, $genero, $quant_folhas ,$classificacao){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("INSERT INTO livros (nome,descricao,genero,quant_folhas,classificacao) 
            VAlUES(:nome, :descricao, :genero, :quant_folhas, :classificacao)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam("genero", $genero);
            $stmt->bindParam("quant_folhas", $quant_folhas);
            $stmt->bindParam(":classificacao", $classificacao);
            $stmt->execute();

            $resultado = $stmt;

            if(empty($resultado != TRUE)){
                echo "<script> alert('Erro ao inserir as informações');window.location.href='../../cadastrar_livro.php'; </script>";
                exit;
            }else{
                echo "<script> alert('Erro ao inserir as informações as informações');window.location.href='../View/home.php'; </script>";
                exit;
            }
        }

            
        public function editar($id, $nome, $descricao, $genero, $quant_folhas, $classificacao){

            if(isset($id)&& $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("UPDATE livros SET nome=:nome, descricao=:descricao, genero=:genero, genero=:genero, quant_folhas = :quant_folhas, classificao=:classificacao");

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":descricao", $descricao);
                $stmt->bindParam("genero", $genero);
                $stmt->bindParam("quant_folhas", $quant_folhas);
                $stmt->bindParam(":classificacao", $classificacao);
                $stmt->execute();

                $resultado = $stmt;

                if(empty($resultado != TRUE)){
                    echo "<script> alert('Erro ao inserir as informações');window.location.href='../../editar_livro'; </script>";
                    exit;
                }else{
                    echo "<script> alert('Erro ao inserir as informações as informações');window.location.href='../View/home.php'; </script>";
                    exit;
                }
        
            }else{
                echo "<script> alert('Erro ao selecionar as informações');window.location.href='../View/home.php'; </script>";
                exit;
            }
        }


        public function deletar($id){
            if(isset($id)&& $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()
                ->prepare("DELETE FROM livros WHERE id = :id");
                $stmt->BindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if(empty($resultado != TRUE)){
                    echo "<script> alert('Erro ao selecionar as informações');window.location.href='../View/home.php'; </script>";
                    exit;
                }
                

            }else{
                echo "<script> alert('Erro ao selecionar as informações');window.location.href='../View/home.php'; </script>";
                exit;
            }
            
        }
        
    }

?>