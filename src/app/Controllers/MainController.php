<?php 

namespace NamespacesName\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;

use NamespacesName\Auth\Hashing\Hasher;
use NamespacesName\Models\User;
use NamespacesName\Models\Post;

use Doctrine\ORM\EntityManager;

class MainController extends Controller
{
    protected $db;
    
    protected $hash;

    public function __construct(EntityManager $db, Hasher $hash) {
        $this->db = $db;
        $this->hash = $hash;
    }

    public function index(RequestInterface $request, ResponseInterface $response) {
        // persist mean you want to save this
        // flush mean execute query
        
        // Other methods: findAll() find(id) findOneBy(criteria: array) findBy(criteria: array)
        
        // Find all
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
        /*
        $query = $this->db->getRepository('NamespacesName\Models\User');
        $user = $query->findOneBy(array('name' => 'Israel Morales'));
        $responseJson[] = array(
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        );
        */

        // Find by query
        // On the end you can used 'execute() - return an array of results' or 'getOneOrNullResult() - returns one result (or null)'
        /*
        $id = 2;
        $query = $this->db->getRepository('NamespacesName\Models\User');
        $users = $query->createQueryBuilder('users')
            ->andWhere('users.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->execute();
        
        $responseJson = array();
        foreach($users as $user) {
            $responseJson[] = array(
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            );
        }
        */

        $response->getBody()->write(json_encode($responseJson));
        return $response->withStatus(202);
    }

    public function save(RequestInterface $request, ResponseInterface $response, array $args) {
        // $stream = $request->getBody();
        // var_dump($stream);exit;

        // Save data on table database 
        // 'persist() - mean you want to save this'
        // 'flush() - mean execute query'
        // Example for POST Method using QueryParams: ?name=Seph Mo&email=sephmo@gmail.com&password=password&password_confirmation=password
        /*
        $data = $request->getQueryParams();

        $user = new User;
        $user->fill([
            'name' => $data['name'],
            'email' => $data['email'],
            // Hash password
            'password' => $this->hash->create($data['password'])
        ]);
        
        $this->db->persist($user);
        $this->db->flush();
        */

        // Save data on table database 
        // Example for POST Method using body form-data: 
        /*
            key: name                   value: Seph Mo
            key: email                  value: sephmo@gmail.com
            key: password               value: password
            key: password_confirmation  value: password
        */
        
        $data = $request->getParsedBody();
        
        $user = new User;
        $user->fill([
            'name' => $data['name'],
            'email' => $data['email'],
            // Hash password
            'password' => $this->hash->create($data['password'])
        ]);
        
        $this->db->persist($user);
        $this->db->flush();

        $response->getBody()->write(json_encode($user));
        return $response->withStatus(202);
    }
}