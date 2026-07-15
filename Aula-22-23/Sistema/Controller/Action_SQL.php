<?php 
        require "../Conexao/conexao.php";

    Class Action_SQL{

        
        public function selecionar($PEC){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT * FROM " . $PEC);
            $stmt->execute();

                $resultado = $stmt;

                    if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar as informações');
                window.location.href='../../logar.php'; </script>";
                exit;
                }
            return $stmt;
        }

        public function selecionar_JOIN(){
            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("SELECT
            r.id,
            p.pais,
            e.estado,
            c.cidade FROM regioes r

            JOIN pais p on p.id = r.pais
            JOIN estado e on e.id = r.estado
            JOiN cidade c on c.id = r.cidade
            

            ");
            $stmt->execute();

                $resultado = $stmt;

                    if($resultado != TRUE){
                echo "<script> alert('Erro ao selecionar as informações');
                window.location.href='../../logar.php'; </script>";
                exit;
                }
            return $stmt;
        }


        public function selecionar_id($PEC , $id){

            if(isset($id) && $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("SELECT * FROM  " . $PEC . " WHERE id = :id");
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

        public function selecionar_id_JOIN($id){

            if(isset($id) && $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("SELECT * FROM regioes WHERE id = :id");
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


        public function inserir($PEC, 
                                $PEC_valor){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            (" INSERT INTO " . $PEC . " ( " . $PEC . ") VALUES (:PEC_valor)");
            
            $stmt->bindParam(":PEC_valor", $PEC_valor);
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

        public function inserir_JOIN($pais, 
                                    $estado, 
                                    $cidade){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare
            ("INSERT INTO regioes (pais,estado,cidade) 
            VAlUES(:pais, :estado, :cidade)");

            $stmt->bindParam(":pais", $pais);
            $stmt->bindParam(":estado", $estado);
            $stmt->bindParam("cidade", $cidade);
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

            
        public function editar( $id, $PEC, $PEC_valor){

            if(isset($id)&& $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                (" UPDATE " . $PEC . " SET " . $PEC . " = :PEC_valor WHERE id = :id");

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":PEC_valor", $PEC_valor);
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

        public function editar_JOIN($id, $nome, $senha, $email, $cpf){

            if(isset($id)&& $id != NULL && trim($id)){

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare
                ("UPDATE regioes SET 
                pais = :pais, 
                estado = :estado, 
                cidade = :cidade, 
                WHERE id = :id");

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":pais", $pais);
                $stmt->bindParam(":estado", $estado);
                $stmt->bindParam(":cidade", $cidade);
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


        public function deletar($PEC ,
                                $id){
            if(isset($id)&& $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()
                ->prepare(" DELETE FROM " . $PEC . " WHERE id = :id ");
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

        public function deletar_JOIN($id){
            if(isset($id)&& $id != NULL && trim($id)){
                

                $nova_conexao = new Conexao;

                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM regioes WHERE id = :id");
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