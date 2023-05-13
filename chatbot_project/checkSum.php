 <?php 
 $folder = '/xampp/htdocs/chatbot_project';
 $hashes= array();
 foreach(glob("$folder/*.php")as $file){
     $hash = hash_file('sha256', $file);
     $hashes[$file] = $hash;
 }
 foreach($hashes as $file => $hash){
     echo "Checksum for $file: $hash <br>"; 
 }

 ?> 