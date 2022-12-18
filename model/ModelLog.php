<?php

class ModelLog extends Crud {

    protected $table = 'log';
    protected $primaryKey = 'logId';
    protected $fillable = ['logId', 'logAdresseIP', 'logDate', 'logEmployeId', 'logPage'];

    // Pour insérer les employés dans la base de données
    public function store(){
        // $validation = new Validation;
        // extract($_POST);
        // $validation->name('nom')->value($employeNom)->pattern('alpha')->required()->max(45);
        // ne regarde pas si le nom est le même, seulement si ça fit le format
        // $validation->name('employeCourriel')->value($employeCourriel)->pattern('email')->required()->max(50);
        // $validation->name('employeMotDePasse')->value($employeMotDePasse)->max(20)->min(6);
        // $validation->name('privilege_id')->value($privilege_id)->pattern('int')->required();

        // if($validation->isSuccess()){
            $log = new ModelLog;
            $options = [
                'cost' => 10,
            ];
            // Pour ajouter la date d'aujourd'hui comme date d'embauche sans passer par le formulaire
            $tz = 'America/Toronto';
            $timestamp = time();
            $dt = new DateTime("now", new DateTimeZone($tz));
            $dt->setTimestamp($timestamp);

            $_POST['logDate'] = ($dt)->format('Y-m-d H:i:s');

            $_POST['logAdresseIP'] = $_SERVER['REMOTE_ADDR'];

            if(isset($_SESSION['employeId'])){
                $_POST['logEmployeId'] = $_SESSION['employeId'];
            }

            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                $url = "https://";   
            } else {
                $url = "http://";   
            }
            // Append the host(domain name, ip) to the URL.   
            $url.= $_SERVER['HTTP_HOST'];   
    
            // Append the requested resource location to the URL   
            $url.= $_SERVER['REQUEST_URI'];    

            $_POST['logPage'] = $url;

            $insert = $log->insert($_POST);
        // }else{
        //     $errors = $validation->displayErrors();
        // }
    }
}

?>