<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:admin {email} {password}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$email = $this->argument('email');
		$password = $this->argument('password');
		$admin = new User();
		$admin->name = 'Admin';
		$admin->email = $email;
		$admin->password = bcrypt($password);
		$admin->save();
	}
}
