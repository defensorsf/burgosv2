<?php

class toba_mc_item__3490
{
	static function get_metadatos()
	{
		return array (
  'basica' => 
  array (
    'item_proyecto' => 'burgos_v2',
    'item' => '3490',
    'item_nombre' => 'Estados relator�as',
    'item_descripcion' => NULL,
    'item_act_buffer_proyecto' => NULL,
    'item_act_buffer' => NULL,
    'item_act_patron_proyecto' => NULL,
    'item_act_patron' => NULL,
    'item_act_accion_script' => NULL,
    'item_solic_tipo' => 'web',
    'item_solic_registrar' => 0,
    'item_solic_obs_tipo_proyecto' => NULL,
    'item_solic_obs_tipo' => NULL,
    'item_solic_observacion' => NULL,
    'item_solic_cronometrar' => NULL,
    'item_parametro_a' => NULL,
    'item_parametro_b' => NULL,
    'item_parametro_c' => NULL,
    'item_imagen_recurso_origen' => 'apex',
    'item_imagen' => NULL,
    'punto_montaje' => NULL,
    'tipo_pagina_clase' => 'toba_tp_normal',
    'tipo_pagina_archivo' => '',
    'item_include_arriba' => NULL,
    'item_include_abajo' => NULL,
    'item_zona_proyecto' => NULL,
    'item_zona' => NULL,
    'zona_punto_montaje' => NULL,
    'item_zona_archivo' => NULL,
    'zona_cons_archivo' => NULL,
    'zona_cons_clase' => NULL,
    'zona_cons_metodo' => NULL,
    'item_publico' => 0,
    'item_existe_ayuda' => NULL,
    'carpeta' => 0,
    'menu' => 1,
    'orden' => '0',
    'publico' => 0,
    'redirecciona' => NULL,
    'crono' => NULL,
    'solicitud_tipo' => 'web',
    'item_padre' => '3481',
    'cant_dependencias' => 1,
    'cant_items_hijos' => 0,
    'molde' => 23,
    'retrasar_headers' => 0,
  ),
  'objetos' => 
  array (
    0 => 
    array (
      'objeto_proyecto' => 'burgos_v2',
      'objeto' => 2427,
      'objeto_nombre' => 'Estados relator�as - CI',
      'objeto_subclase' => 'ci_estados_relatorias',
      'objeto_subclase_archivo' => 'estados_relatorias/ci_estados_relatorias.php',
      'orden' => 0,
      'clase_proyecto' => 'toba',
      'clase' => 'toba_ci',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
      'fuente_proyecto' => NULL,
      'fuente' => NULL,
      'fuente_motor' => NULL,
      'fuente_host' => NULL,
      'fuente_usuario' => NULL,
      'fuente_clave' => NULL,
      'fuente_base' => NULL,
    ),
  ),
);
	}

}

