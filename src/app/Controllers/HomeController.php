<?php 

namespace NamespacesName\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

use NamespacesName\Models\User;
use NamespacesName\Models\Post;

use Doctrine\ORM\EntityManager;

class HomeController
{
    protected $db; 

    public function __construct(EntityManager $db) {
        $this->db = $db;
    }

    public function index(RequestInterface $request, ResponseInterface $response) {
        // persist mean you want to save this
        // flush mean execute query
        
        // Other methods: findAll() find(id) findOneBy(criteria: array) findBy(criteria: array)
        
        // Find all
        /*
        $query = $this->db->getRepository('NamespacesName\Models\User');
        $users = $query->findAll();
        $responseJson = array();
        foreach($users as $user) {
            $responseJson[] = array(
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            );
        }
        */

        // Find by id
        /*
        $query = $this->db->getRepository('NamespacesName\Models\User');
        $user = $query->find(1);
        $responseJson[] = array(
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        );
        */

        // Find by criteria
        /*
        $query = $this->db->getRepository('NamespacesName\Models\User');
        $users = $query->findBy(array('name' => 'Israel Morales'));
        $responseJson = array();
        foreach($users as $user) {
            $responseJson[] = array(
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            );
        }
        */

        // Find one by criteria
        $query = $this->db->getRepository('NamespacesName\Models\User');
        $user = $query->findOneBy(array('name' => 'Israel Morales'));
        $responseJson[] = array(
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        );

        $response->getBody()->write(json_encode($responseJson));
        return $response->withStatus(202);
    }
}