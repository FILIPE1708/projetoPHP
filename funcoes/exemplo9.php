<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',

        'subordinados' => array(
            //Inicio: Diretor comercial 
            array(
                'nome_cargo' => 'Diretor comercial',

                'subordinados' => array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                    //Final: Gerente de vendas
                )
            ),
            //Final: Diretor comercial 

            //Inicio: Diretor financeiro
            array(
                'nome_cargo' => 'Diretor financeiro',

                'subordinados' => array(
                    //Inicio: Gerente de contas
                    array(
                        'nome_cargo' => 'Gerente de contas',

                        'subordinados' => array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //Final: Supervisor de pagamentos
                        )
                    ),
                    //Final: Gerente de contas

                    //Inicio: Gerente de compras
                    array(
                        'nome_cargo' => 'Gerente de compras',

                        'subordinados' => array(
                            //Inicio: Supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de suprimentos'
                            )
                            //Inicio: Supervisor de suprimentos
                        )
                    )
                    //Final: Gerente de compras
                )
            )
            //Final: Diretor financeiro
        )
    )
);

function exibe($cargos){
    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= '<li>';
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= '</li>';
    }

    $html .= '</li>';

    return $html;
}

echo exibe($hierarquia);

?>