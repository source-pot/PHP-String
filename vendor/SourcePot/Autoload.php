<?php

/**
 * SourcePot autoloader
 */
spl_autoload_register( function( $class ) {
   // str_starts_with is a new PHP 8 function
   if( !str_starts_with( $class, 'SourcePot\\' ) ) return;
   
   // replace first instance of 'SourcePot' to remove it from what will be our filename
   $filename = substr( $class, 10 );
   $filename = __DIR__ . '/' . str_replace( '\\', DIRECTORY_SEPARATOR, $filename ) . '.php';

   if( file_exists( $filename ) )
   {
      include $filename;
   }
});