class toba_mc_comp__2427
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2427,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ci',
    'subclase' => 'ci_estados_relatorias',
    'subclase_archivo' => 'estados_relatorias/ci_estados_relatorias.php',
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Estados relator�as - CI',
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
    'creacion' => '2015-03-31 17:16:54',
    'punto_montaje' => 14,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000249',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ci.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000249',
    'clase_icono' => 'objetos/multi_etapa.gif',
    'clase_descripcion_corta' => 'ci',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1642',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 4,
    'posicion_botonera' => 'abajo',
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 1253,
      'identificador' => 'agregar',
      'etiqueta' => 'Agregar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'nucleo/agregar.gif',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
      'defecto' => 0,
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
    1 => 
    array (
      'evento_id' => 1254,
      'identificador' => 'volver',
      'etiqueta' => 'Volver',
      'maneja_datos' => 0,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => 'ei-boton-izq',
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'deshacer.png',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
      'defecto' => 0,
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
    2 => 
    array (
      'evento_id' => 1255,
      'identificador' => 'eliminar',
      'etiqueta' => 'Eliminar',
      'maneja_datos' => 0,
      'sobre_fila' => 0,
      'confirmacion' => '�Desea eliminar el registro?',
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'borrar.png',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
      'defecto' => 0,
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
    3 => 
    array (
      'evento_id' => 1256,
      'identificador' => 'guardar',
      'etiqueta' => 'Guardar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'guardar.gif',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 0,
      'defecto' => 1,
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
  '_info_ci' => 
  array (
    'ev_procesar_etiq' => NULL,
    'ev_cancelar_etiq' => NULL,
    'objetos' => NULL,
    'ancho' => '500px',
    'alto' => '300px',
    'posicion_botonera' => NULL,
    'tipo_navegacion' => NULL,
    'con_toc' => 0,
    'botonera_barra_item' => 0,
  ),
  '_info_ci_me_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 1227,
      'identificador' => 'pant_seleccion',
      'etiqueta' => 'Selecci�n',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => NULL,
      'imagen' => NULL,
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 0,
      'punto_montaje' => NULL,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
    1 => 
    array (
      'pantalla' => 1228,
      'identificador' => 'pant_edicion',
      'etiqueta' => 'Edici�n',
      'descripcion' => NULL,
      'tip' => NULL,
      'imagen_recurso_origen' => NULL,
      'imagen' => NULL,
      'objetos' => NULL,
      'eventos' => NULL,
      'orden' => 1,
      'punto_montaje' => NULL,
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'template' => NULL,
      'template_impresion' => NULL,
    ),
  ),
  '_info_obj_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 1227,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'dep_id' => 1280,
      'orden' => 0,
      'identificador_pantalla' => 'pant_seleccion',
      'identificador_dep' => 'filtro',
    ),
    1 => 
    array (
      'pantalla' => 1228,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'dep_id' => 1279,
      'orden' => 0,
      'identificador_pantalla' => 'pant_edicion',
      'identificador_dep' => 'formulario',
    ),
    2 => 
    array (
      'pantalla' => 1227,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'dep_id' => 1278,
      'orden' => 1,
      'identificador_pantalla' => 'pant_seleccion',
      'identificador_dep' => 'cuadro',
    ),
  ),
  '_info_evt_pantalla' => 
  array (
    0 => 
    array (
      'pantalla' => 1227,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'evento_id' => 1253,
      'identificador_pantalla' => 'pant_seleccion',
      'identificador_evento' => 'agregar',
    ),
    1 => 
    array (
      'pantalla' => 1228,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'evento_id' => 1254,
      'identificador_pantalla' => 'pant_edicion',
      'identificador_evento' => 'volver',
    ),
    2 => 
    array (
      'pantalla' => 1228,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'evento_id' => 1255,
      'identificador_pantalla' => 'pant_edicion',
      'identificador_evento' => 'eliminar',
    ),
    3 => 
    array (
      'pantalla' => 1228,
      'proyecto' => 'burgos_v2',
      'objeto_ci' => 2427,
      'evento_id' => 1256,
      'identificador_pantalla' => 'pant_edicion',
      'identificador_evento' => 'guardar',
    ),
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'cuadro',
      'proyecto' => 'burgos_v2',
      'objeto' => 2424,
      'clase' => 'toba_ei_cuadro',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_cuadro.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'burgos_v2',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    1 => 
    array (
      'identificador' => 'datos',
      'proyecto' => 'burgos_v2',
      'objeto' => 2423,
      'clase' => 'toba_datos_relacion',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_relacion.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'burgos_v2',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    2 => 
    array (
      'identificador' => 'filtro',
      'proyecto' => 'burgos_v2',
      'objeto' => 2426,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'burgos_v2',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
    3 => 
    array (
      'identificador' => 'formulario',
      'proyecto' => 'burgos_v2',
      'objeto' => 2425,
      'clase' => 'toba_ei_formulario',
      'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
      'subclase' => NULL,
      'subclase_archivo' => NULL,
      'fuente' => 'burgos_v2',
      'parametros_a' => NULL,
      'parametros_b' => NULL,
    ),
  ),
);
	}

}

class toba_mc_comp__2424
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2424,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ei_cuadro',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Estados relator�as - Cuadro.',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'burgos_v2',
    'fuente' => 'burgos_v2',
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
    'creacion' => '2015-03-31 17:16:54',
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
    'posicion_botonera' => NULL,
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 1249,
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
    'clave_datos_tabla' => NULL,
    'archivos_callbacks' => NULL,
    'ancho' => '100%',
    'ordenar' => NULL,
    'exportar_paginado' => NULL,
    'exportar_xls' => NULL,
    'exportar_pdf' => NULL,
    'paginar' => NULL,
    'tamano_pagina' => NULL,
    'tipo_paginado' => NULL,
    'scroll' => NULL,
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
      'orden' => '0',
      'objeto_cuadro_col' => 898,
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
      'permitir_html' => NULL,
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

