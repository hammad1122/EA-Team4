<?php


namespace EA\Engine\Api\V1;

/**
 * Request Class
 *
 * This class handles the common request handling before the data are manipulated and
 * returned back with the Response class.
 */
class Request {
    /**
     * Get request body as an associative array.
     *
     * @return array
     */
    public function getBody()
    {
        return json_decode(file_get_contents('php://input'), TRUE);
    }
}
