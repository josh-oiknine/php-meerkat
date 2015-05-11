<?php

Class meerkat
{
    public $version = '1.0';
    public $api_key = null;
    
    public function __construct($api_key)
    {
        // Done some stuff here to initilize the class
        $this->api_key = $api_key;
    }
    
    public function routes() // In case you want to see what endpoints are available
    {
    
    }
    
    public function broadcasts() // AKA liveNow
    {
    
    }
    
    public function broadcastActivities($broadcast_id=null)
    {
        if (!$broadcast_id) return false;
        
    }
    
    public function broadcastComments($broadcast_id=null)
    {
        if (!$broadcast_id) return false;
        
    }
    
    public function broadcastLikes($broadcast_id=null)
    {
        if (!$broadcast_id) return false;
        
    }
    
    public function broadcastRestreams($broadcast_id=null)
    {
        if (!$broadcast_id) return false;
        
    }
    
    public function broadcastWatchers($broadcast_id=null)
    {
        if (!$broadcast_id) return false;
        
    }
    
    public function leaderboard()
    {
    
    }
    
    public function broadcastDetails($broadcast_id=null)
    {
        if (!$broadcast_id) return false;
        
    }
    
    public function scheduledStreams()
    {
    
    }
    
    public function profile($user_id=null) // AKA User Details
    {
        if (!$user_id) return false;
        
    }
    
///////////////////////////////////////////////////////////////////////////////
// The private stuff
///////////////////////////////////////////////////////////////////////////////
    private function curl_get()
    {
    
    }
    
    private function curl_post()
    {
    
    }

///////////////////////////////////////////////////////////////////////////////
}