class toba_mc_comp__2423
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2423,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_datos_relacion',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Estados relator�as - DR',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'burgos_v2',
    'fuente' => 'burgos_v2',
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
    'creacion' => '2015-03-31 17:16:54',
    'punto_montaje' => 14,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000251',
    'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_relacion.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000251',
    'clase_icono' => 'objetos/datos_relacion.gif',
    'clase_descripcion_corta' => 'datos_relacion',
    'clase_instanciador_proyecto' => NULL,
    'clase_instanciador_item' => NULL,
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 1,
    'posicion_botonera' => NULL,
  ),
  '_info_estructura' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2423,
    'debug' => 0,
    'ap' => 2,
    'punto_montaje' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'sinc_susp_constraints' => 0,
    'sinc_orden_automatico' => 1,
    'sinc_lock_optimista' => 1,
  ),
  '_info_relaciones' => 
  array (
  ),
  '_info_dependencias' => 
  array (
    0 => 
    array (
      'identificador' => 'estados_relatorias',
      'proyecto' => 'burgos_v2',
      'objeto' => 2422,
      'clase' => 'toba_datos_tabla',
      'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_tabla.php',
      'subclase' => 'dt_estados_relatorias',
      'subclase_archivo' => 'datos/dt_estados_relatorias.php',
      'fuente' => 'burgos_v2',
      'parametros_a' => '1',
      'parametros_b' => '1',
    ),
  ),
  '_info_columnas_asoc_rel' => 
  array (
  ),
);
	}

}

class toba_mc_comp__2422
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2422,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_datos_tabla',
    'subclase' => 'dt_estados_relatorias',
    'subclase_archivo' => 'datos/dt_estados_relatorias.php',
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'estados_relatorias',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'burgos_v2',
    'fuente' => 'burgos_v2',
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
    'creacion' => '2015-03-31 17:16:54',
    'punto_montaje' => 14,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000250',
    'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_tabla.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000250',
    'clase_icono' => 'objetos/datos_tabla.gif',
    'clase_descripcion_corta' => 'datos_tabla',
    'clase_instanciador_proyecto' => NULL,
    'clase_instanciador_item' => NULL,
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 0,
    'posicion_botonera' => NULL,
  ),
  '_info_estructura' => 
  array (
    'tabla' => 'estados_relatorias',
    'alias' => NULL,
    'min_registros' => NULL,
    'max_registros' => NULL,
    'ap' => 1,
    'punto_montaje' => NULL,
    'ap_sub_clase' => NULL,
    'ap_sub_clase_archivo' => NULL,
    'ap_modificar_claves' => NULL,
    'ap_clase' => 'ap_tabla_db_s',
    'ap_clase_archivo' => 'nucleo/componentes/persistencia/toba_ap_tabla_db_s.php',
    'tabla_ext' => NULL,
    'esquema' => NULL,
    'esquema_ext' => NULL,
  ),
  '_info_columnas' => 
  array (
    0 => 
    array (
      'objeto_proyecto' => 'burgos_v2',
      'objeto' => 2422,
      'col_id' => 915,
      'columna' => 'id',
      'tipo' => 'E',
      'pk' => 1,
      'secuencia' => 'seq_estados_relatorias',
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => NULL,
      'externa' => NULL,
      'tabla' => NULL,
    ),
    1 => 
    array (
      'objeto_proyecto' => 'burgos_v2',
      'objeto' => 2422,
      'col_id' => 916,
      'columna' => 'nombre',
      'tipo' => 'C',
      'pk' => NULL,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => NULL,
      'externa' => NULL,
      'tabla' => NULL,
    ),
  ),
  '_info_externas' => 
  array (
  ),
  '_info_externas_col' => 
  array (
  ),
  '_info_valores_unicos' => 
  array (
  ),
  '_info_fks' => 
  array (
  ),
);
	}

}

