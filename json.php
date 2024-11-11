<?php
/*SAVE INPUT PHP KE FILE JSON-
VERSI INPUT 2 DATA / 2 BARIS- data.json bisa dirubah MISALNYA cfg.json*/- error_reporting (0);

function save($data, $data_post){
    if(!file_get_contents($data)) {
        file_put_contents($data, "[]");
    }
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json, $data_post);
    file_put_contents($data, json_encode($arr ,JSON_PRETTY_PRINT));
}
if(!file_exists("data.json")){
    //INPUT
    $nama=readline("SILAHKAN MASUKAN NAMA : ");
    $email=readline("SILAHKAN MASUKAN EMAIL: ");
    $pass=readline("SILAHKAN MASUKAN PASSWORD : ");
    $data =["NAMA"=>$nama, "EMAIL"=>$email, "PASSWORD"=>$pass,];
    save("data.json", $data);
}-
$nama=json_decode(file_get_contents("data.json"), true )["NAMA"];
$email=json_decode(file_get_contents("data.json"), true )["EMAIL"];
$pass=json_decode(file_get_contents("data.json"), true )["PASSWORD"];
echo "\n-DATA YANG DI-MASUKKAN AKAN MUNCUL\n";
echo "NAMA $nama \n"; 
echo "EMAIL: $email \n";
echo "SANDI: $pass\n";
