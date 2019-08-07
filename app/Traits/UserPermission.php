<?php

namespace App\Traits\UserPermission;

use Auth;
use View;

trait UserPermission {

	protected $user;
	protected $role;

	public function __construct() {


			$this->middleware(function($request,$next) {

				$this->role = user()->roles();

				foreach ($user->roles as $role {

					View::share('role', $this->role);
					return $next($request);
				}	

			})
	    }
	}
}

