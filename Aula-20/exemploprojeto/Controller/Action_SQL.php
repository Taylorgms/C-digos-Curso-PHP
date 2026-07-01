<?php 
        require "../conexao/Conexao.php";

    Class Action_SQL{

        
        public function selecionar(){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT * FROM usuarios");
            $stmt->execute();

                $resultado = $stmt;

                    if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar as informações');
                window.location.href='../../logar.php'; </script>";
                exit;
                }
            return $stmt;
        }


        public function selecionar_id($id){

            if(isset($id) && $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("SELECT * FROM usuarios WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){
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


        public function inserir($nome, $senha, $email, $cpf){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("INSERT INTO usuarios (nome,senha,email,cpf) 
            VAlUES(:nome, :senha, :email, :cpf)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":senha", $senha);
            $stmt->bindParam("email", $email);
            $stmt->bindParam("cpf", $cpf);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao inserir as informações');window.location.href='../view/cadastrar_usuario.php'; </script>";
                exit;
            }else{
                echo "<script> alert('Sucesso inserir as informações as informações');window.location.href='../View/home.php'; </script>";
                exit;
            }
        }

            
        public function editar($id, $nome, $senha, $email, $cpf){

            if(isset($id)&& $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("UPDATE usuarios SET 
                nome= :nome, 
                senha= :senha, 
                email= :email, 
                email= :email, 
                cpf = :cpf
                WHERE id = :id");

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":senha", $senha);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":cpf", $cpf);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){
                    echo "<script> alert('Erro ao editar as informações');window.location.href='../../editar_usuario'; </script>";
                    exit;
                }else{
                    echo "<script> alert('Sucesso ao editar as informações');window.location.href='../View/home.php'; </script>";
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
                ->prepare("DELETE FROM usuarios WHERE id = :id");
                $stmt->BindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){
                    echo "<script> alert('Erro ao deletar as informações');window.location.href='../View/home.php'; </script>";
                    exit;
                }else{
                echo "<script> alert('Sucesso ao deletar as informações');window.location.href='../View/home.php'; </script>";
                exit;
                }

            }
        
        }
    }

?>