<?php

if ( !function_exists( "lock" ) ) {
    function lock( $string, $action = 'encrypt' )
    {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'DHP_MONGO_KG_3050'; // user define private key
        $secret_iv = '43240425234203263'; // user define secret key
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 ); // sha256 is hash_hmac_algo
        if ( $action == 'encrypt' ) {
            $output = openssl_encrypt( json_encode( $string ), $encrypt_method, $key, 0, $iv );
            $output = base64_encode( $output );
        } else if ( $action == 'decrypt' ) {
            $output = json_decode( openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv ) );
        }
        return $output;
    }
}
