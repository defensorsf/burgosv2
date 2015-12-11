<?php
class ml_personas extends burgos_v2_ei_formulario_ml
{
	/**
		* Se redefine el encabezado para no incluir los nombres de las columnas
		*/
	function generar_formulario_encabezado()
	{
		
	}
	
	protected function generar_layout_fila($clave_fila)
	{
		$this->set_ancho_etiqueta('90px');
		$columnas = 4;
		$i = 0;
		foreach ($this->get_nombres_ef() as $ef) {
			$ultimo = ($i == $this->get_cantidad_efs());            
			if ($i % $columnas == 0) {
				echo "<td colspan='$columnas' class='{$this->estilo_celda_actual}'>";
			}            
			$this->generar_html_ef($ef);
			$i++;            
			if ($i % $columnas == 0 || $ultimo) {
				echo '</td>';
			}            
		}
	}

	
	
	
	

}
?>