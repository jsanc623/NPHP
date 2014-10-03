<?nphp \jsanc623\Classes

import(
    \jsanc623\Database\Database as CustomDatabase
)

class SomeClass {

    public var state::bool
    public var key::int = 1
    public var name::string = "jsanc623"

    public function __construct(){

    }

    public function __destruct(){
        $this->state = false
        $this->name = ""
        NCore::nullify($this->key)
    }

    public function Save(){
        CustomDatabase::Update("jsanc623")
    }

    private function Load(){
        CustomDatabase::Select("*")
    }

    private static function Create(){
        CustomDatabase::Insert("jsanc623")
    }

}

var someClass::Object = new SomeClass
var someClassSave::Function = (newSomeclass)->Save()
