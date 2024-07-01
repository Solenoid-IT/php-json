<?php



namespace Solenoid\JSON;



class JSON
{
    # Returns [string]
    public static function encode (mixed $value, bool $pretty = false)
    {
        if ( $pretty )
        {// Value is true
            // (Getting the value)
            $v = json_encode( $value, JSON_PRETTY_PRINT );
        }
        else
        {// Value is false
            // (Getting the value)
            $v = json_encode($value);
        }



        // Returning the value
        return $v;
    }

    # Returns [assoc]
    public static function decode (string $value)
    {
        // Returning the value
        return json_decode( $value, true );
    }
}



?>