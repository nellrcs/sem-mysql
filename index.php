
<?php


function seleciona($local_do_arquivo,$tablela_busca,$campo_busca,$valor_busca,$valor_exibir)
{

	$xml = simplexml_load_file($local_do_arquivo);

	$tabela = $xml->table;

	foreach ($tabela as $tabelas) 
	{
			
		if($tabelas['name'] == $tablela_busca );
		{
			foreach ($tabelas->column as $colunas) 
			{
				if($colunas['name'] == $campo_busca )
				{	
					
					if( $colunas == $valor_busca )	
					{
						
						foreach ($tabelas->column as $colunas) 
						{

								if($colunas['name'] == $valor_exibir)
								{
									return $colunas;
								}

						}

					}	
					
				}
			}
		}

	}
}


echo seleciona("test.xml",'test','id','2','nome');

?>

