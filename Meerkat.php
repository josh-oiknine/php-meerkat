<?php

Class meerkat
{
    public $version = '1.0';
    public $base_url = 'http://api.meerkatapp.co/';
    public $resources_url = 'https://resources.meerkatapp.co/';
    public $channels_url = 'https://channels.meerkatapp.co/';

    public $api_key = null;

    public function __construct($api_key=null)
    {
        // Done some stuff here to initilize the class
        if ($api_key) {
            $this->api_key = $api_key;
        }
    }

    // Get a list of the avaialble requests and their corrosponding URLs
    public function routes()
    {
        return $this->makeAPICall($this->base_url . 'routes');
    }

    public function broadcastActivities($broadcast_id=null)
    {
        if (!$broadcast_id) return false;

        return $this->makeAPICall($this->resources_url . 'broadcasts/' . $broadcast_id . '/activities');
    }

    public function broadcastComments($broadcast_id=null)
    {
        if (!$broadcast_id) return false;

        return $this->makeAPICall($this->channels_url . 'broadcasts/' . $broadcast_id . '/comments');
    }

    public function broadcastLikes($broadcast_id=null)
    {
        if (!$broadcast_id) return false;

        return $this->makeAPICall($this->channels_url . 'broadcasts/' . $broadcast_id . '/likes');
    }

    public function broadcastRestreams($broadcast_id=null)
    {
        if (!$broadcast_id) return false;

        return $this->makeAPICall($this->channels_url . 'broadcasts/' . $broadcast_id . '/restreams');
    }

    public function broadcastWatchers($broadcast_id=null)
    {
        if (!$broadcast_id) return false;

        return $this->makeAPICall($this->resources_url . 'broadcasts/' . $broadcast_id . '/watchers');
    }

    public function leaderboard()
    {
        return $this->makeAPICall($this->resources_url . 'leaderboard');
    }

    public function liveNow() // AKA broadcasts
    {
        return $this->makeAPICall($this->resources_url . 'broadcasts');
    }

    public function profile($user_id=null) // AKA User Details
    {
        if (!$user_id) return false;

        return $this->makeAPICall($this->resources_url . 'users/' . $user_id . '/profile');
    }

    public function scheduledStreams()
    {
        return $this->makeAPICall($this->resources_url . 'schedules');
    }

    public function streamSummaryTemplate($broadcast_id=null)
    {
        if (!$broadcast_id) return false;

        return $this->makeAPICall($this->resources_url . 'broadcasts/' . $broadcast_id . '/summary');
    }


///////////////////////////////////////////////////////////////////////////////
// The private stuff
///////////////////////////////////////////////////////////////////////////////
    /*
    *    Build the HTTP request
    */
    private function makeAPICall($url)
    {
        return $this->curlGet($url . http_build_query(['v' => $this->version]), ['Authorization' => $this->api_key]);
    }

    /*
    *    Make the HTTP GET request
    */
    private function curlGet($url, $headers=null)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        if (isset($headers) && is_array($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $content = curl_exec($ch);
        curl_close($ch);

        return $content;
    }

    /*
    *    Make the HTTP POST request
    */
    private function curlPost($url, $parameters, $headers=null)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);

        if (isset($headers) && is_array($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $content = curl_exec($ch);
        curl_close($ch);

        return $content;
    }

///////////////////////////////////////////////////////////////////////////////
}
