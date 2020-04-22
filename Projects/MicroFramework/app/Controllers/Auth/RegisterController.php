<?php
namespace App\Controllers\Auth;


use App\Auth\Auth;
use App\Controllers\Controller;
use App\Session\Flash;
use App\Views\View;
use League\Route\RouteCollection;


/**
 * Class RegisterController
 * @package App\Controllers\Auth
*/
class RegisterController extends Controller
{

    /** @var  */
    protected $view;


    /**
     * HomeController constructor.
     * @param View $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * Show the register form
     *
     * @param $request
     * @param $response
     * @return mixed
     *
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'auth/register.twig');
    }


    /**
     * Sign in user or Login user
     * @param $request
     * @param $response
     * @throws \App\Exceptions\ValidationException
    */
    public function register($request, $response)
    {


    }
}