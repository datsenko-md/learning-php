<?php

/*
*/

namespace App\Functions\Lessons\GetFreeDomainsCount;

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount(array $emails)
{
    $domains = array_map(function ($email) {
        [, $domain] = explode('@', $email);
        return $domain;
    }, $emails);
    
    $freeDomains = array_filter($domains, function ($domain) {
        return in_array($domain, FREE_EMAIL_DOMAINS);
    });
    
    $freeDomainsCount = array_reduce($freeDomains, function ($acc, $domain) {
        if (!array_key_exists($domain, $acc)) {
            $acc[$domain] = 1;
        } else {
            $acc[$domain]++;
        }
        
        return $acc;
    }, []);
    
    return $freeDomainsCount;
}
