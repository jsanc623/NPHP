<?nphp \jsanc623\Database

import(
    \Core\Database\MySQL as MySQL
    \Core\Database\MySQL\Connections as MySQLConnection
)

class Database {
    private var database::string = "database"
    private var username::string = "jsanc623"
    private var password::string = "Password1"
    private var host::string = "localhost"
    private var connection::MySQLConnection

    public function __construct(database string, username string, password string, host string){
        $this->database = database
        $this->username = username
        $this->password = password
        $this->host = host
    }

    public function __destruct(){
        NCore::Nullify($this->connection)
    }

    private function connect(){
        $this->connection = MySQL::Connect($this->database, $this->username, $this->password, $this->host)
    }

    public function Update(query string){
        return $this->connection->Update(query)
    }

    public function Insert(query string){
        return $this->connection->Insert(query)
    }

    public function Select(query string){
        return $this->connection->Select(query)
    }

}
