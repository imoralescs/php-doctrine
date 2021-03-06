<?php 

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\Route\Http\Exception\BadRequestException;

use GraphQL\GraphQL;
use GraphQL\Schema;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ObjectType;
/*
$route->get('/graphql', function(ServerRequestInterface $request, ResponseInterface $response, array $args){
    try 
    {
        $database = "name_db";
        $user = "user";
        $password = "password";
        $host = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $response->getBody()->write(json_encode(array('outcome' => true)));
        return $response->withStatus(202);
    
    }
    catch (PDOException $e) 
    {
        $response->getBody()->write(json_encode(array('outcome' => false, 'message' => 'Unable to connet', 'pdo_message' => $e->getMessage())));
        return $response->withStatus(202);
    }

    
});
*/
/*
$route->post('/graphql', function(ServerRequestInterface $request, ResponseInterface $response, array $args){
    /*
     * Note: To know $request and $response method used, Zend Diactoros ServerRequest Documentation.
     * $request->getQueryParams();
     **/

    /** 
     * Query GraphQL
     * Postman:
     *   Verb - POST
     *   Query:
     *     Body raw - {"query": "query { echo(message: \"Hi Worlds, GraphQL!\") }"}
     *     Response - {"data":{"echo":"You said: Hi Worlds, GraphQL!"}}
     *   Mutation:
     *     Body raw - {"query": "mutation { sum(x: 2, y: 2) }"}
     *     Response - {"data":{"sum":4}}
     */
/*
    try {
        
        $queryType = new ObjectType([
            'name' => 'Query',
            'fields' => [
                'echo' => [
                    'type' => Type::string(),
                    'args' => [
                        'message' => [
                            'type' => Type::string()
                        ],
                    ],
                    'resolve' => function($root, $args) {
                        return $root['prefix'] . $args['message'];
                    }
                ]
            ]
        ]);

        $mutationType = new ObjectType([
            'name' => 'Calc',
            'fields' => [
                'sum' => [
                    'type' => Type::int(),
                    'args' => [
                        'x' => ['type' => Type::int()],
                        'y' => ['type' => Type::int()],
                    ],
                    'resolve' => function ($root, $args) {
                        return $args['x'] + $args['y'];
                    },
                ],
            ],
        ]);

        $schema = new Schema([
            'query' => $queryType,
            'mutation' => $mutationType
        ]);

        $rawInput = file_get_contents('php://input');
        $input = json_decode($rawInput, true);
        $query = $input['query'];
        $variableValues = isset($input['variables']) ? $input['variables'] : null;

        $rootValue = ['prefix' => 'You said: '];
        $result = GraphQL::executeQuery($schema, $query, $rootValue, null, $variableValues);
        $output = $result->toArray();
    }
    catch(\Exception $error) {
        $output = [
            'error' => [
                'message' => $error->getMessage()
            ]
        ];
    }
    $response->getBody()->write(json_encode($output));
    return $response->withStatus(202);
});
*/
// {"query": "query { user(id: 2) { name, email, friends { name } } }" }
// {"query": "query { allUsers { id, name, email, countFriends } }" }
/*
class DB
{
    private static $pdo;
    public static function init()
    {
        $user = 'user';
        $pass = 'password';
        $dsn = "mysql:host=mysql;port=3306;dbname=name_db;";
        self::$pdo = new PDO($dsn, $user, $pass);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public static function selectOne($query)
    {
        $records = self::select($query);
        return array_shift($records);
    }

    public static function select($query)
    {
        $statement = self::$pdo->query($query);
        return $statement->fetchAll();
    }

    public static function affectingStatement($query)
    {
        $statement = self::$pdo->query($query);
        return $statement->rowCount();
    }
}

class UserType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'description' => 'User',
            'fields' => function() {
                return [
                    'id' => [
                        'type' => Types::string(),
                        'description' => 'User ID'
                    ],
                    'name' => [
                        'type' => Types::string(),
                        'description' => 'Username'
                    ],
                    'email' => [
                        'type' => Types::string(),
                        'description' => 'User E-mail'
                    ],
                    'friends' => [
                        'type' => Types::listOf(Types::user()),
                        'description' => 'User friends',
                        'resolve' => function ($root) {
                            return DB::select("SELECT u.* from friendships f JOIN users u ON u.id = f.friend_id WHERE f.user_id = {$root->id}");
                        }
                    ],
                    'countFriends' => [
                        'type' => Types::int(),
                        'description' => 'Number of friends',
                        'resolve' => function ($root) {
                            return DB::affectingStatement("SELECT u.* from friendships f JOIN users u ON u.id = f.friend_id WHERE f.user_id = {$root->id}");
                        }
                    ]
                ];
            }
        ];
        parent::__construct($config);
    }
}

class QueryType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'fields' => function() {
                return [
                    'user' => [
                        'type' => Types::user(),
                        'description' => 'Returns the user by id.',
                        'args' => [
                            'id' => Types::int()
                        ],
                        'resolve' => function ($root, $args) {
                            return DB::selectOne("SELECT * from users WHERE id = {$args['id']}");
                        }
                    ],
                    'allUsers' => [
                        'type' => Types::listOf(Types::user()),
                        'description' => 'A list of users.',
                        'resolve' => function () {
                            return DB::select('SELECT * from users');
                        }
                    ]
                ];
            }
        ];
        parent::__construct($config);
    }
}

class Types
{
    private static $query;
    private static $user;

    public static function query()
    {
        return self::$query ?: (self::$query = new QueryType());
    }

    public static function user()
    {
        return self::$user ?: (self::$user = new UserType());
    }

    public static function int()
    {
        return Type::int();
    }

    public static function string()
    {
        return Type::string();
    }

    public static function listOf($type)
    {
        return Type::listOf($type);
    }
}

$route->post('/graphql', function(ServerRequestInterface $request, ResponseInterface $response, array $args){
    try {
        
        DB::init();

        $schema = new Schema([
            'query' => Types::query()
        ]);

        $rawInput = file_get_contents('php://input');
        $input = json_decode($rawInput, true);
        $query = $input['query'];

        $result = GraphQL::executeQuery($schema, $query);
        $output = $result->toArray();
    }
    catch(\Exception $error) {
        $output = [
            'error' => [
                'message' => $error->getMessage()
            ]
        ];
    }
    $response->getBody()->write(json_encode($output));
    return $response->withStatus(202);
});
*/
$route->get('/graphql', 'NamespacesName\Controllers\MainController::index');
$route->post('/graphql', 'NamespacesName\Controllers\MainController::save');
