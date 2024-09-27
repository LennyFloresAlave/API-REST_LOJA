<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
            $dados = json_decode(file_get_contents('php://input'));
            
            $id_produto = $dados->id_produto;
            $qtd = $dados->qtd;
    
            $dadospedidosProdutos = new pedidos_produtos("", $id_produto, $qtd);
            return $dadospedidosProdutos;
        }
?>