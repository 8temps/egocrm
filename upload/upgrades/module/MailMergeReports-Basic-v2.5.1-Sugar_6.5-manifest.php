<?php

global $sugar_config;
$en_us_lang = 'en_us';
$es_es_lang = 'es_es';
$de_de_lang = 'de_de';
$sk_sk_lang = 'sk_sk';
foreach ($sugar_config['languages'] as $lang_key => $lang_label) {
   $lower_lang_key = strtolower($lang_key);
   if ($lower_lang_key ==  $en_us_lang)
      $en_us_lang = $lang_key;
   if ($lower_lang_key ==  $es_es_lang)
      $es_es_lang = $lang_key;
   if ($lower_lang_key ==  $de_de_lang)
      $de_de_lang = $lang_key;      
   if ($lower_lang_key ==  $sk_sk_lang)
      $sk_sk_lang = $lang_key;
}


$manifest = array(
   'acceptable_sugar_versions' => array (   
      'regex_matches' => array (
         0 => "6\.5\.*",
      ),
   ),
   'acceptable_sugar_flavors' => array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'CORP',
      3 => 'ENT',
      4 => 'ULT',
   ),
   'is_uninstallable' => true,
   'remove_tables' => 'prompt',
   'key' => 'DHA',
   'name' => 'MailMerge Reports Basic',
   'description' => 'Office Open XML (.docx) and OpenDocument (.odt) Reports',
   'author' => 'Izertis',
   'published_date' => '2015/09/03',
   'version' => '2.5.1',
   'type' => 'module',
   'icon' => '',
);

$installdefs = array(
   'id' => 'MailMergeReports',
   'image_dir' => '<basepath>/icons',
   
   // 'mkdir' => array(
      // '/document_templates/',
   // ),   
   
   'beans' => array(
      array(
         'module'          => 'DHA_PlantillasDocumentos',
         'class'           => 'DHA_PlantillasDocumentos',
         'path'            => 'modules/DHA_PlantillasDocumentos/DHA_PlantillasDocumentos.php',
         'tab'             => true, 
      )
   ),
   
   'language' => array(
      array(
         'from'            => '<basepath>/language/en_us.MailMergeReports.php',
         'to_module'       => 'application',
         'language'        => $en_us_lang 
      ),
      array(
         'from'            => '<basepath>/language/es_es.MailMergeReports.php',
         'to_module'       => 'application',
         'language'        => $es_es_lang 
      ),
      array(
         'from'            => '<basepath>/language/de_de.MailMergeReports.php',
         'to_module'       => 'application',
         'language'        => $de_de_lang 
      ),       
      array(
         'from'            => '<basepath>/language/sk_sk.MailMergeReports.php',
         'to_module'       => 'application',
         'language'        => $sk_sk_lang 
      ),      
   ),
   
   'copy' => array(
      array(
         'from' => '<basepath>/modules/DHA_PlantillasDocumentos',
         'to'   => 'modules/DHA_PlantillasDocumentos',         
      ),
      array(
         'from' => '<basepath>/README.txt',
         'to'   => 'modules/DHA_PlantillasDocumentos/README.txt',         
      ),
      array(
         'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/DHA_DocumentTemplates.php',
         'to'   => 'custom/Extension/modules/Administration/Ext/Administration/DHA_DocumentTemplates.php',
      ),       
   ),
   
   // Si el directorio "actions" se llamara "scripts" y los nombres de los ficheros son los standard, esto no sería necesario.
   // Si se hace como "scripts" el codigo de los ficheros debe de estar encapsulado en funciones (pre_install(), post_install(), etc.),
   // pero si se hace declarandolos en el manifest.php (como aqui) el código no se tiene que encapsular en funciones.
   // Otra diferencia es que si lo hacemos como "scripts", y el manifest es de un módulo, no se ejecuta el script de post_uninstall (el código no lo llama para ese caso)
   
   'pre_execute' => array(
      0 => '<basepath>/actions/pre_install.php',
   ),
   
   'post_execute' => array(
      0 => '<basepath>/actions/post_install.php',
   ),
   
   'pre_uninstall' => array(
      0 => '<basepath>/actions/pre_uninstall.php',
   ),
   
   'post_uninstall' => array(
      0 => '<basepath>/actions/post_uninstall.php',
   ),

);

/* if (!preg_match('/^6|(5\.(?>[2-9]|1\.0[a-z]))/', $GLOBALS['sugar_version']))
      $installdefs['copy'][] =
                  array('from'    => '<basepath>/modules/ModuleBuilder/views/view.modulefield.php',
                        'to'      => 'modules/ModuleBuilder/views/view.modulefield.php',
               ); */
                
?>
