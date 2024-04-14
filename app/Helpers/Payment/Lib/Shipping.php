<?php

namespace App\Helpers\Payment\Lib;

class Shipping extends Core
{

    /**
     * Get MyFatoorah Shipping Countries
     *
     * @return object
     */
    function getShippingCountries() {
        $url  = "$this->apiURL/v2/GetCountries";
        $json = $this->callAPI($url, null, null, 'Get Countries');
        return $json;
    }


    /**
     * Get Shipping Cities
     *
     * @param integer $method       [1 for DHL, 2 for Aramex]
     * @param string $countryCode   It can be obtained from getShippingCountries function
     * @param string $searchValue   The key word that will be used in searching
     * @return object
     */
    function getShippingCities($method, $countryCode, $searchValue = null) {
        $endPoint = 'GetCities?shippingMethod=' . $method . '&countryCode=' . $countryCode . '&searchValue=' . $searchValue;
        $url      = "$this->apiURL/v2/" . $endPoint;
        $json     = $this->callAPI($url, null, null, 'Get Cities - Country : ' . $countryCode);
        return $json;
    }


    /**
     * Calculate Shipping Charge
     *
     * @param array $curlData
     * @return object
     */
    function calculateShippingCharge($curlData) {
        $url  = "$this->apiURL/v2/CalculateShippingCharge";
        $json = $this->callAPI($url, $curlData, null, 'Calculate Shipping Charge');
        return $json;
    }

}
