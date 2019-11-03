<?php
namespace Component;
use Component\SessionManager as Session;
class Authenticator implements AuthenticatorInterface
{
    /**
     * @var \Component\SessionManager
     */
    protected $session;
    /**
     * @var \Component\User
     */
    protected $user;
    /**
     * @param \Component\SessionManager $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    public function check()
    {
        return $this->user() != null;
    }
    public function user()
    {
        if ($this->user != null) {
            return $this->user;
        }
        $data = $this->session->get('user_data');
        if ( ! is_null($data)) {
            return $this->user = new User($data);
        }
        return null;
    }
}