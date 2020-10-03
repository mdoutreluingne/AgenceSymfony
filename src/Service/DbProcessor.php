<?php 

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Security;

class DbProcessor
{
    private $request;
    private $security;

    public function __construct(RequestStack $request, Security $security)
    {
        $this->request = $request->getCurrentRequest();
        $this->security = $security;
    }

    public function __invoke(array $record)
    {
        //On modifie le record pour ajouter nos infos
        $record['extra']['clientIp'] = $this->request->getClientIp();
        $record['extra']['url'] = $this->request->getBaseUrl();

        $user = $this->security->getUser();
        dd($user);
        $record['extra']['user'] = $user;

        return $record;
    }
}

?>