<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Mockery\Exception;

class UserController extends Controller
{
    /**
     * Show all user.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'
        ];
        $this->validate($request, $rules);

        $user = new User;
        $user->create($request->all());
        return Redirect::route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::route('user.index');
    }

    /**
     * Change the specified user informations.
     *
     * @return Response
     */
    public function settings()
    {
        $user = auth()->user();
        return view('user.settings', compact('user'));
    }

    public function postSettings(Request $request)
    {
        if ($request->exists('for')) {

            if ($request->input('for') == "info") {
                $rules = [
                    'name' => 'required',
                    'email' => 'email',

                ];
            } else {

                $rules = [
                    'password' => 'required|confirmed|min:6'
                ];
            }
            $this->validate($request, $rules);

            $user = User::findOrFail(auth()->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message', 'Information Changed!');
        }
        return back();
    }

    public function postClientRegistration(Request $request)
    {
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/client/registration';
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'date_of_birth' => $request->input('date_of_birth')
        ];

        $response = $client->post($url, ['headers' => ['content-type' => 'application/json'], 'body' => json_encode($data)]);
        $responseData = \GuzzleHttp\json_decode($response->getBody());
        $errors = [];
        $message = "";
        $isSuccess = true;
        $messageBag = new MessageBag();
        if ($responseData->status_code != 200) {
            $errors = $responseData->response->error;
            foreach ($errors as $error) {
                $messageBag->add('error', $error);
            }
            $isSuccess = false;
        }
        $message = $responseData->message;
        if (!$isSuccess) {
            return redirect('/client/login')
                ->withErrors($messageBag)->with('status', $message);
        }

        return redirect('/client/login')->with('status', $message);
//        return $responseData->response->error[0];
    }

    /**
     * Get Customer or Client Login View Page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function getClientLogin() //Not yet use
//    {
//        return view('user.client-login');
//    }

    public function getClientLogin()
    {
        return view('user.client-login');
    }

    /**
     * Post Customer or Client Login
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postClientLogin(Request $request)
    {

        session(['client_id' => $request->input('email')]);
        session(['client_pass' => $request->input('password')]);
        $api = getApi();
        try {
            $client = new Client();
            $url = $api->url.'/api/v1/client/login';

            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'key' => '123456'
            ];
            $response = $client->post($url, ['headers' => ['content-type' => 'application/json'], 'body' => json_encode($data)]);
            $responseData = \GuzzleHttp\json_decode($response->getBody());
            $errors = [];
            $message = "";
            $isSuccess = true;
//            dd($data);
            return redirect('/customer')->with('status', $message);
        } catch (\Exception $exception) {
            $msg = response()->json(['message' => 'invalid']);
            return back()->with('message', 'Incorrect User Email or Password');

        }
    }

    public function getClientReg()
    {
        return view('user.client-registration');
    }

    public function postClientReg(Request $request)
    {
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/client/registration';
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'date_of_birth' => $request->input('date_of_birth')
        ];

        $response = $client->post($url, ['headers' => ['content-type' => 'application/json'], 'body' => json_encode($data)]);
        $responseData = \GuzzleHttp\json_decode($response->getBody());
        $errors = [];
        $message = "";
        $isSuccess = true;
        $messageBag = new MessageBag();
        if ($responseData->status_code != 200) {
            $errors = $responseData->response->error;
            foreach ($errors as $error) {
                $messageBag->add('error', $error);
            }
            $isSuccess = false;
        }
        $message = $responseData->message;
        if (!$isSuccess) {
            return redirect('/client/login')
                ->withErrors($messageBag)->with('status', $message);
        }

        return redirect('/client/login')->with('status', $message);
    }

    public function getMerchantLogin()
    {
        return view('user.merchant-login');
    }

    public function postMerchantLogin(Request $request)
    {
        session(['client_id' => $request->input('email')]);
        session(['client_pass' => $request->input('password')]);
        $api = getApi();
        try {
            $client = new Client();
            $url = $api->url.'/api/v1/client/login';

            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'key' => '123456'
            ];
            $response = $client->post($url, ['headers' => ['content-type' => 'application/json'], 'body' => json_encode($data)]);
            $responseData = \GuzzleHttp\json_decode($response->getBody());
            $errors = [];
            $message = "";
            return redirect('/customer')->with('status', $message);
        } catch (\Exception $exception) {
            $msg = response()->json(['message' => 'invalid']);
            return back()->with('message', 'Incorrect User Email or Password');

        }
    }

    public function getMerchantRegistration()
    {
        return view('user.merchant-registration');
    }

    public function postMerchantRegistration(Request $request)
    {
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/client/registration';
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'date_of_birth' => $request->input('date_of_birth')
        ];

        $response = $client->post($url, ['headers' => ['content-type' => 'application/json'], 'body' => json_encode($data)]);
        $responseData = \GuzzleHttp\json_decode($response->getBody());
        $errors = [];
        $message = "";
        $isSuccess = true;
        $messageBag = new MessageBag();
        if ($responseData->status_code != 200) {
            $errors = $responseData->response->error;
            foreach ($errors as $error) {
                $messageBag->add('error', $error);
            }
            $isSuccess = false;
        }
        $message = $responseData->message;
        if (!$isSuccess) {
            return redirect('http://system.biddyut.com/')
                ->withErrors($messageBag)->with('status', $message);
        }

        return redirect('http://system.biddyut.com/')->with('status', $message);
//        return $responseData->response->error[0];
    }

    /**
     * Get Customer Login Page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCustomerDashboard(Request $request)
    {
        $email = session()->get('client_id');
        $pass = session()->get('client_pass');
//        dd($email,$pass);
        if ($email == true && $pass == true){
            $logoUrl = getLogoInfo();
            $getHomeSectionItems = getHomeSectionItems();
            $getFooterItems = getFooterItems();
            $getSocialAreaItems = getSocialAreaItems();
            $menuItems = getMenuItems();
            return view('subPages.customer-dashboard', [
                'menuItems' => $menuItems,
                'logo' => $logoUrl,
                'getHomeSectionItems' => $getHomeSectionItems,
                'getFooterItems' => $getFooterItems,
                'getSocialAreaItems' => $getSocialAreaItems,
            ]);
//            return view('user.client-login');
        }
        return redirect('/client/login')->with('message','Woops! Please Login First');


    }

    /**
     * Customer Logout
     *
     * @param Request $request
     * @return Redirect
     */
    public function getCustomerLogout(Request $request)
    {
        Session::flush();
        return redirect('/client/login');
    }

}
