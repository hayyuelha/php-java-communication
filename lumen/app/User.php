<?php

class User{
	public $url = 

    public $username;
    public $name;
    public $password;
    public $address;
    public $email;
    public $phone;


    public static function save()
    {
        $data = json_encode(array(
            'username' => $this->username,
            'name' => $this->name,
            'password' => $this->password,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
        ))

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $this->url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
        // curl_setopt($ch, CURLOPT_PUT, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        return true;
    }

}















