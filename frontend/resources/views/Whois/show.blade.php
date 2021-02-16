$info = $whois->loadDomainInfo("google.com");
    print_r([
    'Domain created' => date("Y-m-d", $info->creationDate),
    'Domain expires' => date("Y-m-d", $info->expirationDate),
    'Domain owner' => $info->owner,
    ]);