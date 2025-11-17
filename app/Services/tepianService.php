<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class tepianService
{
    protected $api_key = "eEZTrWOYbKuZuBom2UeORutdQdoRnpDx";
    protected $endpoint = 'https://tepiankuis.softforge.my.id/api/tepian_quiz';

    protected  $client;

    public function __construct(){
        $this->client = new Client();
    }
    public function createUser($nama, $nis, $email, $kelas)
    {


        try {
            $response = $this->client->post("$this->endpoint/add/peserta", [
                'headers' => [
                    'X-Api-Key' => $this->api_key,
                ],
                'verify' => false,
                'form_params' => [
                    "nama" => $nama,
                    "nis" => $nis,
                    "email" => $email,
                    "kelas" => $kelas
                ]
            ]);
            // Response berhasil
            $data = json_decode($response->getBody()->getContents(), true);

            return $data;

        } catch (RequestException $e) {
            return json_decode($e->getResponse()->getBody()->getContents());
        }
    }

    public function addToKuis($id, $kodeKuis)
    {
      
        try {
            $response = $this->client->get("$this->endpoint/add/peserta/$id/to/$kodeKuis", [
                'headers' => [
                    'X-Api-Key' => $this->api_key,
                ],
                'verify' => false,
            ]);
            $data = json_decode($response->getBody()->getContents(), true);

            return $data;
        } catch (RequestException $e) {
            return json_decode($e->getResponse()->getBody()->getContents());
        }

    }

    public function deleteUser($id){
        $client = new Client();

        try {
            $response = $this->client->delete("$this->endpoint/peserta/destroy/$id", [
                'headers' => [
                    'X-Api-Key' => $this->api_key,
                ],
                'verify' => false,
            ]);
            $data = json_decode($response->getBody()->getContents(), true);

            return $data;
        } catch (RequestException $e) {
            return json_decode($e->getResponse()->getBody()->getContents());
        }

    }

}