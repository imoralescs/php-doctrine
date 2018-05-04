<?php 

namespace NamespacesName\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;

use NamespacesName\Auth\Hashing\Hasher;
use NamespacesName\Models\User;
use NamespacesName\Models\Post;
use NamespacesName\Models\Genus;
use NamespacesName\Models\GenusNote;

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
        }*/

        /*
        $query = $this->db->getRepository('NamespacesName\Models\Genus');
        $genus = $query->findAll();
        $responseJson = array();
        foreach($genus as $specie) {
            $responseJson[] = array(
                'id' => $specie->id,
                'name' => $specie->name,
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
/*
        $query = $this->db->getRepository('NamespacesName\Models\Friendships');
        $friends = $query->createQueryBuilder()
            ->from('friendships')
            ->join('users.id')
            ->where('users.id')

        var_dump($friends); exit;
*/
        $response->getBody()->write(json_encode('Response'));
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
        
        /*
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
        */

        // Save relation, one to many value.
        /*
        $genus = new Genus();
        $genus->setName('Spermophilus'.rand(1, 100));
        $genus->setSubFamily('Squirrel');
        $genus->setSpeciesCount(rand(100, 99999));
        $genus->setFunFact("");

        $genusNote = new GenusNote();
        $genusNote->setUsername('AquaWeaver');
        $genusNote->setUserAvatarFilename('ryan.jpeg');
        $genusNote->setNote('I counted 8 legs... as they wrapped around me');
        $genusNote->setCreatedAt(new \DateTime('-1 month'));
        $genusNote->setGenus($genus); // Need to pass the entire object.
        
        $this->db->persist($genus);
        $this->db->persist($genusNote);
        $this->db->flush();
        */

        $response->getBody()->write(json_encode('Created'));
        return $response->withStatus(202);
    }
}