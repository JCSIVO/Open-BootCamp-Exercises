<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\Implementations\HomeRepository;
use App\Repositories\Implementations\UsersRepository;

class HomeController extends Controller
{
    protected $_homeRepository;
    // protected $_usersRepository;
    // protected $_userModel;

    public function __construct(HomeRepository $homeRepository /*UsersRepository $usersRepository, User $userModel*/)
    {
        $this->_homeRepository = $homeRepository;
        // $this->_usersRepository = $usersRepository;
        // $this->_userModel = $userModel;
    }


    public function index(){
        $this->_homeRepository->helloWorld(); 
        $this->_homeRepository->getUsersRepository()->helloWorld();
        die();

        return view('panel.index');
    }
}
