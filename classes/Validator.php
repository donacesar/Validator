<?php


class Validator
{
    /**
     * @param string $email
     * @return bool
     */
    public static function checkEmail(string $email): bool
    {
       if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
           return true;
       }
       return false;
    }

    /**
     * @param string $url
     * @return bool
     */
    public static function checkUrl(string $url): bool
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        }
        return false;
    }

    /**
     * @param string $ip
     * @return bool
     */
    public static function checkIp(string $ip): bool
    {
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            return true;
        }
        return false;
    }

}