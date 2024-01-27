function validar(){
  var nome  = seupedido.nome.value;
  var email  = seupedido.email.value;
  var telefone  = seupedido.telefone.value;
  var pedido  = seupedido.pedido.value;

        if(nome == " "){
            alert('prencha o campo nome');
            seupedido.nome.focua();
            return false
        }
        if(email == " " || email.indexOf ('@') ) {
            alert('prencha o campo email');
            seupedido.email.focua();
            return false
        }
        if(telefone == " " ]] telefone.length == 9){
            alert('prencha o campo telefone');
            seupedido.telefone.focua();
            return false
        }
        if(pedido == " "){
            alert('prencha o campo pedodp');
            seupedido.pedido.focua();
            return false
        }

}