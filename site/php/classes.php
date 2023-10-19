<?php
    class cadastroj
    {
        private $cnpj;
        private $nome;
        private $cep;
        private $numero;
        private $complemento;
        private $ddd;
        private $tel;
        private $email;
        private $senha;
        private $endereco;

        //------------------------------------

        public function setCnpj($ccnpj)
        {
            $this->cnpj = $ccnpj;
        }

        //------------------------------------

        public function setNome($cnome)
        {
            $this->nome = $cnome;
        }

        //------------------------------------

        public function setCep($ccep)
        {
            $this->cep = $ccep;
        }

        //------------------------------------

        public function setNumero($cnumero)
        {
            $this->numero = $cnumero;
        }

        //------------------------------------

        public function setComplemento($ccomp)
        {
            $this->complemento = $ccomp;
        }

        //------------------------------------

        public function setDDD($cddd)
        {
            $this->ddd = $cddd;
        }

        //------------------------------------

        public function setTel($ctel)
        {
            $this->tel = $ctel;
        }

        //------------------------------------

        public function setEmail($cemail)
        {
            $this->email = $cemail;
        }

        //------------------------------------

        public function setEndereco($ce)
        {
            $this->endereco = $ce;
        }

        //------------------------------------

        public function inserir()
        {
            include_once "../BD/conexao.php";

            $data = date("Y-m-d H:i:s");
            try {
                $comando=$conexao->prepare("insert into pessoaj(cnpj,nome,cep,numero,complemento,ddd,tel,email,datacriacao,endereco) values(?,?,?,?,?,?,?,?,?,?)");
                $comando->bindParam(1,$this->cnpj);
                $comando->bindParam(2,$this->nome);
                $comando->bindParam(3,$this->cep);
                $comando->bindParam(4,$this->numero);
                $comando->bindParam(5,$this->complemento);
                $comando->bindParam(6,$this->ddd);
                $comando->bindParam(7,$this->tel);
                $comando->bindParam(8,$this->email);
                $comando->bindParam(9,$data);
                $comando->bindParam(10,$this->endereco);

                if($comando->execute())
                {
                    header("Location:../cadastro-login-instituição/cadastro-sucesso.html");
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }
?>