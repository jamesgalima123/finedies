
<?php
  
  function  encryptedString($simple_string){
        // Store a string into the variable which
    // need to be Encrypted
        
    // Display the original string        
    // Store the cipher method
    $ciphering = "AES-256-CTR";
    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
        
    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1231231231231231';
        
    // Store the encryption key
    $encryption_key = "james";
        
    // Use openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt($simple_string, $ciphering,
                $encryption_key, $options, $encryption_iv);
    return $encryption;
    
  }
  function decryptedString($encryption){
      // Display the encrypted string
    $options = 0;
    $ciphering = "AES-256-CTR";
    // Non-NULL Initialization Vector for decryption
    $decryption_iv = '1231231231231231';
        
    // Store the decryption key
    $decryption_key = "jamesgalimapogi";
        
    // Use openssl_decrypt() function to decrypt the data
    $decryption=openssl_decrypt ($encryption, $ciphering, 
            $decryption_key, $options, $decryption_iv);
    // Display the decrypted string
    return $decryption;
  }
  // $enc = encryptedString("dwqd");
  // echo $enc . "\n";
  // echo decryptedString($enc);
  ?>