<?php 
        require "conexao.php";

    Class Action_SQL{

        
        public function selecionar(){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT * FROM usuarioss");
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
                ("SELECT * FROM usuarioss WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){
                    echo "<script> alert('Erro ao selecionar as informações');
                    window.location.href='home.php'; </script>";
                    exit;
                }
            
                return $stmt;

            }else{
                echo "<script> alert('id inexistente ou invalido');
                window.location.href='home.php'; </script>";
                exit;
            }
        }


        public function inserir($nome, $idade, $email, $altura, $peso, $signo){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("INSERT INTO usuarioss (nome,idade,email,altura,peso,signo) 
            VAlUES(:nome, :idade, :email, :altura, :peso, :signo)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":idade", $idade);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":altura", $altura);
            $stmt->bindParam(":peso", $peso);
            $stmt->bindParam(":signo", $signo);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){
                echo "<script> alert('Erro ao inserir as informações');window.location.href='home.php'; </script>";
                exit;
            }
        }

            
        public function editar($id, $nome, $idade, $email, $altura, $peso, $signo){

            if(isset($id)&& $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("UPDATE usuarioss SET 
                nome= :nome, 
                idade= :idade, 
                email= :email,  
                altura = :altura,
                peso= :peso,
                signo= :signo

                WHERE id = :id");

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":idade", $idade);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":altura", $altura);
                $stmt->bindParam(":peso", $peso);
                $stmt->bindParam(":signo", $signo);
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

                

            }
        
        }
    }

?>