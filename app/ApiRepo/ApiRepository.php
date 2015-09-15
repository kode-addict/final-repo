<?php

namespace App\ApiRepo;
	
use GuzzleHttp\Client;

class ApiRepository
{

	protected $client;

	protected $candidateEndpoint;

	protected $partyEndpoint;

	protected $faqEndpoint;

	public function __construct(Client $client)
	{
		$this->client=$client;

		$this->candidateEndpoint='http://api.maepaysoh.org/candidate/';

		$this->partyEndpoint='http://api.maepaysoh.org/party';

		$this->faqEndpoint='http://api.maepaysoh.org/faq/';
	}
    
    /**
     * Get the candidate List from api.
     *
     * @param  string  $page
     * @return candidate list data
     */

	public function getCandidateList($page='1')
	{
	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->candidateEndpoint.'list?token='.$this->getToken().'&_with=party&page='.$page
	    				);

	    return $this->getJsonValue($response);
	}

    /**
     * Get the candidate List By Using parameter from api.
     *
     * @param  object  $request
     * @return candidate list data
     */

	public function getCandidateListBySearch($request)
	{
		//transform all of the request parameter to single string

	    $parameters=$this->transformToString($request);

	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->candidateEndpoint.'list?token='.$this->getToken().$parameters
	    				);

		return $this->getJsonValue($response);				
	}

    /**
     * Get the specified resource from api.
     *
     * @param  int  $id
     * @return individual candidate data
     */

	public function getCandidateById($id='55f54bc411b7f310c6883c8e')
	{

	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->candidateEndpoint.$id.'?token='.$this->getToken().'&_with=party'
	    				);

 		return $this->getJsonValue($response);			
	}

    /**
     * Search the candidate resource by his/her name from api.
     *
     * @param  string  $name
     * @return candidate data
     */

	public function getCandidateByName($name)
	{
	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->candidateEndpoint.'search?q='.$name.'&token='.$this->getToken().'&_with=party'
	    				);

		return $this->getJsonValue($response);					
	}

    /**
     * Get the pary List from api.
     *
     * @return party list data
     */

	public function getPartyList($page='1')
	{
	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->partyEndpoint.'?page='.$page.'&token='.$this->getToken()
	    				);

 		return $this->getJsonValue($response);

	}

    /**
     * Get the specified candidate from api.
     *
     * @param  int  $id
     * @return individual party data
     */

	public function getPartyById($id)
	{
	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->partyEndpoint.'/'.$id.'?token='.$this->getToken()
	    				);
 		return $this->getJsonValue($response);	

	}

    /**
     * Get the faq resource from api.
     *
     * @param  string  $page
     * @return Faq data
     */

	public function getFaqList($page='1')
	{
	    try{

		    $response=$this
		    			->client
		    			->request(
		    					'GET', $this->faqEndpoint.'list?token='.$this->getToken().'&page='.$page
		    				);
		    			
		    return $this->getJsonValue($response);	
	   	}

	   	catch(\GuzzleHttp\Exception\ConnectException $e){

	   		echo 'hi';
	   	}

	    	
	}
    
    /**
     * Get the specified faq resource from api.
     *
     * @param  int  $id
     * @return faq data
     */

	public function getFaqById($id)
	{
	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->faqEndpoint.$id.'?token='.$this->getToken()
	    				);

	    return $this->getJsonValue($response);		
	}	

    /**
     * Search the Faq resource by keyword from api.
     *
     * @param  string  $name
     * @return faq data
     */	

	public function getFaqByKeyword($name)
	{
	    $response=$this
	    			->client
	    			->request(
	    					'GET', $this->faqEndpoint.'search?q='.$name.'&token='.$this->getToken().'&_with=party'
	    				);

		return $this->getJsonValue($response);			
	}



	protected function transformToString($request)
	{
		$string='';

		foreach ($request->all() as $key => $value) {
			
			$string.='&'.$key.'='.$value;
		}

		return $string;
	}	



	protected function getJsonValue($response)
	{
	    // collect return value from api by using guzzle methods

	    $body=$response->getBody();

	    $content=$body->getContents();

	    return $value=json_decode($content);

	}

	protected function getToken()
	{
		// Get the applicate key from configuration file and generate token key for application

	    $response=$this->client->request('POST', 'http://api.maepaysoh.org/token/generate', [
	        
	        'form_params' => [

	            'api_key'   => config('api.api_key') // you can change your api key in config/api file
	        ]            

	    ]);

	    $body = $response->getBody();

	    $content=$body->getContents();

	    $value=json_decode($content);

	    return $value->data->token;	
	    		
	}


	}

    
