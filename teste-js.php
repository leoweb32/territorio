    <script>
            function ativarCheckbox(idCheckbox) {
            var checkbox = document.getElementById(idCheckbox); // obter o elemento checkbox pelo ID
            if (checkbox.checked) { // verificar se o checkbox está selecionado
                checkbox.setAttribute("checked", true); // definir o atributo "checked" como verdadeiro
                checkbox.setAttribute("value", 1);
            }else {
                checkbox.setAttribute("checked", false); // definir o atributo "checked" como falso
            }
            }
        </script>
onchange="ativarCheckbox(this.id)

$casacheck = $casa;
                        $casacheck = (bool) rand(0, 1) ? "checked" : null;

                        if($casacheck == null){
                             $value_check = 0;
                        }else{
                             $value_check = 1;
                        }
