<?php
    
    Class classCarros{
    function exibeCarros(){
        require_once('banco.php');
        $BFetch = $conexao->query("SELECT * FROM carros");
        

        $J = array();
        $I = 1;


        
        


     


        while($lista = $BFetch->fetch_assoc()){
            $J[$I]=[
                'Id'=>$lista['Id'],
                'Marca'=>$lista['Marca'],
                'Modelo'=>$lista['Modelo'],
                'Ano'=>$lista['Ano']
        ];


           $I++;
      }

        
            $arquivo = 'data.json';
            $json = json_encode($J);
            $file = fopen(__DIR__ . '/' . $arquivo,'w');
            fwrite($file, $json);
            fclose($file);
            
            header('./index.php');

}}

?>