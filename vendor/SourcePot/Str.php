<?php

namespace SourcePot;


/**
 * @class String
 * @description Wraps PHP's string-related functions to be used in an object-oriented way
 */
class Str
{
   public const PAD_LEFT = STR_PAD_LEFT;
   public const PAD_RIGHT = STR_PAD_RIGHT;


   /**
    * Creates a new Str object from the given string value
    * @param string the basic string to use as a base
    */
   public function __construct( public string $value ) {}

   /**
    * Cretes a new Str object from the given string value
    * @param string the basic string to use as a base
    */
   public static function from( string $source ): Str
   {
      return new self( $source );
   }

   /**
    * Returns the character at position n in the string.
    * @param int the index in the string to return (also accepts negative numbers to count back from end of string)
    * @return Str a new Str object containing the value
    */
   public function charAt( int $n ): Str
   {
      if( $n < 0 ) $n += strlen($this->value);
      return Str::from($this->value[$n]);
   }

   /**
    * Returns the lower cased version of this string.
    * Creates a new Str object
    */
   public function toLower(): Str
   {
      return Str::from( strtolower( $this->value ) );
   }

   /**
    * Returns the upper cased version of this string.
    * Creates a new Str object
    */
   public function toUpper(): Str
   {
      return Str::from( strtoupper( $this->value ) );
   }

   /**
    * Performs a string replacement on the current value.
    * Returns a new Str object
    * @param string the string you want to replace
    * @param string the string to insert in place of search
    * @param bool whether to perform a case sensitive search (defaults to false)
    */
   public function replace( string $search, string $replace = '', bool $caseSensitive = false ): Str
   {
      if( $caseSensitive )
      {
         return Str::from( str_replace( $search, $replace, $this->value ) );
      }
      return Str::from( str_ireplace( $search, $replace, $this->value ) );
   }

   /**
    * Pads this string to the given length
    * @param int the new length. If less than current length, nothing changes
    * @param int whether to pad the left or right of the string. Use Str::PAD_LEFT or Str::PAD_RIGHT.
    * Defaults to Str::PAD_RIGHT
    * @param string a character to use when padding the string
    */
   public function pad( int $newLength, int $direction = Str::PAD_RIGHT, string $padChar = ' ' ): Str
   {
      return Str::from(str_pad($this->value, $newLength, $padChar, $direction) );
   }

   /**
    * Reverses the current value, returning a new Str object
    */
   public function reverse(): Str
   {
      $new = '';
      for( $i = strlen($this->value)-1; $i >= 0; $i-- )
      {
         $new .= $this->value[$i];
      }
      return Str::from($new);
   }

   /**
    * @param int start
    * @param int length
    */
   public function slice( int $start, int $length = null ): Str
   {
      return Str::from( substr( $this->value, $start, $length ) );
   }
}
