<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }


    
   // auth model  Start//


    function login(){
      $email = $this->input->post('emailORphnno');
      $password = $this->input->post('password');

      $data['emailORphnno'] = $email;
      $data['password'] = $password;

      $parameters = json_encode($data);
      /*print_r($parameters);
      die();*/

      $url = "http://18.191.31.131:8000/auth/login/";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HEADER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);

      $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
      $headers = substr($result, 0, $header_size);
      $body = substr($result, $header_size);
      //print_r($headers);

      preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
      $crsftoken = $matches[0][0];
      $sessionid = $matches[0][1];
      $cookiesCrsf= trim($crsftoken,"Set-Cookie: csrftoken=");
      $cookiesSessionId = trim($sessionid, "Set-Cookie: sessionid=");

      $cookie= array(
           'name'   => 'csrftoken',
           'value'  => $cookiesCrsf,
      );
      $cookie_2 = array(
           'name'   => 'sessionid',
           'value'  => $cookiesSessionId,
      );
      set_cookie($cookie);
      set_cookie($cookie_2);
      $this->session->set_userdata('cookie', $cookiesCrsf);
      $this->session->set_userdata('cookie_2', $cookiesSessionId);
      return json_decode($body);

    }

    // auth model end //


    //news model start//

    /*function create_news()
    {
        $ch = curl_init();
          

          $imageData = file_get_contents($_FILES['Image']['name']);
         
          $data['Image'] = base64_encode($imageData);
          $data['Title'] = html_escape($this->input->post('Title'));
          $data['SubTitle'] = html_escape($this->input->post('SubTitle'));
          $data['ContributedBy'] = html_escape($this->input->post('ContributedBy'));
          $data['InstagramId'] = html_escape($this->input->post('InstagramId'));
          $data['FaceBookId'] = html_escape($this->input->post('FaceBookId'));
          $data['TwitterId'] = html_escape($this->input->post('TwitterId'));          
          $data['Content'] = $this->input->post('Content');
          

          $parameters = json_encode($data);

          $url = "http://127.0.0.1:8000/api/news/"; 
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($ch);
        
        print_r($response);
        die();
        
        return json_decode($response); 
    }*/

    function get_news()
    {
        $crsf = $this->session->userdata('cookie');
        $session = $this->session->userdata('cookie_2');
        $url = "http://18.191.31.131:8000/api/news/";
        $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);      
      return $response;
    }

    function get_news_id($id){

      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/news/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response;

    }

    //news model end//

    function get_quote_id($id){

      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/homepage_quotes/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response[0]->Quotes;

    }


    function get_offers(){
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/codes/";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);    
      return $response;
    }
    function get_offers_id($id){
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/codes/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response;
    } 

    function delete_offers($id){
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/codes/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response;
    } 


    function get_homepage_video($id){
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/home_video/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response[0];

    }


    function get_video_collection()
    {
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/video_collections/";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);    
      return $response;
    }


    function get_videos()
    {
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/videos/";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);    
      return $response;
    }

    function get_videos_by_collection($collection)
    {
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/videos/?collection=$collection";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);    
      return $response;
    }

    function get_videos_by_id($id)
    {
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/videos/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);    
      return $response;
    }
    function delete_video($id){
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/videos/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response;
    }  
    function delete_videoCollection($id){
      $crsf = $this->session->userdata('cookie');
      $session = $this->session->userdata('cookie_2');
      $url = "http://18.191.31.131:8000/api/video_collections/?id=$id";
      $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Cookie: csrftoken= $crsf; sessionid=$session"));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE" );
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      $result = curl_exec($ch);
      $response = json_decode($result);     
      return $response;
    }  

    

    
}
