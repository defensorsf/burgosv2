<?php

class toba_mc_comp__2507
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2507,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ei_cuadro',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Instituciones - Cuadro.',
    'titulo' => NULL,
    'colapsable' => 0,
    'descripcion' => NULL,
    'fuente_proyecto' => NULL,
    'fuente' => NULL,
    'solicitud_registrar' => NULL,
    'solicitud_obj_obs_tipo' => NULL,
    'solicitud_obj_observacion' => NULL,
    'parametro_a' => NULL,
    'parametro_b' => NULL,
    'parametro_c' => NULL,
    'parametro_d' => NULL,
    'parametro_e' => NULL,
    'parametro_f' => NULL,
    'usuario' => NULL,
    'creacion' => '2015-06-30 13:33:04',
    'punto_montaje' => 14,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000253',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ei_cuadro.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000253',
    'clase_icono' => 'objetos/cuadro_array.gif',
    'clase_descripcion_corta' => 'ei_cuadro',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1843',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 0,
    'posicion_botonera' => 'abajo',
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 1338,
      'identificador' => 'seleccion',
      'etiqueta' => NULL,
      'maneja_datos' => 1,
      'sobre_fila' => 1,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'doc.gif',
      'en_botonera' => 0,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => NULL,
      'defecto' => NULL,
      'grupo' => NULL,
      'accion' => NULL,
      'accion_imphtml_debug' => NULL,
      'accion_vinculo_carpeta' => NULL,
      'accion_vinculo_item' => NULL,
      'accion_vinculo_objeto' => NULL,
      'accion_vinculo_popup' => NULL,
      'accion_vinculo_popup_param' => NULL,
      'accion_vinculo_celda' => NULL,
      'accion_vinculo_target' => NULL,
      'accion_vinculo_servicio' => NULL,
      'es_seleccion_multiple' => 0,
      'es_autovinculo' => 0,
    ),
  ),
  '_info_puntos_control' => 
  array (
  ),
  '_info_cuadro' => 
  array (
    'titulo' => NULL,
    'subtitulo' => NULL,
    'sql' => NULL,
    'columnas_clave' => 'id',
    'clave_datos_tabla' => 0,
    'archivos_callbacks' => NULL,
    'ancho' => '100%',
    'ordenar' => 0,
    'exportar_paginado' => 0,
    'exportar_xls' => 0,
    'exportar_pdf' => 0,
    'paginar' => 0,
    'tamano_pagina' => NULL,
    'tipo_paginado' => 'P',
    'scroll' => 0,
    'alto' => NULL,
    'eof_invisible' => 1,
    'eof_customizado' => NULL,
    'pdf_respetar_paginacion' => NULL,
    'pdf_propiedades' => NULL,
    'asociacion_columnas' => NULL,
    'dao_nucleo_proyecto' => NULL,
    'dao_clase' => NULL,
    'dao_metodo' => NULL,
    'dao_parametros' => NULL,
    'dao_archivo' => '',
    'cc_modo' => NULL,
    'cc_modo_anidado_colap' => NULL,
    'cc_modo_anidado_totcol' => NULL,
    'cc_modo_anidado_totcua' => NULL,
    'columna_descripcion' => NULL,
    'mostrar_total_registros' => 0,
    'siempre_con_titulo' => 0,
  ),
  '_info_cuadro_columna' => 
  array (
    0 => 
    array (
      'orden' => '1',
      'objeto_cuadro_col' => 1069,
      'titulo' => 'Nombre',
      'estilo_titulo' => 'ei-cuadro-col-tit',
      'estilo' => '4',
      'ancho' => NULL,
      'clave' => 'nombre',
      'formateo' => 'NULO',
      'no_ordenar' => NULL,
      'mostrar_xls' => NULL,
      'mostrar_pdf' => NULL,
      'pdf_propiedades' => NULL,
      'total' => NULL,
      'vinculo_indice' => NULL,
      'usar_vinculo' => NULL,
      'total_cc' => NULL,
      'permitir_html' => 0,
      'grupo' => NULL,
      'evento_asociado' => NULL,
    ),
    1 => 
    array (
      'orden' => '2',
      'objeto_cuadro_col' => 1070,
      'titulo' => 'Direcci�n',
      'estilo_titulo' => 'ei-cuadro-col-tit',
      'estilo' => '4',
      'ancho' => NULL,
      'clave' => 'direccion',
      'formateo' => 'NULO',
      'no_ordenar' => NULL,
      'mostrar_xls' => NULL,
      'mostrar_pdf' => NULL,
      'pdf_propiedades' => NULL,
      'total' => NULL,
      'vinculo_indice' => NULL,
      'usar_vinculo' => NULL,
      'total_cc' => NULL,
      'permitir_html' => 0,
      'grupo' => NULL,
      'evento_asociado' => NULL,
    ),
    2 => 
    array (
      'orden' => '3',
      'objeto_cuadro_col' => 1071,
      'titulo' => 'Tel�fonos',
      'estilo_titulo' => 'ei-cuadro-col-tit',
      'estilo' => '4',
      'ancho' => NULL,
      'clave' => 'telefonos',
      'formateo' => 'NULO',
      'no_ordenar' => NULL,
      'mostrar_xls' => NULL,
      'mostrar_pdf' => NULL,
      'pdf_propiedades' => NULL,
      'total' => NULL,
      'vinculo_indice' => NULL,
      'usar_vinculo' => NULL,
      'total_cc' => NULL,
      'permitir_html' => 0,
      'grupo' => NULL,
      'evento_asociado' => NULL,
    ),
  ),
  '_info_cuadro_cortes' => 
  array (
  ),
  '_info_sum_cuadro_cortes' => 
  array (
  ),
);
	}

}

?>