class toba_mc_comp__2426
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2426,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ei_formulario',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Estados relator�as - Filtro',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'burgos_v2',
    'fuente' => 'burgos_v2',
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
    'creacion' => '2015-03-31 17:16:54',
    'punto_montaje' => 14,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000255',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000255',
    'clase_icono' => 'objetos/ut_formulario.gif',
    'clase_descripcion_corta' => 'ei_formulario',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1842',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 0,
    'posicion_botonera' => NULL,
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 1251,
      'identificador' => 'filtrar',
      'etiqueta' => 'Filtrar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'filtrar.png',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => NULL,
      'defecto' => 1,
      'grupo' => 'cargado,no_cargado',
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
    1 => 
    array (
      'evento_id' => 1252,
      'identificador' => 'cancelar',
      'etiqueta' => 'Limpiar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'limpiar.png',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => NULL,
      'defecto' => NULL,
      'grupo' => 'cargado',
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
  '_info_formulario' => 
  array (
    'auto_reset' => NULL,
    'ancho' => NULL,
    'ancho_etiqueta' => NULL,
    'expandir_descripcion' => NULL,
    'no_imprimir_efs_sin_estado' => 1,
    'resaltar_efs_con_estado' => 1,
    'template' => NULL,
    'template_impresion' => NULL,
  ),
  '_info_formulario_ef' => 
  array (
    0 => 
    array (
      'objeto_ei_formulario_fila' => 5502,
      'objeto_ei_formulario' => 2426,
      'objeto_ei_formulario_proyecto' => 'burgos_v2',
      'identificador' => 'nombre',
      'elemento_formulario' => 'ef_editable',
      'columnas' => 'nombre',
      'obligatorio' => NULL,
      'oculto_relaja_obligatorio' => NULL,
      'orden' => '0',
      'etiqueta' => 'Nombre',
      'etiqueta_estilo' => NULL,
      'descripcion' => NULL,
      'colapsado' => NULL,
      'desactivado' => NULL,
      'estilo' => NULL,
      'total' => NULL,
      'inicializacion' => NULL,
      'permitir_html' => NULL,
      'deshabilitar_rest_func' => NULL,
      'estado_defecto' => NULL,
      'solo_lectura' => NULL,
      'solo_lectura_modificacion' => 0,
      'carga_metodo' => NULL,
      'carga_clase' => NULL,
      'carga_include' => NULL,
      'carga_dt' => NULL,
      'carga_consulta_php' => NULL,
      'carga_sql' => NULL,
      'carga_fuente' => NULL,
      'carga_lista' => NULL,
      'carga_col_clave' => NULL,
      'carga_col_desc' => NULL,
      'carga_maestros' => NULL,
      'carga_cascada_relaj' => NULL,
      'cascada_mantiene_estado' => 0,
      'carga_permite_no_seteado' => 0,
      'carga_no_seteado' => NULL,
      'carga_no_seteado_ocultar' => NULL,
      'edit_tamano' => NULL,
      'edit_maximo' => NULL,
      'edit_mascara' => NULL,
      'edit_unidad' => NULL,
      'edit_rango' => NULL,
      'edit_filas' => NULL,
      'edit_columnas' => NULL,
      'edit_wrap' => NULL,
      'edit_resaltar' => NULL,
      'edit_ajustable' => NULL,
      'edit_confirmar_clave' => NULL,
      'edit_expreg' => NULL,
      'popup_item' => NULL,
      'popup_proyecto' => NULL,
      'popup_editable' => NULL,
      'popup_ventana' => NULL,
      'popup_carga_desc_metodo' => NULL,
      'popup_carga_desc_clase' => NULL,
      'popup_carga_desc_include' => NULL,
      'popup_puede_borrar_estado' => NULL,
      'fieldset_fin' => NULL,
      'check_valor_si' => NULL,
      'check_valor_no' => NULL,
      'check_desc_si' => NULL,
      'check_desc_no' => NULL,
      'check_ml_toggle' => NULL,
      'fijo_sin_estado' => NULL,
      'editor_ancho' => NULL,
      'editor_alto' => NULL,
      'editor_botonera' => NULL,
      'selec_cant_minima' => NULL,
      'selec_cant_maxima' => NULL,
      'selec_utilidades' => NULL,
      'selec_tamano' => NULL,
      'selec_ancho' => NULL,
      'selec_serializar' => NULL,
      'selec_cant_columnas' => NULL,
      'upload_extensiones' => NULL,
      'punto_montaje' => NULL,
      'placeholder' => NULL,
      'carga_consulta_php_clase' => NULL,
      'carga_consulta_php_archivo' => NULL,
    ),
  ),
);
	}

}

