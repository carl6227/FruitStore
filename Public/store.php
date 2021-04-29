<?php
    class myStore
    {
        private $server = "mysql:host=remotemysql.com;dbname=CkL319SEzI";
        private $user = "CkL319SEzI";
        private $password = "RCP6Hu0w1X";
        private $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        protected $connection;

        //connections
        public function openConnection()
        {
            try {
                $this->connection= new PDO(
                    $this->server,
                    $this->user,
                    $this->password,
                    $this->options
                );
               
                return $this->connection;
            } catch (PDOException $error) {
                echo "Erro connection:" . $error->getMessage();
            }
        }
        public function closeConnection()
        {
            $this->$connection= null;
        }

        public function getUsers()
        {
            $connection = $this->openConnection();
            $statement = $connection->prepare("SELECT * FROM users");
            $statement->execute();
            $users = $statement->fetchAll();
            $usersCount = $statement->rowCount();

            if ($usersCount > 0) {
                return $users;
            } else {
                return 0;
            }
        }//end of get users

        public function login(){
           if(isset($_POST['submit'])){
               echo"ok";
                $username=$_POST['username'];
                $password=$_POST['password'];
                $connection =$this->openConnection();
                $statement=$connection->prepare("SELECT * FROM users WHERE email=? AND password=?");
                $statement->execute([$username,$password]);
                $user= $statement->fetch();
                $total= $statement->rowCount();

                if($total>0){
                    echo "welcome ".$user['name'];
                }else{
                    $username;
                   // echo "welcome ".$user['username'];
                    echo "Login failed";
                }
           }
          
        }

    }
    $mystore = new myStore();

?> 