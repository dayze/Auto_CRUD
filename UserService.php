<?php

Class UserService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new userRepository();
    }

    /*******************************
     * CRUD
     *******************************/
    public function create($login, $password, $name, $lastName, $email, $status)
    {
        return $this->userRepository->save($login, $password, $name, $lastName, $email, $status);
    }

    public function read($byId = null)
    {
        return $this->userRepository->load($byId);
    }

    public function update($id, $login, $password, $name, $lastName, $email, $status)
    {
        return $this->userRepository->save($login, $password, $name, $lastName, $email, $status, $id);
    }

    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }

    /*******************************
     * OTHER
     *******************************/

}
