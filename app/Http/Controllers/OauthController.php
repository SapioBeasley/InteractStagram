<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

use Sapioweb\CrudHelper\CrudyController as CrudHelper;
use Socialite;

class OauthController extends Controller
{
	/**
	* Redirect the user to the GitHub authentication page.
	*
	* @return Response
	*/
	public function redirectToProvider($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	/**
	* Obtain the user information from $provider
	*
	* @return Response
	*/
	public function handleProviderCallback($provider)
	{
		$user = Socialite::driver($provider)->user();

		$data = [
			'name' => $user->name,
			'email' => 'info+' . $user->nickname . '@sapioweb.com',
			'password' => bcrypt('oauthinstagram'),
			'token' => $user->token,
			'profile_id' => $user->id,
			'avatar' => $user->avatar,
			'username' => $user->nickname
		];

		$authUser = CrudHelper::createOrUpdate(new \App\User, 'profile_id', $user->id, $data)->first();

		\Auth::login($authUser, true);

		return redirect()->route('home');
		// $user->token;
	}
}
