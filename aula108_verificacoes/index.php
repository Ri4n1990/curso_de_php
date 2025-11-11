<?php




class HUmano{

    public $idade;
    public $profissao;

    public function andar():void{
        echo "Tô na passada aqui";

    }

}


if(class_exists("Humano")){
    echo "Existe <br>";
}


print_r(get_class_vars("Humano"));

print_r(get_class_methods("Humano"));