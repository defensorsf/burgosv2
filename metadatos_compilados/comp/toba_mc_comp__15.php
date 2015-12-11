<?php

class toba_mc_comp__15
{
	static function get_metadatos()
	{
		return array (
  'molde' => 
  array (
    'proyecto' => 'burgos_v2',
    'molde' => 15,
    'operacion_tipo' => 10,
    'nombre' => 'Barrios',
    'item' => '3482',
    'carpeta_archivos' => 'barrios',
    'prefijo_clases' => '_barrios',
    'fuente' => 'burgos_v2',
    'clase' => 'toba_asistente_abms',
  ),
  'molde_abms' => 
  array (
    'proyecto' => 'burgos_v2',
    'molde' => 15,
    'tabla' => 'barrios',
    'gen_usa_filtro' => 1,
    'gen_separar_pantallas' => 1,
    'cuadro_eof' => NULL,
    'cuadro_id' => 'id',
    'filtro_comprobar_parametros' => 0,
    'cuadro_forzar_filtro' => 0,
    'cuadro_eliminar_filas' => 0,
    'cuadro_carga_origen' => 'datos_tabla',
    'cuadro_carga_sql' => 'SELECT
	t_b.id,
	t_b.nombre,
	t_l.nombre as id_localidad_nombre
FROM
	barrios as t_b,
	localidades as t_l
WHERE
		t_b.id_localidad = t_l.id
ORDER BY nombre',
    'cuadro_carga_php_include' => NULL,
    'cuadro_carga_php_clase' => NULL,
    'cuadro_carga_php_metodo' => NULL,
    'datos_tabla_validacion' => NULL,
    'apdb_pre' => NULL,
  ),
  'molde_abms_fila' => 
  array (
    0 => 
    array (
      'proyecto' => 'burgos_v2',
      'molde' => 15,
      'fila' => 119,
      'orden' => '1',
      'columna' => 'id',
      'etiqueta' => 'Id',
      'en_cuadro' => 0,
      'en_form' => 0,
      'en_filtro' => 0,
      'filtro_operador' => '=',
      'cuadro_estilo' => 0,
      'cuadro_formato' => 7,
      'dt_tipo_dato' => 'E',
      'dt_largo' => NULL,
      'dt_secuencia' => 'seq_barrios',
      'dt_pk' => 1,
      'elemento_formulario' => 'ef_editable_numero',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 0,
      'ef_carga_origen' => NULL,
      'ef_carga_sql' => NULL,
      'ef_carga_tabla' => NULL,
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => NULL,
      'ef_carga_col_desc' => NULL,
    ),
    1 => 
    array (
      'proyecto' => 'burgos_v2',
      'molde' => 15,
      'fila' => 120,
      'orden' => '2',
      'columna' => 'nombre',
      'etiqueta' => 'Nombre',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 1,
      'filtro_operador' => 'ILIKE',
      'cuadro_estilo' => 4,
      'cuadro_formato' => 1,
      'dt_tipo_dato' => 'C',
      'dt_largo' => NULL,
      'dt_secuencia' => '',
      'dt_pk' => 0,
      'elemento_formulario' => 'ef_editable',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 1,
      'ef_carga_origen' => NULL,
      'ef_carga_sql' => NULL,
      'ef_carga_tabla' => NULL,
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => NULL,
      'ef_carga_col_desc' => NULL,
    ),
    2 => 
    array (
      'proyecto' => 'burgos_v2',
      'molde' => 15,
      'fila' => 121,
      'orden' => '3',
      'columna' => 'id_localidad',
      'etiqueta' => 'Id Localidad',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 1,
      'filtro_operador' => '=',
      'cuadro_estilo' => 4,
      'cuadro_formato' => 1,
      'dt_tipo_dato' => 'C',
      'dt_largo' => NULL,
      'dt_secuencia' => '',
      'dt_pk' => 0,
      'elemento_formulario' => 'ef_combo',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 1,
      'ef_carga_origen' => 'datos_tabla',
      'ef_carga_sql' => 'SELECT id, nombre FROM localidades ORDER BY nombre',
      'ef_carga_tabla' => 'localidades',
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => 'id',
      'ef_carga_col_desc' => 'nombre',
    ),
  ),
);
	}

}

?>