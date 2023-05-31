<?php
    class Cadastro
    {
        private $nome;
        private $cpf;
        private $cep;
        private $tel;
        private $ddd;
        private $nasc;
        private $residencia;
        private $complemento;
        private $login;
        private $senha;

        //-------------------------------------

        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($cn)
        {
            $this->nome = $cn;
        }

        //-------------------------------------

        public function getCpf()
        {
            return $this->cpf;
        }
        public function setCpf($ccpf)
        {
            $this->cpf = $ccpf;
        }

        //-------------------------------------

        public function getCep()
        {
            return $this->cep;
        }
        public function setCep($ccep)
        {
            $this->cep = $ccep;
        }

        //-------------------------------------

        public function getTel()
        {
            return $this->tel;
        }
        public function setTel($ctel)
        {
            $this->tel = $ctel;
        }

        //-------------------------------------

        public function getDDD()
        {
            return $this->ddd;
        }
        public function setDDD($cddd)
        {
            $this->ddd = $cddd;
        }

        //-------------------------------------

        public function getNasc()
        {
            return $this->nasc;
        }
        public function setNasc($cnasc)
        {
            $this->nasc = $cnasc;
        }

        //-------------------------------------

        public function getResi()
        {
            return $this->residencia;
        }
        public function setResi($cresi)
        {
            $this->residencia = $cresi;
        }

        //-------------------------------------

        public function getComp()
        {
            return $this->complemento;
        }
        public function setComp($ccomp)
        {
            $this->complemento = $ccomp;
        }

        //-------------------------------------

        public function getLogin()
        {
            return $this->login;
        }
        public function setLogin($clogin)
        {
            $this->login = $clogin;
        }

        //-------------------------------------

        public function getSenha()
        {
            return $this->senha;
        }
        public function setSenha($csenha)
        {
            $this->senha = $csenha;
        }

        //------------------------------------

        public function inserir()
        {
            include_once "../BD/conexao.php";

            try {
                $comando=$conexao->prepare("insert into doador(cpf,nome,cep,numero,complemento,ddd,tel,email,nasc,senha) values(?,?,?,?,?,?,?,?,?,?)");
                $comando->bindParam(2,$this->nome);
                $comando->bindParam(1,$this->cpf);
                $comando->bindParam(6,$this->ddd);
                $comando->bindParam(7,$this->tel);
                $comando->bindParam(9,$this->nasc);
                $comando->bindParam(8,$this->login);
                $comando->bindParam(10,$this->senha);
                $comando->bindParam(3,$this->cep);
                $comando->bindParam(4,$this->residencia);
                $comando->bindParam(5,$this->complemento);

                if($comando->execute())
                {
                    $retorno = "Cadastrado com sucesso";
                }
            }
            catch (PDOException $erro)
            {
                $retorno = "erro: " . $erro->getMessage();
            }
            return $retorno;
        }
    }

    class Login
    {
        private $email;
        private $senhal;

        //-------------------------------------

        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($cemail)
        {
            $this->email = $cemail;
        }

        //------------------------------------

        public function getSenhal()
        {
            return $this->senhal;
        }
        public function setSenhal($csenhal)
        {
            $this->senhal = $csenhal;
        }

        //------------------------------------

        public function login()
        {
            include_once "../BD/conexao.php";


        }
    }
?>