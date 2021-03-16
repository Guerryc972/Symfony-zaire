<?php

namespace App\Classe;
use Mailjet\Client;
use Mailjet\Resources;

class Mail 
{
  private $api_key = '59da5d3c0e082ee2b7e18d3c54b7d996';
  private $api_key_secret = '6b71dcdfe5bbb81ca1db342b8d8eb2c8';

public function send($to_email,$to_name,$subject,$content)
  { 
    $mj = new Client($this->api_key,$this->api_key_secret,true,['version' => 'v3.1']);
    
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "golddj972@hotmail.fr",
                    'Name' => "Good Morning"
                ],
                'To' => [
                    [
                        'Email' => $to_email,
                        'Name' => $to_name
                    ]
                ],
                'TemplateID' => 2637343,
                'TemplateLanguage' => true,
                'Subject' => $subject,
                'Variables' => [
                    'content' => $content,
                    
                ]
                
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success();
     
  }

}