class toba_mc_comp__2425
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'burgos_v2',
    'objeto' => 2425,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ei_formulario',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Estados relator�as - Form',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'burgos_v2',
    'fuente' => 'burgos_v2',
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
    'creacion' => '2015-03-31 17:16:54',
    'punto_montaje' => 14,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000255',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ei_formulario.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000255',
    'clase_icono' => 'objetos/ut_formulario.gif',
    'clase_descripcion_corta' => 'ei_formulario',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1842',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 0,
    'posicion_botonera' => NULL,
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 1250,
      'identificador' => 'modificacion',
      'etiqueta' => NULL,
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => NULL,
      'imagen' => NULL,
      'en_botonera' => 0,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => 1,
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
  '_info_formulario' => 
  array (
    'auto_reset' => NULL,
    'ancho' => NULL,
    'ancho_etiqueta' => NULL,
    'expandir_descripcion' => NULL,
    'no_imprimir_efs_sin_estado' => NULL,
    'resaltar_efs_con_estado' => NULL,
    'template' => NULL,
    'template_impresion' => NULL,
  ),
  '_info_formulario_ef' => 
  array (
    0 => 
    array (
      'objeto_ei_formulario_fila' => 5501,
      'objeto_ei_formulario' => 2425,
      'objeto_ei_formulario_proyecto' => 'burgos_v2',
      'identificador' => 'nombre',
      'elemento_formulario' => 'ef_editable',
      'columnas' => 'nombre',
      'obligatorio' => 0,
      'oculto_relaja_obligatorio' => NULL,
      'orden' => '0',
      'etiqueta' => 'Nombre',
      'etiqueta_estilo' => NULL,
      'descripcion' => NULL,
      'colapsado' => NULL,
      'desactivado' => NULL,
      'estilo' => NULL,
      'total' => NULL,
      'inicializacion' => NULL,
      'permitir_html' => NULL,
      'deshabilitar_rest_func' => NULL,
      'estado_defecto' => NULL,
      'solo_lectura' => NULL,
      'solo_lectura_modificacion' => 0,
      'carga_metodo' => NULL,
      'carga_clase' => NULL,
      'carga_include' => NULL,
      'carga_dt' => NULL,
      'carga_consulta_php' => NULL,
      'carga_sql' => NULL,
      'carga_fuente' => NULL,
      'carga_lista' => NULL,
      'carga_col_clave' => NULL,
      'carga_col_desc' => NULL,
      'carga_maestros' => NULL,
      'carga_cascada_relaj' => NULL,
      'cascada_mantiene_estado' => 0,
      'carga_permite_no_seteado' => 0,
      'carga_no_seteado' => NULL,
      'carga_no_seteado_ocultar' => NULL,
      'edit_tamano' => NULL,
      'edit_maximo' => NULL,
      'edit_mascara' => NULL,
      'edit_unidad' => NULL,
      'edit_rango' => NULL,
      'edit_filas' => NULL,
      'edit_columnas' => NULL,
      'edit_wrap' => NULL,
      'edit_resaltar' => NULL,
      'edit_ajustable' => NULL,
      'edit_confirmar_clave' => NULL,
      'edit_expreg' => NULL,
      'popup_item' => NULL,
      'popup_proyecto' => NULL,
      'popup_editable' => NULL,
      'popup_ventana' => NULL,
      'popup_carga_desc_metodo' => NULL,
      'popup_carga_desc_clase' => NULL,
      'popup_carga_desc_include' => NULL,
      'popup_puede_borrar_estado' => NULL,
      'fieldset_fin' => NULL,
      'check_valor_si' => NULL,
      'check_valor_no' => NULL,
      'check_desc_si' => NULL,
      'check_desc_no' => NULL,
      'check_ml_toggle' => NULL,
      'fijo_sin_estado' => NULL,
      'editor_ancho' => NULL,
      'editor_alto' => NULL,
      'editor_botonera' => NULL,
      'selec_cant_minima' => NULL,
      'selec_cant_maxima' => NULL,
      'selec_utilidades' => NULL,
      'selec_tamano' => NULL,
      'selec_ancho' => NULL,
      'selec_serializar' => NULL,
      'selec_cant_columnas' => NULL,
      'upload_extensiones' => NULL,
      'punto_montaje' => NULL,
      'placeholder' => NULL,
      'carga_consulta_php_clase' => NULL,
      'carga_consulta_php_archivo' => NULL,
    ),
  ),
);
	}

}

?>